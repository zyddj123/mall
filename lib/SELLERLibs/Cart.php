<?php
/**
 * 商品购物车类.
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class Cart extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::CART;
        $this->formData = array(
            'id',
            'goods_id',
            'sku_id',
            'add_price',
            'quantity',
            'create_time',
            'app_id',
            'store_id',
            'status',
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

    public function getInfo($where)
    {
        $data = $this->_select($where);

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
