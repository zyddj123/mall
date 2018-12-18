<?php
/**
 * 商品规格key类.
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class AttrsKey extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::ATTRS_KEY;
        $this->formData = array(
            'id',
            'attr_key_name',
            'store_id',
            'status',
        );
    }

    public function datatable($get, $where)
    {
        $data['select'] = $this->formData;
        $data['sum'] = 'id';
        $data['table'] = $this->table;
        $data['order'] = array('1'=>'attr_key_name');
        $data['where']['and'] = array('store_id' => array(0, 1), 'status' => 1);
        $data['where']['or'] = array('attr_key_name');
        // $data['where']['or2'] = array('store_id'=>array(0,1),'status'=>array(0,1));
        $a = new DataTable($get, $data, $this->db);

        return $a->output();
    }

    public function add($data)
    {
        return $this->_add($data);
    }

    public function delete($where)
    {
        return $this->_delete($where);
    }

    public function update($where, $data)
    {
        return $this->_update($where, $data);
    }

    public function getInfo($id)
    {
        $data = $this->_select(array('id' => $id));

        return $data[0];
    }

    public function select($where)
    {
        return $data = $this->_select($where);
    }

    public function select_or($sql)
    {
        return $this->_select_or($sql);
    }
}
