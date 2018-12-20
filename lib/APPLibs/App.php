<?php
/**
 * app前台用户类.
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class App extends D_Model
{
    public function init()
    {
        $this->table = AppConfig::APP;
        $this->formData = array(
            'id',
            'app_name',
            'app_email',
            'app_pwd',
            'app_img',
            'status',
        );
    }

    public function datatable($get, $where)
    {
        $data['select'] = $this->formData;
        $data['sum'] = 'id';
        $data['table'] = $this->table;
        // $data['order'] = array('1' => 'brand_name', '3' => 'site_url');
        // $data['where']['and'] = array('store_id' => array(0, 1), 'status' => 1);
        // $data['where']['or'] = array('brand_name');
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
