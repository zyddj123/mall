<?php

//非法访问
if (!defined('CO_BASE_CHECK')) {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    exit;
}

/**
 * Goods首页_控制器.
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
include_once realpath(__DIR__.'/../').'/core/SELLER_Session.php';
include_once realpath(__DIR__.'/../').'/core/common.php';
// ------------------------------------------------------------------------
class GoodsController extends CO_Controller
{

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
        $this->goods_index();
    }

    //加载商品列表页
    public function goods_index()
    {
        //导航定位
        $this->session->set('left_menu_action', 'goods/goods_index');
        $this->render('goods/index');
    }

    //ajax 获取商品列表
    public function ajax_goods_index()
    {
        $get = $this->input->get();
        $where = array();
        $a = new ViewGoods($this->getDb());
        echo json_encode($a->datatable($get, $where));
    }

    //加载添加商品页
    public function goods_add()
    {
        //导航定位
        $this->session->set('left_menu_action', 'goods/goods_add');
        $unit = new Unit($this->getDb());
        $brand = new Brand($this->getDb());
        $attr_key = new AttrsKey($this->getDb());
        $category = new Category($this->getDb());
        $data['brand'] = $brand->select_or("(`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        $data['unit'] = $unit->select_or("(`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        $data['attr_key'] = $attr_key->select_or("(`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        $data['category'] = $category->select_or("(`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        $this->render('goods/add', $data);
    }

    public function ajax_get_attr_value()
    {
        $attr_key_id = $this->input->post('attr_id');
        $attr_value = new AttrsValue($this->getDb());
        $data = $attr_value->select_or("`attr_key_id` = {$attr_key_id} AND (`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        echo json_encode($data);
    }

    public function ajax_get_templet_key()
    {
        $category_id = $this->input->post('category_id');
        $tmp_key = new TempletKey($this->getDb());
        $data = $tmp_key->select_or("`category_id` = {$category_id} AND (`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1 ORDER BY `sort` DESC");
        echo json_encode($data);
    }

    public function ajax_goods_add()
    {
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
        // 	string(157) "[{"attr_value_id":"1,5","attr_value_arr":"银色,32G","attr_key_id_arr":["1","2"],"attr_key_name_arr":["颜色","内存"],"stock":"12","price":"4334"},{"attr_value_id":"1,6","attr_value_arr":"银色,64G","attr_key_id_arr":["1","2"],"attr_key_name_arr":["颜色","内存"],"stock":"12","price":"4334"},{"attr_value_id":"1,7","attr_value_arr":"银色,128G","attr_key_id_arr":["1","2"],"attr_key_name_arr":["颜色","内存"],"stock":"12","price":"4334"}]"
        // 	["goods_tmp"]=>
        // 	string(249) "[{"tmp_value_id":"1","tmp_value":"ssdf"},{"tmp_value_id":"4","tmp_value":"gds"},{"tmp_value_id":"5","tmp_value":"jdf"},{"tmp_value_id":"11","tmp_value":"dsdgfgfs"},{"tmp_value_id":"2","tmp_value":"dfgdsg"},{"tmp_value_id":"6","tmp_value":"hdfghdf"}]"
        // }
        try {
            $db = $this->getDb();
            $goods_data = array();
            $goods_data['goods_name'] = $this->input->post('goods_name');
            $goods_data['brand_id'] = $this->input->post('goods_brand');
            $goods_data['goods_unit'] = $this->input->post('goods_unit');
            $goods_data['goods_category'] = $this->input->post('goods_category');
            $goods_data['is_on_sale'] = $this->input->post('is_on_sale');
            $goods_data['goods_brief'] = $this->input->post('goods_brief');
            $goods_data['goods_desc'] = $this->input->post('goods_desc');
            $goods_data['store_id'] = $_SESSION['seller']['id'];
            $goodsObj = new Goods($this->getDb());
            $goodsSkuObj = new GoodsSku($this->getDb());
            $fkAttrSkuObj = new FkAttrSku($this->getDb());
            $templetValue = new TempletValue($this->getDb());
            //添加事务起始
            $db->transStart();
            $goods_id = $goodsObj->add($goods_data);
            // $goods_id=100;
            if ($goods_id) {
                $goods_sku = json_decode($_POST['goods_sku']);
                // var_dump($goods_sku);
                foreach ($goods_sku as $key => $value) {
                    $arr = array();
                    $arr['goods_id'] = $goods_id;
                    $arr['stock'] = $value->stock;
                    $arr['price'] = $value->price;
                    $arr['store_id'] = $_SESSION['seller']['id'];
                    $base_img= $value->img;
                    $arr['attr_value_id'] = $value->attr_value_id;
                    $attr_value_arr = $value->attr_value_arr;
                    $attr_key_id_arr_tmp = $value->attr_key_id_arr;
                    $attr_key_name_arr_tmp = $value->attr_key_name_arr;
                    $arr['goods_img'] = ('' != $base_img)?CO_Utils::base64_to_image_save($base_img,SellerConfig::UPLOAD_GOODS.$_SESSION['seller']['id']):'';
                    // var_dump($arr);
                    $sku_id = $goodsSkuObj->add($arr);
                    // $sku_id = 56;
                    $attr_value_id_tmp = explode(",",$arr['attr_value_id']); //array(0 =>'1' ,1 => '6')
                    $attr_value_tmp = explode(",",$attr_value_arr);  //array(0 =>'银色' ,1 => '64G')
                    foreach ($attr_value_id_tmp as $k => $v) {
                        $fk_attr_sku = array(
                            'goods_id'=>$goods_id,
                            'sku_id'=>$sku_id,
                            'attrs_key_id'=>$attr_key_id_arr_tmp[$k],
                            'attrs_key_name'=>$attr_key_name_arr_tmp[$k],
                            'attrs_value_id'=>$v,
                            'attrs_value'=>$attr_value_tmp[$k]
                        );
                       $fkAttrSkuObj->add($fk_attr_sku);
                    }
                }
                $goods_tmp = json_decode($_POST['goods_tmp']);
                foreach ($goods_tmp as $key => $value) {
                    $arr = array();
                    $arr['goods_id'] = $goods_id;
                    $arr['tmp_key_id'] = $value->tmp_value_id;
                    $arr['value'] = $value->tmp_value;
                    $arr['store_id'] = $_SESSION['seller']['id'];
                    $templetValue->add($arr);
                }
            } else {
                echo false;
            }
            //事务结束
            $flag = $db->transFinish();
            echo ($flag) ? true : false;
        } catch (Exception $e) {
        }
    }

    public function getThemesUrl()
    {
        return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
    }
}
