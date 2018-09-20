<?php
/**
 * 数据表格类
 * 
 * CO框架核心
 * 
 * 用于操作数据库内单表数据。提供增加，更新删除操作。请注意，此类涉及数据库操作。必须放在CO框架内使用。
 * 
 * 成员变量$_co_dataform_table指数据库中的数据表。
 * 
 * 成员变量$_co_dataform_cfg_field指数据表中参与运转的字段。
 * 
 * 成员变量$_co_dataform_main_key指数据库表中的主键，可以是数组，也可以是字符串。
 * 
 * 数据表字段配置分为必要($_co_dataform_field )和非必要($_co_dataform_field_)，此设计是为了减少非必要的数据库键值请求。
 * 
 * 必要字段配置中的值在第一次初始化时就会请求数据库,加载入并缓冲到对象中。
 * 
 * 非必要字段配置中的值只有通过GetProp函数才会请求数据库.加载并缓冲到对象中。
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
abstract class CO_DataForm extends CO_DB_Adapter{
	
	/**
	 * 数据库实例
	 *
	 * @var string
	 */
	protected static $_co_dataform_db_name = '';
	
	/**
	 * 数据表配置
	 * 
	 * @var string
	 */
	protected static $_co_dataform_table = null;
	
	/**
	 * 数据表必要字段配置
	 * 
	 * @var array
	 */
	protected static $_co_dataform_field = null;
	
	/**
	 * 数据表非必要字段配置
	 * 
	 * @var array
	 */
	protected static $_co_dataform_field_secondary = array();
	
	/**
	 * 数据表主键配置
	 * 
	 * @var string|array
	 */
	protected static $_co_dataform_main_key = null;
	
	/**
	 * 数据表主键值
	 * 
	 * @var string|array
	 */
	protected $_co_dataform_main_key_value = null;
		
	/**
	 * 数据值的数组，为了避免占用子类的成员变量，将所有数据字段名称和值按照key-value的方式放入此数组
	 * 
	 * @var array
	 */
	protected $_co_dataform;
	
	/**
	 * 获取属性
	 * 
	 * @param	mixed $field_name 字段名称或字段名称数组
	 * @return	mixed 参数是字符串类型,返回数值.参数是数组类型,返回是否成功(boolean)
	 */
	public function GetProp($field_name){
		$select_field_list = array();
		$fail_return_value = is_array($field_name)?false:'';
		if(is_array($field_name)){
			//字段数组
			foreach($field_name as $field){
				if(!isset($this->_co_dataform[$field]) && in_array($field, static::$_co_dataform_field_secondary)){
					array_push($select_field_list, $field);
				}
			}
		}elseif($field_name=='') return $fail_return_value;
		else{
			//字段字符串
			if(!isset($this->_co_dataform[$field_name]) && in_array($field_name, static::$_co_dataform_field_secondary)){
				$select_field_list = array($field_name);
			}else return $this->_co_dataform[$field_name];
		}
		if(count($select_field_list)==0) return $fail_return_value;
		$db = static::GetDb();
		if(is_null($db)) return $fail_return_value;    //数据库连接获取失败
		/* ---------------------------------------------------------------------------------------------------------------------------
		 * 根据主键进行查找
		* ---------------------------------------------------------------------------------------------------------------------------*/
		$where = array();
		foreach($this->_co_dataform_main_key_value as $where_key => $where_value){
			$where[$where_key] = $where_value;
		}
		$query = $db->selectOne(static::$_co_dataform_table, $where, array('select'=>$select_field_list));
		if($query === false) return $fail_return_value;				//查询失败
		foreach($query as $q_key => $q_val){
			$this->_co_dataform[$q_key] = $this->__CODataformDataTransformFrom($q_key, $q_val);
		}
		return is_array($field_name)?true:$this->_co_dataform[$field_name];
	}
	
	/**
	 * 加载数据表中的记录,并且初始化对象属性
	 * 
	 * @return	boolean 是否加载成功
	 */
	protected function _CODataformLoad(){		
		if(!$this->__COCheckValid()) return false;
		$db = static::GetDb();
		if(is_null($db)) return false;    //数据库连接获取失败
		/* ---------------------------------------------------------------------------------------------------------------------------
		 * 根据主键进行查找
		* ---------------------------------------------------------------------------------------------------------------------------*/
		$where = array();
		if(is_array(static::$_co_dataform_main_key)){
			foreach($this->_co_dataform_main_key_value as $field_name => $field_value){
				$where[$field_name] = $field_value;
			}
		}else $where[static::$_co_dataform_main_key] = $this->_co_dataform_main_key_value;
		$query = $db->selectOne(static::$_co_dataform_table, $where, array('select'=>static::$_co_dataform_field));
		/* ---------------------------------------------------------------------------------------------------------------------------
		 * 将结果放入co_dataform中，放入前需要运行_co_dataform_data_transform_from方法进行数据转化
		* ---------------------------------------------------------------------------------------------------------------------------*/
		if($query === false){
			//无结果，返回false
			return false;
		}else{
			foreach($query as $key => $val){
				//从数据库转化到成员变量
				$this->_co_dataform[$key] = $this->__CODataformDataTransformFrom($key, $val);
			}
		}
		return true;
	}
		
	/**
	 * 创建数据库记录
	 * 
	 * @param	array $data 数据库记录
	 * @return	mixed 创建成功后的主键id,创建失败返回false
	 */
	protected static function _CODataformAdd($data){
		$db = static::GetDb();
		if(is_null($db)) return false;    //数据库连接获取失败
		//生成更新数据库用的数组
		$_update_data=array();
		foreach (static::$_co_dataform_field as $_field){
			if(array_key_exists($_field, $data)){
				$_update_data[$_field]=$data[$_field];
			}
		}
		foreach (static::$_co_dataform_field_secondary as $_field){
			if(array_key_exists($_field, $data)){
				$_update_data[$_field]=$data[$_field];
			}
		}
		//没有合法的更新数据,则退出
		if(count($_update_data)==0) return false;
		//插入字段
		return $db->insert(static::$_co_dataform_table, $_update_data);
	}
	
	/**
	 * 更新数据表字段
	 * 
	 * @param	array $data 传入更新的数据数组.key与数据表中字段一致
	 * @return	boolean 是否更新成功
	 */
	protected function _CODataformUpdate($data){
		if(!$this->__COCheckValid()) return false;
		$db = static::GetDb();
		if(is_null($db)) return false;    //数据库连接获取失败
		//生成更新数据库用的数组
		$_update_data=array();
		foreach (static::$_co_dataform_field as $_field){
			if(array_key_exists($_field, $data)){
				$_update_data[$_field] = $this->__CODataformDataTransformTo($_field, $data[$_field]);
			}
		}
		foreach (static::$_co_dataform_field_secondary as $_field){
			if(array_key_exists($_field, $data)){
				$_update_data[$_field] = $this->__CODataformDataTransformTo($_field, $data[$_field]);
			}
		}
		//没有合法的更新数据,则退出
		if(count($_update_data)==0) return false;
		//更新数据库字段
		$where = array();
		if(is_array($this->_co_dataform_main_key_value)){
			//主键是数组
			foreach(static::$_co_dataform_main_key as $field_name){
				$where[$field_name] = $this->_co_dataform_main_key_value[$field_name];
			}
		}else{
			//主键是字符串
			$where[static::$_co_dataform_main_key] = $this->_co_dataform_main_key_value;
		}
		if($db->update(static::$_co_dataform_table, $where, $_update_data) === false){
			//更新失败
			return false;
		}
		//同时设置更新对象属性
		foreach ($_update_data as $key => $val){
			$this->_co_dataform[$key]=$data[$key];
		}
		return true;
	}
	
	/**
	 * 删除数据记录。
	 * 删除数据表中对应的记录条目。
	 * 注销当前对象中与数据表字段对应的属性。
	 * 当前对象的唯一id(_co_dataform_main_key_value)置空。
	 * 
	 * @return	boolean 删除是否成功
	 */
	protected function _CODataformDelete(){
		if(!$this->__COCheckValid()) return false;
		$db = static::GetDb();
		if(is_null($db)) return false;    //数据库连接获取失败
		$where = array();
		if(is_array($this->_co_dataform_main_key_value)){
			//主键是数组
			foreach(static::$_co_dataform_main_key as $field_name){
				$where[$field_name]=$this->_co_dataform_main_key_value[$field_name];
			}
		}else{
			//主键是字符串
			$where[static::$_co_dataform_main_key]=$this->_co_dataform_main_key_value;
		}
		if($db->delete(static::$_co_dataform_table, $where) === false){
			//删除不成功
			return false;
		}else{
			//删除成功，清除对象内置属性
			$this->_co_dataform = null;
			$this->_co_dataform_main_key_value = null;
		}
		return true;
	}
	
	/**
	 * 将对象属性数据,转化为数据表中可存储的原生数据
	 * 
	 * @param	string $field_name 表字段名称
	 * @param	mixed $undeal_data 未转化的数据
	 * @return	mixed 转化后的数据
	 */
	private function __CODataformDataTransformTo($field_name, $undeal_data){
		if ($field_name=='') return false;
		return $this->__CODataformDataTransform('_co_dataform_dt_to_'.$field_name ,$undeal_data);
	}
	
	/**
	 * 从数据表中提取原生数据后,转化为对象属性
	 * 
	 * @param	string $field_name 表字段名称
	 * @param	string $undeal_data 未转化的数据
	 * @return	mixed 转化后的数据
	 */
	private function __CODataformDataTransformFrom($field_name, $undeal_data){
		if($field_name=='') return false;
		return $this->__CODataformDataTransform('_co_dataform_dt_from_'.$field_name ,$undeal_data);
	}
	
	/**
	 * 运行数据转化
	 * 
	 * @param	string $func_name 函数名称
	 * @param	string $undeal_data 待处理数据
	 * @return	string 处理后的数据
	 */
	private function __CODataformDataTransform($func_name, $undeal_data){
		if(method_exists($this, $func_name)){
			return $this->$func_name($undeal_data);
		}else{
			return $undeal_data;
		}
	}
	
	/**
	 * 判断co_dataform各个字段配置是否合理
	 * 
	 * @return	boolean
	 */
	private function __COCheckValid(){		
		//数据表不能为空
		if(!static::$_co_dataform_table) return false;
		//========检测主键数据和主键字段========//
		//main_key与main_key_value类型要一致
		if(is_array(static::$_co_dataform_main_key) && !is_array($this->_co_dataform_main_key_value)) return false;
		if(!is_array(static::$_co_dataform_main_key) && is_array($this->_co_dataform_main_key_value)) return false;
		if(is_array(static::$_co_dataform_main_key) && is_array($this->_co_dataform_main_key_value) && count(static::$_co_dataform_main_key)!=count($this->_co_dataform_main_key_value)) return false;
		//========检测数据表必要字段配置========//
		if(is_array(static::$_co_dataform_field) && count(static::$_co_dataform_field)==0) return false;
		elseif(!is_array(static::$_co_dataform_field)) static::$_co_dataform_field = array(static::$_co_dataform_field);				//转化为数组
		//========转化数据表非必要字段配置========//
		if(is_string(static::$_co_dataform_field_secondary)) static::$_co_dataform_field_secondary = array(static::$_co_dataform_field_secondary);
		return true;
	}
}