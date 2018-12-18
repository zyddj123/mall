<?php
/**
 * 商品FK_ATTR_SKU类.
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class FkAttrSku extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::FK_ATTR_SKU;
        $this->formData = array(
            'id',
            'goods_id',
            'sku_id',
            'attrs_key_id',
            'attrs_key_name',
            'attrs_value_id',
            'attrs_value'
        );
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
