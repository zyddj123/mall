<?php
/**
 * CO框架公共配置
 * 
 * CO框架核心
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */

if (!defined('CO_BASE_CHECK')) exit;    //框架校验

/* -------------------------------------------------------------------------------------
 * 框架配置
 * -------------------------------------------------------------------------------------*/
//错误报告方式
error_reporting(E_ALL ^ E_NOTICE);

//是否将错误信息作为输出的一部分显示到屏幕，或者对用户隐藏而不显示。生产环境建议不开启
ini_set('display_errors','On');

//设置是否将脚本运行的错误信息记录到服务器错误日志或者error_log之中。生产环境建议开启
ini_set('log_errors','Off');

//网站根目录绝对路径(ROOT_PATH)
define('ROOT_PATH', str_replace("\\","/",realpath(dirname(__FILE__).'/../')));

//网站http相对根目录
//define('HTTP_ROOT_PATH', str_replace(str_replace('\\', '/', (strrpos($_SERVER['DOCUMENT_ROOT'], '/'))==strlen($_SERVER['DOCUMENT_ROOT'])-1)?substr($_SERVER['DOCUMENT_ROOT'], 0, strlen($_SERVER['DOCUMENT_ROOT'])-1):($_SERVER['DOCUMENT_ROOT']), '', ROOT_PATH));
define('HTTP_ROOT_PATH','..');

//系统日志目录
define('LOG_PATH_NAME', 'log');
define('LOG_PATH', ROOT_PATH.'/'.LOG_PATH_NAME);

//核心代码目录
define('CORE_PATH_NAME', 'core');
define('CORE_PATH', ROOT_PATH.'/'.CORE_PATH_NAME);

//lib目录
define('LIB_PATH_NAME', 'lib');
define('LIB_PATH', ROOT_PATH.'/'.LIB_PATH_NAME);

//常量及配置目录
define('CFG_PATH_NAME', 'config');
define('CFG_PATH', ROOT_PATH.'/'.CFG_PATH_NAME);

//缓存目录
define('CACHE_PATH_NAME', 'cache');
define('CACHE_PATH', ROOT_PATH.'/'.CACHE_PATH_NAME);

/* -------------------------------------------------------------------------------------
 * 当前应用的控制器文件目录
 * 存放应用控制器(controller)
 * 控制器文件需要按照如下规则设计：
 * 1.每个控制器文件有且仅有一个控制器类。
 * 2.控制器文件名称与其内部的控制器类需要一致。即假设存在控制器类TestController，其控制器文件名必须是TestController.php。
 * 3.每个控制器必须继承自(extends)类Controller。
 * 4.控制器类命名方法采用首字母大写并拼接字符“Controller”的方式。如TestController，GetuserController等
 * -------------------------------------------------------------------------------------*/
define('CONTROLLER_PATH_NAME', 'controller');

/* -------------------------------------------------------------------------------------
 * 当前应用的模型目录
 * 存放应用模型(model)
 * 模型文件需要按照如下规则设计：
 * 1.每个模型文件有且仅有一个模型类。
 * 2.模型文件名称与其内部的模型类需要一致。即假设存在模型类TestModel，其模型文件名必须是TestModel.php。
 * 3.每个模型必须继承自(extends)类Model。
 * 4.模型类命名方法采用首字母大写并拼接字符“Model”的方式。如TestModel，GetuserModel等
 * -------------------------------------------------------------------------------------*/
define('MODEL_PATH_NAME', 'model');

/* -------------------------------------------------------------------------------------
 * 当前应用的视图主题(theme)目录
 * 存放应用视图的各种主题。用户可以通过定制不同的主题，实现多种视图展示效果。
 * 在控制器(controller)代码中可以通过$this->setThemes($theme_id);切换使用指定的视图主题。
 * 需要注意的是，此部分代码建议放置在控制器(controller)的初始化函数_init()内，以便于逻辑清晰正确。
 * 
 * 视图主题目录内按主题id作为目录分别存储与视图(view)相关的内容。如视图文件(view目录)，视图样式(css目录)，视图javascript脚本(js目录)等。
 * 其中视图文件目录是必要目录，每个主题目录下有且仅有一个视图文件目录(view)。
 * 视图文件命名规则如下：
 * 1.符合php文件命名规则的php文件。
 * 2.可以嵌套任意层目录。
 * 视图文件只可在控制器(controller)内被调用，调用方法如下:
 * 1.通过代码$this->render($view_name);即可。$view_name指所要引入的视图文件名，并不包含扩展名“.php“。
 * 2.假如视图嵌套在多层目录内，$view_name中增加相对的文件目录即可，如”dir1/dir2/view“。
 * 3.控制器(controller)可以将向视图(view)中传入数据，一边视图进行展现处理。方法是$this->render($view_name, array('param1'=>'a', 'param2'=>'b'));
 *   在视图(view)中直接使用$param1就可以获取值”a“了。
 * -------------------------------------------------------------------------------------*/
define('VIEW_THEMES_PATH_NAME', 'themes');

/* -------------------------------------------------------------------------------------
 * 当前应用的语言包(language)路径
 * 语言包可以支持用户扩展语言，支持i18n。
 * -------------------------------------------------------------------------------------*/
define('LANG_PATH_NAME', 'language');

//设置时区
date_default_timezone_set('Asia/Shanghai');

//当前时间戳
define('NOW_TIMESTAMP', time());

//系统默认语言
define('LANG_DEFAULT', 'zh-cn');

//默认视图主题
define('VIEW_DEFAULT_THEMES', 'default');
define('APP_LOG_PATH', LOG_PATH.'/db/');
?>
