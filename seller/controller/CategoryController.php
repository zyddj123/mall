<?php

//非法访问
if (!defined('CO_BASE_CHECK')) {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    exit;
}

/**
 * seller类别_控制器.
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
class CategoryController extends CO_Controller
{
    /**
     * 控制器初始化.
     */
    protected function _init()
    {
        //会话管理包
        $this->session = new SELLER_Session();
        //检验登录状态
        checkonline($_SESSION['seller']['id']);
        //加载语言包
        $this->GetLang('sys');
    }

    /**
     * 默认程序入口.
     */
    public function run()
    {
        $this->category();
    }

    //商品类别管理
    public function category()
    {
        //导航定位
        $this->session->set('left_menu_action', 'category/category');
        $this->render('category/category');
    }

    //ajax获取商品类别
    public function ajax_goods_category()
    {
        $get = $this->input->get();
        $where = array();
        $a = new Category($this->getDb());
        echo json_encode($a->datatable($get, $where));
    }

    //ajax add category
    public function ajax_add_category()
    {
        $input_category_name = $this->input->post('input_category_name');
        $category = new Category($this->getDb());
        echo $category->add(array('category_name'=>$input_category_name,'store_id'=>$_SESSION['seller']['id']));
    }

    //ajax delete category
    public function ajax_del_category()
    {
        $category_id = $this->input->post('category_id');
        $data['status'] = 0;
        $category = new Category($this->getDb());
        echo $category->update(array('id'=>$category_id), $data);
    }

    //ajax获取该用户下的商品类别下所有的商品属性模版键名称  分页
    public function ajax_category_get_templet_key()
    {
        $category_id = $this->input->post('category_id');
        $start = $this->input->post('start');
        $ppc = $this->input->post('ppc');
        $viewCategoryTemKey = new ViewCategoryTemKey($this->getDb());
        $data = $viewCategoryTemKey->select_or("`category_id` = {$category_id} AND (`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1 ORDER BY `sort` DESC LIMIT {$start},{$ppc}");
        echo json_encode($data);
    }

    //ajax获取该用户下的商品类别下所有的商品属性模版数量  分页
    public function ajax_category_get_templet_key_count()
    {
        $category_id = $this->input->post('category_id');
        $category = new TempletKey($this->getDb());
        $data = $category->select_or("`category_id` = {$category_id} AND (`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        echo count($data);
    }

    //ajax add tmp_key
    public function ajax_add_tmp_key()
    {
        $category_id = $this->input->post('category_id');
        $input_attr_name = $this->input->post('input_attr_name');
        $input_attr_sort = $this->input->post('input_attr_sort');
        $data = array(
            'category_id' => $category_id,
            'tmp_key' => $input_attr_name,
            'sort' => $input_attr_sort,
            'store_id' => $_SESSION['seller']['id'],
        );
        $templetKey = new TempletKey($this->getDb());
        echo $templetKey->add($data);
    }

    //ajax修改商品属性模版键名称及排序
    public function ajax_edit_templet_key()
    {
        $tmp_key_id = $this->input->post('tmp_key_id');
        $tmp_key = $this->input->post('tmp_key');
        $sort = $this->input->post('sort');
        $data = array('tmp_key' => $tmp_key, 'sort' => $sort);
        $templetKey = new TempletKey($this->getDb());
        echo $templetKey->update(array('id'=>$tmp_key_id), $data);
    }

    //ajax delete attr_key
    public function ajax_del_attr_key()
    {
        $attr_id = $this->input->post('attr_id');
        $data['status'] = 0;
        $templetKey = new TempletKey($this->getDb());
        echo $templetKey->update(array('id'=>$attr_id), $data);
    }

    public function getThemesUrl()
    {
        return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
    }
}
