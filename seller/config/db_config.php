<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit;
}
/**
 * 应用数据库配置
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * 应用数据库配置
 * 可配置多个数据库连接实例。系统默认连接配置是“default”。
 * 数据库配置参数说明： 
 * type：数据库类型。系统现在支持mysql。
 * host：数据库连接地址。
 * port：数据库端口
 * user：数据库用户
 * password：数据库密码
 * charset：数据库字符集
 * db_name：数据库连接实例
 * log_type : 数据库日志方式。1:只记录错误信息; 2:记录全部
 * log_path : 数据库日志存放路径
 * ------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
$db_config['default'] = array(
		'type' => 'mysqli',
		'host' => '127.0.0.1',
		'port' => '3306',
		'user' => 'root',
		'password' => 'zdj123456',
		'charset' => 'utf8',
		'db_name' => 'mall',
		'log_type' => '1',
		'log_path' => APP_LOG_PATH
);
?>