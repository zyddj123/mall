<?php
/**
 * 商品视图类
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class ViewGoods extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::VIEW_GOODS;
        $this->formData = array(
            'id',
            'goods_name',
            'goods_category',
            'brand_id',
            'store_id',
            'goods_unit',
            'min_price',
            'max_price',
            'sum_stock',
            'category_name',
            'unit_name',
            'goods_sn',
            'click_count',
            'goods_brief',
            'goods_desc',
            'goods_img',
            'is_real',
            'is_on_sale',
            'is_new',
            'is_hot',
            'add_time',
            'status',
            'keywords'
        );
    }

    public function datatable($get, $where)
    {
        $data['select'] = $this->formData;
        $data['sum'] = 'id';
        $data['table'] = $this->table;
        $data['order'] = array();
        $data['where']['and'] = array('store_id' => $_SESSION['seller']['id'],'status'=>1);
        $data['where']['or'] = array('goods_name','goods_sn','category_name');
        $a = new DataTable($get, $data, $this->db);

        return $a->output();
    }

    public function getInfo($id){
        $data = $this->_select(array('id'=>$id));
        return $data[0];
    }

    public function select($where){
        return $data = $this->_select($where);
    }
}
