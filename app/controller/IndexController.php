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
		$this->render('goods/index');
	}

	//根据商品id获取商品详细信息并展示商品
	function good(){
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

	function test_ajax_data(){
		if($this->input->post('p')){
			$p=$this->input->post('p');// 当前页码数 默认第1页
		}else{
			$p=1;
		}
		$ppc=2;// 每页显示多少条
		$start=($p-1)*$ppc;  //第几条开始查询
		$arrRet=array();
		$data = $this->user_page_data($start,$ppc);
		$count = $this->uesr_page_data_count();
		$arrRet['data']=$data;//数据
		$arrRet['p']=$p;//当前页
		$arrRet['ppc']=$ppc;	//每页显示数
		$arrRet['all']=$count;//总条数
		$arrRet['entries']=ceil($count/$ppc);//总页数
		echo json_encode($arrRet);
	}

	function user_page_data($start,$ppc){
		// $res = $this->db->Query("select * from user order by id DESC limit ".$start.",".$ppc);
		// $res = is_array($res)?$res:array();
		// return $res;
		$db = $this->getDb();
		$sql = "select * from mall_brand order by id DESC limit ?,?";
		$query = $db->GetAll($sql,array($start,$ppc));
		return $query;
	}
	function uesr_page_data_count(){
		// return $this->db->Query("select count('id') AS count from user");
		$db = $this->getDb();
		$sql = "select * from mall_brand";
		$query = $db->GetAll($sql);
		return count($query);
	}

	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
}
?>