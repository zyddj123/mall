<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

/**
 * app登录_控制器
 *
 * @package
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 * @link
 * @since				Version 1.19
 */
include_once realpath(__DIR__.'/../').'/core/APP_Session.php';
include_once realpath(__DIR__.'/../').'/core/common.php';
// ------------------------------------------------------------------------
class LoginController extends CO_Controller{
	
	/**
	 * 控制器初始化
	 */
	protected function _init(){
		//mw会话管理包
		$this->session=new APP_Session();
		//检验登录状态
		// checkonline($_SESSION['app']['id']);
		//加载语言包
		// $this->GetLang('sys')->GetLang('index');
	}
	
	/**
	 * 默认程序入口
	 */
	function run(){	
		$this->index();
	}

	function index(){
		$this->render('login');
	}

    function login(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$app = new App($this->getDb());
		$data = $app->getInfo(array('app_name'=>$username));
		if($data['app_pwd']==md5($password)){
			if($data['status']==1){
				$this->session->set('id',$data['id']);
				$this->session->set('app_name',$data['app_name']);
				$this->session->set('app_pwd',$data['app_pwd']);
				$this->session->set('app_img',$data['app_img']);
				echo "1"; //登录成功
			}else{
				echo "3"; //用户已冻结
			}
		}else{
			echo "2";     //用户名或者密码错误
		}
    }

	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
}
?>