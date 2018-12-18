<?php
/**
 * 商品类别视图类
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class ViewCategoryTemKey extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::VIEW_CATEGORY_TMP_KEY;
        $this->formData = array(
            'id',
            'category_id',
            'tmp_key',
            'store_id',
            'sort',
            'status',
            'category_name',
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

    public function select_or($sql)
    {
        return $this->_select_or($sql);
    }
}
