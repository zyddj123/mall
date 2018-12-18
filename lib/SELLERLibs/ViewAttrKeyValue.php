<?php
/**
 * 商品规格键值视图类
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class ViewAttrKeyValue extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::VIEW_ATTR_KEY_VALUE;
        $this->formData = array(
            'id',
            'attr_key_id',
            'value',
            'store_id',
            'status',
            'attr_key_name'
        );
    }

    public function datatable($get, $where)
    {
        $data['select'] = $this->formData;
        $data['sum'] = 'id';
        $data['table'] = $this->table;
        $data['order'] = array();
        $data['where']['and'] = array('store_id' => $_SESSION['seller']['id'],'status'=>1);
        $data['where']['or'] = array('attr_key_name','value');
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
