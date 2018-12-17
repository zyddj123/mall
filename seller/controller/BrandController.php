<?php

//非法访问
if (!defined('CO_BASE_CHECK')) {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    exit;
}

/**
 * seller品牌_控制器.
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
class BrandController extends CO_Controller
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
        $this->brand();
    }

    //商品品牌管理
    public function brand()
    {
        //导航定位
        $this->session->set('left_menu_action', 'brand/brand');
        $this->render('brand/brand');
    }

    //ajax获取datatable数据
    public function ajax_brand()
    {
        $get   = $this->input->get();
        $where = array();
        $a     = new Brand($this->getDb());
        echo json_encode($a->datatable($get, $where));
    }

    //ajax 添加或修改商品类别
    public function ajax_add_edit_brand()
    {
        $data = $this->_post_info();
        if (!is_null($data['id']) && '' != $data['id']) {
            //编辑操作
            // $pass = $this->goods_model->get_brand_by_id($data['id']); //获取原始数据
            $aa = new Brand($this->getDb());
            $pass = $aa->getInfo($data['id']);
            if ('' != $_FILES['brand_logo']['name']) {
                $path = SellerConfig::BRAND_LOGO;
                $upload = upload_img($path, $_FILES['brand_logo']['name'], $_FILES['brand_logo']['size'], $_FILES['brand_logo']['tmp_name']);
                if ($upload) {
                    $data['brand_logo'] = $upload;
                    if ('' != $pass['brand_logo']) {
                        if (@file_exists(ROOT_PATH.'/'.$path.$pass['brand_logo'])) {
                            @unlink(ROOT_PATH.'/'.$path.$pass['brand_logo']);
                        }
                    }
                }
            } else {
                $data['brand_logo'] = $pass['brand_logo'];
            }
            // $res = $this->goods_model->edit_brand_by_id($data['id'], $data);
            $res = $aa->update(array('id'=>$data['id']), $data);
            $mes = $res ? true : false;
            echo json_encode(array('handle' => '修改', 'mes' => $mes));
        } else {
            //添加操作
            if ('' != $_FILES['brand_logo']['name']) {
                $path = SellerConfig::BRAND_LOGO;
                $upload = upload_img($path, $_FILES['brand_logo']['name'], $_FILES['brand_logo']['size'], $_FILES['brand_logo']['tmp_name']);
                $data['brand_logo'] = ($upload) ? $upload : '';
            } else {
                $data['brand_logo'] = '';
            }
            $data['store_id'] = $_SESSION['seller']['id'];
            // $res = $this->goods_model->add_brand_by_id($data);
            $aa = new Brand($this->getDb());
            $res = $aa->add($data);
            $mes = $res ? true : false;
            echo json_encode(array('handle' => '添加', 'mes' => $mes));
        }
    }

    //ajax delete brand 其实并不是真的删除 是修改brand表的status项为0
    public function ajax_del_brand()
    {
        $brand_id = $this->input->post('brand_id');
        $data['status'] = 0;
        // echo $this->goods_model->edit_brand_by_id($brand_id, $data);
        $aa = new Brand($this->getDb());
        echo $aa->update(array('id'=>$brand_id), $data);
    }

    /**
     * 获取提交数据.
     *
     * @return array $_post来的数据
     */
    protected function _post_info()
    {
        $data = array();
        $data['id'] = $this->input->post('brand_id');
        if (!is_null($this->input->post('brand_name')) && '' != $this->input->post('brand_name')) {
            $data['brand_name'] = $this->input->post('brand_name');
        }
        if (!is_null($this->input->post('site_url')) && '' != $this->input->post('site_url')) {
            $data['site_url'] = $this->input->post('site_url');
        }
        if (!is_null($this->input->post('brand_desc')) && '' != $this->input->post('brand_desc')) {
            $data['brand_desc'] = $this->input->post('brand_desc');
        }

        return $data;
    }

    public function getThemesUrl()
    {
        return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
    }
}
