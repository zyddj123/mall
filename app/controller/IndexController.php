<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

use Cache\Redis;

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
		$this->session=new APP_Session();
		//检验登录状态
		// checkonline($_SESSION['app']['id']);
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
		$goodsObj = new Goods($this->getDb());
		$viewTempletKeyValueObj = new ViewTempletKeyValue($this->getDb());
		$fkAttrSkuObj = new FkAttrSku($this->getDb());
		$goodsSkuObj = new GoodsSku($this->getDb());
		$goods = $goodsObj->getInfo($id);
		$tmp = $viewTempletKeyValueObj->select(array('goods_id'=>$id,'status'=>1));
		$fk_attr_sku = $fkAttrSkuObj->select(array('goods_id'=>$id,'status'=>1));
		$sku = $goodsSkuObj->select(array('goods_id'=>$id,'status'=>1));
		if($goods){
			$this->render('goods/detail',array('sku'=>json_encode($sku),'fk_attr_sku'=>json_encode($fk_attr_sku),'goods'=>$goods,'tmp'=>$tmp));
		}else{
			$this->render('404');
		}
	}

	function ajax_goods(){
		$viewGoods = new ViewGoods($this->getDb());   //继承D_Model基类的子类对象
		// $name = $this->input->post('name'); //要搜索的字符串
		if($this->input->post('p')){
			$p=$this->input->post('p');// 当前页码数 默认第1页
		}else{
			$p=1;
		}
		$ppc=10;// 每页显示多少条
		$arrRet=array(); //返回给前台ajax的数组
		// $data['select'] = array('student.id','name','class_id','student.status','class_name','sex');
		$data['order'] = array('id'=>'DESC');
		// $data['where']['and'] = array('student.status'=>1,'class_id'=>array(1,2));
		// $data['where']['or'] = array('student.id','name');
		// $data['where']['or2'] = array('mm'=>1,'nn'=>array(1,2));
		// $data['search'] = $name;
		$data['page'] = $p;
		$data['ppc'] = $ppc;
		// $data['join'] = array('class'=>array('student.class_id','class.id'),'sex'=>array('student.sex_id','sex.id'));
		$data = $viewGoods->pagination($data);
		$count = $data['data']['count'];
		$arrRet['data']=$data['data']['data'];//数据
		$arrRet['p']=$p;//当前页
		$arrRet['ppc']=$ppc;    //每页显示数
		$arrRet['all']=$count;//总条数
		$arrRet['entries']=ceil($count/$ppc);//总页数
		echo json_encode($arrRet);
	}

	public function test()
	{
		$redis = new Redis();
		var_dump($redis);die;
	}


	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
}
?>