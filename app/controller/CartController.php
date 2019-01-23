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
class CartController extends CO_Controller{
	
	protected $index_model;
	
	/**
	 * 控制器初始化
	 */
	protected function _init(){
		//mw会话管理包
		$this->session=new APP_Session();
		//检验登录状态
		checkonline($_SESSION['app']['id']);
	}
	
	/**
	 * 默认程序入口
	 */
	function run(){	
		$this->cart();
	}

    //加载购物车页面
	function cart(){
        $cartObj = new Cart($this->getDb());
        $cart = $cartObj->select(array('app_id'=>$_SESSION['app']['id']));
        if($cart){
            $goodsObj = new Goods($this->getDb());
            $fkAttrSkuObj = new FkAttrSku($this->getDb());
            $goodsSkuObj = new GoodsSku($this->getDb());
            foreach ($cart as $key => $value) {
                $goods = $goodsObj->getInfo($value['goods_id']);
                $cart[$key]['goods'] = $goods;
                $goodsSku = $goodsSkuObj->getInfo($value['sku_id']);
                $cart[$key]['goods_sku'] = $goodsSku;
                $fkAttrSku = $fkAttrSkuObj->select(array('goods_id'=>$value['goods_id'],'sku_id'=>$value['sku_id']));
                $attrs_value = array();
                foreach ($fkAttrSku as $k => $v) {
                    array_push($attrs_value,$v['attrs_value']);
                }
                $cart[$key]['attrs_value'] = $attrs_value;
            }
        }
		$this->render('goods/cart',array('cart'=>json_encode($cart)));
	}

	//购买商品
	// function ajax_buy_goods(){
	// 	$sku_id = $this->input->post('sku_id');
	// 	$goods_id = $this->input->post('goods_id');
	// 	$quantity = $this->input->post('quantity');
	// 	$goodsSkuObj = new GoodsSku($this->getDb());
	// 	$res = $goodsSkuObj->select(array('id'=>$sku_id,'goods_id'=>$goods_id));
	// 	$ret = array(
	// 		'mes'=>'',
	// 		'sta'=>0
	// 	);
	// 	if($res){
	// 		if($res[0]['stock']>0){
	// 			$ret['mes'] = '成功';
	// 			$ret['sta'] = 1;
	// 		}else{
	// 			$ret['mes'] = '该商品规格库存为0';
	// 			$ret['sta'] = 2;
	// 		}
	// 	}else{
	// 		$ret['mes'] = '不存在该商品属性';
	// 		$ret['sta'] = 0;
	// 	}
	// 	echo json_encode($ret);
	// }

	//添加购物车
	function ajax_insert_cart(){
		$sku_id = $this->input->post('sku_id');
		$goods_id = $this->input->post('goods_id');
		$quantity = $this->input->post('quantity');
		$app_id = $_SESSION['app']['id'];
		$store_id = $this->input->post('store_id');
		$goodsSkuObj = new GoodsSku($this->getDb());
		$res = $goodsSkuObj->select(array('id'=>$sku_id,'goods_id'=>$goods_id));
		$ret = array(
			'mes'=>'',
			'sta'=>0
		);
		if($res){
			if($res[0]['stock']>0&&$res[0]['stock']>=$quantity){
				$cartObj = new Cart($this->getDb());
				$cart = $cartObj->select(array('goods_id'=>$goods_id,'sku_id'=>$sku_id,'app_id'=>$app_id,'add_price'=>$res[0]['price']));
                if($cart){
                    //如果购物车中 有同样sku的商品 则只update quantity
                    $u = $cartObj->update(array('goods_id'=>$goods_id,'sku_id'=>$sku_id,'add_price'=>$res[0]['price'],'app_id'=>$app_id),array('quantity'=>$quantity+$cart[0]['quantity']));
                    if($u){
                        //update success
                        $ret['mes'] = '成功';
				        $ret['sta'] = 1;
                    }else{
                        //update failed
                        $ret['mes'] = '添加购物车失败';
				        $ret['sta'] = 3;
                    }
                }else{
                    //购物车中没有同样sku的商品  则插入一条
                    $i = $cartObj->add(array('goods_id'=>$goods_id,'sku_id'=>$sku_id,'quantity'=>$quantity,'add_price'=>$res[0]['price'],'app_id'=>$app_id,'store_id'=>$store_id,'create_time'=>date('Y-m-d H:i:s')));
                    if($i){
                        //insert success
                        $ret['mes'] = '成功';
				        $ret['sta'] = 1;
                    }else{
                        //insert failed
                        $ret['mes'] = '添加购物车失败';
				        $ret['sta'] = 3;
                    }
                }
			}else{
				$ret['mes'] = '该商品规格库存为0';
				$ret['sta'] = 2;
			}
		}else{
			$ret['mes'] = '不存在该商品属性';
			$ret['sta'] = 0;
		}
		echo json_encode($ret);
	}

	//删除购物车中的一件商品
	function ajax_delete_cart(){
		$id = $this->input->post('cart_id');
		$cartObj = new Cart($this->getDb());
		$sta = $cartObj->delete(array('id'=>$id));
		echo json_encode($sta);
	}

	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
}
?>