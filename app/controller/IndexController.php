<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

/**
 * app首页_控制器
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
class IndexController extends CO_Controller{
	
	protected $index_model;
	
	/**
	 * 控制器初始化
	 */
	protected function _init(){
		//mw会话管理包
		// $this->session=new APP_Session();
		//检验登录状态
		// checkonline($_SESSION['seller']['id']);
		// $this->index_model = $this->GetModel('Index');
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
		$id = $this->input->get('id');
		$db = $this->getDb();
		$goods = $db->getRow("select * from " .AppConfig::GOODS ." where id = ?",array($id));
		$data = $db->getAll("select fk_as.*,sku.* from " .AppConfig::GOODS_SKU ." AS sku, ".AppConfig::FK_ATTR_SKU." AS fk_as where sku.goods_id = ? and sku.id = fk_as.sku_id",array($id));
		if($goods){
			$this->render('goods/detail',array('sku'=>json_encode($data),'goods'=>$goods));
		}else{
			$this->render('404');
		}
	}

	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
}
?>