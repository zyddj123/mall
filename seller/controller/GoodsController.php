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

	function ajax_goods_add(){
		// var_dump($_POST);
		// array(8) {
		// 	["goods_name"]=>
		// 	string(12) "耐克男鞋"
		// 	["goods_brand"]=>
		// 	string(1) "2"
		// 	["is_on_sale"]=>
		// 	string(1) "1"
		// 	["goods_unit"]=>
		// 	string(1) "1"
		// 	["goods_brief"]=>
		// 	string(5) "qqqqq"
		// 	["goods_desc"]=>
		// 	string(26) "qqqqqqqqqqqqqqqqqqqqqqqqqq"
		// 	["goods_sku"]=>
		// 	string(157) "[{"attr_value_id":"1,5","stock":"12","price":"4334"},{"attr_value_id":"1,6","stock":"12","price":"4334"},{"attr_value_id":"1,7","stock":"12","price":"4334"}]"
		// 	["goods_tmp"]=>
		// 	string(249) "[{"tmp_value_id":"1","tmp_value":"ssdf"},{"tmp_value_id":"4","tmp_value":"gds"},{"tmp_value_id":"5","tmp_value":"jdf"},{"tmp_value_id":"11","tmp_value":"dsdgfgfs"},{"tmp_value_id":"2","tmp_value":"dfgdsg"},{"tmp_value_id":"6","tmp_value":"hdfghdf"}]"
		// }
		$goods_data = array();
		$goods_data['goods_name'] = $this->input->post('goods_name');
		$goods_data['brand_id'] = $this->input->post('goods_brand');
		$goods_data['goods_unit'] = $this->input->post('goods_unit');
		$goods_data['goods_category'] = $this->input->post('goods_category');
		$goods_data['is_on_sale'] = $this->input->post('is_on_sale');
		$goods_data['goods_brief'] = $this->input->post('goods_brief');
		$goods_data['goods_desc'] = $this->input->post('goods_desc');

		$goods_sku = json_decode($_POST['goods_sku']);
		$sku_data = array();
		foreach ($goods_sku as $key => $value) {
			$arr = array();
			$arr['attr_value_id'] = $value->attr_value_id;
			$arr['stock'] = $value->stock;
			$arr['price'] = $value->price;
			array_push($sku_data, $arr);
		}
		// array(2) {
		//   [0]=>
		//   object(stdClass)#23 (3) {
		//     ["attr_value_id"]=>
		//     string(3) "1,5"
		//     ["stock"]=>
		//     string(2) "12"
		//     ["price"]=>
		//     string(4) "4334"
		//   }
		//   [1]=>
		//   object(stdClass)#24 (3) {
		//     ["attr_value_id"]=>
		//     string(3) "1,6"
		//     ["stock"]=>
		//     string(2) "12"
		//     ["price"]=>
		//     string(4) "4334"
		//   }
		// }
		$goods_tmp = json_decode($_POST['goods_tmp']);
		$tmp_data = array();
		foreach ($goods_tmp as $key => $value) {
			$arr = array();
			$arr['tmp_key_id'] = $value->tmp_value_id;
			$arr['value'] = $value->tmp_value;
			array_push($tmp_data, $arr);
		}
		// array(2) {
		//   [0]=>
		//   object(stdClass)#26 (2) {
		//     ["tmp_value_id"]=>
		//     string(1) "1"
		//     ["tmp_value"]=>
		//     string(4) "ssdf"
		//   }
		//   [1]=>
		//   object(stdClass)#27 (2) {
		//     ["tmp_value_id"]=>
		//     string(1) "4"
		//     ["tmp_value"]=>
		//     string(3) "gds"
		//   }
		// }

		var_dump($sku_data);
		var_dump($tmp_data);
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
			"and"=>array("status"=>1)
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
		$data = array("tmp_key"=>$tmp_key,"sort"=>$sort);
		echo $this->goods_model->edit_templet_key($tmp_key_id,$data);
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
		$data['status'] = 0;
		echo $this->goods_model->edit_category($category_id,$data);
	}

	//ajax delete attr_key
	function ajax_del_attr_key(){
		$attr_id = $this->input->post('attr_id');
		$data['status'] = 0;
		echo $this->goods_model->edit_templet_key($attr_id,$data);
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
			"and"=>array("status"=>1)
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

	//ajax 添加或修改商品类别
	function ajax_add_edit_brand(){
		$data = $this->_post_info();
		if(!is_null($data['id'])&&$data['id']!=''){
			//编辑操作
			$pass = $this->goods_model->get_brand_by_id($data['id']);//获取原始数据
			if($_FILES['brand_logo']['name']!=''){
				$path=SellerConfig::BRAND_LOGO;
				$upload=upload_img($path, $_FILES['brand_logo']['name'],$_FILES['brand_logo']['size'],$_FILES['brand_logo']['tmp_name']);
				if($upload){
					$data['brand_logo']=$upload;
					if($pass['brand_logo']!=''){
						if(@file_exists(ROOT_PATH.'/'.$path . $pass['brand_logo'])){
							@unlink(ROOT_PATH.'/'.$path . $pass['brand_logo']);
						}
					} 
				}
			}else{
				$data['brand_logo']=$pass['brand_logo'];
			}
			$res = $this->goods_model->edit_brand_by_id($data['id'],$data);
			$mes = $res?true:false;
			echo json_encode(array('handle'=>'修改','mes'=>$mes));
		}else{
			//添加操作
			if($_FILES['brand_logo']['name']!=''){
				$path=SellerConfig::BRAND_LOGO;
				$upload=upload_img($path, $_FILES['brand_logo']['name'],$_FILES['brand_logo']['size'],$_FILES['brand_logo']['tmp_name']);
				$data['brand_logo'] = ($upload)?$upload:'';
			}else{
				$data['brand_logo'] = '';
			}
			$data['store_id'] = $_SESSION['seller']['id'];
			$res = $this->goods_model->add_brand_by_id($data);
			$mes = $res?true:false;
			echo json_encode(array('handle'=>'添加','mes'=>$mes));
		}
	}

	//ajax delete brand 其实并不是真的删除 是修改brand表的status项为0
	function ajax_del_brand(){
		$brand_id = $this->input->post('brand_id');
		$data['status'] = 0;
		echo $this->goods_model->edit_brand_by_id($brand_id,$data);
	}

	/**
	 * 获取提交数据
	 * @return	array $_post来的数据
	 */
	protected function _post_info(){
		$data=array();
		$data['id']=$this->input->post('brand_id');
		if(!is_null($this->input->post('brand_name'))&&$this->input->post('brand_name')!='')	 $data['brand_name']=$this->input->post('brand_name');
		if(!is_null($this->input->post('site_url'))&&$this->input->post('site_url')!='')	 $data['site_url']=$this->input->post('site_url');
		if(!is_null($this->input->post('brand_desc'))&&$this->input->post('brand_desc')!='')	 $data['brand_desc']=$this->input->post('brand_desc');
		return $data;
	}

	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
}
?>