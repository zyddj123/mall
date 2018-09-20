<?php
/**
 * 用户会话类。管理当前基于$_SESSION的会话。
 * 
 * CO框架核心
 * 
 * 在业务应用中可以开发集成于此类的个性化会话操作类。
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_Session{
	
	/**
	 * 会话session数据
	 * 
	 * @var array
	 */
	protected $_session;
	
	/**
	 * 构造函数
	 */
	function __construct(){
		$this->_session=& $_SESSION;
	}
	
	/**
	 * 获取多维数组的内容
	 * 
	 * @param	array $val 多维数组
	 * @param	string $key 数组key,如果多维key则使用":"分隔开
	 * @return	mixed 对应key的内容
	 */
	protected function _get($array_value, $key){
		if($key=='') return null;
		$vKeys = explode(':', $key);
		for ($i = 0; $i < count($vKeys); $i++) {
			if($i==count($vKeys)-1){
				return $array_value[$vKeys[$i]];
			}else{
				if(!isset($array_value[$vKeys[$i]])) return null;
				$array_value=& $array_value[$vKeys[$i]];
			}
		}
	}
	
	/**
	 * 设置多维数组的内容
	 * 
	 * @param	string $key 数组key,如果多维key则使用":"分隔开
	 * @param	mixed $val  设置的数值
	 * @return	boolean
	 */
	protected function _set($key, $val){
		$tmp = & $this->_session;
		if($key==''){
			$tmp=$val;
		}else{
			$vKeys=explode(':', $key);
			for ($i = 0; $i < count($vKeys); $i++) {
				if($i==count($vKeys)-1){
					//终端节点,更新
					$tmp[$vKeys[$i]]=$val;
				}else{
					//遍历
					if(!isset($tmp[$vKeys[$i]])) return false;;
					$tmp=& $tmp[$vKeys[$i]];
				}
			}
		}
		return true;
	}
	
	/**
	 * 获取session值
	 * 
	 * @param	string $key 键值
	 * @return	mixed 数值
	 */
	function get($key){
		return $this->_get($this->_session, $key);
	}
	
	/**
	 * 设置session值。可以链式调用
	 * 
	 * @param	string $key 键值
	 * @param	string $val 数值
	 * @return	$this
	 */
	function set($key, $val){
		$this->_Set($key, $val);
		return $this;
	}
	
	/**
	 * 销毁会话
	 * @return	boolean
	 */
	function destroy(){
		return session_destroy();
	}
}
?>