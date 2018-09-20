<?php
/**
 * 开发插件类。
 * 
 * CO框架核心
 * 
 * 用于获取系统扩展插件对象。
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_Plugins{
	
	/**
	 * 所属应用名称
	 * 
	 * @var string
	 */
	public $app_name = '';
	
	/**
	 * 已经加载并且缓存的插件对象列表
	 * 
	 * @var array
	 * @example array('plugins_a' => $object_a, ....);
	 */
	protected $_plugins=array();
	
	/**
	 * 系统内置非插件列表
	 * 
	 * @var array
	 */
	protected static $_UnpluginClass = array(
			'CO_Config',
			'CO_Input',
			'CO_Plugins',
			'CO_Session',
			'CO_Log',
			'CO_Controller',
			'CO_Model',
			'CO_Output',
			'CO_DB_API',
			'CO_DB_Anaalyse',
			'CO_DB_Log',
			'CO_DB_Result',
			'CO_DB_Exception'
			);

	/**
	 * 指定类名称是否CO_Plugin插件体系类
	 * 
	 * 是否实现CO_Plugins_Architecture接口
	 * 
	 * @param	string $plugins 插件类名称
	 * @return	boolean	
	 */
	static function HasPlugins($plugins){
		//需要排除核心类
		if(in_array($plugins, self::$_UnpluginClass)) return false;
		if (class_exists($plugins) && in_array('CO_Plugins_Architecture', array_values(class_implements($plugins)))){
			return true;
		}else return false;
	}
	
	/**
	 * 指定类名称是否使用数据库存储
	 * 
	 * 是否继承CO_DB_Adapter类
	 * 
	 * @param	string $plugins 插件类名称
	 * @return	boolean
	 */
	static function HasDbAccess($plugins){
		//需要排除核心类
		if(in_array($plugins, self::$_UnpluginClass)) return false;
		if (class_exists($plugins) && in_array('CO_DB_Adapter', array_values(class_parents($plugins)))){
			return true;
		}else return false;
	}
	
	/**
	 * 获取插件
	 * 
	 * @param	string $plugins 插件名称
	 * @param	array $arrParameters 对象参数 
	 * @return	mixed 插件object对象,否则false
	 
	function getPlugin($plugins, $arrParameters=array()){
		if($this->hasPlugin($plugins)){
			if(array_key_exists($plugins, $this->_plugins)){
				//返回已经生成的对象
				return $this->_plugins[$plugins];
			}else{
				//使用反射机制实现插件对象实例化
				$objClass=new ReflectionClass($plugins);
				$objPlugin = $objClass->newInstanceArgs($arrParameters);
				//将插件对象放入_plugins数组中备用
				$this->_plugins[$plugins]=$objPlugin;
				return $objPlugin;
			}
		}else return false;
	}
	*/
	
	/**
	 * 判断插件类是否包含命名空间namespace
	 * 
	 * 如果包含则返回根命名空前，否则返回false
	 * 
	 * @param	string $plugins 插件类名称
	 * @return	string|false
	 */
	static function GetRootNamspace($plugins){
		if(strpos($plugins, '\\') === false) return false;
		else{
			return substr($plugins, 1, strpos($plugins, '\\', 1)-1);
		}
	}
	
	/**
	 * 加载插件
	 * 
	 * @param	string $plugins_class_name 插件类名称
	 * @param	array $params 实例化插件对象需要传入的参数
	 * @param	boolean $bln_buffered 在$bln_static=false的情况下，是否将生成的插进对象缓存下来。缓存后再次Load则返回缓存后的对象
	 * @return	mixed 有可能返回插件对象、插件类、null
	 */
	function load($plugins_class_name, $params = '', $bln_buffered = false){
		if(!self::HasPlugins($plugins_class_name)) return null;    //插件不存在
		if($bln_buffered && is_object($this->_plugins[$plugins_class_name])){    //直接从上次缓存中读取
			return $this->_plugins[$plugins_class_name];
		}else{    //重新创建插件对象
			/*
			if(($root_namespace = static::GetRootNamspace($plugins_class_name)) !== false){
				//包含命名空间,找到与根空间同名的Class。
				if(static::HasDbAccess($root_namespace) && is_array($root_namespace::$DbNamePools) && !$root_namespace::HasSetDb()){
					//尝试绑定数据库连接
					foreach($root_namespace::$DbNamePools as $db_key => $db_name){
						$root_namespace::SetDb($db_key, CO::GetDB($this->app_name.'\\'.$db_name));
					}
				}
			}
			*/
			if(self::HasDbAccess($plugins_class_name) && is_array($plugins_class_name::$DbNamePools) && !$plugins_class_name::HasSetDb()){
				//使用数据库存取结构，设置数据库
				foreach($plugins_class_name::$DbNamePools as $db_key => $db_name){
					$plugins_class_name::SetDb($db_key, CO::GetDB($this->app_name.'\\'.$db_name));
				}
			}
			$plugins_object = $plugins_class_name::LoadByCO($params, $this->app_name);    //此处没有try-catch，外层代码需要自己捕获异常
			if($bln_buffered) $this->_plugins[$plugins_class_name] = $plugins_object;    //缓存插件对象
			return $plugins_object;
		}
	}
	
	/**
	 * 加载插件
	 * 
	 * @param	string $plugins_class_name 插件类名称
	 * @return	mixed 插件类。加载失败返回null
	 */
	function loadClass($plugins_class_name){
		if(!self::HasPlugins($plugins_class_name)) return null;    //插件不存在
		/*
		if(($root_namespace = static::GetRootNamspace($plugins_class_name)) !== false){
			//包含命名空间,找到与根空间同名的Class。
			if(static::HasDbAccess($root_namespace) && is_array($root_namespace::$DbNamePools) && !$root_namespace::HasSetDb()){
				//尝试绑定数据库连接
				foreach($root_namespace::$DbNamePools as $db_key => $db_name){
					$root_namespace::SetDb($db_key, CO::GetDB($this->app_name.'\\'.$db_name));
				}
			}
		}
		*/
		if(self::HasDbAccess($plugins_class_name) && is_array($plugins_class_name::$DbNamePools) && !$plugins_class_name::HasSetDb()){
			//使用数据库存取结构，设置数据库
			foreach($plugins_class_name::$DbNamePools as $db_key => $db_name){
				$plugins_class_name::SetDb($db_key, CO::GetDB($this->app_name.'\\'.$db_name));
			}
		}
		return $plugins_class_name::LoadClassByCO($this->app_name);
	}
}
?>