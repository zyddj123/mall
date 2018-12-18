<?php

//非法访问
if (!defined('CO_BASE_CHECK')) {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    exit;
}

/**
 * seller商品单位_控制器.
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
class UnitController extends CO_Controller
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
        $this->unit();
    }

    //商品单位管理
    public function unit()
    {
        //导航定位
        $this->session->set('left_menu_action', 'unit/unit');
        $this->render('unit/unit');
    }

    //ajax获取datatable数据
    public function ajax_unit()
    {
        $get   = $this->input->get();
        $where = array();
        $a     = new Unit($this->getDb());
        echo json_encode($a->datatable($get, $where));
    }

    //ajax add unit
    public function ajax_add_unit()
    {
        $input_unit_name = $this->input->post('input_unit_name');
        $unit = new Unit($this->getDb());
        echo $unit->add(array('unit_name'=>$input_unit_name,'store_id'=>$_SESSION['seller']['id']));
    }

    //ajax edit unit
    public function ajax_edit_unit()
    {
        $id = $this->input->post('id');
        $unit_name = $this->input->post('unit_name');
        $unit = new Unit($this->getDb());
        echo $unit->update(array('id'=>$id),array('unit_name'=>$unit_name));
    }

    //ajax delete unit 其实并不是真的删除 是修改unit表的status项为0
    public function ajax_del_unit()
    {
        $unit_id = $this->input->post('unit_id');
        $data['status'] = 0;
        $unit = new Unit($this->getDb());
        echo $unit->update(array('id'=>$unit_id), $data);
    }

    public function getThemesUrl()
    {
        return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
    }
}
