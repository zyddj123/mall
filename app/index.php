<?php
/**
 * 应用系统程序入口
 * 
 * CO框架核心
 * 
 * 引入必要的配置文件
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
include_once realpath(__DIR__.'/../').'/core/CO.php';
//类自动加载机制
spl_autoload_register(array('CO_Autoloader', 'Load'), true);
// set_exception_handler(array(CO::GetInstance(), 'exception_handler'));
if (class_exists(Debug\Handler::class) && Debug\Handler::$debug) {
    Debug\Handler::register();
} else {
    set_exception_handler(array(CO::GetInstance(), 'exception_handler'));
}
//当前应用路径
$current_app_path = str_replace('\\', '/', realpath(dirname(__FILE__).'/'));
//当前应用名称
$current_app_name = substr($current_app_path, strrpos($current_app_path, '/')+1, strlen($current_app_path));
define("RUNTIME_APP_NAME", $current_app_name);    //定义运行期的app名称
unset($current_app_path);    //释放变量
//初始化框架入口
$response=CO::GetInstance()->handle($current_app_name);
$response->display();
unset($current_app_name);
?>