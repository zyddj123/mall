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
class ViewTempletKeyValue extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::VIEW_TEMPLET_KEY_VALUE;
        $this->formData = array(
            'id',
            'goods_id',
            'tmp_key_id',
            'value',
            'store_id',
            'status',
            'tmp_key',
            'sort',
        );
    }

    public function datatable($get, $where)
    {
        $data['select'] = $this->formData;
        $data['sum'] = 'id';
        $data['table'] = $this->table;
        $data['order'] = array();
        $data['where']['and'] = array('store_id' => $_SESSION['seller']['id'],'status'=>1);
        $data['where']['or'] = array('tmp_key');
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
