<?php

//非法访问
if (!defined('CO_BASE_CHECK')) {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    exit;
}
/**
 * 商品_模型.
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2013 - 2017.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
class GoodsModel extends CO_Model
{
    protected $db;

    /**
     * 构造函数.
     *
     * @param unknown_type $controller
     * @param unknown_type $param
     */
    public function __construct($controller, $param = array())
    {
        parent::__construct($controller, $param);
        try {
            $this->db = $this->getDb();
        } catch (Exception $e) {
        }
    }

    /**
     * [get_brands 获取某seller下的商品品牌].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function get_brands($id)
    {
        $sql = 'SELECT * FROM '.SellerConfig::BRAND." WHERE `status` = 1 AND (`store_id` = 0 OR `store_id` = '".$id."') ORDER BY `store_id` ASC";
        $data = $this->db->query($sql);

        return $data;
    }

    /**
     * [get_units 获取某seller下的商品单位].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function get_units($id)
    {
        $sql = 'SELECT * FROM '.SellerConfig::UNIT." WHERE `status` = 1 AND (`store_id` = 0 OR `store_id` = '".$id."') ORDER BY `store_id` ASC";
        $data = $this->db->query($sql);

        return $data;
    }

    /**
     * [get_attrs 获取某seller下的商品规格].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function get_attrs_key($id)
    {
        $sql = 'SELECT * FROM '.SellerConfig::ATTRS_KEY." WHERE `status` = 1 AND (`store_id` = 0 OR `store_id` = '".$id."') ORDER BY `store_id` ASC";
        $data = $this->db->query($sql);

        return $data;
    }

    /**
     * [get_attrs_value 获取某seller下的商品规格的值].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function get_attrs_value($id, $attr_key_id)
    {
        $sql = 'SELECT * FROM '.SellerConfig::ATTRS_VALUE." WHERE (`store_id` = 0 OR `store_id` = '".$id."') AND `attr_key_id` = '".$attr_key_id."'";
        $data = $this->db->query($sql);

        return $data;
    }

    /**
     * [get_categorys 获取某seller下的商品类别].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function get_categorys($id)
    {
        $sql = 'SELECT * FROM '.SellerConfig::CATEGORY." WHERE `status` = 1 AND (`store_id` = 0 OR `store_id` = '".$id."') ORDER BY `store_id` ASC";
        $data = $this->db->query($sql);

        return $data;
    }

    /**
     * [get_templet_key 获取某seller下的商品类别模版的键].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function get_templet_key($id, $category_id)
    {
        $sql = 'SELECT * FROM '.SellerConfig::TEMPLET_KEY." WHERE (`store_id` = 0 OR `store_id` = '".$id."') AND `category_id` = '".$category_id."' ORDER BY `store_id` , `sort`";
        $data = $this->db->query($sql);

        return $data;
    }

    /**
     * [category_get_templet_key 获取某seller下的商品类别模版的键及模版类别名称].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function category_get_templet_key($id, $category_id, $start, $ppc)
    {
        $sql = 'SELECT '.SellerConfig::TEMPLET_KEY.'.*, '.SellerConfig::CATEGORY.'.`category_name` FROM '.SellerConfig::TEMPLET_KEY.', '.SellerConfig::CATEGORY.' WHERE ('.SellerConfig::TEMPLET_KEY.'.`store_id` = 0 OR '.SellerConfig::TEMPLET_KEY.".`store_id` = '".$id."') AND ".SellerConfig::TEMPLET_KEY.".`category_id` = '".$category_id."' AND ".SellerConfig::TEMPLET_KEY.'.`category_id` = '.SellerConfig::CATEGORY.'.`id` AND '.SellerConfig::TEMPLET_KEY.'.`status` = 1 ORDER BY '.SellerConfig::TEMPLET_KEY.'.`sort` LIMIT '.$start.','.$ppc;
        $data = $this->db->query($sql);

        return $data;
    }

    /**
     * [edit_templet_key 修改某seller下的商品类别模版的键].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function edit_templet_key($tmp_key_id, $data)
    {
        $data = $this->db->update(SellerConfig::TEMPLET_KEY, array('id' => $tmp_key_id), $data);

        return $data;
    }

    /**
     * [add_category 添加某seller下的商品类别].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function add_category($input_category_name, $id)
    {
        $data = $this->db->insert(SellerConfig::CATEGORY, array('category_name' => $input_category_name, 'store_id' => $id));

        return $data;
    }

    /**
     * [add_tmp_key 添加某seller下的商品类别属性模版].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function add_tmp_key($data)
    {
        return $this->db->insert(SellerConfig::TEMPLET_KEY, $data);
    }

    /**
     * [del_category 编辑某seller下的商品类别].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function edit_category($category_id, $data)
    {
        return $this->db->update(SellerConfig::CATEGORY, array('id' => $category_id), $data);
    }

    /**
     * [add_goods 添加商品信息到商品表].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function add_goods($data)
    {
        return $this->db->insert(SellerConfig::GOODS, $data);
    }

    /**
     * [add_goods_sku 添加商品规格sku信息到goods_sku表].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function add_goods_sku($data)
    {
        return $this->db->insert(SellerConfig::GOODS_SKU, $data);
    }

    /**
     * [add_attr_sku 添加商品规格sku信息到fk_attr_sku表].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function add_attr_sku($data)
    {
        return $this->db->insert(SellerConfig::FK_ATTR_SKU, $data);
    }

    /**
     * [add_goods_tmp_value 添加商品属性模版信息到templet_value表].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function add_goods_tmp_value($data)
    {
        return $this->db->insert(SellerConfig::TEMPLET_VALUE, $data);
    }

    /**************************************商品品牌管理*****************************************/

    /**
     * [edit_brand_by_id 根据id获取品牌数据].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function get_brand_by_id($id)
    {
        $sql = 'SELECT * FROM '.SellerConfig::BRAND.' WHERE `id` = '.$id;

        return $this->db->getRow($sql);
    }

    /**
     * [add_brand_by_id 添加商品品牌数据].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function add_brand_by_id($data)
    {
        return $this->db->insert(SellerConfig::BRAND, $data);
    }

    /**
     * [edit_brand_by_id 根据id编辑品牌数据].
     *
     * @param [type] $id [description]
     *
     * @return array [description]
     */
    public function edit_brand_by_id($id, $data)
    {
        return $this->db->update(SellerConfig::BRAND, array('id' => $id), $data);
    }
}
