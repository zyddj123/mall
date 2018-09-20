<?php
/**
 * CO模型基类。系统中所有模型对象均需要继承于此类。
 * 
 * CO框架核心
 * 
 * 默认情况下，模型对象会从控制器对象(controller)中引入一些成员变量使用。包括：
 * 
 * 用户会话(session)，语言包配置(language)，通用配置(config)，输入对象(input)，插件对象(plugins)
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_Model{
	
	/**
	 * 可从控制器(controller)中传入的对象属性
	 * 
	 * @var array
	 */
	private static $_Controller_Member_Key = array('app_name', 'session', 'language', 'config', 'input', 'plugins');
		
	/**
	 * 应用app名称
	 * 
	 * @var string
	 */
	public $app_name = '';
	
	/**
	 * 会话对象
	 * 
	 * @var object
	 */
	public $session = null;
	
	/**
	 * 语言包内容
	 * @var array
	 */
	public $language = array();
	
	/**
	 * 应用配置对象
	 * custom_config
	 * 
	 * @var object
	 */
	public $config = null;
	
	/**
	 * 输入对象
	 * @var object
	 */
	public $input = null;
	
	/**
	 * 插件对象
	 * @var object
	 */
	public $plugins = null;
	
	/**
	 * 构造函数
	 * 
	 * @param	object $controller 控制器对象
	 * @param	array $param 参数数组
	 */
	public function __construct($controller = null, $param=array()){
		if(CO_Utils::IsController($controller)){
			//通过控控制器Controller对象实例化，可以继承其部分属性变量。
			foreach(self::$_Controller_Member_Key as $key){
				$this->$key = $controller->$key;
			}
		}else{
			//通过参数实例化
			foreach(self::$_Controller_Member_Key as $key){
				if(isset($param[$key])) $this->$key = $param[$key];
			}
		}
	}
	
	/**
     * 获取数据库连接，并且设置上下文。
     * 
     * @param	string $db_name 数据库实例名称
     * @return	object
     * @throws	CO_DB_Exception 数据库连接异常
     */
    function getDb($db_name = 'default'){
    	$context.= PHP_EOL.'---------- trace stack start ---------'.PHP_EOL;
    	$context.= 'app_name:['.$this->app_name.']'.PHP_EOL;
    	foreach(CO::Debug() as $debug){
    		$context.= $debug.PHP_EOL;
    	}
    	$context.= '---------- trace stack over ---------'.PHP_EOL;
    	return CO::GetDb($this->app_name.'\\'.$db_name)->setContext($context);
    }
	
	/**
	 * 通过传入参数创建模型Model对象
	 * 
	 * @param	array $param 参数
	 * @return	object
	 */
	final public static function GetInstance($param=array()){
		return new static(null, $param);
	}
	
	/**
	 * 通过控制器Controller创建模型Model对象
	 * 
	 * @param	CO_Controller $controller 控制器对象
	 * @return	object|null
	 */
	final public static function CreateFromController($controller, $param=array()){
		if(CO_Utils::IsController($controller)) return new static($controller, $param);
		else return null;
	}
}
?>