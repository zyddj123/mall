<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

/**
 * seller登录_控制器
 *
 * @package
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 * @link
 * @since				Version 1.19
 */
include_once realpath(__DIR__.'/../').'/core/SELLER_Session.php';
include_once realpath(__DIR__.'/../').'/core/common.php';
// ------------------------------------------------------------------------
class LoginController extends CO_Controller{
	
	protected $_uid;				//登录用户id
	protected $_bln_login_auth_code=false;			//登录是否需要认证码
	
	/**
	 * 控制器初始化
	 */
	protected function _init(){
		//mw会话管理包
		$this->session=new SELLER_Session();
		
		//加载语言包
		$this->GetLang('sys')->GetLang('user')->GetLang('login');
		
		// 是否需要验证码
		$cfg_login_auth_code=$this->config->get('login_auth_code');
		$this->_bln_login_auth_code=($cfg_login_auth_code=='1')?true:false;
	}
	
	/**
	 * 默认程序入口
	 */
	function run(){	
		// echo realpath(__DIR__.'/../').'/core/SELLER_Session.php';
		$this->Render(
			'login',
			array(
				'cfg_login_auth_code'=>$this->_bln_login_auth_code
				)
			);
	}

	/**
	 * 登录
	 */
	function login(){
		$seller_name = $this->input->post('uid');
		$seller_pwd = $this->input->post('password');
		$chk = $this->_checkUserPwd($seller_name,$seller_pwd);
		// var_dump($chk);
		//验证码
		if($this->_bln_login_auth_code && strtolower($this->input->post('auth_code'))!=strtolower($this->session->Get('login_auth_code'))){
			$this->_failure();
		}else if($chk){
			//成功
			$this->session->set('id',$chk['id']);
			$this->session->set('seller_name',$chk['seller_name']);
			$this->session->set('seller_pwd',$chk['seller_pwd']);
			$this->session->set('seller_sex',$chk['seller_sex']);
			$this->session->set('seller_phone',$chk['seller_phone']);
			$this->session->set('seller_img',$chk['seller_img']);
			$this->session->set('seller_mail',$chk['seller_mail']);
			$this->session->set('seller_status',$chk['seller_status']);
			// 定向到入口页面
			header('location:/Index');
			//清除SESSION中的auth_code
			if($this->_bln_login_auth_code) $this->session->Set('login_auth_code', '');
		}else{
			$this->_failure();
		}
	}

	function logout(){
		$this->session->Destroy();
		self::login();
	}
	
	/**
	 * 生成验证码,并返回图片
	 */
	function auth_code(){
		$dynimic_code = new DynamicAuthCode();
		$dynimic_code->generate();
		$img=$dynimic_code->image_resource;
		//将验证码写入当前请求的Session中
		$this->session->Set('login_auth_code', $dynimic_code->code);
		//以PNG格式将图像输出到浏览器或文件;
		Header("Content-type: image/png");
		ImagePNG($img);
		unset($dynimic_code);
	}

	/**
	 * 校验用户登录密码及用户状态
	 * 用户名和密码不一致则返回-1
	 * 用户被冻结返回0
	 * @param	uid string 用户id
	 * @param	pwd string 密码
	 * @return	int
	 */
	protected function _checkUserPwd($uid="", $pwd=""){
		if($uid=="" || $pwd=="") return 0;
		try {
			$db = $this->getDb();
		} catch (Exception $e) {
			return 0;
		}
		$data = $db->SelectOne(SellerConfig::SELLER,array('seller_name'=>$uid, 'seller_pwd'=>md5($pwd)));
		if(!$data){
			return 0;
		}else{
			if($data['seller_status']=='0') return 0;
			else return $data;
		}
	}
	

	/**
	 * 用户名或密码不存在,登录失败
	 */
	protected function _failure(){
		//转至登录页面
		header('location:/login/');
		exit;
	}
	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
}
?>