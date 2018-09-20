<?php
/**
 * CO数据库加载适配器
 * 
 * CO框架核心
 * 
 * 用于开发基于数据库存取的模型类
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.0
 */
abstract class CO_DB_Adapter{
	
	/**
	 * 数据库连接名称池
	 * 使用key-value方式标记数据库连接
	 *
	 * @var array
	 * @example array('key_1'=>$db_link_1, ...)
	 */
	protected static $_DbLinkPools = array();
	
	/**
	 * 数据库连接配置名称
	 * 使用key-value方式标记数据库名称
	 *  
	 * @var array
	 */	
	static $DbNamePools = array(
			'' => 'default'
			);
	
	/**
	 * 设置数据库连接
	 * 
	 * @param	string $db_key 数据库key
	 * @param	object $db_link 数据库连接对象
	 * @return	void
	 */
	static function SetDb($db_key, $db_link){
		static::$_DbLinkPools[$db_key] = $db_link;
	}
	
	/**
	 * 获取数据库连接
	 * 
	 * @param	string $db_key 数据库key
	 * @return	object|null
	 */
	static function GetDb($db_key=''){
		/*
		if(is_array(static::$_DbLinkPools) && count(static::$_DbLinkPools) == 0) return CO::GetDB(RUNTIME_APP_NAME);    //如果未指定数据库，则使用运行期应用APP的默认数据库
		else
		*/
		if(is_object(static::$_DbLinkPools[$db_key])) return static::$_DbLinkPools[$db_key];
		return null;
	}
	
	/**
	 * 遍历数据库连接，并运行回调函数
	 * 
	 * @param	mixed $call_back_func 回调函数名称
	 * @param	array $params 回调函数参数
	 * @return	void
	 */
	static function IterateDb($call_back_func, $call_back_params=array()){
		foreach(static::$_DbLinkPools as $key => $link){
			$params = array($key, $link);
			try {
				@call_user_func_array($call_back_func, is_array($call_back_params)?array_merge($params, $call_back_params):$params);
			} catch (Exception $e) {
			}
		}
	}
	
	/**
	 * 是否设置了数据库存储连接
	 *
	 * @return	boolean
	 */
	static function HasSetDb(){
		if(is_array(static::$_DbLinkPools) && count(static::$_DbLinkPools)>0) return true;
		else return false;
	}
	
	/**
	 * 将自身的数据库设置交接给指定类
	 * 
	 * @param	string $class_to 指定的Class。如果class名称包含命名空间namespace，则需要指明
	 * @param	boolean $bln_enforce 是否强制交接，默认false
	 * @return	void
	 */
	static function HandOverDbTo($class_to, $bln_enforce = false){
		if(!$class_to::HasSetDb() || $bln_enforce){
			foreach (static::$_DbLinkPools as $key => $link){
				$class_to::SetDb($key, $link);
			}
		}
	}
}

?>