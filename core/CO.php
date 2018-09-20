<?php
//CO框架基础check
define('CO_BASE_CHECK', true);

//引入框架公共配置及常量文件
include_once realpath(__DIR__.'/../').'/config/global_config.php';

//系统常量配置
include_once realpath(__DIR__).'/const/SysConst.php';

//引入自动加载类
include_once 'CO_Autoloader.php';

// ------------------------------------------------------------------------

/**
 * CO框架类
 * 
 * 单例模式
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO{
	
	/**
	 * 默认控制器
	 * 
	 * @var string
	 */
	const DEFAULT_CONTROLLER = 'index';
	
	/**
	 * 默认函数
	 * 
	 * @var string
	 */
	const DEFAULT_FUNCTION = 'run';
	
	/**
	 * 单例对象singleton
	 * @var object
	 */
	private static $_singleton = null;
	
	/**
	 * 数据库连接池
	 * 
	 * @var array
	 */
	protected $_db_link = null;
	
	/**
	 * 构造函数，私有
	 */
	private function __construct(){
		
	}
	
	/**
	 * singlton实例
	 * 
	 * @return	$this
	 */
	static function GetInstance(){
		if(is_null(self::$_singleton)) self::$_singleton = new self();
		return self::$_singleton;
	}
	
	/**
	 * 路由函数，获取控制器和函数
	 * 
	 * 解析Query_String，从中计算出控制器类名称及调用函数名称
	 * 
	 * @return	array
	 */
	static function Router(){
		//获取访问url中?后面的地址
		$path = $_SERVER['QUERY_STRING'];
		//使用正则表达式获取controller和function
		$pattern='/\/(\w*)\/?(\w*)/';
		$matches=array();
		$arrMatches=preg_match($pattern, $path, $matches);
		return $matches;
	}
	
	/**
	 * 应用app入口
	 * 
	 * @param	string $app_name 应用app名称
	 * @return	void
	 */
	function index($app_name){
		/* ---------------------------------------------------------------------------------------------------
		 * 根据输入地址，获取控制器和函数
		 * 默认控制器是IndexController
		 * 控制器默认函数是run()方法
		 * ---------------------------------------------------------------------------------------------------*/
		$segments = self::Router();
		//解析出控制器和函数
		$strCtrlor = empty($segments[1])?self::DEFAULT_CONTROLLER:$segments[1];
		$strFunc = empty($segments[2])?self::DEFAULT_FUNCTION:$segments[2];
		unset($segments);
		/* ---------------------------------------------------------------------------------------------------
		 * 运行控制器
		 * ---------------------------------------------------------------------------------------------------*/
		if($this->controller($app_name, $strCtrlor, $strFunc) === false) self::Show404();
	}
	
	/**
	 * 调用控制器
	 * 
	 * @param	string $app_name 应用app名称
	 * @param	string $ctrl_name 控制器名称
	 * @param	string $func_name 函数名称
	 * @return	boolean
	 */
	function controller($app_name, $ctrl_name, $func_name){
		/* ---------------------------------------------------------------------------------------------------
		 * 定义页面输出对象
		* ---------------------------------------------------------------------------------------------------*/
		$output = new CO_Output();
				
		/* ---------------------------------------------------------------------------------------------------
		 * 引入控制器文件，并生成控制器对象。
		* 系统运行控制器函数逻辑
		* ---------------------------------------------------------------------------------------------------*/
		$controller = self::StrCamelize($ctrl_name).'Controller';
		$controller_file_path = ROOT_PATH.'/'.$app_name.'/'.CONTROLLER_PATH_NAME.'/'.$controller.'.php';
			
		if(!file_exists($controller_file_path)) return false;    //控制器不存在
	
		if(is_callable(array(array('Controller', $func_name)))){
			//不允许调用控制器基类Controller的方法
			return false;
		}
		include $controller_file_path;    //引入控制器文件
		
		$objCtrl = new $controller($app_name);		

		$objCtrl->setOutput($output);    //绑定CO_Output输出对象		
		if(method_exists($objCtrl, $func_name)){
			//反射机制调用
			$ref = new ReflectionMethod($controller, $func_name);
			$r = Reflection::getModifierNames($ref->getModifiers());
			if(strtolower($r[0]) != 'public'){
				//非public方法不能调用
				unset($r);unset($ref);
				return false;
			}
			$objCtrl->$func_name();    //运行
			$objCtrl->display();    //输出
			return true;
		}
		unset($objCtrl);    //释放对象
		return false;		
	}
	
	/**
	 * 将一个以下划线分隔的单词字符串更改为骆驼拼写法
	 * 
	 * @param	string $str 输入字符串
	 * @param	boolean $upper_case 大驼峰还是小驼峰
	 * @return	string 转化后的字符串
	 */
	static function StrCamelize($str, $upper_case = true) {
		$str = strtolower ( $str );
		$arr = explode ( '_', $str );
		$arr = array_map ( "ucfirst", $arr );
		$new_str = implode ( '', $arr );
		return $upper_case ? $new_str : lcfirst ( $new_str );
	}
	
	/**
	 * 访问资源不存在
	 * 
	 * @return	void
	 */
	static function Show404(){
		echo '404';
		die;
	}
	
	/**
	 * 处理未捕获的异常
	 * 
	 * @param	exception $object 异常对象
	 * @return	void
	 */
	static function Exception_Handler($exception){
		$errLog = new CO_Log(LOG_PATH);
		$msg = $exception->getMessage();
		$errLog->write('['.date('Y-m-d H:i:s').'] catch unhandled exception: '.$msg);
	}
	
	/**
	 * 加载数据库连接对象
	 * 
	 * @param	string $db_full_name 数据库名称
	 * @return	CO_DB_API 数据库连接对象
	 */
	static function GetDB($db_full_name){
		if($db_full_name == '') return null;
		if(strpos($db_full_name, '\\') === false){
			$app_name = $db_full_name;
			$db_name = 'default';
		}else{
			$app_name = substr($db_full_name, 0, strpos($db_full_name, '\\'));
			$db_name = substr($db_full_name, strrpos($db_full_name, '\\')+1);
		}
		if(is_null(self::GetInstance()->_db_link)) self::GetInstance()->_db_link = array();
		else if(isset(self::GetInstance()->_db_link[$db_full_name])) return self::GetInstance()->_db_link[$db_full_name];
		/*---------- 加载配置文件 -----------*/
		$db_config_file = ROOT_PATH.'/'.$app_name.'/'.CFG_PATH_NAME.'/db_config.php';
		if(!file_exists($db_config_file)) return null;    //数据库配置文件不存在
		$db_config = array();
		include $db_config_file;
		/*---------- 获取数据库配置 ----------*/
		$db_api_class_file = $db_config[$db_name]['type'].'_api';
		$db_api_class = 'CO_DB_'.$db_config[$db_name]['type'].'_api';
		$db_api_file = realpath(__DIR__).'/db/'.$db_config[$db_name]['type'].'/'.$db_api_class_file.'.php';
		if(!file_exists($db_api_file)) return null;    //数据库接口文件不存在
		/*---------- 实例化数据库接口对象 ----------*/
		include_once $db_api_file;
		$objDb = new $db_api_class($db_full_name, $db_config[$db_name]);
		$objDb->SelectDb($db_config[$db_name]['db_name']);    //选择数据库实例
		$objDb->SetCharset($db_config[$db_name]['charset']);    //设置字符集
		self::GetInstance()->_db_link[$db_full_name] = $objDb;
		unset($db_config);
		return self::GetInstance()->_db_link[$db_full_name];
	}
	
	/**
	 * 获取程序调用过程
	 * 
	 * @return	array
	 */
	static function Debug(){
		$trace_stack = array();
		foreach(debug_backtrace() as $key => $debug){
			if(!in_array(strtolower($debug['class']), array('co', 'controller'))){
				$args = array();
				foreach($debug['args'] as $_args){
					if(is_object($_args)) array_push($args, 'instance of '.get_class($_args));
					else{
						array_push($args, strval($_args));
					}
				}
				array_push($trace_stack, 'class:['.$debug['class'].'], function['.$debug['function'].'], args['.implode(', ', $args).'], line['.$debug['line'].']');
			}
		}
		return $trace_stack;
	}
}

//设置未捕获异常的处理情况
set_exception_handler(array(CO::GetInstance(), 'exception_handler'));

//类自动加载机制
spl_autoload_register(array('CO_Autoloader', 'Load'), true);
?>