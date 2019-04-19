<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

/**
 * seller运费系统_控制器
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
class FreightController extends CO_Controller{
	
	/**
     * 控制器初始化.
     */
    protected function _init()
    {
        //mw会话管理包
        $this->session = new SELLER_Session();
        //检验登录状态
        @checkonline($_SESSION['seller']['id']);
        //加载语言包
        $this->GetLang('sys');
    }

    /**
     * 默认程序入口.
     */
    public function run()
    {
        $this->freight_index();
    }

	public function freight_index(){
        //导航定位
        $this->session->set('left_menu_action', 'freight/freight_index');
		$this->render('freight/index');
	}

    public function freight_add(){
        //导航定位
        $this->session->set('left_menu_action', 'freight/freight_add');
		$this->render('freight/add');
	}

    public function freight_add_ajax(){
        var_dump($_POST);
    }

	public function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
}
?>