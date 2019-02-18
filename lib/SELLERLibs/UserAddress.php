<?php
/**
 * 用户收货地址类.
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class UserAddress extends D_Model
{
    public function init()
    {
        $this->table = SellerConfig::USERADDRESS;
        $this->formData = array(
            'id',
            'user_id',
            'consignee',
            'country',
            'provice',
            'city',
            'district',
            'address',
            'zipcode',
            'tel',
            'mobile',
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
