<?php
/**
 * Seller配置文件
 *
 * @package
 * @author			B.I.T
 * @copyright		Copyright (c) 2016 - 2017.
 * @license
 * @link
 * @since				Version 1.18
 */

// ------------------------------------------------------------------------

class SellerConfig{
	/*------------------------------数据库表-------------------------------*/
	//数据库表
	const SELLER = 'mall_seller';
	const BRAND = 'mall_brand';
	const UNIT = 'mall_unit';
	const ATTRS_KEY = 'mall_goods_attrs_key';
	const ATTRS_VALUE = 'mall_goods_attrs_value';
	const CATEGORY = 'mall_category';
	const TEMPLET_KEY = 'mall_templet_key';
	const GOODS = 'mall_goods';
	const GOODS_SKU = 'mall_goods_sku';
	const TEMPLET_VALUE = 'mall_templet_value';

	//数据库视图
	const VIEW_GOODS = 'mall_view_goods';

	/*---------------------------------路径--------------------------------*/
	const UPLOAD_HEAD = '/upload/head/';//头像上传路径
	const BRAND_LOGO = '/upload/brand_logo/';//品牌logo上传路径
}