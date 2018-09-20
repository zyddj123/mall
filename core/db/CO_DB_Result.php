<?php
/**
 * 查询结果集类。
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
abstract class CO_DB_Result{
	
	/**
	 * 结果集数量
	 * 
	 * @var int
	 */
	protected $_result_num = 0;
	
	/**
	 * 结果集
	 * 
	 * @var object
	 */
	protected $_result = null;
	
	/**
	 * 结果集中的当前指针位移
	 * 
	 * @var int
	 */
	protected $_current_index = 0;
	
	/**
	 * 构造函数
	 * 
	 * @param	object $result 数据库结果
	 */
	function __construct($result){
		
	}
	
	/**
	 * 获取结果集中指定位移量的结果
	 * 
	 * @param	int $index 偏移量
	 * @return	mixed
	 */
	protected function _getNthData($index){
		
	}
	
	/**
	 * 转化结果集成为数据数组
	 * 
	 * @return	mixed
	 */
	public function getData(){
		
	}
	
	/**
	 * 获取指定位移的数据
	 * 
	 * @param	int $index 位移下标
	 * @return	mixed
	 */
	public function getNth($index){
		if($index>$this->_result_num || $index<0) return false;
		return $this->_getNthData($index);
	}
	
	/**
	 * 获取下一个位移数据
	 * 
	 * @return	mixed
	 */
	public function next(){
		$index = $this->_current_index + 1;
		$data = $this->getNth($index);
		if($data !== false) $this->_current_index = $index;
		return $data;
	}
	
	/**
	 * 获取上一个位移数据
	 * 
	 * @return	mixed
	 */
	public function previous(){
		$index = $this->_current_index - 1;
		$data = $this->getNth($index);
		if($data !== false) $this->_current_index = $index;
		return $data;
	}
	
	/**
	 * 获取第一个位移数据
	 * 
	 * @return	mixed
	 */
	public function first(){
		$index = 0;
		$data = $this->getNth($index);
		if($data !== false) $this->_current_index = $index;
		return $data;
	}
	
	/**
	 * 获取最后一个位移数据
	 * 
	 * @return	mixed
	 */
	public function last(){
		$index = $this->_result_num;
		$data = $this->getNth($index);
		if($data !== false) $this->_current_index = $index;
		return $data;
	}
}