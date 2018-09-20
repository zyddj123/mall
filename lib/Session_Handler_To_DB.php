<?php
/**
 * 自定义会话管理
 *
 * 将会话SESSION数据存放在数据库中
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class Session_Handler_To_DB implements SessionHandlerInterface{
	
	/**
	 * 会话生命周期。单位秒
	 * 
	 * @var int
	 */
	protected $_lifetime = 7200;
	
	/**
	 * session table
	 * 
	 * @var string
	 */
	protected $_table='';

	/**
	 * 数据库连接
	 * 
	 * @var object
	 */
	protected $_db = null;
	
	/**
	 * 构造函数
	 * 
	 * @param	array $settings 配置参数[可选]
	 */
	function __construct($settings=array()){
		if(is_numeric($settings['lifetime'])) $this->_lifetime = $settings['lifetime'];
	}
	
	/**
	 * 设置数据库连接
	 * 
	 * @param 	object $co_db_link 数据库连接对象
	 * @return	$this
	 */
	public function setDb($co_db_link){
		$this->_db = $co_db_link;
		return $this;
	}
	
	/**
	 * SESSION打开
	 * 
	 * @param	string $save_path 保存路径
	 * @param	string $session_name 会话id
	 * @return	boolean 是否成功
	 */
	public function open($save_path, $session_name){
        return true;
    }
    
    /**
     * SESSION关闭
     * 
     * @return	boolean
     */
    public function close(){
    	return true;
    }
    
    /**
     * 读取SESSION信息并验证是否有效
     * 
     * @param	string $key session的key值
     * @return	mixed
     */
    public function read($key){
    	$current_time = time();
    	/* ------------------------------------------------------------------------------------------------------------------------------
    	 * 首先删除当前key下已经过期的session
    	* ------------------------------------------------------------------------------------------------------------------------------*/
    	//$db->Query('DELETE FROM '.$this->_table.' WHERE SESS_KEY=? AND EXPIRY_DATE<?', array($key, $current_time));
    	/* ------------------------------------------------------------------------------------------------------------------------------
    	 * 查询当前key下未超时的Session
    	* ------------------------------------------------------------------------------------------------------------------------------*/
    	$query = $this->_db->Query("SELECT SESS_VALUE FROM ".$this->_table.' WHERE SESS_KEY=? AND EXPIRY_DATE >=?', array($key, $current_time));
    	/* ------------------------------------------------------------------------------------------------------------------------------
    	 * 返回结果SESS_VALUE
    	* ------------------------------------------------------------------------------------------------------------------------------*/
    	if(is_array($query) && count($query)>0){
    		return $query[0]['SESS_VALUE'];
    	}else return false;
    }
    
    /**
     * 写入SESSION信息
     * 
     * @param	string $key session的key值
     * @param	string $val session数值
     * @return	boolean
     */
    public function write($key, $val){
    	//获取远程操作IP
    	$ip = bindec(decbin(ip2long($_SERVER['REMOTE_ADDR'])));
    	$current_time = time();
    	/* ------------------------------------------------------------------------------------------------------------------------------
    	 * 刷新过期时间，并插入session记录
    	* ------------------------------------------------------------------------------------------------------------------------------*/
    	$new_expriy = $current_time + $this->_lifetime;
    	if($this->_db->Select($this->_table, array('SESS_KEY' => $key), array('select'=>array(SESS_KEY))) === false){
    		$ins = $this->_db->Insert($this->_table, array(
    				"SESS_KEY"=>$key,
    				"SESS_VALUE"=>$val,
    				"EXPIRY_DATE"=>$new_expriy,
    				"LOGIN_IP"=>$ip
    		));
    	}else{
    		//如果session已经存在，只更新过期时间
    		$ins = $this->_db->Query('UPDATE '.$this->_table.' SET `EXPIRY_DATE`=?, `SESS_VALUE`=?, `LOGIN_IP`=? WHERE `SESS_KEY`=?', array($new_expriy, $val, $ip, $key));
    	}
    	return $ins===false?false:true;
    }
    
    /**
     * 删除Session信息
     * 
     * @param	string $key Session的key值
     * @return	boolean
     */
    public function destroy($key){
    	$this->_db->Delete($this->_table, array('SESS_KEY'=>$key));
    	return true;
    }
    
    /**
     * 回收超时SESSION信息
     * 
     * @param	int $maxlifetime 最大生命时长
     * @return	boolean
     */
    public function gc($maxlifetime){
    	$this->_db->Query('DELETE FROM '.$this->_table.' WHERE `EXPIRY_DATE`<?', array(time()));
    	return true;
    }
}
?>