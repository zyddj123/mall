<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

/**
 * Goods首页_控制器
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
class GoodsController extends CO_Controller{
	
	protected $goods_model;
	
	/**
	 * 控制器初始化
	 */
	protected function _init(){
		//mw会话管理包
		$this->session=new SELLER_Session();
		//检验登录状态
		@checkonline($_SESSION['seller']['id']);
		$this->goods_model = $this->GetModel('Goods');
		//加载语言包
		$this->GetLang('sys');
	}
	
	/**
	 * 默认程序入口
	 */
	function run(){	
		$this->goods_index();
	}
	function goods_add(){
		//导航定位
		$this->session->set('left_menu_action', 'goods/goods_add');
		$data['brand'] = $this->goods_model->get_brands($_SESSION['seller']['id']);
		$data['unit'] = $this->goods_model->get_units($_SESSION['seller']['id']);
		$data['attr_key'] = $this->goods_model->get_attrs_key($_SESSION['seller']['id']);
		$data['category'] = $this->goods_model->get_categorys($_SESSION['seller']['id']);
		$this->render('goods/add',$data);
	}

	function ajax_get_attr_value(){
		$attr_key_id = $this->input->post('attr_id');
		$data = $this->goods_model->get_attrs_value($_SESSION['seller']['id'],$attr_key_id);
		echo json_encode($data);
	}

	function ajax_get_templet_key(){
		$category_id = $this->input->post('category_id');
		$data = $this->goods_model->get_templet_key($_SESSION['seller']['id'],$category_id);
		echo json_encode($data);
	}

	function goods_index(){
		//导航定位
		$this->session->set('left_menu_action', 'goods/goods_index');
		$this->render('goods/index');
	}

	/**************************************商品类别管理*****************************************/

	//商品类别管理
	function goods_category(){
		//导航定位
		$this->session->set('left_menu_action', 'goods/goods_category');
		$this->render('goods/category');
	}

	//ajax获取商品类别
	function ajax_goods_category(){
		$get   = $this->input->get();
		$info  = array();
		$where = array(
			"or"=>array("id","category_name"),
			);
		$select = array(
			"id",
			'category_name',
			'store_id'
			);
		$order = array(
			"id",	//相当于占位，为了保证序号列设置为可排序而发生的错误，如不设置则排序错乱，设置为表里不存在字段则取不到相应数据
			"id",
			'category_name',
			);
		$a = new DataTable($this->getDb(),$get, array("select" => $select, "sum" => "id", "table" => SellerConfig::CATEGORY, "order" => $order, "where" => $where),'');
		// var_dump($a->output());
		echo json_encode($a->output());
	}

	//ajax获取该用户下的商品类别下所有的商品属性模版键名称  分页
	function ajax_category_get_templet_key(){
		$category_id   = $this->input->post('category_id');
		$start = $this->input->post('start');
		$ppc = $this->input->post('ppc');
		$data = $this->goods_model->category_get_templet_key($_SESSION['seller']['id'],$category_id,$start,$ppc);
		echo json_encode($data);
	}

	//ajax获取该用户下的商品类别下所有的商品属性模版数量  分页
	function ajax_category_get_templet_key_count(){
		$category_id = $this->input->post('category_id');
		$data = $this->goods_model->get_templet_key($_SESSION['seller']['id'],$category_id);
		echo count($data);
	}

	//ajax修改商品属性模版键名称及排序
	function ajax_edit_templet_key(){
		$tmp_key_id = $this->input->post('tmp_key_id');
		$tmp_key = $this->input->post('tmp_key');
		$sort = $this->input->post('sort');
		echo $this->goods_model->edit_templet_key($tmp_key_id,$tmp_key,$sort);
	}

	//ajax add category
	function ajax_add_category(){
		$input_category_name = $this->input->post('input_category_name');
		echo $this->goods_model->add_category($input_category_name,$_SESSION['seller']['id']);
	}
	//ajax add tmp_key
	function ajax_add_tmp_key(){
		$category_id = $this->input->post('category_id');
		$input_attr_name = $this->input->post('input_attr_name');
		$input_attr_sort = $this->input->post('input_attr_sort');
		$data = array(
			'category_id'=>$category_id,
			'tmp_key'=>$input_attr_name,
			'sort'=>$input_attr_sort,
			'store_id'=>$_SESSION['seller']['id']
		);
		echo $this->goods_model->add_tmp_key($data);
	}

	//ajax delete category
	function ajax_del_category(){
		$category_id = $this->input->post('category_id');
		echo $this->goods_model->del_category($category_id);
	}

	//ajax delete attr_key
	function ajax_del_attr_key(){
		$attr_id = $this->input->post('attr_id');
		echo $this->goods_model->del_attr_key($attr_id);
	}

	/**************************************商品品牌管理*****************************************/

	//商品品牌管理
	function goods_brand(){
		//导航定位
		$this->session->set('left_menu_action', 'goods/goods_brand');
		$this->render('goods/brand');
	}

	//ajax获取商品类别
	function ajax_goods_brand(){
		$get   = $this->input->get();
		$info  = array();
		$where = array(
			"or"=>array("id","brand_name","site_url"),
			);
		$select = array(
			"id",
			'brand_name',
			'brand_logo',
			'brand_desc',
			'site_url',
			'store_id'
			);
		$order = array(
			"id",	//相当于占位，为了保证序号列设置为可排序而发生的错误，如不设置则排序错乱，设置为表里不存在字段则取不到相应数据
			"id",
			'brand_name',
			'site_url'
			);
		$a = new DataTable($this->getDb(),$get, array("select" => $select, "sum" => "id", "table" => SellerConfig::BRAND, "order" => $order, "where" => $where),'');
		// var_dump($a->output());
		echo json_encode($a->output());
	}

	//ajax 添加商品类别
	function ajax_add_brand(){
		$data = $this->input->post('brand_name');
		var_dump($_FILES);
	}

	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
}
?>