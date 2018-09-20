<?php
include_once realpath(__DIR__.'/../').'/CO_Log.php';

// ------------------------------------------------------------------------

/**
 * 数据日志记录类。
 *
 * CO框架核心
 *
 * 继承自CO_Log
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_DB_Log extends CO_Log{
	
	/**
	 * 日志分割线
	 * @var string
	 */
	protected $_log_line_separator = '--------------------';
	
	/**
	 * 构造函数
	 * 
	 * @param	string $app_log_path 应用单元内的数据库日志目录
	 */
	function __construct($app_log_path){
		parent::__construct($app_log_path);
	}

	/**
	 * 开始记录
	 * 
	 * @return	string
	 */
	function begin(){
		$log = '';
		$log .= '====================db log===================='.PHP_EOL;
		$log .= '[seq]'.PHP_EOL;
		$log .= microtime().PHP_EOL;
		$log .= $this->_log_line_separator.PHP_EOL;
		return $log;
	}
	
	/**
	 * 结束记录
	 * 
	 * @return	string
	 */
	function end(){
		//return '====================db log over===================='.PHP_EOL;
		//return PHP_EOL;
		return '';
	}
	
	/**
	 * 记录未混淆的sql请求语句
	 * 
	 * @param	string $sql_string sql语句
	 * @param	array $sql_params sql参数
	 * @return	string
	 */
	function unmixed_query($sql_string, $sql_params){
		$log = '';
		$log .= '[unmixed_query]'.PHP_EOL;
		$log .= $sql_string.PHP_EOL;
		$log .= $this->_log_line_separator.PHP_EOL;
		$log .= '[unmixed_params]'.PHP_EOL;
		if(is_array($sql_params)) $log .= print_r($sql_params, true).PHP_EOL;
		else $log .= $sql_params.PHP_EOL;
		$log .= $this->_log_line_separator.PHP_EOL;
		return $log;
	}
	
	/**
	 * 记录混淆后的sql请求语句
	 * 
	 * @param	string $sql_full_string sql语句
	 * @return	string
	 */
	function mixed_query($sql_full_string){
		$log = '';
		$log .= '[full_sql]'.PHP_EOL;
		$log .= $sql_full_string.PHP_EOL;
		$log .= $this->_log_line_separator.PHP_EOL;
		return $log;
	}
	
	/**
	 * 记录sql结果
	 * 
	 * @param	mixed $result 结果数据
	 * @return	string
	 */
	function query_result($result){
		$log = '';
		$log .= '[result]'.PHP_EOL;
		if(!is_string($result)) $log .= print_r($result, true);
		else $log .= $result;
		//$log .= PHP_EOL;
		return $log;
	}
	
	/**
	 * 记录sql错误
	 * 
	 * @param	mixed $error 错误数据
	 * @return	string
	 */
	function query_error($error){
		$log = '';
		$log .= '[error]'.PHP_EOL;
		if(!is_string($error)) $log .= print_r($error, true);
		else $log .= $error;
		//$log .= PHP_EOL;
		return $log;
	}	 
}