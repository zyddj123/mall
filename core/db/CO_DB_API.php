<?php
include_once 'CO_DB_Result.php';
include_once 'CO_DB_Exception.php';
include_once 'CO_DB_Log.php';

// ------------------------------------------------------------------------

/**
 * 数据库连接接口类
 *
 * CO框架核心
 *
 * SQL类数据库操作需要集成此基类实现
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
abstract class CO_DB_API{
	
	/**
	 * 上一条执行的sql语句
	 * 
	 * @var string
	 */
	protected $_last_query_sql = '';
	
	/**
	 * 上一条执行sql语句的耗时
	 * 
	 * @var string
	 */
	protected $_last_query_execute_time = '';
	
	/**
	 * 数据库连接对象
	 * 
	 * @var resource
	 */
	protected $_link_identifier = null;
	
	/**
	 * 数据库结果集对象
	 * 
	 * @var CO_DB_Result
	 */
	protected $_database_result = null;
	
	/**
	 * 数据库配置
	 * 
	 * @var array
	 */
	protected $_database_config = '';
	
	/**
	 * 数据库异常对象
	 * 
	 * @var CO_DB_Exception
	 */
	protected $_exception = null;
	
	/**
	 * 数据库异常信息
	 * 
	 * @var string
	 */
	protected $_exception_msg = '';
	
	/**
	 * 事务运行状态
	 * 
	 * @var boolean
	 */
	protected $_trans_status = true;
	
	/**
	 * 查询是否在事务中
	 * 
	 * @var boolean
	 */
	protected $_query_in_trans = false;
	
	/**
	 * 类前缀
	 * 
	 * @var string
	 */
	protected static $Class_Prefix = 'CO_DB_';
	
	/**
	 * 字符集
	 * 
	 * @var string
	 */
	protected $_charset = '';
	
	/**
	 * 选中的数据库实例名称
	 * 
	 * @var string
	 */
	protected $_selected_db_name = '';
	
	/**
	 * 数据库日志
	 * 
	 * @var CO_DB_Log
	 */
	protected $_db_logger = null;
	
	/**
	 * 数据库运行上下文，用于捕获运行sql时设置的上下文
	 * 
	 * @var string
	 */
	protected $_context = null;
	
	/**
	 * 连接配置全称
	 * 
	 * @var string
	 */
	public $full_name = '';
	
	/**
	 * 连接名
	 * 
	 * @var string
	 */
	public $name = '';
	
	/**
	 * 所属应用
	 * 
	 * @var string
	 */
	public $app_name;
	
	/**
	 * 构造函数
	 * @param	string $db_full_name 数据库连接全称
	 * @param	array $param 参数
	 */
	function __construct($db_full_name, $param){
		$this->full_name = $db_full_name;
		//var_dump($this->full_name);die;
		$this->app_name = substr($this->full_name, 0, strpos($this->full_name, '\\'));
		$this->name = substr($this->full_name, strrpos($this->full_name, '\\')+1);		
		if(is_array($param) && count($param)){
			foreach($param as $key => $val){
				$this->_database_config[$key]=$val;
				switch (strtolower($key)) {
					case 'charset':
						$this->_charset = $val;				//字符集
						break;
					case 'db_name':
						$this->_selected_db_name = $val;				//使用的数据库实例名称
						break;
				}
			}
			if(isset($this->_database_config['log_path']) && $this->_database_config['log_path']!='') $db_log_path = $this->_database_config['log_path'];
			else $db_log_path = ROOT_PATH.'/'.$this->app_name.'/'.LOG_PATH_NAME.'/db';
			if(
					isset($this->_database_config['log_type']) && 
					($this->_database_config['log_type'] == '1' || $this->_database_config['log_type'] == '2') && 
					$db_log_path != ''
					){
				$this->_db_logger = new CO_DB_Log($db_log_path);				//数据库日志
			}
		}
		
		$this->_exception = $this->_getErrorClass();
	}
	
	/**
	 * 析构函数
	 */
	function __destruct(){
		$this->close();
	}
	
	/**
	 * 初始化
	 * 完成数据库连接，选择数据实例，设置字符集
	 * @return	boolean
	 */
	protected function _init(){
		if(!$this->connect()){
			//数据库连接失败
			$this->_exception->NoConnent($this->_exception_msg);
			return false;
		}
		return true;
	}
	
	/**
	 * 运行完整的sql语句，并返回运行结果
	 * 
	 * @param	string $sql 完整的sql语句
	 * @param	array $data sql变量
	 * @param	array $param 运行参数
	 * @return	boolean 是否运行成功
	 */
	protected function _executeSql($sql, $data=array(), $param=array()){
		$this->ping();				//确定连接持久有效
		
		$db_log_content = '';
		
		if(!is_null($this->_db_logger)){
			$db_log_content .= $this->_db_logger->begin();
			$db_log_content .= $this->_db_logger->unmixed_query($sql, $data);
		}
		
		//对Sql语句进行预处理，合并通配符？及替换的数据数组。
		$full_sql = $this->_processSql($sql, $data, $param);
		
		if(!is_null($this->_db_logger)){
			$db_log_content .= $this->_db_logger->mixed_query($full_sql);
		}
		
		//开始记录语句运行时间
		$query_time = microtime(true);
		
		//调用子类实现的_Qurey方法实现查询并返回结果集
		$query_result = $this->_query($full_sql);
		
		//运行完毕后计算本次操作的耗时，并且记录运行的sql语句
		$query_time = microtime(true) - $query_time;
		$this->_last_query_execute_time = $query_time;
		$this->_last_query_sql = $full_sql;
		if($query_result===false){
			//查询失败，记录查询错误信息并做响应处理
			if($this->_query_in_trans){
				//在事务中查询运行失败，需要设置回滚
				$this->_trans_status=false;
			}
			
			//记录查询错误信息及错误sql语句
			$this->_exception->queryError($sql, $this->_exception_msg);
			if(!is_null($this->_db_logger)){
				$db_log_content .= $this->_db_logger->query_error($this->_exception_msg);
				$db_log_content .= $this->getContext();
				$db_log_content .= $this->_db_logger->end($full_sql);
				$this->_db_logger->write($db_log_content);
			}
			return false;
		}else{
			//查询正确，实例化结果集对象并返回true
			$this->_database_result = $this->_getResultClass($query_result);
			
			if(!is_null($this->_db_logger) && $this->_database_config['log_type']=='2'){
				$db_log_content .= $this->_db_logger->query_result($this->_database_result->getData());
				$db_log_content .= $this->_db_logger->end();
				$this->_db_logger->write($db_log_content);
			}
			return true;
		}		
	}
	
	/**
	 * 预处理需要运行的sql语句
	 * 
	 * @param	string $sql 查询语句，支持通配符？替代变量。
	 * @param	array $data 与第一个参数sql配合使用。对应语句中需要替换的通配符？位置，？的数量需与data数组个数一致
	 * @return	string 处理完成的sql语句
	 */
	protected function _processSql($sql, $data){
		return $sql;
	}
	
	/**
	 * 根据查询结果Resource实例化对应的结果集对象
	 * 
	 * @param	object $result 原生数据库查询结果
	 * @return	object 继承CO_DB_Result基类的子类对象
	 */
	protected function _getResultClass($result){
		//判断参数是否有效
		if(!$result) return null;
		
		//根据type获取结果集类名称
		$class_file_name = $this->_database_config['type'].'_result';
		$class_name = static::$Class_Prefix.$this->_database_config['type'].'_result';
		
		//获取结果集类文件路径
		$class_file_path = realpath(__DIR__).'/'.$this->_database_config['type'].'/'.$class_file_name.'.php';
		
		//引入类文件，并生成实例
		include_once $class_file_path;
		return new $class_name($result);
	}
	
	/**
	 * 获取继承CO_DB_Exception基类的子类对象
	 * 
	 * @return	object 继承CO_DB_Exception基类的子类对象
	 */
	protected function _getErrorClass(){
		//根据type获取类名称
		$class_file_name = $this->_database_config['type'].'_exception';
		$class_name = static::$Class_Prefix.$this->_database_config['type'].'_exception';
		//获取类文件路径
		$class_file_path = realpath(__DIR__).'/'.$this->_database_config['type'].'/'.$class_file_name.'.php';
		
		//引入类文件，并生成实例
		include_once $class_file_path;
		return new $class_name();
	}
	
	/**
	 * 选择数据库实例
	 * 
	 * @param	string $db_name 实例名称
	 * @return	boolean 是否成功
	 */
	function selectDb($db_name){
		$bln_return = true;
		$db_log_content = '';				//日志
				
		if(!is_null($this->_db_logger)){
			$db_log_content .= $this->_db_logger->begin();
			$db_log_content .= $this->_db_logger->mixed_query('select db['.$this->_database_config['type'].'] on ['.$this->_database_config['user'].'@'.$this->_database_config['host'].':'.$this->_database_config['port'].']');
		}
		
		if($this->_selectDb($db_name)){
			//连接成功
			$bln_return = true;
			
			if(!is_null($this->_db_logger)){
				$db_log_content .= $this->_db_logger->query_result('success');
			}
			
		}else{
			//连接失败
			$bln_return = false;
			
			if(!is_null($this->_db_logger)){
				$db_log_content .= $this->_db_logger->query_error('failure');
			}			
		}
		
		if(!is_null($this->_db_logger)){
			$db_log_content .= $this->getContext();
			$db_log_content .= $this->_db_logger->end();
			if($this->_database_config['log_type'] == '2' || !$bln_return) $this->_db_logger->write($db_log_content);
		}
		
		return $bln_return;
	}
	
	/**
	 * 创建数据库实例,并选择
	 * 
	 * @param	string $db_name 数据库实例
	 * @param	string $db_charset 字符集
	 * @param	string $db_collation 字符排序
	 * @param	boolean $bln_select_immeidately 是否立即使用数据库
	 * @return	boolean
	 */
	function createDb($db_name, $db_charset, $db_collation, $bln_select_immeidately=true){
		return $this->_createDb($db_name, $db_charset, $db_collation, $bln_select_immeidately);
	}
	
	/**
	 * 连接数据库
	 * 
	 * @return	boolean 是否成功
	 */
	public function connect(){
		$bln_return = true;
		$db_log_content = '';				//日志
		
		if(!is_null($this->_db_logger)){
			$db_log_content .= $this->_db_logger->begin();
			$db_log_content .= $this->_db_logger->mixed_query('connect db['.$this->_database_config['type'].'] on ['.$this->_database_config['user'].'@'.$this->_database_config['host'].':'.$this->_database_config['port'].'] with password');
		}
		
		if($this->_connect()){
			//连接成功
			$bln_return = true;
			if(!is_null($this->_db_logger)){
				$db_log_content .= $this->_db_logger->query_result('success');
			}
		}else{
			//连接失败
			$bln_return = false;
			if(!is_null($this->_db_logger)){
				$db_log_content .= $this->_db_logger->query_error($this->_exception_msg);
			}
		}
		
		if(!is_null($this->_db_logger)){
			$db_log_content .= $this->_db_logger->end();
			if($this->_database_config['log_type'] == '2' || !$bln_return) $this->_db_logger->write($db_log_content);
		}
		
		return $bln_return;
	}
	
	/**
	 * 检测数据路连接
	 * 
	 * @return	boolean
	 */
	public function ping(){
		return $this->_ping();
	}
	
	/**
	 * 关闭数据库
	 * 
	 * @return	boolean
	 */
	public function close(){
		if($this->_link_identifier){
			$this->_close();
			$this->_link_identifier = null;
		}
		
		if(!is_null($this->_db_logger) && $this->_database_config['log_type'] == '2'){
			$db_log_content = '';				//日志
			$db_log_content .= $this->_db_logger->begin();
			$db_log_content .= $this->_db_logger->mixed_query('close db['.$this->_database_config['type'].':'.$this->_database_config['db_name'].'] on ['.$this->_database_config['user'].'@'.$this->_database_config['host'].':'.$this->_database_config['port'].']');
			$db_log_content .= $this->_db_logger->query_result('success');
			$db_log_content .= $this->_db_logger->end();
			$this->_db_logger->write($db_log_content);
		}
				
		return true;
	}
	
	/**
	 * 设置数据库连接字符集
	 * 
	 * @param	string $charset 字符集
	 * @return	boolean 是否成功
	 */
	public function setCharset($charset){
		return $this->_setCharset($charset);
	}
	
	/**
	 * 输入Sql语句，进行查询并返回结果
	 * 
	 * @param	string $sql 查询语句，支持通配符？替代变量。
	 * @param	array $data 与第一个参数sql配合使用。对应语句中需要替换的通配符？位置，？的数量需与data数组个数一致
	 * @param	array $param 运行参数[可选]
	 * @return	mixed 如果查询正常则返回结果集对象的GetaData()函数，否则返回false
	 */
	public function query($sql, $data=array(), $param=array()){
		//运行Sql语句
		$query_result = $this->_executeSql($sql, $data, $param);
		//返回运行结果，如果查询失败则返回false
		if($query_result === false) return false;
		else{
			//查询正确，并且返回结果集数据数组
			return $this->_database_result->getData();
		}
	}
	
	/**
	 * 获取sql运行错误
	 * 
	 * @return	object CO_DB_Exception对象 
	 */
	public function getError(){
		return $this->_exception;
	}
	
	/**
	 * 获取查询耗时
	 * 
	 * @return	float 耗时
	 */
	public function getExcuteTime(){
		return $this->_last_query_execute_time;
	}
	
	/**
	 * 查询并获取结果集第一行
	 * 
	 * @param	string $sql 查询语句，支持通配符？替代变量。
	 * @param	array $data 与第一个参数sql配合使用。对应语句中需要替换的通配符？位置，？的数量需与data数组个数一致。
	 * @return	mixed
	 */
	public function getRow($sql, $data=array()){
		
	}
	
	/**
	 * 查询并获取结果集数组
	 * 
	 * @param	string $sql 查询语句，支持通配符？替代变量。
	 * @param	array $data 与第一个参数sql配合使用。对应语句中需要替换的通配符？位置，？的数量需与data数组个数一致。
	 * @return	mixed
	 */
	public function getAll($sql, $data=array()){
		
	}
	
	/**
	 * 更新数据条目
	 * 
	 * @param	string $table 表名
	 * @param	array $where 查询条件数组
	 * @param	array $data 更新字段数组
	 * @param	array $param 参数数组[可选]
	 * @return	boolean 是否成功
	 */
	public function update($table, $where, $data, $param=array()){
		return true;
	}
	
	/**
	 * 插入数据条目
	 * 
	 * @param	string $table 表名
	 * @param	array $data 字段数组
	 * @param	array $param 参数数组[可选]
	 * @param	mixed 表中如有自增(AutoIncrement)主键，则返回新增的主键id。如没有自增主键则返回boolean
	 */
	public function insert($table, $data, $param=array()){
		return true;
	}
	
	/**
	 * 插入或更新条目
	 * 根据duplication key设置判断是更新操作还是插入操作
	 * 
	 * @return	boolean
	 */
	public function insertOrUpdate(){
		return true;
	}
	
	/**
	 * 删除条目
	 * 
	 * @param	string $table 表名
	 * @param	array $where 查询条件数组[可选]
	 * @param	array $param 更新字段数组[可选]
	 * @return	boolean 是否成功
	 */
	public function delete($table, $where=array(), $param=array()){
		return true;
	}
	
	/**
	 * 选择查询条目
	 * 
	 * @param	string $table 表名
	 * @param	array $where 查询条件数组[可选]
	 * @param	array $param 更新字段数组[可选]
	 * @return	mixed
	 */
	public function select($table, $where=array(), $param=array()){
		return true;
	}
	
	/**
	 * 事务起始
	 * @return	void
	 */
	function transStart(){
		$this->_query_in_trans = true;
		$this->_trans_status = true;
		$this->_transBegin();
	}
	
	/**
	 * 事务完成
	 * @return	boolean 事务状态
	 */
	function transFinish(){
		if(!$this->_trans_status) $this->_transRollback();
		else $this->_transCommit();
		$ret = $this->_trans_status;
		$this->_trans_status = true;
		$this->_query_in_trans = false;
		return $ret;
	}
	
	/**
	 * 设置上下文
	 * 
	 * @param	mixed $context 上下文内容
	 * @return	$this
	 */
	function setContext($context){
		$this->_context = $context;
		return $this;
	}
	
	/**
	 * 获取上下文
	 * 
	 * @return	mixed
	 */
	function getContext(){
		return is_null($this->_context)?'':$this->_context;
	}
}