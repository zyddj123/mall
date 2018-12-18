<?php

//非法访问
if (!defined('CO_BASE_CHECK')) {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    exit;
}

/**
 * seller规格_控制器.
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
class AttrController extends CO_Controller
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
        $this->attr();
    }

    //商品规格管理
    public function attr()
    {
        //导航定位
        $this->session->set('left_menu_action', 'attr/attr');
        $this->render('attr/attr');
    }

    //ajax获取商品规格
    public function ajax_goods_attr()
    {
        $get = $this->input->get();
        $where = array();
        $a = new AttrsKey($this->getDb());
        echo json_encode($a->datatable($get, $where));
    }

    //ajax add attr_key
    public function ajax_add_attr_key()
    {
        $input_attr_key_name = $this->input->post('input_attr_key_name');
        $attrsKey = new AttrsKey($this->getDb());
        echo $attrsKey->add(array('attr_key_name'=>$input_attr_key_name,'store_id'=>$_SESSION['seller']['id']));
    }

    //ajax delete attr_key
    public function ajax_del_attr_key()
    {
        $attr_key_id = $this->input->post('attr_key_id');
        $data['status'] = 0;
        $attrsKey = new AttrsKey($this->getDb());
        echo $attrsKey->update(array('id'=>$attr_key_id), $data);
    }

    //ajax获取该用户下的商品规格下所有的商品规格键名称  分页
    public function ajax_attr_key()
    {
        $attr_id = $this->input->post('attr_id');
        $start = $this->input->post('start');
        $ppc = $this->input->post('ppc');
        $viewAttrKeyValue = new ViewAttrKeyValue($this->getDb());
        $data = $viewAttrKeyValue->select_or("`attr_key_id` = {$attr_id} AND (`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1 LIMIT {$start},{$ppc}");
        echo json_encode($data);
    }

    //ajax获取该用户下的商品规格下所有的商品规格键数量  分页
    public function ajax_attr_key_count()
    {
        $attr_id = $this->input->post('attr_id');
        $viewAttrKeyValue = new ViewAttrKeyValue($this->getDb());
        $data = $viewAttrKeyValue->select_or("`attr_key_id` = {$attr_id} AND (`store_id` = {$_SESSION['seller']['id']} OR `store_id` = 0) AND `status` = 1");
        echo count($data);
    }

    //ajax add attr_value
    public function ajax_add_attr_value()
    {
        $attr_key_id = $this->input->post('attr_key_id');
        $input_attr_value_name = $this->input->post('input_attr_value_name');
        $data = array(
            'attr_key_id' => $attr_key_id,
            'value' => $input_attr_value_name,
            'store_id' => $_SESSION['seller']['id']
        );
        $attrsValue = new AttrsValue($this->getDb());
        echo $attrsValue->add($data);
    }

    //ajax修改规格值
    public function ajax_edit_attr_value()
    {
        $tmp_key_id = $this->input->post('tmp_key_id');
        $tmp_key = $this->input->post('tmp_key');
        $data = array('value' => $tmp_key);
        $attrsValue = new AttrsValue($this->getDb());
        echo $attrsValue->update(array('id'=>$tmp_key_id), $data);
    }

    //ajax delete attr_value
    public function ajax_del_attr_value()
    {
        $attr_value_id = $this->input->post('attr_value_id');
        $data['status'] = 0;
        $attrsValue = new AttrsValue($this->getDb());
        echo $attrsValue->update(array('id'=>$attr_value_id), $data);
    }

    public function getThemesUrl()
    {
        return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
    }
}
