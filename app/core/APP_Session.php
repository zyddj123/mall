<?php 

class APP_Session extends CO_Session{

	/**
	 * 构造函数
	 */
	function __construct(){
		parent::__construct();
		$this->_session =& $_SESSION['app'];
	}

	/**
	 * 销毁会话
	 * @return	boolean
	 */
	function Destroy(){
		unset($_SESSION['app']);//删除当前session
	}
}

?>