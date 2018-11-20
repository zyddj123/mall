<?php 

class SELLER_Session extends CO_Session{

	/**
	 * 构造函数
	 */
	function __construct(){
		parent::__construct();
		$this->_session =& $_SESSION['seller'];
	}

	/**
	 * 销毁会话
	 * @return	boolean
	 */
	function Destroy(){
		unset($_SESSION['seller']);//删除当前session
	}
}

?>