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
    protected $goods_model;

    /**
     * 控制器初始化.
     */
    protected function _init()
    {
        //mw会话管理包
        $this->session = new SELLER_Session();
        //检验登录状态
        @checkonline($_SESSION['seller']['id']);
        $this->goods_model = $this->GetModel('Goods');
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
        // $data['brand'] = $unit->select(array('store_id'=>$_SESSION['seller']['id']));
        $data['unit'] = $unit->select_or("(`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        // $data['attr_key'] = $this->goods_model->get_attrs_key($_SESSION['seller']['id']);
        // $data['category'] = $this->goods_model->get_categorys($_SESSION['seller']['id']);
        // $this->render('goods/add', $data);
        var_dump($data['unit']);
    }

    public function getThemesUrl()
    {
        return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
    }
}
