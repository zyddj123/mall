<?php
/**
 * 应用App配置加载类
 * 
 * CO框架核心
 * 
 * 根据应用App的名称，加载其目录下的相关配置数据。如：
 * 
 * 个性化配置($custom_config)。存放于应用App的config目录的custom_config.php文件中
 * 
 * 数据库配置($db_config)。存放于应用App的config目录的db_config.php文件中
 * 
 * cos配置($cos_config)。存放于应用App的config目录的cos_config.php文件中
 * 
 * 逻辑映射配置($logic_map)。存放于应用App的config目录的logic_map.php文件中
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_AppLoader{
	
	/**
	 * 个性化配置
	 * 
	 * @var array
	 */
	protected $_custom_configs = null;
	
	/**
	 * 数据库配置
	 * 
	 * @var array
	 */
	protected $_db_configs = null;
	
	/**
	 * cos配置
	 * 
	 * @var array
	 */
	protected $_cos_configs = null;
	
	/**
	 * 逻辑映射
	 * 
	 * @var array
	 */
	protected $_logic_map = null;
	
	/**
	 * 配置目录
	 * 
	 * @var string
	 */
	protected $_base_config_path = '';
	
	/**
	 * 类对象数组，单例模式
	 * 
	 * @var array
	 */
	protected static $_Apps = array();
	
	/**
	 * 应用app名称
	 * 
	 * @var string
	 */
	public $app_name;
	
	/**
	 * 当前应用请求地址前缀。一般用于拼接http连接。
	 * 
	 * @var string
	 */	
	public $app_url_root;
	
	/**
	 * 当前应用主题目录。一般用于拼接http连接。
	 * 
	 * @var string
	 */
	public $app_http_root;
	
	/**
	 * 构造函数,单例
	 * 
	 * @param	string $app_name 应用名称
	 */
	private function __construct($app_name){
		$this->app_name = $app_name;
		$basepath = str_replace("\\","/",realpath(dirname(__FILE__).'/../'));
		$this->_base_config_path = $basepath.'/'.$this->app_name.'/'.CFG_PATH_NAME;
		
		//custom_config
		$custom_system_configs = array();
		@include $this->_base_config_path.'/custom_config.php';
		$this->_custom_configs = $custom_system_configs;
		unset($custom_system_configs);
		
		//app_url_root
		if(!isset($this->_custom_configs['app_url_root'])) $this->_custom_configs['app_url_root'] = HTTP_ROOT_PATH.'/'.$this->app_name.'/index.php?';    //默认值
		$this->app_url_root = $this->_custom_configs['app_url_root'];
				
		//app_http_root;
		if(!isset($this->_custom_configs['app_http_root']) || $this->_custom_configs['app_http_root']=='') $this->_custom_configs['app_http_root'] = HTTP_ROOT_PATH.'/'.$this->app_name.'/'.VIEW_THEMES_PATH_NAME;    //默认值
		$this->app_http_root = $this->_custom_configs['app_http_root'];
		
		//db_config
		$db_config = array();
		@include $this->_base_config_path.'/db_config.php';
		$this->_db_configs = $db_config;
		unset($db_config);
		
		//cos_config
		$custom_socket_config = array();
		@include $this->_base_config_path.'/cos_config.php';
		$this->_cos_configs = $custom_socket_config;
		unset($custom_socket_config);
		
		//logic config
		$logic_map_config = array();
		@include $this->_base_config_path.'/logic_map.php';
		$this->_logic_map = $logic_map_config;
		unset($logic_map_config);
	}
	
	/**
	 * 获取实例
	 * 
	 * @param	string $app_name 应用app名称
	 * @return	object|null
	 */
	static function GetInstance($app_name){
		if($app_name == '') return null;
		if(!isset(self::$_Apps[$app_name])){
			self::$_Apps[$app_name] = new self($app_name);
		}
		return self::$_Apps[$app_name];
	} 
	
	/**
	 * 获取个性化配置(custom_config)
	 * 
	 * @param	string $key 键值
	 * @return	mixed 配置数据
	 */
	function get($key){
		if(is_null($this->_custom_configs) || !isset($this->_custom_configs[$key])) return null;
		return $this->_custom_configs[$key];
	}
	
	/**
	 * 设置个性化配置(custom_config)
	 * 
	 * 可以链式调用
	 * 
	 * @param	string $key 键值
	 * @param	string $value 数值
	 * @return	$this
	 */
	function set($key,$value){
		if ($key!=''){
			$this->_custom_configs[$key]=$value;
		}
		return $this;
	}
	
	/**
	 * 全部个性化配置属性数组(custom_config)
	 * 
	 * @return	array 全部配置数据数组
	 */
	function All(){
		return $this->_custom_configs;
	}
	
	/**
	 * 获取应用Db配置
	 * 
	 * @param	string $key 键值
	 * @return	mixed
	 */
	function getDbCfg($key){
		if(is_null($this->_db_configs) || !isset($this->_db_configs[$key])) return null;
		return $this->_db_configs[$key];
	}

	/**
	 * 获取应用COS配置
	 * 
	 * @param	string $key 键值
	 * @return	mixed
	 */
	function getCOSCfg($key){
		if(is_null($this->_cos_configs) || !isset($this->_cos_configs[$key])) return null;
		return $this->_cos_configs[$key];
	}
	
	/**
	 * 获取全部逻辑映射(logic_map)
	 * 
	 * @return	array 逻辑映射配置数组
	 */
	function getLogicMap(){
		return $this->_logic_map;
	}
}
?>