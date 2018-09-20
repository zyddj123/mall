<?php
/**
 * 页面输出类。
 * 
 * CO框架核心
 * 
 * 控制器对象可以绑定页面输出类对象，并将视图中的内容显示出来。
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_Output {
	
	/**
	 * 输入字符串缓冲
	 * 
	 * @var string
	 */
	protected $_output;
	
	/**
	 * 构造函数
	 */
	function __construct(){
		
	}
	
	/**
	 * 设置输出内容
	 * 
	 * @param	string $output 输出字符串
	 * @return	void
	 */
	function setOutputStream($output) {
		$this->_output = $output;
	}
	
	/**
	 * 获取输出内容
	 * 
	 * @return	void;
	 */
	function getOutputStream() {
		return $this->_output;
	}
	
	/**
	 * 追加输出内容
	 * 
	 * @param	string $output 输出字符串
	 * @return	void
	 */
	function appendOutputStream($output) {
		if (is_null($this->_output) || empty($this->_output)) $this->_output = $output;
		else	$this->_output .= $output;
	}
	
	/**
	 * 显示输出
	 * 
	 * @param	string $output 输出内容
	 * @return	void
	 */
	function display($output=''){
		if ($output == '') $output = & $this->_output;
		echo $output;
	}
}
?>