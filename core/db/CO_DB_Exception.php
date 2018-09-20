<?php
/**
 * 数据库连接异常处理类
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
class CO_DB_Exception extends Exception{
	
	/**
	 * sql语句
	 * @var string                                                                     
	 */
	protected $_sql = '';
	
	/**
	 * sql运行错误信息
	 * @var string
	 */
	protected $_sql_err_msg = '';
	
	/**
	 * 设置sql及错误信息
	 * 
	 * @param	string $sql sql语句
	 * @param	string $err_msg 错误消息
	 * @return	void
	 */
	protected function _setSql($sql, $err_msg){
		$this->_sql = $sql;
		$this->_sql_err_msg = $err_msg;
	}
	
	/**
	 * 获取sql语句
	 * 
	 * @return	string
	 */
	public function getSql(){
		return $this->_sql;
	}
	
	/**
	 * 获取sql错误信息
	 * 
	 * @return	string
	 */
	public function getSqlErrMsg(){
		return $this->_sql_err_msg;
	}
	
	/**
	 * 数据库连接无效
	 * 
	 * @param	string $error_msg 错误描述
	 * @return	void
	 * @throws	self
	 */
	static function NoConnent($error_msg){
		throw new self($error_msg, SysConst::DATABASE_NO_CONNNET_CODE);
	}
	
	/**
	 * 未指定数据库实例
	 * 
	 * @param	string $error_msg 错误描述
	 * @return	void
	 * @throws	self
	 */
	static function NoDbSelected($error_msg){
		throw new self($error_msg, SysConst::NO_DB_SELECT_CODE);
	}
	
	/**
	 * 设置sql错误
	 * @param	string $sql sql语句
	 * @param	string $error_sql_msg sql错误信息
	 * @return	void
	 */
	function queryError($sql, $error_sql_msg){
		$this->_setSql($sql, $error_sql_msg);
	}
}