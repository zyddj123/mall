<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}
/**
 * 商品_模型
 *
 * @package
 * @author			B.I.T
 * @copyright		Copyright (c) 2013 - 2017.
 * @license
 * @link
 * @since				Version 1.19
 */
class GoodsModel extends CO_Model{
	protected $db;
	/**
	 * 构造函数
	 * @param unknown_type $controller
	 * @param unknown_type $param
	 */
	function __construct($controller, $param=array()){
		parent::__construct($controller, $param);
		try{
			$this->db = $this->getDb();
		}catch(Exception $e){}
	}
	/**
	 * [get_brands 获取某seller下的商品品牌]
	 * @param  [type]  $id [description]
	 * @return array               [description]
	 */
	function get_brands($id){
		$sql = "SELECT * FROM ".SellerConfig::BRAND." WHERE `store_id` = 0 OR `store_id` = '".$id."' ORDER BY `store_id` ASC";
		$data = $this->db->query($sql);
		return $data;
	}
	/**
	 * [get_units 获取某seller下的商品单位]
	 * @param  [type]  $id [description]
	 * @return array               [description]
	 */
	function get_units($id){
		$sql = "SELECT * FROM ".SellerConfig::UNIT." WHERE `store_id` = 0 OR `store_id` = '".$id."' ORDER BY `store_id` ASC";
		$data = $this->db->query($sql);
		return $data;
	}
	/**
	 * [get_attrs 获取某seller下的商品规格]
	 * @param  [type]  $id [description]
	 * @return array               [description]
	 */
	function get_attrs_key($id){
		$sql = "SELECT * FROM ".SellerConfig::ATTRS_KEY." WHERE `store_id` = 0 OR `store_id` = '".$id."' ORDER BY `store_id` ASC";
		$data = $this->db->query($sql);
		return $data;
	}

	/**
	 * [get_attrs_value 获取某seller下的商品规格的值]
	 * @param  [type]  $id [description]
	 * @return array               [description]
	 */
	function get_attrs_value($id,$attr_key_id){
		$sql = "SELECT * FROM ".SellerConfig::ATTRS_VALUE." WHERE (`store_id` = 0 OR `store_id` = '".$id."') AND `attr_key_id` = '".$attr_key_id."'";
		$data = $this->db->query($sql);
		return $data;
	}
	/**
	 * [get_categorys 获取某seller下的商品类别]
	 * @param  [type]  $id [description]
	 * @return array               [description]
	 */
	function get_categorys($id){
		$sql = "SELECT * FROM ".SellerConfig::CATEGORY." WHERE `store_id` = 0 OR `store_id` = '".$id."' ORDER BY `store_id` ASC";
		$data = $this->db->query($sql);
		return $data;
	}
	/**
	 * [get_templet 获取某seller下的商品规格的值]
	 * @param  [type]  $id [description]
	 * @return array               [description]
	 */
	function get_templet_key($id,$category_id){
		$sql = "SELECT * FROM ".SellerConfig::TEMPLET_KEY." WHERE (`store_id` = 0 OR `store_id` = '".$id."') AND `category_id` = '".$category_id."' ORDER BY `store_id` , `sort`";
		$data = $this->db->query($sql);
		return $data;
	}

	/**
	 * [get_templet 获取某seller下的商品规格的值]
	 * @param  [type]  $id [description]
	 * @return array               [description]
	 */
	function category_get_templet_key($id,$category_id,$start,$ppc){
		$sql = "SELECT ".SellerConfig::TEMPLET_KEY.".*, ".SellerConfig::CATEGORY.".`category_name` FROM ".SellerConfig::TEMPLET_KEY.", ".SellerConfig::CATEGORY." WHERE (".SellerConfig::TEMPLET_KEY.".`store_id` = 0 OR ".SellerConfig::TEMPLET_KEY.".`store_id` = '".$id."') AND ".SellerConfig::TEMPLET_KEY.".`category_id` = '".$category_id."' AND ".SellerConfig::TEMPLET_KEY.".`category_id` = ".SellerConfig::CATEGORY.".`id` ORDER BY ".SellerConfig::TEMPLET_KEY.".`store_id` , ".SellerConfig::TEMPLET_KEY.".`sort` LIMIT ".$start.",".$ppc;
		$data = $this->db->query($sql);
		return $data;
	}


}
?>