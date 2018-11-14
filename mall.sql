/*
Navicat MySQL Data Transfer

Source Server         : 192.168.1.111
Source Server Version : 50552
Source Host           : 192.168.1.111:3306
Source Database       : mall

Target Server Type    : MYSQL
Target Server Version : 50552
File Encoding         : 65001

Date: 2018-11-14 17:25:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mall_admin
-- ----------------------------
DROP TABLE IF EXISTS `mall_admin`;
CREATE TABLE `mall_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upwd` varchar(255) NOT NULL,
  `uimg` varchar(255) NOT NULL,
  `is_superadmin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否是超级管理员',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_admin
-- ----------------------------

-- ----------------------------
-- Table structure for mall_admin_session
-- ----------------------------
DROP TABLE IF EXISTS `mall_admin_session`;
CREATE TABLE `mall_admin_session` (
  `SESS_KEY` varchar(32) NOT NULL,
  `EXPIRY_DATE` bigint(20) NOT NULL,
  `SESS_VALUE` varchar(4000) NOT NULL,
  `LOGIN_DATE` datetime NOT NULL,
  `LOGIN_IP` bigint(20) NOT NULL,
  `UID` varchar(50) NOT NULL,
  PRIMARY KEY (`SESS_KEY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_admin_session
-- ----------------------------

-- ----------------------------
-- Table structure for mall_brand
-- ----------------------------
DROP TABLE IF EXISTS `mall_brand`;
CREATE TABLE `mall_brand` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `store_id` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1正常 0已经删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_brand
-- ----------------------------
INSERT INTO `mall_brand` VALUES ('1', '诺基亚', '1240803062307572427.gif', '公司网站：http://www.nokia.com.cn/\r\n\r\n客服电话：400-880-0123', 'http://www.nokia.com.cn/', '0', '1');
INSERT INTO `mall_brand` VALUES ('2', '摩托罗拉', '1240802922410634065.gif', '官方咨询电话：4008105050\r\n售后网点：http://www.motorola.com.cn/service/carecenter/search.asp ', 'http://www.motorola.com.cn', '0', '1');
INSERT INTO `mall_brand` VALUES ('3', '多普达', '1240803144788047486.gif', '官方咨询电话：4008201668\r\n售后网点：http://www.dopod.com/pc/service/searchresult2.php ', 'http://www.dopod.com ', '0', '1');
INSERT INTO `mall_brand` VALUES ('4', '飞利浦', '1240803247838195732.gif', '官方咨询电话：4008800008\n售后网点：http://www.philips.com.cn/service/mustservice/index.page ', 'http://www.philips.com.cn ', '0', '1');
INSERT INTO `mall_brand` VALUES ('5', '夏新', '1240803352280856940.gif', '官方咨询电话：4008875777\n售后网点：http://www.amobile.com.cn/service_fwyzc.asp ', 'http://www.amobile.com.cn', '0', '1');
INSERT INTO `mall_brand` VALUES ('6', '三星', '1240803412367015368.gif', '官方咨询电话：8008105858\r\n售后网点：http://cn.samsungmobile.com/cn/support/search_area_o.jsp ', 'http://cn.samsungmobile.com', '0', '1');
INSERT INTO `mall_brand` VALUES ('7', '索爱', '1240803482283160654.gif', '官方咨询电话：4008100000\r\n售后网点：http://www.sonyericsson.com/cws/common/contact?cc=cn&lc=zh ', 'http://www.sonyericsson.com.cn/', '1', '1');
INSERT INTO `mall_brand` VALUES ('8', 'LG', '1240803526904622792.gif', '官方咨询电话：4008199999\r\n售后网点：http://www.lg.com.cn/front.support.svccenter.retrieveCenter.laf?hrefId=9 ', 'http://cn.wowlg.com', '0', '1');
INSERT INTO `mall_brand` VALUES ('9', '联想', '1240803578417877983.gif', '官方咨询电话：4008188818\n售后网点：http://www.lenovomobile.com/service/kf-wanglou.asp', 'http://www.lenovomobile.com/', '1', '0');
INSERT INTO `mall_brand` VALUES ('10', '金立', '1240803689674648756.gif', '官方咨询电话：4007796666\n售后网点：http://www.gionee.net/service.asp http://www.gionee.netgfsdgdrs个人攻击的技术犯规i计算的房价根深蒂固分手快乐低价购房贷款来设计公司电力科技股份扩大粮食价格放开思路的价格浮动罗斯福高科技手段都开始磷肥价格快速打击各类锁定冠军联赛的开工建房快速路公交卡雷斯柯达晶格罗斯的国家森林的规范律师打官司', 'http://www.gionee.net', '1', '0');
INSERT INTO `mall_brand` VALUES ('11', '  恒基伟业', '1240803736391383580.gif', '官方咨询电话：4008899126\n售后网点：http://www.htwchina.com/htwt/wexiu.shtml ', 'http://www.htwchina.com', '0', '1');
INSERT INTO `mall_brand` VALUES ('12', '123', '20181108172821381.jpg', '12312312313131', 'http://www.motorola.com.cn', '1', '0');
INSERT INTO `mall_brand` VALUES ('13', '2222', '20181108173026152.jpg', '3333333', 'http://cn.samsungmobile.com', '1', '0');
INSERT INTO `mall_brand` VALUES ('14', '444', '20181109095039248.jpg', '4444', 'http://www.dopod.com ', '1', '0');
INSERT INTO `mall_brand` VALUES ('15', '苹果', '20181114152852181.jpg', '苹果官网', 'http://www.iphone.com/', '1', '1');

-- ----------------------------
-- Table structure for mall_category
-- ----------------------------
DROP TABLE IF EXISTS `mall_category`;
CREATE TABLE `mall_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `store_id` varchar(11) NOT NULL DEFAULT '0' COMMENT '店铺ID 管理员设置的category 为0 ；店铺设置的为店铺的ID',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1为正常 0为已经删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='商品类别表';

-- ----------------------------
-- Records of mall_category
-- ----------------------------
INSERT INTO `mall_category` VALUES ('1', '手机', '0', '1');
INSERT INTO `mall_category` VALUES ('2', '裤子', '0', '1');
INSERT INTO `mall_category` VALUES ('3', '鞋子', '0', '1');
INSERT INTO `mall_category` VALUES ('4', '外套', '0', '1');
INSERT INTO `mall_category` VALUES ('5', '大衣', '0', '1');
INSERT INTO `mall_category` VALUES ('6', '相机', '0', '1');
INSERT INTO `mall_category` VALUES ('7', '微波炉', '0', '1');
INSERT INTO `mall_category` VALUES ('8', '电脑', '1', '1');
INSERT INTO `mall_category` VALUES ('9', '显示器', '1', '1');
INSERT INTO `mall_category` VALUES ('13', '男装', '1', '1');
INSERT INTO `mall_category` VALUES ('14', '女装', '1', '0');

-- ----------------------------
-- Table structure for mall_collect_goods
-- ----------------------------
DROP TABLE IF EXISTS `mall_collect_goods`;
CREATE TABLE `mall_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `goods_id` (`goods_id`) USING BTREE,
  KEY `is_attention` (`is_attention`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_collect_goods
-- ----------------------------

-- ----------------------------
-- Table structure for mall_comment
-- ----------------------------
DROP TABLE IF EXISTS `mall_comment`;
CREATE TABLE `mall_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`) USING BTREE,
  KEY `id_value` (`id_value`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_comment
-- ----------------------------
INSERT INTO `mall_comment` VALUES ('1', '0', '12', 'ecshop@ecshop.com', 'ecshop', '很好，我很喜欢', '5', '1242107120', '0.0.0.0', '1', '0', '1');
INSERT INTO `mall_comment` VALUES ('2', '0', '22', 'ecshop@ecshop.com', 'ecshop', '这个我不是很适合我', '5', '1242107295', '0.0.0.0', '0', '0', '1');

-- ----------------------------
-- Table structure for mall_goods
-- ----------------------------
DROP TABLE IF EXISTS `mall_goods`;
CREATE TABLE `mall_goods` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_sn` varchar(60) NOT NULL DEFAULT '' COMMENT '商品编号',
  `goods_name` varchar(120) NOT NULL DEFAULT '' COMMENT '商品名称',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击量',
  `goods_category` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '商品类别',
  `brand_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '品牌id',
  `keydords` varchar(255) NOT NULL COMMENT '关键字',
  `goods_brief` varchar(255) NOT NULL DEFAULT '' COMMENT '商品简介',
  `goods_desc` text NOT NULL COMMENT '商品详细描述',
  `goods_img` varchar(255) NOT NULL DEFAULT '' COMMENT '商品展示图',
  `is_real` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否真实商品  1：是；2：不是',
  `is_on_sale` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否在售  1在售  0下架',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否新款',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否热销',
  `store_id` varchar(11) NOT NULL COMMENT '店铺id',
  `goods_unit` varchar(255) NOT NULL COMMENT '商品单位',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of mall_goods
-- ----------------------------
INSERT INTO `mall_goods` VALUES ('36', '', '诺基亚5730XM', '0', '1', '1', '', '诺基亚小手机', '诺基亚小手机诺基亚小手机诺基亚小手机诺基亚小手机诺基亚小手机', '', '1', '1', '0', '0', '1', '2', '0');
INSERT INTO `mall_goods` VALUES ('37', '', 'iphone6', '0', '1', '15', '', '苹果小手机', '苹果小手机苹果小手机苹果小手机苹果小手机苹果小手机苹果小手机', '', '1', '1', '0', '0', '1', '2', '0');

-- ----------------------------
-- Table structure for mall_goods_attrs_key
-- ----------------------------
DROP TABLE IF EXISTS `mall_goods_attrs_key`;
CREATE TABLE `mall_goods_attrs_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_key_name` varchar(255) NOT NULL COMMENT '规格名称',
  `store_id` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='商品规格名称';

-- ----------------------------
-- Records of mall_goods_attrs_key
-- ----------------------------
INSERT INTO `mall_goods_attrs_key` VALUES ('1', '颜色', '0', '1');
INSERT INTO `mall_goods_attrs_key` VALUES ('2', '内存', '0', '1');
INSERT INTO `mall_goods_attrs_key` VALUES ('3', '尺码', '0', '1');

-- ----------------------------
-- Table structure for mall_goods_attrs_value
-- ----------------------------
DROP TABLE IF EXISTS `mall_goods_attrs_value`;
CREATE TABLE `mall_goods_attrs_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_key_id` int(11) NOT NULL COMMENT '规格名称id',
  `symbol` varchar(255) NOT NULL COMMENT 'symbol 字段是对指定商品 ID 下的属性值的一个序号标记, 是为了提高在后面使用到时的检索效率。该值在不同商品间可以重复, 在同一商品的属性中需要保证唯一',
  `value` varchar(255) NOT NULL COMMENT '规格值',
  `store_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='商品规格值表';

-- ----------------------------
-- Records of mall_goods_attrs_value
-- ----------------------------
INSERT INTO `mall_goods_attrs_value` VALUES ('1', '1', '1', '银色', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('2', '1', '2', '黑色', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('3', '1', '3', '蓝色', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('4', '1', '4', '红色', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('5', '2', '1', '32G', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('6', '2', '2', '64G', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('7', '2', '3', '128G', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('8', '3', '1', '36码', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('9', '3', '2', '37码', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('10', '3', '3', '38码', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('11', '3', '4', '39码', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('12', '3', '5', '40码', '0');
INSERT INTO `mall_goods_attrs_value` VALUES ('13', '3', '6', '41码', '0');

-- ----------------------------
-- Table structure for mall_goods_sku
-- ----------------------------
DROP TABLE IF EXISTS `mall_goods_sku`;
CREATE TABLE `mall_goods_sku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `attr_value_id` int(11) NOT NULL COMMENT '属性搭配方式',
  `price` decimal(10,0) NOT NULL COMMENT '价格',
  `stock` varchar(255) NOT NULL COMMENT '库存',
  `store_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='商品规格、规格值、数量、价格关系表';

-- ----------------------------
-- Records of mall_goods_sku
-- ----------------------------
INSERT INTO `mall_goods_sku` VALUES ('1', '36', '1', '5700', '1200', '1');
INSERT INTO `mall_goods_sku` VALUES ('2', '36', '1', '5700', '1100', '1');
INSERT INTO `mall_goods_sku` VALUES ('3', '36', '4', '5700', '900', '1');
INSERT INTO `mall_goods_sku` VALUES ('4', '36', '4', '5700', '800', '1');
INSERT INTO `mall_goods_sku` VALUES ('5', '37', '1', '6300', '1000', '1');
INSERT INTO `mall_goods_sku` VALUES ('6', '37', '1', '6300', '1000', '1');
INSERT INTO `mall_goods_sku` VALUES ('7', '37', '2', '6300', '1000', '1');
INSERT INTO `mall_goods_sku` VALUES ('8', '37', '2', '6300', '1000', '1');
INSERT INTO `mall_goods_sku` VALUES ('9', '37', '4', '6300', '1000', '1');
INSERT INTO `mall_goods_sku` VALUES ('10', '37', '4', '6300', '1000', '1');

-- ----------------------------
-- Table structure for mall_keywords
-- ----------------------------
DROP TABLE IF EXISTS `mall_keywords`;
CREATE TABLE `mall_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_keywords
-- ----------------------------
INSERT INTO `mall_keywords` VALUES ('2009-04-21', 'ecshop', '诺基亚', '1');
INSERT INTO `mall_keywords` VALUES ('2009-04-27', 'ecshop', '智能手机', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-04', 'ecshop', '斤', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-10', 'ecshop', '诺基亚', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-11', 'ecshop', '智能手机', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-11', 'ecshop', '诺基亚', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-12', 'ecshop', '三星', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-12', 'ecshop', '智能手机', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-12', 'ecshop', 'p806', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-12', 'ecshop', '诺基亚', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-12', 'ecshop', '夏新', '1');
INSERT INTO `mall_keywords` VALUES ('2009-05-18', 'ecshop', '52', '2');
INSERT INTO `mall_keywords` VALUES ('2009-05-22', 'ecshop', 'p', '1');

-- ----------------------------
-- Table structure for mall_order_action
-- ----------------------------
DROP TABLE IF EXISTS `mall_order_action`;
CREATE TABLE `mall_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_order_action
-- ----------------------------
INSERT INTO `mall_order_action` VALUES ('1', '2', 'admin', '1', '0', '2', '0', '[售后] 1132', '1242142350');
INSERT INTO `mall_order_action` VALUES ('2', '2', 'admin', '1', '1', '2', '0', '已经发货，注意接收', '1242142389');
INSERT INTO `mall_order_action` VALUES ('3', '1', 'admin', '1', '1', '2', '0', '已经发货，注意接收', '1242142432');
INSERT INTO `mall_order_action` VALUES ('4', '2', '买家', '1', '2', '2', '0', '', '1242142449');
INSERT INTO `mall_order_action` VALUES ('5', '1', '买家', '1', '2', '2', '0', '', '1242142451');
INSERT INTO `mall_order_action` VALUES ('6', '3', 'admin', '1', '1', '2', '0', '已经发货了，注意接收', '1242142589');
INSERT INTO `mall_order_action` VALUES ('7', '3', '买家', '1', '2', '2', '0', '', '1242142634');
INSERT INTO `mall_order_action` VALUES ('8', '5', 'admin', '1', '3', '2', '0', '', '1242142869');
INSERT INTO `mall_order_action` VALUES ('9', '6', 'admin', '3', '0', '0', '0', '暂时缺货', '1242143337');
INSERT INTO `mall_order_action` VALUES ('10', '7', 'admin', '1', '0', '0', '0', '', '1242143454');
INSERT INTO `mall_order_action` VALUES ('11', '1', 'admin', '1', '2', '2', '0', '[售后] 售后', '1242143773');
INSERT INTO `mall_order_action` VALUES ('12', '2', 'admin', '4', '0', '0', '0', '质量问题', '1242144185');
INSERT INTO `mall_order_action` VALUES ('13', '12', 'buyer', '2', '0', '0', '0', '用户取消', '1242576313');
INSERT INTO `mall_order_action` VALUES ('14', '13', 'admin', '1', '1', '0', '0', '11', '1242576445');
INSERT INTO `mall_order_action` VALUES ('15', '14', 'admin', '1', '3', '2', '0', '', '1242976715');
INSERT INTO `mall_order_action` VALUES ('16', '14', 'admin', '1', '1', '2', '0', '已经发货，请接收', '1242976740');
INSERT INTO `mall_order_action` VALUES ('17', '15', 'admin', '1', '0', '0', '0', '', '1245044587');
INSERT INTO `mall_order_action` VALUES ('18', '15', 'admin', '1', '0', '2', '0', '已经付款', '1245044644');
INSERT INTO `mall_order_action` VALUES ('19', '15', 'admin', '1', '4', '2', '0', '', '1245044964');
INSERT INTO `mall_order_action` VALUES ('20', '15', 'admin', '1', '4', '2', '0', '北京供货商', '1245045061');
INSERT INTO `mall_order_action` VALUES ('21', '3', 'admin', '4', '0', '0', '0', '不喜欢这个颜色', '1245045334');
INSERT INTO `mall_order_action` VALUES ('22', '15', 'admin', '1', '1', '2', '0', '', '1245045443');
INSERT INTO `mall_order_action` VALUES ('23', '15', 'admin', '4', '0', '0', '0', '退货', '1245045515');
INSERT INTO `mall_order_action` VALUES ('24', '16', 'admin', '1', '4', '2', '0', '上海供货', '1245045723');
INSERT INTO `mall_order_action` VALUES ('25', '17', 'admin', '1', '1', '2', '0', '', '1245048189');
INSERT INTO `mall_order_action` VALUES ('26', '17', 'admin', '4', '0', '0', '0', '退货', '1245048212');
INSERT INTO `mall_order_action` VALUES ('27', '19', 'admin', '1', '1', '2', '0', '', '1245384050');

-- ----------------------------
-- Table structure for mall_order_goods
-- ----------------------------
DROP TABLE IF EXISTS `mall_order_goods`;
CREATE TABLE `mall_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`) USING BTREE,
  KEY `goods_id` (`goods_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_order_goods
-- ----------------------------
INSERT INTO `mall_order_goods` VALUES ('1', '1', '8', '飞利浦9@9v', 'ECS000008', '0', '1', '478.79', '385.00', '颜色:黑 \n', '0', '1', '', '0', '0', '231');
INSERT INTO `mall_order_goods` VALUES ('2', '2', '12', '摩托罗拉A810', 'ECS000012', '0', '1', '1179.60', '960.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('3', '3', '17', '夏新N7', 'ECS000017', '0', '1', '2760.00', '2300.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('4', '4', '22', '多普达Touch HD', 'ECS000022', '0', '1', '7198.80', '5999.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('5', '5', '9', '诺基亚E66', 'ECS000009', '0', '3', '2757.60', '2200.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('6', '5', '24', 'P806', 'ECS000024', '0', '1', '2400.00', '2000.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('7', '6', '5', '索爱原装M2卡读卡器', 'ECS000005', '0', '1', '24.00', '20.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('8', '7', '9', '诺基亚E66', 'ECS000009', '0', '1', '2757.60', '2298.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('9', '8', '20', '三星BC01', 'ECS000020', '0', '1', '336.00', '238.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('10', '8', '8', '飞利浦9@9v', 'ECS000008', '0', '1', '478.79', '385.00', '颜色:黑 \n', '0', '1', '', '0', '0', '231');
INSERT INTO `mall_order_goods` VALUES ('11', '9', '24', 'P806', 'ECS000024', '0', '1', '2400.00', '2000.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('12', '10', '24', 'P806', 'ECS000024', '0', '1', '2400.00', '0.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('13', '11', '23', '诺基亚N96', 'ECS000023', '0', '1', '4440.00', '3800.00', '附加配件: 原装电池 [+100]', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('14', '12', '20', '三星BC01', 'ECS000020', '0', '1', '336.00', '238.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('15', '13', '12', '摩托罗拉A810', 'ECS000012', '0', '1', '1179.60', '960.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('16', '14', '15', '摩托罗拉A810', 'ECS000015', '0', '5', '705.60', '588.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('17', '14', '20', '三星BC01', 'ECS000020', '0', '1', '336.00', '238.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('18', '14', '22', '多普达Touch HD', 'ECS000022', '0', '1', '7198.80', '5999.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('19', '14', '3', '诺基亚原装5800耳机', 'ECS000002', '0', '4', '81.60', '68.00', '颜色:银色 \n', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('20', '14', '9', '诺基亚E66', 'ECS000009', '0', '2', '2757.60', '2298.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('21', '15', '13', '诺基亚5320 XpressMusic', 'ECS000013', '0', '3', '1583.20', '1210.00', '颜色:红[10] \n', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('22', '15', '14', '诺基亚5800XM', 'ECS000014', '0', '1', '3150.00', '2493.75', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('23', '15', '24', 'P806', 'ECS000024', '0', '4', '2400.00', '1900.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('24', '15', '9', '诺基亚E66', 'ECS000009', '0', '1', '2757.60', '2183.10', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('25', '15', '8', '飞利浦9@9v', 'ECS000008', '0', '3', '478.79', '379.05', '颜色:黑 \n', '0', '1', '', '0', '0', '231');
INSERT INTO `mall_order_goods` VALUES ('26', '16', '12', '摩托罗拉A810', 'ECS000012', '0', '2', '1179.60', '933.85', '', '2', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('27', '16', '1', 'KD876', 'ECS000000', '0', '1', '1665.60', '1318.60', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('28', '17', '24', 'P806', 'ECS000024', '0', '1', '2400.00', '1900.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('29', '18', '24', 'P806', 'ECS000024', '0', '5', '2400.00', '100.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('30', '19', '12', '摩托罗拉A810', 'ECS000012', '0', '2', '1179.60', '933.85', '', '2', '1', '', '0', '0', '');
INSERT INTO `mall_order_goods` VALUES ('31', '19', '24', 'P806', 'ECS000024', '0', '2', '2400.00', '1850.00', '颜色:灰色 \n', '2', '1', '', '0', '0', '167');

-- ----------------------------
-- Table structure for mall_order_info
-- ----------------------------
DROP TABLE IF EXISTS `mall_order_info`;
CREATE TABLE `mall_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `order_status` (`order_status`) USING BTREE,
  KEY `shipping_status` (`shipping_status`) USING BTREE,
  KEY `pay_status` (`pay_status`) USING BTREE,
  KEY `shipping_id` (`shipping_id`) USING BTREE,
  KEY `pay_id` (`pay_id`) USING BTREE,
  KEY `extension_code` (`extension_code`,`extension_id`) USING BTREE,
  KEY `agency_id` (`agency_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_order_info
-- ----------------------------
INSERT INTO `mall_order_info` VALUES ('1', '2009051298180', '1', '1', '2', '2', '刘先生', '1', '2', '52', '500', '[中国 北京 北京 海淀区] 中关村海兴大厦', '100085', '010-25851234', '13986765412', 'ecshop@ecshop.com', '中午', '法院', '', '5', '申通快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '385.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '400.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1242142274', '1242142274', '1242142274', '1242142432', '0', '0', '0', '122', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('2', '2009051255518', '1', '4', '0', '0', '刘先生', '1', '2', '52', '500', '[中国 北京 北京 海淀区] 中关村海兴大厦', '100085', '010-25851234', '13986765412', 'ecshop@ecshop.com', '中午', '法院', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '精品包装', '祝福贺卡', '晚来的祝福', '', '', '960.00', '10.00', '0.00', '0.00', '0.00', '5.00', '0.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1242142324', '1242142324', '1242142324', '1242142389', '1', '1', '0', '111', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('3', '2009051267570', '1', '4', '0', '0', '刘先生', '1', '2', '52', '500', '[中国 北京 北京 海淀区] 中关村海兴大厦', '100085', '010-25851234', '13986765412', 'ecshop@ecshop.com', '中午', '法院', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '2300.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1242142549', '1242142549', '1242142549', '1242142589', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('4', '2009051230249', '1', '1', '0', '2', '刘先生', '1', '2', '52', '500', '[中国 北京 北京 海淀区] 中关村海兴大厦', '100085', '010-25851234', '13986765412', 'ecshop@ecshop.com', '中午', '法院', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '5999.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5989.00', '0', '0.00', '20.00', '0.00', '0', '本站', '1242142681', '1242142681', '1242142681', '0', '0', '0', '1', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('5', '2009051276258', '1', '1', '3', '2', '刘先生', '1', '2', '52', '500', '[中国 北京 北京 海淀区] 中关村海兴大厦', '100085', '010-25851234', '13986765412', 'ecshop@ecshop.com', '中午', '法院', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '8600.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8610.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1242142808', '1242142808', '1242142808', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('6', '2009051217221', '3', '3', '0', '0', '叶先生', '1', '2', '52', '510', '通州区旗舰凯旋小区', '', '13588104710', '', 'text@ecshop.com', '', '', '', '5', '申通快递', '2', '银行汇款/转帐', '等待所有商品备齐后再发', '', '', '', '', '', '', '20.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '35.00', '0', '', '1242143292', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('7', '2009051227085', '3', '1', '0', '0', '叶先生', '1', '2', '52', '510', '通州区旗舰凯旋小区', '', '13588104710', '', 'text@ecshop.com', '', '', '', '5', '申通快递', '2', '银行汇款/转帐', '等待所有商品备齐后再发', '', '', '', '', '', '', '2298.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '0', '0.00', '0.00', '1198.10', '0', '', '1242143383', '1242143454', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '114.90');
INSERT INTO `mall_order_info` VALUES ('8', '2009051299732', '3', '0', '0', '0', '叶先生', '1', '2', '52', '510', '通州区旗舰凯旋小区', '', '13588104710', '', 'text@ecshop.com', '', '', '', '5', '申通快递', '2', '银行汇款/转帐', '等待所有商品备齐后再发', '', '', '', '', '', '', '623.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '638.00', '0', '', '1242143444', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('9', '2009051210718', '3', '0', '0', '0', '叶先生', '1', '2', '52', '510', '通州区旗舰凯旋小区', '', '13588104710', '', 'text@ecshop.com', '', '', '', '5', '申通快递', '2', '银行汇款/转帐', '等待所有商品备齐后再发', '', '', '', '', '', '', '2000.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '2015.00', '0', '', '1242143732', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('10', '2009051268194', '1', '1', '0', '2', '刘先生', '1', '2', '52', '500', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '0.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10.00', '17000', '0.00', '0.00', '0.00', '0', '', '1242143920', '1242143920', '1242143920', '0', '0', '0', '0', '', 'exchange_goods', '24', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('11', '2009051264945', '0', '1', '0', '0', '林小姐', '1', '2', '52', '500', '中关村海兴大厦', '', '135474510', '', 'linzi@116.com', '', '', '', '3', '城际快递', '2', '银行汇款/转帐', '', '', '', '', '', '', '', '3800.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '3810.00', '0', '管理员添加', '1242144250', '1242144363', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('12', '2009051712919', '1', '2', '0', '0', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '3', '货到付款', '等待所有商品备齐后再发', '', '', '', '', '', '', '238.00', '10.00', '0.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '253.00', '0', '本站', '1242576304', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('13', '2009051719232', '1', '1', '1', '0', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '3', '货到付款', '等待所有商品备齐后再发', '', '', '', '', '', '', '960.00', '10.00', '0.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '975.00', '0', '本站', '1242576341', '1242576445', '0', '1242576445', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('14', '2009052224892', '1', '1', '1', '2', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '14045.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13806.60', '0', '0.00', '5.00', '0.00', '0', '本站', '1242976699', '1242976699', '1242976699', '1242976740', '0', '0', '2', '1123344', '', '0', '', '', '0', '', '0.00', '0', '0', '243.40');
INSERT INTO `mall_order_info` VALUES ('15', '2009061585887', '1', '4', '0', '0', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '2', '银行汇款/转帐', '等待所有商品备齐后再发', '', '', '', '', '', '', '17044.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '17054.00', '0', '本站', '1245044533', '1245044587', '1245044644', '1245045443', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('16', '2009061525429', '1', '1', '4', '2', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '3186.30', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3196.30', '0', '0.00', '0.00', '0.00', '0', '本站', '1245045672', '1245045672', '1245045672', '1245045723', '0', '0', '0', '2009061525121', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('17', '2009061503335', '1', '4', '0', '0', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '1900.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1245047978', '1245047978', '1245047978', '1245048189', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('18', '2009061510313', '1', '1', '0', '2', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '500.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '500.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1245048585', '1245048585', '1245048585', '0', '0', '0', '0', '', 'group_buy', '8', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `mall_order_info` VALUES ('19', '2009061909851', '1', '1', '1', '2', '刘先生', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', 'ecshop@ecshop.com', '', '', '', '3', '城际快递', '1', '余额支付', '等待所有商品备齐后再发', '', '', '', '', '', '', '5567.70', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5577.70', '0', '0.00', '0.00', '0.00', '0', '本站', '1245384008', '1245384008', '1245384008', '1245384049', '0', '0', '0', '232421', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');

-- ----------------------------
-- Table structure for mall_pack
-- ----------------------------
DROP TABLE IF EXISTS `mall_pack`;
CREATE TABLE `mall_pack` (
  `pack_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `pack_img` varchar(255) NOT NULL DEFAULT '',
  `pack_fee` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `free_money` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pack_desc` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pack_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_pack
-- ----------------------------
INSERT INTO `mall_pack` VALUES ('1', '精品包装', '1242108360911825791.jpg', '5.00', '800', '精品包装，尽心为您设计一份不一样的礼物');

-- ----------------------------
-- Table structure for mall_package_goods
-- ----------------------------
DROP TABLE IF EXISTS `mall_package_goods`;
CREATE TABLE `mall_package_goods` (
  `package_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_package_goods
-- ----------------------------
INSERT INTO `mall_package_goods` VALUES ('5', '6', '0', '1', '1');
INSERT INTO `mall_package_goods` VALUES ('5', '5', '0', '1', '1');
INSERT INTO `mall_package_goods` VALUES ('6', '4', '0', '1', '1');
INSERT INTO `mall_package_goods` VALUES ('6', '7', '0', '1', '1');
INSERT INTO `mall_package_goods` VALUES ('6', '32', '0', '1', '1');
INSERT INTO `mall_package_goods` VALUES ('5', '31', '0', '1', '1');

-- ----------------------------
-- Table structure for mall_pay_log
-- ----------------------------
DROP TABLE IF EXISTS `mall_pay_log`;
CREATE TABLE `mall_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_pay_log
-- ----------------------------
INSERT INTO `mall_pay_log` VALUES ('1', '1', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('2', '2', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('3', '3', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('4', '4', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('5', '5', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('6', '6', '35.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('7', '7', '2198.10', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('8', '8', '638.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('9', '9', '2015.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('10', '10', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('11', '11', '3810.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('12', '12', '253.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('13', '13', '975.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('14', '14', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('15', '15', '17054.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('16', '16', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('17', '17', '0.00', '0', '0');
INSERT INTO `mall_pay_log` VALUES ('18', '18', '0.00', '0', '0');

-- ----------------------------
-- Table structure for mall_payment
-- ----------------------------
DROP TABLE IF EXISTS `mall_payment`;
CREATE TABLE `mall_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_payment
-- ----------------------------
INSERT INTO `mall_payment` VALUES ('1', 'balance', '余额支付', '0', '使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。', '0', 'a:0:{}', '1', '0', '1');
INSERT INTO `mall_payment` VALUES ('2', 'bank', '银行汇款/转帐', '0', '银行名称\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。', '0', 'a:0:{}', '1', '0', '0');
INSERT INTO `mall_payment` VALUES ('3', 'cod', '货到付款', '0', '开通城市：×××\n货到付款区域：×××', '0', 'a:0:{}', '1', '1', '0');

-- ----------------------------
-- Table structure for mall_plugins
-- ----------------------------
DROP TABLE IF EXISTS `mall_plugins`;
CREATE TABLE `mall_plugins` (
  `code` varchar(30) NOT NULL DEFAULT '',
  `version` varchar(10) NOT NULL DEFAULT '',
  `library` varchar(255) NOT NULL DEFAULT '',
  `assign` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `install_date` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_plugins
-- ----------------------------

-- ----------------------------
-- Table structure for mall_products
-- ----------------------------
DROP TABLE IF EXISTS `mall_products`;
CREATE TABLE `mall_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_products
-- ----------------------------
INSERT INTO `mall_products` VALUES ('1', '32', '163', '', '100');
INSERT INTO `mall_products` VALUES ('2', '24', '167', '', '100');
INSERT INTO `mall_products` VALUES ('3', '23', '175', '', '100');
INSERT INTO `mall_products` VALUES ('4', '21', '188', '', '20');
INSERT INTO `mall_products` VALUES ('5', '20', '194', '', '13');
INSERT INTO `mall_products` VALUES ('6', '17', '201', '', '1');
INSERT INTO `mall_products` VALUES ('7', '14', '213', '', '4');
INSERT INTO `mall_products` VALUES ('8', '13', '217', '', '8');
INSERT INTO `mall_products` VALUES ('9', '10', '239', '', '6');
INSERT INTO `mall_products` VALUES ('10', '10', '240', '', '12');
INSERT INTO `mall_products` VALUES ('11', '9', '227', '', '12');
INSERT INTO `mall_products` VALUES ('12', '9', '226', '', '3');
INSERT INTO `mall_products` VALUES ('13', '8', '231', '', '17');
INSERT INTO `mall_products` VALUES ('14', '1', '237', '', '1');

-- ----------------------------
-- Table structure for mall_reg_extend_info
-- ----------------------------
DROP TABLE IF EXISTS `mall_reg_extend_info`;
CREATE TABLE `mall_reg_extend_info` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `reg_field_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_reg_extend_info
-- ----------------------------

-- ----------------------------
-- Table structure for mall_reg_fields
-- ----------------------------
DROP TABLE IF EXISTS `mall_reg_fields`;
CREATE TABLE `mall_reg_fields` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `reg_field_name` varchar(60) NOT NULL,
  `dis_order` tinyint(3) unsigned NOT NULL DEFAULT '100',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_need` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_reg_fields
-- ----------------------------
INSERT INTO `mall_reg_fields` VALUES ('1', 'MSN', '0', '1', '1', '1');
INSERT INTO `mall_reg_fields` VALUES ('2', 'QQ', '0', '1', '1', '1');
INSERT INTO `mall_reg_fields` VALUES ('3', '办公电话', '0', '1', '1', '1');
INSERT INTO `mall_reg_fields` VALUES ('4', '家庭电话', '0', '1', '1', '1');
INSERT INTO `mall_reg_fields` VALUES ('5', '手机', '0', '1', '1', '1');
INSERT INTO `mall_reg_fields` VALUES ('6', '密码找回问题', '0', '1', '1', '1');

-- ----------------------------
-- Table structure for mall_region
-- ----------------------------
DROP TABLE IF EXISTS `mall_region`;
CREATE TABLE `mall_region` (
  `region_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_name` varchar(120) NOT NULL DEFAULT '',
  `region_type` tinyint(1) NOT NULL DEFAULT '2',
  `agency_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`region_id`),
  KEY `parent_id` (`parent_id`) USING BTREE,
  KEY `region_type` (`region_type`) USING BTREE,
  KEY `agency_id` (`agency_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3409 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_region
-- ----------------------------
INSERT INTO `mall_region` VALUES ('1', '0', '中国', '0', '0');
INSERT INTO `mall_region` VALUES ('2', '1', '北京', '1', '0');
INSERT INTO `mall_region` VALUES ('3', '1', '安徽', '1', '0');
INSERT INTO `mall_region` VALUES ('4', '1', '福建', '1', '0');
INSERT INTO `mall_region` VALUES ('5', '1', '甘肃', '1', '0');
INSERT INTO `mall_region` VALUES ('6', '1', '广东', '1', '0');
INSERT INTO `mall_region` VALUES ('7', '1', '广西', '1', '0');
INSERT INTO `mall_region` VALUES ('8', '1', '贵州', '1', '0');
INSERT INTO `mall_region` VALUES ('9', '1', '海南', '1', '0');
INSERT INTO `mall_region` VALUES ('10', '1', '河北', '1', '0');
INSERT INTO `mall_region` VALUES ('11', '1', '河南', '1', '0');
INSERT INTO `mall_region` VALUES ('12', '1', '黑龙江', '1', '0');
INSERT INTO `mall_region` VALUES ('13', '1', '湖北', '1', '0');
INSERT INTO `mall_region` VALUES ('14', '1', '湖南', '1', '0');
INSERT INTO `mall_region` VALUES ('15', '1', '吉林', '1', '0');
INSERT INTO `mall_region` VALUES ('16', '1', '江苏', '1', '0');
INSERT INTO `mall_region` VALUES ('17', '1', '江西', '1', '0');
INSERT INTO `mall_region` VALUES ('18', '1', '辽宁', '1', '0');
INSERT INTO `mall_region` VALUES ('19', '1', '内蒙古', '1', '0');
INSERT INTO `mall_region` VALUES ('20', '1', '宁夏', '1', '0');
INSERT INTO `mall_region` VALUES ('21', '1', '青海', '1', '0');
INSERT INTO `mall_region` VALUES ('22', '1', '山东', '1', '0');
INSERT INTO `mall_region` VALUES ('23', '1', '山西', '1', '0');
INSERT INTO `mall_region` VALUES ('24', '1', '陕西', '1', '0');
INSERT INTO `mall_region` VALUES ('25', '1', '上海', '1', '0');
INSERT INTO `mall_region` VALUES ('26', '1', '四川', '1', '0');
INSERT INTO `mall_region` VALUES ('27', '1', '天津', '1', '0');
INSERT INTO `mall_region` VALUES ('28', '1', '西藏', '1', '0');
INSERT INTO `mall_region` VALUES ('29', '1', '新疆', '1', '0');
INSERT INTO `mall_region` VALUES ('30', '1', '云南', '1', '0');
INSERT INTO `mall_region` VALUES ('31', '1', '浙江', '1', '0');
INSERT INTO `mall_region` VALUES ('32', '1', '重庆', '1', '0');
INSERT INTO `mall_region` VALUES ('33', '1', '香港', '1', '0');
INSERT INTO `mall_region` VALUES ('34', '1', '澳门', '1', '0');
INSERT INTO `mall_region` VALUES ('35', '1', '台湾', '1', '0');
INSERT INTO `mall_region` VALUES ('36', '3', '安庆', '2', '0');
INSERT INTO `mall_region` VALUES ('37', '3', '蚌埠', '2', '0');
INSERT INTO `mall_region` VALUES ('38', '3', '巢湖', '2', '0');
INSERT INTO `mall_region` VALUES ('39', '3', '池州', '2', '0');
INSERT INTO `mall_region` VALUES ('40', '3', '滁州', '2', '0');
INSERT INTO `mall_region` VALUES ('41', '3', '阜阳', '2', '0');
INSERT INTO `mall_region` VALUES ('42', '3', '淮北', '2', '0');
INSERT INTO `mall_region` VALUES ('43', '3', '淮南', '2', '0');
INSERT INTO `mall_region` VALUES ('44', '3', '黄山', '2', '0');
INSERT INTO `mall_region` VALUES ('45', '3', '六安', '2', '0');
INSERT INTO `mall_region` VALUES ('46', '3', '马鞍山', '2', '0');
INSERT INTO `mall_region` VALUES ('47', '3', '宿州', '2', '0');
INSERT INTO `mall_region` VALUES ('48', '3', '铜陵', '2', '0');
INSERT INTO `mall_region` VALUES ('49', '3', '芜湖', '2', '0');
INSERT INTO `mall_region` VALUES ('50', '3', '宣城', '2', '0');
INSERT INTO `mall_region` VALUES ('51', '3', '亳州', '2', '0');
INSERT INTO `mall_region` VALUES ('52', '2', '北京', '2', '0');
INSERT INTO `mall_region` VALUES ('53', '4', '福州', '2', '0');
INSERT INTO `mall_region` VALUES ('54', '4', '龙岩', '2', '0');
INSERT INTO `mall_region` VALUES ('55', '4', '南平', '2', '0');
INSERT INTO `mall_region` VALUES ('56', '4', '宁德', '2', '0');
INSERT INTO `mall_region` VALUES ('57', '4', '莆田', '2', '0');
INSERT INTO `mall_region` VALUES ('58', '4', '泉州', '2', '0');
INSERT INTO `mall_region` VALUES ('59', '4', '三明', '2', '0');
INSERT INTO `mall_region` VALUES ('60', '4', '厦门', '2', '0');
INSERT INTO `mall_region` VALUES ('61', '4', '漳州', '2', '0');
INSERT INTO `mall_region` VALUES ('62', '5', '兰州', '2', '0');
INSERT INTO `mall_region` VALUES ('63', '5', '白银', '2', '0');
INSERT INTO `mall_region` VALUES ('64', '5', '定西', '2', '0');
INSERT INTO `mall_region` VALUES ('65', '5', '甘南', '2', '0');
INSERT INTO `mall_region` VALUES ('66', '5', '嘉峪关', '2', '0');
INSERT INTO `mall_region` VALUES ('67', '5', '金昌', '2', '0');
INSERT INTO `mall_region` VALUES ('68', '5', '酒泉', '2', '0');
INSERT INTO `mall_region` VALUES ('69', '5', '临夏', '2', '0');
INSERT INTO `mall_region` VALUES ('70', '5', '陇南', '2', '0');
INSERT INTO `mall_region` VALUES ('71', '5', '平凉', '2', '0');
INSERT INTO `mall_region` VALUES ('72', '5', '庆阳', '2', '0');
INSERT INTO `mall_region` VALUES ('73', '5', '天水', '2', '0');
INSERT INTO `mall_region` VALUES ('74', '5', '武威', '2', '0');
INSERT INTO `mall_region` VALUES ('75', '5', '张掖', '2', '0');
INSERT INTO `mall_region` VALUES ('76', '6', '广州', '2', '0');
INSERT INTO `mall_region` VALUES ('77', '6', '深圳', '2', '0');
INSERT INTO `mall_region` VALUES ('78', '6', '潮州', '2', '0');
INSERT INTO `mall_region` VALUES ('79', '6', '东莞', '2', '0');
INSERT INTO `mall_region` VALUES ('80', '6', '佛山', '2', '0');
INSERT INTO `mall_region` VALUES ('81', '6', '河源', '2', '0');
INSERT INTO `mall_region` VALUES ('82', '6', '惠州', '2', '0');
INSERT INTO `mall_region` VALUES ('83', '6', '江门', '2', '0');
INSERT INTO `mall_region` VALUES ('84', '6', '揭阳', '2', '0');
INSERT INTO `mall_region` VALUES ('85', '6', '茂名', '2', '0');
INSERT INTO `mall_region` VALUES ('86', '6', '梅州', '2', '0');
INSERT INTO `mall_region` VALUES ('87', '6', '清远', '2', '0');
INSERT INTO `mall_region` VALUES ('88', '6', '汕头', '2', '0');
INSERT INTO `mall_region` VALUES ('89', '6', '汕尾', '2', '0');
INSERT INTO `mall_region` VALUES ('90', '6', '韶关', '2', '0');
INSERT INTO `mall_region` VALUES ('91', '6', '阳江', '2', '0');
INSERT INTO `mall_region` VALUES ('92', '6', '云浮', '2', '0');
INSERT INTO `mall_region` VALUES ('93', '6', '湛江', '2', '0');
INSERT INTO `mall_region` VALUES ('94', '6', '肇庆', '2', '0');
INSERT INTO `mall_region` VALUES ('95', '6', '中山', '2', '0');
INSERT INTO `mall_region` VALUES ('96', '6', '珠海', '2', '0');
INSERT INTO `mall_region` VALUES ('97', '7', '南宁', '2', '0');
INSERT INTO `mall_region` VALUES ('98', '7', '桂林', '2', '0');
INSERT INTO `mall_region` VALUES ('99', '7', '百色', '2', '0');
INSERT INTO `mall_region` VALUES ('100', '7', '北海', '2', '0');
INSERT INTO `mall_region` VALUES ('101', '7', '崇左', '2', '0');
INSERT INTO `mall_region` VALUES ('102', '7', '防城港', '2', '0');
INSERT INTO `mall_region` VALUES ('103', '7', '贵港', '2', '0');
INSERT INTO `mall_region` VALUES ('104', '7', '河池', '2', '0');
INSERT INTO `mall_region` VALUES ('105', '7', '贺州', '2', '0');
INSERT INTO `mall_region` VALUES ('106', '7', '来宾', '2', '0');
INSERT INTO `mall_region` VALUES ('107', '7', '柳州', '2', '0');
INSERT INTO `mall_region` VALUES ('108', '7', '钦州', '2', '0');
INSERT INTO `mall_region` VALUES ('109', '7', '梧州', '2', '0');
INSERT INTO `mall_region` VALUES ('110', '7', '玉林', '2', '0');
INSERT INTO `mall_region` VALUES ('111', '8', '贵阳', '2', '0');
INSERT INTO `mall_region` VALUES ('112', '8', '安顺', '2', '0');
INSERT INTO `mall_region` VALUES ('113', '8', '毕节', '2', '0');
INSERT INTO `mall_region` VALUES ('114', '8', '六盘水', '2', '0');
INSERT INTO `mall_region` VALUES ('115', '8', '黔东南', '2', '0');
INSERT INTO `mall_region` VALUES ('116', '8', '黔南', '2', '0');
INSERT INTO `mall_region` VALUES ('117', '8', '黔西南', '2', '0');
INSERT INTO `mall_region` VALUES ('118', '8', '铜仁', '2', '0');
INSERT INTO `mall_region` VALUES ('119', '8', '遵义', '2', '0');
INSERT INTO `mall_region` VALUES ('120', '9', '海口', '2', '0');
INSERT INTO `mall_region` VALUES ('121', '9', '三亚', '2', '0');
INSERT INTO `mall_region` VALUES ('122', '9', '白沙', '2', '0');
INSERT INTO `mall_region` VALUES ('123', '9', '保亭', '2', '0');
INSERT INTO `mall_region` VALUES ('124', '9', '昌江', '2', '0');
INSERT INTO `mall_region` VALUES ('125', '9', '澄迈县', '2', '0');
INSERT INTO `mall_region` VALUES ('126', '9', '定安县', '2', '0');
INSERT INTO `mall_region` VALUES ('127', '9', '东方', '2', '0');
INSERT INTO `mall_region` VALUES ('128', '9', '乐东', '2', '0');
INSERT INTO `mall_region` VALUES ('129', '9', '临高县', '2', '0');
INSERT INTO `mall_region` VALUES ('130', '9', '陵水', '2', '0');
INSERT INTO `mall_region` VALUES ('131', '9', '琼海', '2', '0');
INSERT INTO `mall_region` VALUES ('132', '9', '琼中', '2', '0');
INSERT INTO `mall_region` VALUES ('133', '9', '屯昌县', '2', '0');
INSERT INTO `mall_region` VALUES ('134', '9', '万宁', '2', '0');
INSERT INTO `mall_region` VALUES ('135', '9', '文昌', '2', '0');
INSERT INTO `mall_region` VALUES ('136', '9', '五指山', '2', '0');
INSERT INTO `mall_region` VALUES ('137', '9', '儋州', '2', '0');
INSERT INTO `mall_region` VALUES ('138', '10', '石家庄', '2', '0');
INSERT INTO `mall_region` VALUES ('139', '10', '保定', '2', '0');
INSERT INTO `mall_region` VALUES ('140', '10', '沧州', '2', '0');
INSERT INTO `mall_region` VALUES ('141', '10', '承德', '2', '0');
INSERT INTO `mall_region` VALUES ('142', '10', '邯郸', '2', '0');
INSERT INTO `mall_region` VALUES ('143', '10', '衡水', '2', '0');
INSERT INTO `mall_region` VALUES ('144', '10', '廊坊', '2', '0');
INSERT INTO `mall_region` VALUES ('145', '10', '秦皇岛', '2', '0');
INSERT INTO `mall_region` VALUES ('146', '10', '唐山', '2', '0');
INSERT INTO `mall_region` VALUES ('147', '10', '邢台', '2', '0');
INSERT INTO `mall_region` VALUES ('148', '10', '张家口', '2', '0');
INSERT INTO `mall_region` VALUES ('149', '11', '郑州', '2', '0');
INSERT INTO `mall_region` VALUES ('150', '11', '洛阳', '2', '0');
INSERT INTO `mall_region` VALUES ('151', '11', '开封', '2', '0');
INSERT INTO `mall_region` VALUES ('152', '11', '安阳', '2', '0');
INSERT INTO `mall_region` VALUES ('153', '11', '鹤壁', '2', '0');
INSERT INTO `mall_region` VALUES ('154', '11', '济源', '2', '0');
INSERT INTO `mall_region` VALUES ('155', '11', '焦作', '2', '0');
INSERT INTO `mall_region` VALUES ('156', '11', '南阳', '2', '0');
INSERT INTO `mall_region` VALUES ('157', '11', '平顶山', '2', '0');
INSERT INTO `mall_region` VALUES ('158', '11', '三门峡', '2', '0');
INSERT INTO `mall_region` VALUES ('159', '11', '商丘', '2', '0');
INSERT INTO `mall_region` VALUES ('160', '11', '新乡', '2', '0');
INSERT INTO `mall_region` VALUES ('161', '11', '信阳', '2', '0');
INSERT INTO `mall_region` VALUES ('162', '11', '许昌', '2', '0');
INSERT INTO `mall_region` VALUES ('163', '11', '周口', '2', '0');
INSERT INTO `mall_region` VALUES ('164', '11', '驻马店', '2', '0');
INSERT INTO `mall_region` VALUES ('165', '11', '漯河', '2', '0');
INSERT INTO `mall_region` VALUES ('166', '11', '濮阳', '2', '0');
INSERT INTO `mall_region` VALUES ('167', '12', '哈尔滨', '2', '0');
INSERT INTO `mall_region` VALUES ('168', '12', '大庆', '2', '0');
INSERT INTO `mall_region` VALUES ('169', '12', '大兴安岭', '2', '0');
INSERT INTO `mall_region` VALUES ('170', '12', '鹤岗', '2', '0');
INSERT INTO `mall_region` VALUES ('171', '12', '黑河', '2', '0');
INSERT INTO `mall_region` VALUES ('172', '12', '鸡西', '2', '0');
INSERT INTO `mall_region` VALUES ('173', '12', '佳木斯', '2', '0');
INSERT INTO `mall_region` VALUES ('174', '12', '牡丹江', '2', '0');
INSERT INTO `mall_region` VALUES ('175', '12', '七台河', '2', '0');
INSERT INTO `mall_region` VALUES ('176', '12', '齐齐哈尔', '2', '0');
INSERT INTO `mall_region` VALUES ('177', '12', '双鸭山', '2', '0');
INSERT INTO `mall_region` VALUES ('178', '12', '绥化', '2', '0');
INSERT INTO `mall_region` VALUES ('179', '12', '伊春', '2', '0');
INSERT INTO `mall_region` VALUES ('180', '13', '武汉', '2', '0');
INSERT INTO `mall_region` VALUES ('181', '13', '仙桃', '2', '0');
INSERT INTO `mall_region` VALUES ('182', '13', '鄂州', '2', '0');
INSERT INTO `mall_region` VALUES ('183', '13', '黄冈', '2', '0');
INSERT INTO `mall_region` VALUES ('184', '13', '黄石', '2', '0');
INSERT INTO `mall_region` VALUES ('185', '13', '荆门', '2', '0');
INSERT INTO `mall_region` VALUES ('186', '13', '荆州', '2', '0');
INSERT INTO `mall_region` VALUES ('187', '13', '潜江', '2', '0');
INSERT INTO `mall_region` VALUES ('188', '13', '神农架林区', '2', '0');
INSERT INTO `mall_region` VALUES ('189', '13', '十堰', '2', '0');
INSERT INTO `mall_region` VALUES ('190', '13', '随州', '2', '0');
INSERT INTO `mall_region` VALUES ('191', '13', '天门', '2', '0');
INSERT INTO `mall_region` VALUES ('192', '13', '咸宁', '2', '0');
INSERT INTO `mall_region` VALUES ('193', '13', '襄樊', '2', '0');
INSERT INTO `mall_region` VALUES ('194', '13', '孝感', '2', '0');
INSERT INTO `mall_region` VALUES ('195', '13', '宜昌', '2', '0');
INSERT INTO `mall_region` VALUES ('196', '13', '恩施', '2', '0');
INSERT INTO `mall_region` VALUES ('197', '14', '长沙', '2', '0');
INSERT INTO `mall_region` VALUES ('198', '14', '张家界', '2', '0');
INSERT INTO `mall_region` VALUES ('199', '14', '常德', '2', '0');
INSERT INTO `mall_region` VALUES ('200', '14', '郴州', '2', '0');
INSERT INTO `mall_region` VALUES ('201', '14', '衡阳', '2', '0');
INSERT INTO `mall_region` VALUES ('202', '14', '怀化', '2', '0');
INSERT INTO `mall_region` VALUES ('203', '14', '娄底', '2', '0');
INSERT INTO `mall_region` VALUES ('204', '14', '邵阳', '2', '0');
INSERT INTO `mall_region` VALUES ('205', '14', '湘潭', '2', '0');
INSERT INTO `mall_region` VALUES ('206', '14', '湘西', '2', '0');
INSERT INTO `mall_region` VALUES ('207', '14', '益阳', '2', '0');
INSERT INTO `mall_region` VALUES ('208', '14', '永州', '2', '0');
INSERT INTO `mall_region` VALUES ('209', '14', '岳阳', '2', '0');
INSERT INTO `mall_region` VALUES ('210', '14', '株洲', '2', '0');
INSERT INTO `mall_region` VALUES ('211', '15', '长春', '2', '0');
INSERT INTO `mall_region` VALUES ('212', '15', '吉林', '2', '0');
INSERT INTO `mall_region` VALUES ('213', '15', '白城', '2', '0');
INSERT INTO `mall_region` VALUES ('214', '15', '白山', '2', '0');
INSERT INTO `mall_region` VALUES ('215', '15', '辽源', '2', '0');
INSERT INTO `mall_region` VALUES ('216', '15', '四平', '2', '0');
INSERT INTO `mall_region` VALUES ('217', '15', '松原', '2', '0');
INSERT INTO `mall_region` VALUES ('218', '15', '通化', '2', '0');
INSERT INTO `mall_region` VALUES ('219', '15', '延边', '2', '0');
INSERT INTO `mall_region` VALUES ('220', '16', '南京', '2', '0');
INSERT INTO `mall_region` VALUES ('221', '16', '苏州', '2', '0');
INSERT INTO `mall_region` VALUES ('222', '16', '无锡', '2', '0');
INSERT INTO `mall_region` VALUES ('223', '16', '常州', '2', '0');
INSERT INTO `mall_region` VALUES ('224', '16', '淮安', '2', '0');
INSERT INTO `mall_region` VALUES ('225', '16', '连云港', '2', '0');
INSERT INTO `mall_region` VALUES ('226', '16', '南通', '2', '0');
INSERT INTO `mall_region` VALUES ('227', '16', '宿迁', '2', '0');
INSERT INTO `mall_region` VALUES ('228', '16', '泰州', '2', '0');
INSERT INTO `mall_region` VALUES ('229', '16', '徐州', '2', '0');
INSERT INTO `mall_region` VALUES ('230', '16', '盐城', '2', '0');
INSERT INTO `mall_region` VALUES ('231', '16', '扬州', '2', '0');
INSERT INTO `mall_region` VALUES ('232', '16', '镇江', '2', '0');
INSERT INTO `mall_region` VALUES ('233', '17', '南昌', '2', '0');
INSERT INTO `mall_region` VALUES ('234', '17', '抚州', '2', '0');
INSERT INTO `mall_region` VALUES ('235', '17', '赣州', '2', '0');
INSERT INTO `mall_region` VALUES ('236', '17', '吉安', '2', '0');
INSERT INTO `mall_region` VALUES ('237', '17', '景德镇', '2', '0');
INSERT INTO `mall_region` VALUES ('238', '17', '九江', '2', '0');
INSERT INTO `mall_region` VALUES ('239', '17', '萍乡', '2', '0');
INSERT INTO `mall_region` VALUES ('240', '17', '上饶', '2', '0');
INSERT INTO `mall_region` VALUES ('241', '17', '新余', '2', '0');
INSERT INTO `mall_region` VALUES ('242', '17', '宜春', '2', '0');
INSERT INTO `mall_region` VALUES ('243', '17', '鹰潭', '2', '0');
INSERT INTO `mall_region` VALUES ('244', '18', '沈阳', '2', '0');
INSERT INTO `mall_region` VALUES ('245', '18', '大连', '2', '0');
INSERT INTO `mall_region` VALUES ('246', '18', '鞍山', '2', '0');
INSERT INTO `mall_region` VALUES ('247', '18', '本溪', '2', '0');
INSERT INTO `mall_region` VALUES ('248', '18', '朝阳', '2', '0');
INSERT INTO `mall_region` VALUES ('249', '18', '丹东', '2', '0');
INSERT INTO `mall_region` VALUES ('250', '18', '抚顺', '2', '0');
INSERT INTO `mall_region` VALUES ('251', '18', '阜新', '2', '0');
INSERT INTO `mall_region` VALUES ('252', '18', '葫芦岛', '2', '0');
INSERT INTO `mall_region` VALUES ('253', '18', '锦州', '2', '0');
INSERT INTO `mall_region` VALUES ('254', '18', '辽阳', '2', '0');
INSERT INTO `mall_region` VALUES ('255', '18', '盘锦', '2', '0');
INSERT INTO `mall_region` VALUES ('256', '18', '铁岭', '2', '0');
INSERT INTO `mall_region` VALUES ('257', '18', '营口', '2', '0');
INSERT INTO `mall_region` VALUES ('258', '19', '呼和浩特', '2', '0');
INSERT INTO `mall_region` VALUES ('259', '19', '阿拉善盟', '2', '0');
INSERT INTO `mall_region` VALUES ('260', '19', '巴彦淖尔盟', '2', '0');
INSERT INTO `mall_region` VALUES ('261', '19', '包头', '2', '0');
INSERT INTO `mall_region` VALUES ('262', '19', '赤峰', '2', '0');
INSERT INTO `mall_region` VALUES ('263', '19', '鄂尔多斯', '2', '0');
INSERT INTO `mall_region` VALUES ('264', '19', '呼伦贝尔', '2', '0');
INSERT INTO `mall_region` VALUES ('265', '19', '通辽', '2', '0');
INSERT INTO `mall_region` VALUES ('266', '19', '乌海', '2', '0');
INSERT INTO `mall_region` VALUES ('267', '19', '乌兰察布市', '2', '0');
INSERT INTO `mall_region` VALUES ('268', '19', '锡林郭勒盟', '2', '0');
INSERT INTO `mall_region` VALUES ('269', '19', '兴安盟', '2', '0');
INSERT INTO `mall_region` VALUES ('270', '20', '银川', '2', '0');
INSERT INTO `mall_region` VALUES ('271', '20', '固原', '2', '0');
INSERT INTO `mall_region` VALUES ('272', '20', '石嘴山', '2', '0');
INSERT INTO `mall_region` VALUES ('273', '20', '吴忠', '2', '0');
INSERT INTO `mall_region` VALUES ('274', '20', '中卫', '2', '0');
INSERT INTO `mall_region` VALUES ('275', '21', '西宁', '2', '0');
INSERT INTO `mall_region` VALUES ('276', '21', '果洛', '2', '0');
INSERT INTO `mall_region` VALUES ('277', '21', '海北', '2', '0');
INSERT INTO `mall_region` VALUES ('278', '21', '海东', '2', '0');
INSERT INTO `mall_region` VALUES ('279', '21', '海南', '2', '0');
INSERT INTO `mall_region` VALUES ('280', '21', '海西', '2', '0');
INSERT INTO `mall_region` VALUES ('281', '21', '黄南', '2', '0');
INSERT INTO `mall_region` VALUES ('282', '21', '玉树', '2', '0');
INSERT INTO `mall_region` VALUES ('283', '22', '济南', '2', '0');
INSERT INTO `mall_region` VALUES ('284', '22', '青岛', '2', '0');
INSERT INTO `mall_region` VALUES ('285', '22', '滨州', '2', '0');
INSERT INTO `mall_region` VALUES ('286', '22', '德州', '2', '0');
INSERT INTO `mall_region` VALUES ('287', '22', '东营', '2', '0');
INSERT INTO `mall_region` VALUES ('288', '22', '菏泽', '2', '0');
INSERT INTO `mall_region` VALUES ('289', '22', '济宁', '2', '0');
INSERT INTO `mall_region` VALUES ('290', '22', '莱芜', '2', '0');
INSERT INTO `mall_region` VALUES ('291', '22', '聊城', '2', '0');
INSERT INTO `mall_region` VALUES ('292', '22', '临沂', '2', '0');
INSERT INTO `mall_region` VALUES ('293', '22', '日照', '2', '0');
INSERT INTO `mall_region` VALUES ('294', '22', '泰安', '2', '0');
INSERT INTO `mall_region` VALUES ('295', '22', '威海', '2', '0');
INSERT INTO `mall_region` VALUES ('296', '22', '潍坊', '2', '0');
INSERT INTO `mall_region` VALUES ('297', '22', '烟台', '2', '0');
INSERT INTO `mall_region` VALUES ('298', '22', '枣庄', '2', '0');
INSERT INTO `mall_region` VALUES ('299', '22', '淄博', '2', '0');
INSERT INTO `mall_region` VALUES ('300', '23', '太原', '2', '0');
INSERT INTO `mall_region` VALUES ('301', '23', '长治', '2', '0');
INSERT INTO `mall_region` VALUES ('302', '23', '大同', '2', '0');
INSERT INTO `mall_region` VALUES ('303', '23', '晋城', '2', '0');
INSERT INTO `mall_region` VALUES ('304', '23', '晋中', '2', '0');
INSERT INTO `mall_region` VALUES ('305', '23', '临汾', '2', '0');
INSERT INTO `mall_region` VALUES ('306', '23', '吕梁', '2', '0');
INSERT INTO `mall_region` VALUES ('307', '23', '朔州', '2', '0');
INSERT INTO `mall_region` VALUES ('308', '23', '忻州', '2', '0');
INSERT INTO `mall_region` VALUES ('309', '23', '阳泉', '2', '0');
INSERT INTO `mall_region` VALUES ('310', '23', '运城', '2', '0');
INSERT INTO `mall_region` VALUES ('311', '24', '西安', '2', '0');
INSERT INTO `mall_region` VALUES ('312', '24', '安康', '2', '0');
INSERT INTO `mall_region` VALUES ('313', '24', '宝鸡', '2', '0');
INSERT INTO `mall_region` VALUES ('314', '24', '汉中', '2', '0');
INSERT INTO `mall_region` VALUES ('315', '24', '商洛', '2', '0');
INSERT INTO `mall_region` VALUES ('316', '24', '铜川', '2', '0');
INSERT INTO `mall_region` VALUES ('317', '24', '渭南', '2', '0');
INSERT INTO `mall_region` VALUES ('318', '24', '咸阳', '2', '0');
INSERT INTO `mall_region` VALUES ('319', '24', '延安', '2', '0');
INSERT INTO `mall_region` VALUES ('320', '24', '榆林', '2', '0');
INSERT INTO `mall_region` VALUES ('321', '25', '上海', '2', '0');
INSERT INTO `mall_region` VALUES ('322', '26', '成都', '2', '0');
INSERT INTO `mall_region` VALUES ('323', '26', '绵阳', '2', '0');
INSERT INTO `mall_region` VALUES ('324', '26', '阿坝', '2', '0');
INSERT INTO `mall_region` VALUES ('325', '26', '巴中', '2', '0');
INSERT INTO `mall_region` VALUES ('326', '26', '达州', '2', '0');
INSERT INTO `mall_region` VALUES ('327', '26', '德阳', '2', '0');
INSERT INTO `mall_region` VALUES ('328', '26', '甘孜', '2', '0');
INSERT INTO `mall_region` VALUES ('329', '26', '广安', '2', '0');
INSERT INTO `mall_region` VALUES ('330', '26', '广元', '2', '0');
INSERT INTO `mall_region` VALUES ('331', '26', '乐山', '2', '0');
INSERT INTO `mall_region` VALUES ('332', '26', '凉山', '2', '0');
INSERT INTO `mall_region` VALUES ('333', '26', '眉山', '2', '0');
INSERT INTO `mall_region` VALUES ('334', '26', '南充', '2', '0');
INSERT INTO `mall_region` VALUES ('335', '26', '内江', '2', '0');
INSERT INTO `mall_region` VALUES ('336', '26', '攀枝花', '2', '0');
INSERT INTO `mall_region` VALUES ('337', '26', '遂宁', '2', '0');
INSERT INTO `mall_region` VALUES ('338', '26', '雅安', '2', '0');
INSERT INTO `mall_region` VALUES ('339', '26', '宜宾', '2', '0');
INSERT INTO `mall_region` VALUES ('340', '26', '资阳', '2', '0');
INSERT INTO `mall_region` VALUES ('341', '26', '自贡', '2', '0');
INSERT INTO `mall_region` VALUES ('342', '26', '泸州', '2', '0');
INSERT INTO `mall_region` VALUES ('343', '27', '天津', '2', '0');
INSERT INTO `mall_region` VALUES ('344', '28', '拉萨', '2', '0');
INSERT INTO `mall_region` VALUES ('345', '28', '阿里', '2', '0');
INSERT INTO `mall_region` VALUES ('346', '28', '昌都', '2', '0');
INSERT INTO `mall_region` VALUES ('347', '28', '林芝', '2', '0');
INSERT INTO `mall_region` VALUES ('348', '28', '那曲', '2', '0');
INSERT INTO `mall_region` VALUES ('349', '28', '日喀则', '2', '0');
INSERT INTO `mall_region` VALUES ('350', '28', '山南', '2', '0');
INSERT INTO `mall_region` VALUES ('351', '29', '乌鲁木齐', '2', '0');
INSERT INTO `mall_region` VALUES ('352', '29', '阿克苏', '2', '0');
INSERT INTO `mall_region` VALUES ('353', '29', '阿拉尔', '2', '0');
INSERT INTO `mall_region` VALUES ('354', '29', '巴音郭楞', '2', '0');
INSERT INTO `mall_region` VALUES ('355', '29', '博尔塔拉', '2', '0');
INSERT INTO `mall_region` VALUES ('356', '29', '昌吉', '2', '0');
INSERT INTO `mall_region` VALUES ('357', '29', '哈密', '2', '0');
INSERT INTO `mall_region` VALUES ('358', '29', '和田', '2', '0');
INSERT INTO `mall_region` VALUES ('359', '29', '喀什', '2', '0');
INSERT INTO `mall_region` VALUES ('360', '29', '克拉玛依', '2', '0');
INSERT INTO `mall_region` VALUES ('361', '29', '克孜勒苏', '2', '0');
INSERT INTO `mall_region` VALUES ('362', '29', '石河子', '2', '0');
INSERT INTO `mall_region` VALUES ('363', '29', '图木舒克', '2', '0');
INSERT INTO `mall_region` VALUES ('364', '29', '吐鲁番', '2', '0');
INSERT INTO `mall_region` VALUES ('365', '29', '五家渠', '2', '0');
INSERT INTO `mall_region` VALUES ('366', '29', '伊犁', '2', '0');
INSERT INTO `mall_region` VALUES ('367', '30', '昆明', '2', '0');
INSERT INTO `mall_region` VALUES ('368', '30', '怒江', '2', '0');
INSERT INTO `mall_region` VALUES ('369', '30', '普洱', '2', '0');
INSERT INTO `mall_region` VALUES ('370', '30', '丽江', '2', '0');
INSERT INTO `mall_region` VALUES ('371', '30', '保山', '2', '0');
INSERT INTO `mall_region` VALUES ('372', '30', '楚雄', '2', '0');
INSERT INTO `mall_region` VALUES ('373', '30', '大理', '2', '0');
INSERT INTO `mall_region` VALUES ('374', '30', '德宏', '2', '0');
INSERT INTO `mall_region` VALUES ('375', '30', '迪庆', '2', '0');
INSERT INTO `mall_region` VALUES ('376', '30', '红河', '2', '0');
INSERT INTO `mall_region` VALUES ('377', '30', '临沧', '2', '0');
INSERT INTO `mall_region` VALUES ('378', '30', '曲靖', '2', '0');
INSERT INTO `mall_region` VALUES ('379', '30', '文山', '2', '0');
INSERT INTO `mall_region` VALUES ('380', '30', '西双版纳', '2', '0');
INSERT INTO `mall_region` VALUES ('381', '30', '玉溪', '2', '0');
INSERT INTO `mall_region` VALUES ('382', '30', '昭通', '2', '0');
INSERT INTO `mall_region` VALUES ('383', '31', '杭州', '2', '0');
INSERT INTO `mall_region` VALUES ('384', '31', '湖州', '2', '0');
INSERT INTO `mall_region` VALUES ('385', '31', '嘉兴', '2', '0');
INSERT INTO `mall_region` VALUES ('386', '31', '金华', '2', '0');
INSERT INTO `mall_region` VALUES ('387', '31', '丽水', '2', '0');
INSERT INTO `mall_region` VALUES ('388', '31', '宁波', '2', '0');
INSERT INTO `mall_region` VALUES ('389', '31', '绍兴', '2', '0');
INSERT INTO `mall_region` VALUES ('390', '31', '台州', '2', '0');
INSERT INTO `mall_region` VALUES ('391', '31', '温州', '2', '0');
INSERT INTO `mall_region` VALUES ('392', '31', '舟山', '2', '0');
INSERT INTO `mall_region` VALUES ('393', '31', '衢州', '2', '0');
INSERT INTO `mall_region` VALUES ('394', '32', '重庆', '2', '0');
INSERT INTO `mall_region` VALUES ('395', '33', '香港', '2', '0');
INSERT INTO `mall_region` VALUES ('396', '34', '澳门', '2', '0');
INSERT INTO `mall_region` VALUES ('397', '35', '台湾', '2', '0');
INSERT INTO `mall_region` VALUES ('398', '36', '迎江区', '3', '0');
INSERT INTO `mall_region` VALUES ('399', '36', '大观区', '3', '0');
INSERT INTO `mall_region` VALUES ('400', '36', '宜秀区', '3', '0');
INSERT INTO `mall_region` VALUES ('401', '36', '桐城市', '3', '0');
INSERT INTO `mall_region` VALUES ('402', '36', '怀宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('403', '36', '枞阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('404', '36', '潜山县', '3', '0');
INSERT INTO `mall_region` VALUES ('405', '36', '太湖县', '3', '0');
INSERT INTO `mall_region` VALUES ('406', '36', '宿松县', '3', '0');
INSERT INTO `mall_region` VALUES ('407', '36', '望江县', '3', '0');
INSERT INTO `mall_region` VALUES ('408', '36', '岳西县', '3', '0');
INSERT INTO `mall_region` VALUES ('409', '37', '中市区', '3', '0');
INSERT INTO `mall_region` VALUES ('410', '37', '东市区', '3', '0');
INSERT INTO `mall_region` VALUES ('411', '37', '西市区', '3', '0');
INSERT INTO `mall_region` VALUES ('412', '37', '郊区', '3', '0');
INSERT INTO `mall_region` VALUES ('413', '37', '怀远县', '3', '0');
INSERT INTO `mall_region` VALUES ('414', '37', '五河县', '3', '0');
INSERT INTO `mall_region` VALUES ('415', '37', '固镇县', '3', '0');
INSERT INTO `mall_region` VALUES ('416', '38', '居巢区', '3', '0');
INSERT INTO `mall_region` VALUES ('417', '38', '庐江县', '3', '0');
INSERT INTO `mall_region` VALUES ('418', '38', '无为县', '3', '0');
INSERT INTO `mall_region` VALUES ('419', '38', '含山县', '3', '0');
INSERT INTO `mall_region` VALUES ('420', '38', '和县', '3', '0');
INSERT INTO `mall_region` VALUES ('421', '39', '贵池区', '3', '0');
INSERT INTO `mall_region` VALUES ('422', '39', '东至县', '3', '0');
INSERT INTO `mall_region` VALUES ('423', '39', '石台县', '3', '0');
INSERT INTO `mall_region` VALUES ('424', '39', '青阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('425', '40', '琅琊区', '3', '0');
INSERT INTO `mall_region` VALUES ('426', '40', '南谯区', '3', '0');
INSERT INTO `mall_region` VALUES ('427', '40', '天长市', '3', '0');
INSERT INTO `mall_region` VALUES ('428', '40', '明光市', '3', '0');
INSERT INTO `mall_region` VALUES ('429', '40', '来安县', '3', '0');
INSERT INTO `mall_region` VALUES ('430', '40', '全椒县', '3', '0');
INSERT INTO `mall_region` VALUES ('431', '40', '定远县', '3', '0');
INSERT INTO `mall_region` VALUES ('432', '40', '凤阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('433', '41', '蚌山区', '3', '0');
INSERT INTO `mall_region` VALUES ('434', '41', '龙子湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('435', '41', '禹会区', '3', '0');
INSERT INTO `mall_region` VALUES ('436', '41', '淮上区', '3', '0');
INSERT INTO `mall_region` VALUES ('437', '41', '颍州区', '3', '0');
INSERT INTO `mall_region` VALUES ('438', '41', '颍东区', '3', '0');
INSERT INTO `mall_region` VALUES ('439', '41', '颍泉区', '3', '0');
INSERT INTO `mall_region` VALUES ('440', '41', '界首市', '3', '0');
INSERT INTO `mall_region` VALUES ('441', '41', '临泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('442', '41', '太和县', '3', '0');
INSERT INTO `mall_region` VALUES ('443', '41', '阜南县', '3', '0');
INSERT INTO `mall_region` VALUES ('444', '41', '颖上县', '3', '0');
INSERT INTO `mall_region` VALUES ('445', '42', '相山区', '3', '0');
INSERT INTO `mall_region` VALUES ('446', '42', '杜集区', '3', '0');
INSERT INTO `mall_region` VALUES ('447', '42', '烈山区', '3', '0');
INSERT INTO `mall_region` VALUES ('448', '42', '濉溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('449', '43', '田家庵区', '3', '0');
INSERT INTO `mall_region` VALUES ('450', '43', '大通区', '3', '0');
INSERT INTO `mall_region` VALUES ('451', '43', '谢家集区', '3', '0');
INSERT INTO `mall_region` VALUES ('452', '43', '八公山区', '3', '0');
INSERT INTO `mall_region` VALUES ('453', '43', '潘集区', '3', '0');
INSERT INTO `mall_region` VALUES ('454', '43', '凤台县', '3', '0');
INSERT INTO `mall_region` VALUES ('455', '44', '屯溪区', '3', '0');
INSERT INTO `mall_region` VALUES ('456', '44', '黄山区', '3', '0');
INSERT INTO `mall_region` VALUES ('457', '44', '徽州区', '3', '0');
INSERT INTO `mall_region` VALUES ('458', '44', '歙县', '3', '0');
INSERT INTO `mall_region` VALUES ('459', '44', '休宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('460', '44', '黟县', '3', '0');
INSERT INTO `mall_region` VALUES ('461', '44', '祁门县', '3', '0');
INSERT INTO `mall_region` VALUES ('462', '45', '金安区', '3', '0');
INSERT INTO `mall_region` VALUES ('463', '45', '裕安区', '3', '0');
INSERT INTO `mall_region` VALUES ('464', '45', '寿县', '3', '0');
INSERT INTO `mall_region` VALUES ('465', '45', '霍邱县', '3', '0');
INSERT INTO `mall_region` VALUES ('466', '45', '舒城县', '3', '0');
INSERT INTO `mall_region` VALUES ('467', '45', '金寨县', '3', '0');
INSERT INTO `mall_region` VALUES ('468', '45', '霍山县', '3', '0');
INSERT INTO `mall_region` VALUES ('469', '46', '雨山区', '3', '0');
INSERT INTO `mall_region` VALUES ('470', '46', '花山区', '3', '0');
INSERT INTO `mall_region` VALUES ('471', '46', '金家庄区', '3', '0');
INSERT INTO `mall_region` VALUES ('472', '46', '当涂县', '3', '0');
INSERT INTO `mall_region` VALUES ('473', '47', '埇桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('474', '47', '砀山县', '3', '0');
INSERT INTO `mall_region` VALUES ('475', '47', '萧县', '3', '0');
INSERT INTO `mall_region` VALUES ('476', '47', '灵璧县', '3', '0');
INSERT INTO `mall_region` VALUES ('477', '47', '泗县', '3', '0');
INSERT INTO `mall_region` VALUES ('478', '48', '铜官山区', '3', '0');
INSERT INTO `mall_region` VALUES ('479', '48', '狮子山区', '3', '0');
INSERT INTO `mall_region` VALUES ('480', '48', '郊区', '3', '0');
INSERT INTO `mall_region` VALUES ('481', '48', '铜陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('482', '49', '镜湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('483', '49', '弋江区', '3', '0');
INSERT INTO `mall_region` VALUES ('484', '49', '鸠江区', '3', '0');
INSERT INTO `mall_region` VALUES ('485', '49', '三山区', '3', '0');
INSERT INTO `mall_region` VALUES ('486', '49', '芜湖县', '3', '0');
INSERT INTO `mall_region` VALUES ('487', '49', '繁昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('488', '49', '南陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('489', '50', '宣州区', '3', '0');
INSERT INTO `mall_region` VALUES ('490', '50', '宁国市', '3', '0');
INSERT INTO `mall_region` VALUES ('491', '50', '郎溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('492', '50', '广德县', '3', '0');
INSERT INTO `mall_region` VALUES ('493', '50', '泾县', '3', '0');
INSERT INTO `mall_region` VALUES ('494', '50', '绩溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('495', '50', '旌德县', '3', '0');
INSERT INTO `mall_region` VALUES ('496', '51', '涡阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('497', '51', '蒙城县', '3', '0');
INSERT INTO `mall_region` VALUES ('498', '51', '利辛县', '3', '0');
INSERT INTO `mall_region` VALUES ('499', '51', '谯城区', '3', '0');
INSERT INTO `mall_region` VALUES ('500', '52', '东城区', '3', '0');
INSERT INTO `mall_region` VALUES ('501', '52', '西城区', '3', '0');
INSERT INTO `mall_region` VALUES ('502', '52', '海淀区', '3', '0');
INSERT INTO `mall_region` VALUES ('503', '52', '朝阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('504', '52', '崇文区', '3', '0');
INSERT INTO `mall_region` VALUES ('505', '52', '宣武区', '3', '0');
INSERT INTO `mall_region` VALUES ('506', '52', '丰台区', '3', '0');
INSERT INTO `mall_region` VALUES ('507', '52', '石景山区', '3', '0');
INSERT INTO `mall_region` VALUES ('508', '52', '房山区', '3', '0');
INSERT INTO `mall_region` VALUES ('509', '52', '门头沟区', '3', '0');
INSERT INTO `mall_region` VALUES ('510', '52', '通州区', '3', '0');
INSERT INTO `mall_region` VALUES ('511', '52', '顺义区', '3', '0');
INSERT INTO `mall_region` VALUES ('512', '52', '昌平区', '3', '0');
INSERT INTO `mall_region` VALUES ('513', '52', '怀柔区', '3', '0');
INSERT INTO `mall_region` VALUES ('514', '52', '平谷区', '3', '0');
INSERT INTO `mall_region` VALUES ('515', '52', '大兴区', '3', '0');
INSERT INTO `mall_region` VALUES ('516', '52', '密云县', '3', '0');
INSERT INTO `mall_region` VALUES ('517', '52', '延庆县', '3', '0');
INSERT INTO `mall_region` VALUES ('518', '53', '鼓楼区', '3', '0');
INSERT INTO `mall_region` VALUES ('519', '53', '台江区', '3', '0');
INSERT INTO `mall_region` VALUES ('520', '53', '仓山区', '3', '0');
INSERT INTO `mall_region` VALUES ('521', '53', '马尾区', '3', '0');
INSERT INTO `mall_region` VALUES ('522', '53', '晋安区', '3', '0');
INSERT INTO `mall_region` VALUES ('523', '53', '福清市', '3', '0');
INSERT INTO `mall_region` VALUES ('524', '53', '长乐市', '3', '0');
INSERT INTO `mall_region` VALUES ('525', '53', '闽侯县', '3', '0');
INSERT INTO `mall_region` VALUES ('526', '53', '连江县', '3', '0');
INSERT INTO `mall_region` VALUES ('527', '53', '罗源县', '3', '0');
INSERT INTO `mall_region` VALUES ('528', '53', '闽清县', '3', '0');
INSERT INTO `mall_region` VALUES ('529', '53', '永泰县', '3', '0');
INSERT INTO `mall_region` VALUES ('530', '53', '平潭县', '3', '0');
INSERT INTO `mall_region` VALUES ('531', '54', '新罗区', '3', '0');
INSERT INTO `mall_region` VALUES ('532', '54', '漳平市', '3', '0');
INSERT INTO `mall_region` VALUES ('533', '54', '长汀县', '3', '0');
INSERT INTO `mall_region` VALUES ('534', '54', '永定县', '3', '0');
INSERT INTO `mall_region` VALUES ('535', '54', '上杭县', '3', '0');
INSERT INTO `mall_region` VALUES ('536', '54', '武平县', '3', '0');
INSERT INTO `mall_region` VALUES ('537', '54', '连城县', '3', '0');
INSERT INTO `mall_region` VALUES ('538', '55', '延平区', '3', '0');
INSERT INTO `mall_region` VALUES ('539', '55', '邵武市', '3', '0');
INSERT INTO `mall_region` VALUES ('540', '55', '武夷山市', '3', '0');
INSERT INTO `mall_region` VALUES ('541', '55', '建瓯市', '3', '0');
INSERT INTO `mall_region` VALUES ('542', '55', '建阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('543', '55', '顺昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('544', '55', '浦城县', '3', '0');
INSERT INTO `mall_region` VALUES ('545', '55', '光泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('546', '55', '松溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('547', '55', '政和县', '3', '0');
INSERT INTO `mall_region` VALUES ('548', '56', '蕉城区', '3', '0');
INSERT INTO `mall_region` VALUES ('549', '56', '福安市', '3', '0');
INSERT INTO `mall_region` VALUES ('550', '56', '福鼎市', '3', '0');
INSERT INTO `mall_region` VALUES ('551', '56', '霞浦县', '3', '0');
INSERT INTO `mall_region` VALUES ('552', '56', '古田县', '3', '0');
INSERT INTO `mall_region` VALUES ('553', '56', '屏南县', '3', '0');
INSERT INTO `mall_region` VALUES ('554', '56', '寿宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('555', '56', '周宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('556', '56', '柘荣县', '3', '0');
INSERT INTO `mall_region` VALUES ('557', '57', '城厢区', '3', '0');
INSERT INTO `mall_region` VALUES ('558', '57', '涵江区', '3', '0');
INSERT INTO `mall_region` VALUES ('559', '57', '荔城区', '3', '0');
INSERT INTO `mall_region` VALUES ('560', '57', '秀屿区', '3', '0');
INSERT INTO `mall_region` VALUES ('561', '57', '仙游县', '3', '0');
INSERT INTO `mall_region` VALUES ('562', '58', '鲤城区', '3', '0');
INSERT INTO `mall_region` VALUES ('563', '58', '丰泽区', '3', '0');
INSERT INTO `mall_region` VALUES ('564', '58', '洛江区', '3', '0');
INSERT INTO `mall_region` VALUES ('565', '58', '清濛开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('566', '58', '泉港区', '3', '0');
INSERT INTO `mall_region` VALUES ('567', '58', '石狮市', '3', '0');
INSERT INTO `mall_region` VALUES ('568', '58', '晋江市', '3', '0');
INSERT INTO `mall_region` VALUES ('569', '58', '南安市', '3', '0');
INSERT INTO `mall_region` VALUES ('570', '58', '惠安县', '3', '0');
INSERT INTO `mall_region` VALUES ('571', '58', '安溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('572', '58', '永春县', '3', '0');
INSERT INTO `mall_region` VALUES ('573', '58', '德化县', '3', '0');
INSERT INTO `mall_region` VALUES ('574', '58', '金门县', '3', '0');
INSERT INTO `mall_region` VALUES ('575', '59', '梅列区', '3', '0');
INSERT INTO `mall_region` VALUES ('576', '59', '三元区', '3', '0');
INSERT INTO `mall_region` VALUES ('577', '59', '永安市', '3', '0');
INSERT INTO `mall_region` VALUES ('578', '59', '明溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('579', '59', '清流县', '3', '0');
INSERT INTO `mall_region` VALUES ('580', '59', '宁化县', '3', '0');
INSERT INTO `mall_region` VALUES ('581', '59', '大田县', '3', '0');
INSERT INTO `mall_region` VALUES ('582', '59', '尤溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('583', '59', '沙县', '3', '0');
INSERT INTO `mall_region` VALUES ('584', '59', '将乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('585', '59', '泰宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('586', '59', '建宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('587', '60', '思明区', '3', '0');
INSERT INTO `mall_region` VALUES ('588', '60', '海沧区', '3', '0');
INSERT INTO `mall_region` VALUES ('589', '60', '湖里区', '3', '0');
INSERT INTO `mall_region` VALUES ('590', '60', '集美区', '3', '0');
INSERT INTO `mall_region` VALUES ('591', '60', '同安区', '3', '0');
INSERT INTO `mall_region` VALUES ('592', '60', '翔安区', '3', '0');
INSERT INTO `mall_region` VALUES ('593', '61', '芗城区', '3', '0');
INSERT INTO `mall_region` VALUES ('594', '61', '龙文区', '3', '0');
INSERT INTO `mall_region` VALUES ('595', '61', '龙海市', '3', '0');
INSERT INTO `mall_region` VALUES ('596', '61', '云霄县', '3', '0');
INSERT INTO `mall_region` VALUES ('597', '61', '漳浦县', '3', '0');
INSERT INTO `mall_region` VALUES ('598', '61', '诏安县', '3', '0');
INSERT INTO `mall_region` VALUES ('599', '61', '长泰县', '3', '0');
INSERT INTO `mall_region` VALUES ('600', '61', '东山县', '3', '0');
INSERT INTO `mall_region` VALUES ('601', '61', '南靖县', '3', '0');
INSERT INTO `mall_region` VALUES ('602', '61', '平和县', '3', '0');
INSERT INTO `mall_region` VALUES ('603', '61', '华安县', '3', '0');
INSERT INTO `mall_region` VALUES ('604', '62', '皋兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('605', '62', '城关区', '3', '0');
INSERT INTO `mall_region` VALUES ('606', '62', '七里河区', '3', '0');
INSERT INTO `mall_region` VALUES ('607', '62', '西固区', '3', '0');
INSERT INTO `mall_region` VALUES ('608', '62', '安宁区', '3', '0');
INSERT INTO `mall_region` VALUES ('609', '62', '红古区', '3', '0');
INSERT INTO `mall_region` VALUES ('610', '62', '永登县', '3', '0');
INSERT INTO `mall_region` VALUES ('611', '62', '榆中县', '3', '0');
INSERT INTO `mall_region` VALUES ('612', '63', '白银区', '3', '0');
INSERT INTO `mall_region` VALUES ('613', '63', '平川区', '3', '0');
INSERT INTO `mall_region` VALUES ('614', '63', '会宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('615', '63', '景泰县', '3', '0');
INSERT INTO `mall_region` VALUES ('616', '63', '靖远县', '3', '0');
INSERT INTO `mall_region` VALUES ('617', '64', '临洮县', '3', '0');
INSERT INTO `mall_region` VALUES ('618', '64', '陇西县', '3', '0');
INSERT INTO `mall_region` VALUES ('619', '64', '通渭县', '3', '0');
INSERT INTO `mall_region` VALUES ('620', '64', '渭源县', '3', '0');
INSERT INTO `mall_region` VALUES ('621', '64', '漳县', '3', '0');
INSERT INTO `mall_region` VALUES ('622', '64', '岷县', '3', '0');
INSERT INTO `mall_region` VALUES ('623', '64', '安定区', '3', '0');
INSERT INTO `mall_region` VALUES ('624', '64', '安定区', '3', '0');
INSERT INTO `mall_region` VALUES ('625', '65', '合作市', '3', '0');
INSERT INTO `mall_region` VALUES ('626', '65', '临潭县', '3', '0');
INSERT INTO `mall_region` VALUES ('627', '65', '卓尼县', '3', '0');
INSERT INTO `mall_region` VALUES ('628', '65', '舟曲县', '3', '0');
INSERT INTO `mall_region` VALUES ('629', '65', '迭部县', '3', '0');
INSERT INTO `mall_region` VALUES ('630', '65', '玛曲县', '3', '0');
INSERT INTO `mall_region` VALUES ('631', '65', '碌曲县', '3', '0');
INSERT INTO `mall_region` VALUES ('632', '65', '夏河县', '3', '0');
INSERT INTO `mall_region` VALUES ('633', '66', '嘉峪关市', '3', '0');
INSERT INTO `mall_region` VALUES ('634', '67', '金川区', '3', '0');
INSERT INTO `mall_region` VALUES ('635', '67', '永昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('636', '68', '肃州区', '3', '0');
INSERT INTO `mall_region` VALUES ('637', '68', '玉门市', '3', '0');
INSERT INTO `mall_region` VALUES ('638', '68', '敦煌市', '3', '0');
INSERT INTO `mall_region` VALUES ('639', '68', '金塔县', '3', '0');
INSERT INTO `mall_region` VALUES ('640', '68', '瓜州县', '3', '0');
INSERT INTO `mall_region` VALUES ('641', '68', '肃北', '3', '0');
INSERT INTO `mall_region` VALUES ('642', '68', '阿克塞', '3', '0');
INSERT INTO `mall_region` VALUES ('643', '69', '临夏市', '3', '0');
INSERT INTO `mall_region` VALUES ('644', '69', '临夏县', '3', '0');
INSERT INTO `mall_region` VALUES ('645', '69', '康乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('646', '69', '永靖县', '3', '0');
INSERT INTO `mall_region` VALUES ('647', '69', '广河县', '3', '0');
INSERT INTO `mall_region` VALUES ('648', '69', '和政县', '3', '0');
INSERT INTO `mall_region` VALUES ('649', '69', '东乡族自治县', '3', '0');
INSERT INTO `mall_region` VALUES ('650', '69', '积石山', '3', '0');
INSERT INTO `mall_region` VALUES ('651', '70', '成县', '3', '0');
INSERT INTO `mall_region` VALUES ('652', '70', '徽县', '3', '0');
INSERT INTO `mall_region` VALUES ('653', '70', '康县', '3', '0');
INSERT INTO `mall_region` VALUES ('654', '70', '礼县', '3', '0');
INSERT INTO `mall_region` VALUES ('655', '70', '两当县', '3', '0');
INSERT INTO `mall_region` VALUES ('656', '70', '文县', '3', '0');
INSERT INTO `mall_region` VALUES ('657', '70', '西和县', '3', '0');
INSERT INTO `mall_region` VALUES ('658', '70', '宕昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('659', '70', '武都区', '3', '0');
INSERT INTO `mall_region` VALUES ('660', '71', '崇信县', '3', '0');
INSERT INTO `mall_region` VALUES ('661', '71', '华亭县', '3', '0');
INSERT INTO `mall_region` VALUES ('662', '71', '静宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('663', '71', '灵台县', '3', '0');
INSERT INTO `mall_region` VALUES ('664', '71', '崆峒区', '3', '0');
INSERT INTO `mall_region` VALUES ('665', '71', '庄浪县', '3', '0');
INSERT INTO `mall_region` VALUES ('666', '71', '泾川县', '3', '0');
INSERT INTO `mall_region` VALUES ('667', '72', '合水县', '3', '0');
INSERT INTO `mall_region` VALUES ('668', '72', '华池县', '3', '0');
INSERT INTO `mall_region` VALUES ('669', '72', '环县', '3', '0');
INSERT INTO `mall_region` VALUES ('670', '72', '宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('671', '72', '庆城县', '3', '0');
INSERT INTO `mall_region` VALUES ('672', '72', '西峰区', '3', '0');
INSERT INTO `mall_region` VALUES ('673', '72', '镇原县', '3', '0');
INSERT INTO `mall_region` VALUES ('674', '72', '正宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('675', '73', '甘谷县', '3', '0');
INSERT INTO `mall_region` VALUES ('676', '73', '秦安县', '3', '0');
INSERT INTO `mall_region` VALUES ('677', '73', '清水县', '3', '0');
INSERT INTO `mall_region` VALUES ('678', '73', '秦州区', '3', '0');
INSERT INTO `mall_region` VALUES ('679', '73', '麦积区', '3', '0');
INSERT INTO `mall_region` VALUES ('680', '73', '武山县', '3', '0');
INSERT INTO `mall_region` VALUES ('681', '73', '张家川', '3', '0');
INSERT INTO `mall_region` VALUES ('682', '74', '古浪县', '3', '0');
INSERT INTO `mall_region` VALUES ('683', '74', '民勤县', '3', '0');
INSERT INTO `mall_region` VALUES ('684', '74', '天祝', '3', '0');
INSERT INTO `mall_region` VALUES ('685', '74', '凉州区', '3', '0');
INSERT INTO `mall_region` VALUES ('686', '75', '高台县', '3', '0');
INSERT INTO `mall_region` VALUES ('687', '75', '临泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('688', '75', '民乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('689', '75', '山丹县', '3', '0');
INSERT INTO `mall_region` VALUES ('690', '75', '肃南', '3', '0');
INSERT INTO `mall_region` VALUES ('691', '75', '甘州区', '3', '0');
INSERT INTO `mall_region` VALUES ('692', '76', '从化市', '3', '0');
INSERT INTO `mall_region` VALUES ('693', '76', '天河区', '3', '0');
INSERT INTO `mall_region` VALUES ('694', '76', '东山区', '3', '0');
INSERT INTO `mall_region` VALUES ('695', '76', '白云区', '3', '0');
INSERT INTO `mall_region` VALUES ('696', '76', '海珠区', '3', '0');
INSERT INTO `mall_region` VALUES ('697', '76', '荔湾区', '3', '0');
INSERT INTO `mall_region` VALUES ('698', '76', '越秀区', '3', '0');
INSERT INTO `mall_region` VALUES ('699', '76', '黄埔区', '3', '0');
INSERT INTO `mall_region` VALUES ('700', '76', '番禺区', '3', '0');
INSERT INTO `mall_region` VALUES ('701', '76', '花都区', '3', '0');
INSERT INTO `mall_region` VALUES ('702', '76', '增城区', '3', '0');
INSERT INTO `mall_region` VALUES ('703', '76', '从化区', '3', '0');
INSERT INTO `mall_region` VALUES ('704', '76', '市郊', '3', '0');
INSERT INTO `mall_region` VALUES ('705', '77', '福田区', '3', '0');
INSERT INTO `mall_region` VALUES ('706', '77', '罗湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('707', '77', '南山区', '3', '0');
INSERT INTO `mall_region` VALUES ('708', '77', '宝安区', '3', '0');
INSERT INTO `mall_region` VALUES ('709', '77', '龙岗区', '3', '0');
INSERT INTO `mall_region` VALUES ('710', '77', '盐田区', '3', '0');
INSERT INTO `mall_region` VALUES ('711', '78', '湘桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('712', '78', '潮安县', '3', '0');
INSERT INTO `mall_region` VALUES ('713', '78', '饶平县', '3', '0');
INSERT INTO `mall_region` VALUES ('714', '79', '南城区', '3', '0');
INSERT INTO `mall_region` VALUES ('715', '79', '东城区', '3', '0');
INSERT INTO `mall_region` VALUES ('716', '79', '万江区', '3', '0');
INSERT INTO `mall_region` VALUES ('717', '79', '莞城区', '3', '0');
INSERT INTO `mall_region` VALUES ('718', '79', '石龙镇', '3', '0');
INSERT INTO `mall_region` VALUES ('719', '79', '虎门镇', '3', '0');
INSERT INTO `mall_region` VALUES ('720', '79', '麻涌镇', '3', '0');
INSERT INTO `mall_region` VALUES ('721', '79', '道滘镇', '3', '0');
INSERT INTO `mall_region` VALUES ('722', '79', '石碣镇', '3', '0');
INSERT INTO `mall_region` VALUES ('723', '79', '沙田镇', '3', '0');
INSERT INTO `mall_region` VALUES ('724', '79', '望牛墩镇', '3', '0');
INSERT INTO `mall_region` VALUES ('725', '79', '洪梅镇', '3', '0');
INSERT INTO `mall_region` VALUES ('726', '79', '茶山镇', '3', '0');
INSERT INTO `mall_region` VALUES ('727', '79', '寮步镇', '3', '0');
INSERT INTO `mall_region` VALUES ('728', '79', '大岭山镇', '3', '0');
INSERT INTO `mall_region` VALUES ('729', '79', '大朗镇', '3', '0');
INSERT INTO `mall_region` VALUES ('730', '79', '黄江镇', '3', '0');
INSERT INTO `mall_region` VALUES ('731', '79', '樟木头', '3', '0');
INSERT INTO `mall_region` VALUES ('732', '79', '凤岗镇', '3', '0');
INSERT INTO `mall_region` VALUES ('733', '79', '塘厦镇', '3', '0');
INSERT INTO `mall_region` VALUES ('734', '79', '谢岗镇', '3', '0');
INSERT INTO `mall_region` VALUES ('735', '79', '厚街镇', '3', '0');
INSERT INTO `mall_region` VALUES ('736', '79', '清溪镇', '3', '0');
INSERT INTO `mall_region` VALUES ('737', '79', '常平镇', '3', '0');
INSERT INTO `mall_region` VALUES ('738', '79', '桥头镇', '3', '0');
INSERT INTO `mall_region` VALUES ('739', '79', '横沥镇', '3', '0');
INSERT INTO `mall_region` VALUES ('740', '79', '东坑镇', '3', '0');
INSERT INTO `mall_region` VALUES ('741', '79', '企石镇', '3', '0');
INSERT INTO `mall_region` VALUES ('742', '79', '石排镇', '3', '0');
INSERT INTO `mall_region` VALUES ('743', '79', '长安镇', '3', '0');
INSERT INTO `mall_region` VALUES ('744', '79', '中堂镇', '3', '0');
INSERT INTO `mall_region` VALUES ('745', '79', '高埗镇', '3', '0');
INSERT INTO `mall_region` VALUES ('746', '80', '禅城区', '3', '0');
INSERT INTO `mall_region` VALUES ('747', '80', '南海区', '3', '0');
INSERT INTO `mall_region` VALUES ('748', '80', '顺德区', '3', '0');
INSERT INTO `mall_region` VALUES ('749', '80', '三水区', '3', '0');
INSERT INTO `mall_region` VALUES ('750', '80', '高明区', '3', '0');
INSERT INTO `mall_region` VALUES ('751', '81', '东源县', '3', '0');
INSERT INTO `mall_region` VALUES ('752', '81', '和平县', '3', '0');
INSERT INTO `mall_region` VALUES ('753', '81', '源城区', '3', '0');
INSERT INTO `mall_region` VALUES ('754', '81', '连平县', '3', '0');
INSERT INTO `mall_region` VALUES ('755', '81', '龙川县', '3', '0');
INSERT INTO `mall_region` VALUES ('756', '81', '紫金县', '3', '0');
INSERT INTO `mall_region` VALUES ('757', '82', '惠阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('758', '82', '惠城区', '3', '0');
INSERT INTO `mall_region` VALUES ('759', '82', '大亚湾', '3', '0');
INSERT INTO `mall_region` VALUES ('760', '82', '博罗县', '3', '0');
INSERT INTO `mall_region` VALUES ('761', '82', '惠东县', '3', '0');
INSERT INTO `mall_region` VALUES ('762', '82', '龙门县', '3', '0');
INSERT INTO `mall_region` VALUES ('763', '83', '江海区', '3', '0');
INSERT INTO `mall_region` VALUES ('764', '83', '蓬江区', '3', '0');
INSERT INTO `mall_region` VALUES ('765', '83', '新会区', '3', '0');
INSERT INTO `mall_region` VALUES ('766', '83', '台山市', '3', '0');
INSERT INTO `mall_region` VALUES ('767', '83', '开平市', '3', '0');
INSERT INTO `mall_region` VALUES ('768', '83', '鹤山市', '3', '0');
INSERT INTO `mall_region` VALUES ('769', '83', '恩平市', '3', '0');
INSERT INTO `mall_region` VALUES ('770', '84', '榕城区', '3', '0');
INSERT INTO `mall_region` VALUES ('771', '84', '普宁市', '3', '0');
INSERT INTO `mall_region` VALUES ('772', '84', '揭东县', '3', '0');
INSERT INTO `mall_region` VALUES ('773', '84', '揭西县', '3', '0');
INSERT INTO `mall_region` VALUES ('774', '84', '惠来县', '3', '0');
INSERT INTO `mall_region` VALUES ('775', '85', '茂南区', '3', '0');
INSERT INTO `mall_region` VALUES ('776', '85', '茂港区', '3', '0');
INSERT INTO `mall_region` VALUES ('777', '85', '高州市', '3', '0');
INSERT INTO `mall_region` VALUES ('778', '85', '化州市', '3', '0');
INSERT INTO `mall_region` VALUES ('779', '85', '信宜市', '3', '0');
INSERT INTO `mall_region` VALUES ('780', '85', '电白县', '3', '0');
INSERT INTO `mall_region` VALUES ('781', '86', '梅县', '3', '0');
INSERT INTO `mall_region` VALUES ('782', '86', '梅江区', '3', '0');
INSERT INTO `mall_region` VALUES ('783', '86', '兴宁市', '3', '0');
INSERT INTO `mall_region` VALUES ('784', '86', '大埔县', '3', '0');
INSERT INTO `mall_region` VALUES ('785', '86', '丰顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('786', '86', '五华县', '3', '0');
INSERT INTO `mall_region` VALUES ('787', '86', '平远县', '3', '0');
INSERT INTO `mall_region` VALUES ('788', '86', '蕉岭县', '3', '0');
INSERT INTO `mall_region` VALUES ('789', '87', '清城区', '3', '0');
INSERT INTO `mall_region` VALUES ('790', '87', '英德市', '3', '0');
INSERT INTO `mall_region` VALUES ('791', '87', '连州市', '3', '0');
INSERT INTO `mall_region` VALUES ('792', '87', '佛冈县', '3', '0');
INSERT INTO `mall_region` VALUES ('793', '87', '阳山县', '3', '0');
INSERT INTO `mall_region` VALUES ('794', '87', '清新县', '3', '0');
INSERT INTO `mall_region` VALUES ('795', '87', '连山', '3', '0');
INSERT INTO `mall_region` VALUES ('796', '87', '连南', '3', '0');
INSERT INTO `mall_region` VALUES ('797', '88', '南澳县', '3', '0');
INSERT INTO `mall_region` VALUES ('798', '88', '潮阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('799', '88', '澄海区', '3', '0');
INSERT INTO `mall_region` VALUES ('800', '88', '龙湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('801', '88', '金平区', '3', '0');
INSERT INTO `mall_region` VALUES ('802', '88', '濠江区', '3', '0');
INSERT INTO `mall_region` VALUES ('803', '88', '潮南区', '3', '0');
INSERT INTO `mall_region` VALUES ('804', '89', '城区', '3', '0');
INSERT INTO `mall_region` VALUES ('805', '89', '陆丰市', '3', '0');
INSERT INTO `mall_region` VALUES ('806', '89', '海丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('807', '89', '陆河县', '3', '0');
INSERT INTO `mall_region` VALUES ('808', '90', '曲江县', '3', '0');
INSERT INTO `mall_region` VALUES ('809', '90', '浈江区', '3', '0');
INSERT INTO `mall_region` VALUES ('810', '90', '武江区', '3', '0');
INSERT INTO `mall_region` VALUES ('811', '90', '曲江区', '3', '0');
INSERT INTO `mall_region` VALUES ('812', '90', '乐昌市', '3', '0');
INSERT INTO `mall_region` VALUES ('813', '90', '南雄市', '3', '0');
INSERT INTO `mall_region` VALUES ('814', '90', '始兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('815', '90', '仁化县', '3', '0');
INSERT INTO `mall_region` VALUES ('816', '90', '翁源县', '3', '0');
INSERT INTO `mall_region` VALUES ('817', '90', '新丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('818', '90', '乳源', '3', '0');
INSERT INTO `mall_region` VALUES ('819', '91', '江城区', '3', '0');
INSERT INTO `mall_region` VALUES ('820', '91', '阳春市', '3', '0');
INSERT INTO `mall_region` VALUES ('821', '91', '阳西县', '3', '0');
INSERT INTO `mall_region` VALUES ('822', '91', '阳东县', '3', '0');
INSERT INTO `mall_region` VALUES ('823', '92', '云城区', '3', '0');
INSERT INTO `mall_region` VALUES ('824', '92', '罗定市', '3', '0');
INSERT INTO `mall_region` VALUES ('825', '92', '新兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('826', '92', '郁南县', '3', '0');
INSERT INTO `mall_region` VALUES ('827', '92', '云安县', '3', '0');
INSERT INTO `mall_region` VALUES ('828', '93', '赤坎区', '3', '0');
INSERT INTO `mall_region` VALUES ('829', '93', '霞山区', '3', '0');
INSERT INTO `mall_region` VALUES ('830', '93', '坡头区', '3', '0');
INSERT INTO `mall_region` VALUES ('831', '93', '麻章区', '3', '0');
INSERT INTO `mall_region` VALUES ('832', '93', '廉江市', '3', '0');
INSERT INTO `mall_region` VALUES ('833', '93', '雷州市', '3', '0');
INSERT INTO `mall_region` VALUES ('834', '93', '吴川市', '3', '0');
INSERT INTO `mall_region` VALUES ('835', '93', '遂溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('836', '93', '徐闻县', '3', '0');
INSERT INTO `mall_region` VALUES ('837', '94', '肇庆市', '3', '0');
INSERT INTO `mall_region` VALUES ('838', '94', '高要市', '3', '0');
INSERT INTO `mall_region` VALUES ('839', '94', '四会市', '3', '0');
INSERT INTO `mall_region` VALUES ('840', '94', '广宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('841', '94', '怀集县', '3', '0');
INSERT INTO `mall_region` VALUES ('842', '94', '封开县', '3', '0');
INSERT INTO `mall_region` VALUES ('843', '94', '德庆县', '3', '0');
INSERT INTO `mall_region` VALUES ('844', '95', '石岐街道', '3', '0');
INSERT INTO `mall_region` VALUES ('845', '95', '东区街道', '3', '0');
INSERT INTO `mall_region` VALUES ('846', '95', '西区街道', '3', '0');
INSERT INTO `mall_region` VALUES ('847', '95', '环城街道', '3', '0');
INSERT INTO `mall_region` VALUES ('848', '95', '中山港街道', '3', '0');
INSERT INTO `mall_region` VALUES ('849', '95', '五桂山街道', '3', '0');
INSERT INTO `mall_region` VALUES ('850', '96', '香洲区', '3', '0');
INSERT INTO `mall_region` VALUES ('851', '96', '斗门区', '3', '0');
INSERT INTO `mall_region` VALUES ('852', '96', '金湾区', '3', '0');
INSERT INTO `mall_region` VALUES ('853', '97', '邕宁区', '3', '0');
INSERT INTO `mall_region` VALUES ('854', '97', '青秀区', '3', '0');
INSERT INTO `mall_region` VALUES ('855', '97', '兴宁区', '3', '0');
INSERT INTO `mall_region` VALUES ('856', '97', '良庆区', '3', '0');
INSERT INTO `mall_region` VALUES ('857', '97', '西乡塘区', '3', '0');
INSERT INTO `mall_region` VALUES ('858', '97', '江南区', '3', '0');
INSERT INTO `mall_region` VALUES ('859', '97', '武鸣县', '3', '0');
INSERT INTO `mall_region` VALUES ('860', '97', '隆安县', '3', '0');
INSERT INTO `mall_region` VALUES ('861', '97', '马山县', '3', '0');
INSERT INTO `mall_region` VALUES ('862', '97', '上林县', '3', '0');
INSERT INTO `mall_region` VALUES ('863', '97', '宾阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('864', '97', '横县', '3', '0');
INSERT INTO `mall_region` VALUES ('865', '98', '秀峰区', '3', '0');
INSERT INTO `mall_region` VALUES ('866', '98', '叠彩区', '3', '0');
INSERT INTO `mall_region` VALUES ('867', '98', '象山区', '3', '0');
INSERT INTO `mall_region` VALUES ('868', '98', '七星区', '3', '0');
INSERT INTO `mall_region` VALUES ('869', '98', '雁山区', '3', '0');
INSERT INTO `mall_region` VALUES ('870', '98', '阳朔县', '3', '0');
INSERT INTO `mall_region` VALUES ('871', '98', '临桂县', '3', '0');
INSERT INTO `mall_region` VALUES ('872', '98', '灵川县', '3', '0');
INSERT INTO `mall_region` VALUES ('873', '98', '全州县', '3', '0');
INSERT INTO `mall_region` VALUES ('874', '98', '平乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('875', '98', '兴安县', '3', '0');
INSERT INTO `mall_region` VALUES ('876', '98', '灌阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('877', '98', '荔浦县', '3', '0');
INSERT INTO `mall_region` VALUES ('878', '98', '资源县', '3', '0');
INSERT INTO `mall_region` VALUES ('879', '98', '永福县', '3', '0');
INSERT INTO `mall_region` VALUES ('880', '98', '龙胜', '3', '0');
INSERT INTO `mall_region` VALUES ('881', '98', '恭城', '3', '0');
INSERT INTO `mall_region` VALUES ('882', '99', '右江区', '3', '0');
INSERT INTO `mall_region` VALUES ('883', '99', '凌云县', '3', '0');
INSERT INTO `mall_region` VALUES ('884', '99', '平果县', '3', '0');
INSERT INTO `mall_region` VALUES ('885', '99', '西林县', '3', '0');
INSERT INTO `mall_region` VALUES ('886', '99', '乐业县', '3', '0');
INSERT INTO `mall_region` VALUES ('887', '99', '德保县', '3', '0');
INSERT INTO `mall_region` VALUES ('888', '99', '田林县', '3', '0');
INSERT INTO `mall_region` VALUES ('889', '99', '田阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('890', '99', '靖西县', '3', '0');
INSERT INTO `mall_region` VALUES ('891', '99', '田东县', '3', '0');
INSERT INTO `mall_region` VALUES ('892', '99', '那坡县', '3', '0');
INSERT INTO `mall_region` VALUES ('893', '99', '隆林', '3', '0');
INSERT INTO `mall_region` VALUES ('894', '100', '海城区', '3', '0');
INSERT INTO `mall_region` VALUES ('895', '100', '银海区', '3', '0');
INSERT INTO `mall_region` VALUES ('896', '100', '铁山港区', '3', '0');
INSERT INTO `mall_region` VALUES ('897', '100', '合浦县', '3', '0');
INSERT INTO `mall_region` VALUES ('898', '101', '江州区', '3', '0');
INSERT INTO `mall_region` VALUES ('899', '101', '凭祥市', '3', '0');
INSERT INTO `mall_region` VALUES ('900', '101', '宁明县', '3', '0');
INSERT INTO `mall_region` VALUES ('901', '101', '扶绥县', '3', '0');
INSERT INTO `mall_region` VALUES ('902', '101', '龙州县', '3', '0');
INSERT INTO `mall_region` VALUES ('903', '101', '大新县', '3', '0');
INSERT INTO `mall_region` VALUES ('904', '101', '天等县', '3', '0');
INSERT INTO `mall_region` VALUES ('905', '102', '港口区', '3', '0');
INSERT INTO `mall_region` VALUES ('906', '102', '防城区', '3', '0');
INSERT INTO `mall_region` VALUES ('907', '102', '东兴市', '3', '0');
INSERT INTO `mall_region` VALUES ('908', '102', '上思县', '3', '0');
INSERT INTO `mall_region` VALUES ('909', '103', '港北区', '3', '0');
INSERT INTO `mall_region` VALUES ('910', '103', '港南区', '3', '0');
INSERT INTO `mall_region` VALUES ('911', '103', '覃塘区', '3', '0');
INSERT INTO `mall_region` VALUES ('912', '103', '桂平市', '3', '0');
INSERT INTO `mall_region` VALUES ('913', '103', '平南县', '3', '0');
INSERT INTO `mall_region` VALUES ('914', '104', '金城江区', '3', '0');
INSERT INTO `mall_region` VALUES ('915', '104', '宜州市', '3', '0');
INSERT INTO `mall_region` VALUES ('916', '104', '天峨县', '3', '0');
INSERT INTO `mall_region` VALUES ('917', '104', '凤山县', '3', '0');
INSERT INTO `mall_region` VALUES ('918', '104', '南丹县', '3', '0');
INSERT INTO `mall_region` VALUES ('919', '104', '东兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('920', '104', '都安', '3', '0');
INSERT INTO `mall_region` VALUES ('921', '104', '罗城', '3', '0');
INSERT INTO `mall_region` VALUES ('922', '104', '巴马', '3', '0');
INSERT INTO `mall_region` VALUES ('923', '104', '环江', '3', '0');
INSERT INTO `mall_region` VALUES ('924', '104', '大化', '3', '0');
INSERT INTO `mall_region` VALUES ('925', '105', '八步区', '3', '0');
INSERT INTO `mall_region` VALUES ('926', '105', '钟山县', '3', '0');
INSERT INTO `mall_region` VALUES ('927', '105', '昭平县', '3', '0');
INSERT INTO `mall_region` VALUES ('928', '105', '富川', '3', '0');
INSERT INTO `mall_region` VALUES ('929', '106', '兴宾区', '3', '0');
INSERT INTO `mall_region` VALUES ('930', '106', '合山市', '3', '0');
INSERT INTO `mall_region` VALUES ('931', '106', '象州县', '3', '0');
INSERT INTO `mall_region` VALUES ('932', '106', '武宣县', '3', '0');
INSERT INTO `mall_region` VALUES ('933', '106', '忻城县', '3', '0');
INSERT INTO `mall_region` VALUES ('934', '106', '金秀', '3', '0');
INSERT INTO `mall_region` VALUES ('935', '107', '城中区', '3', '0');
INSERT INTO `mall_region` VALUES ('936', '107', '鱼峰区', '3', '0');
INSERT INTO `mall_region` VALUES ('937', '107', '柳北区', '3', '0');
INSERT INTO `mall_region` VALUES ('938', '107', '柳南区', '3', '0');
INSERT INTO `mall_region` VALUES ('939', '107', '柳江县', '3', '0');
INSERT INTO `mall_region` VALUES ('940', '107', '柳城县', '3', '0');
INSERT INTO `mall_region` VALUES ('941', '107', '鹿寨县', '3', '0');
INSERT INTO `mall_region` VALUES ('942', '107', '融安县', '3', '0');
INSERT INTO `mall_region` VALUES ('943', '107', '融水', '3', '0');
INSERT INTO `mall_region` VALUES ('944', '107', '三江', '3', '0');
INSERT INTO `mall_region` VALUES ('945', '108', '钦南区', '3', '0');
INSERT INTO `mall_region` VALUES ('946', '108', '钦北区', '3', '0');
INSERT INTO `mall_region` VALUES ('947', '108', '灵山县', '3', '0');
INSERT INTO `mall_region` VALUES ('948', '108', '浦北县', '3', '0');
INSERT INTO `mall_region` VALUES ('949', '109', '万秀区', '3', '0');
INSERT INTO `mall_region` VALUES ('950', '109', '蝶山区', '3', '0');
INSERT INTO `mall_region` VALUES ('951', '109', '长洲区', '3', '0');
INSERT INTO `mall_region` VALUES ('952', '109', '岑溪市', '3', '0');
INSERT INTO `mall_region` VALUES ('953', '109', '苍梧县', '3', '0');
INSERT INTO `mall_region` VALUES ('954', '109', '藤县', '3', '0');
INSERT INTO `mall_region` VALUES ('955', '109', '蒙山县', '3', '0');
INSERT INTO `mall_region` VALUES ('956', '110', '玉州区', '3', '0');
INSERT INTO `mall_region` VALUES ('957', '110', '北流市', '3', '0');
INSERT INTO `mall_region` VALUES ('958', '110', '容县', '3', '0');
INSERT INTO `mall_region` VALUES ('959', '110', '陆川县', '3', '0');
INSERT INTO `mall_region` VALUES ('960', '110', '博白县', '3', '0');
INSERT INTO `mall_region` VALUES ('961', '110', '兴业县', '3', '0');
INSERT INTO `mall_region` VALUES ('962', '111', '南明区', '3', '0');
INSERT INTO `mall_region` VALUES ('963', '111', '云岩区', '3', '0');
INSERT INTO `mall_region` VALUES ('964', '111', '花溪区', '3', '0');
INSERT INTO `mall_region` VALUES ('965', '111', '乌当区', '3', '0');
INSERT INTO `mall_region` VALUES ('966', '111', '白云区', '3', '0');
INSERT INTO `mall_region` VALUES ('967', '111', '小河区', '3', '0');
INSERT INTO `mall_region` VALUES ('968', '111', '金阳新区', '3', '0');
INSERT INTO `mall_region` VALUES ('969', '111', '新天园区', '3', '0');
INSERT INTO `mall_region` VALUES ('970', '111', '清镇市', '3', '0');
INSERT INTO `mall_region` VALUES ('971', '111', '开阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('972', '111', '修文县', '3', '0');
INSERT INTO `mall_region` VALUES ('973', '111', '息烽县', '3', '0');
INSERT INTO `mall_region` VALUES ('974', '112', '西秀区', '3', '0');
INSERT INTO `mall_region` VALUES ('975', '112', '关岭', '3', '0');
INSERT INTO `mall_region` VALUES ('976', '112', '镇宁', '3', '0');
INSERT INTO `mall_region` VALUES ('977', '112', '紫云', '3', '0');
INSERT INTO `mall_region` VALUES ('978', '112', '平坝县', '3', '0');
INSERT INTO `mall_region` VALUES ('979', '112', '普定县', '3', '0');
INSERT INTO `mall_region` VALUES ('980', '113', '毕节市', '3', '0');
INSERT INTO `mall_region` VALUES ('981', '113', '大方县', '3', '0');
INSERT INTO `mall_region` VALUES ('982', '113', '黔西县', '3', '0');
INSERT INTO `mall_region` VALUES ('983', '113', '金沙县', '3', '0');
INSERT INTO `mall_region` VALUES ('984', '113', '织金县', '3', '0');
INSERT INTO `mall_region` VALUES ('985', '113', '纳雍县', '3', '0');
INSERT INTO `mall_region` VALUES ('986', '113', '赫章县', '3', '0');
INSERT INTO `mall_region` VALUES ('987', '113', '威宁', '3', '0');
INSERT INTO `mall_region` VALUES ('988', '114', '钟山区', '3', '0');
INSERT INTO `mall_region` VALUES ('989', '114', '六枝特区', '3', '0');
INSERT INTO `mall_region` VALUES ('990', '114', '水城县', '3', '0');
INSERT INTO `mall_region` VALUES ('991', '114', '盘县', '3', '0');
INSERT INTO `mall_region` VALUES ('992', '115', '凯里市', '3', '0');
INSERT INTO `mall_region` VALUES ('993', '115', '黄平县', '3', '0');
INSERT INTO `mall_region` VALUES ('994', '115', '施秉县', '3', '0');
INSERT INTO `mall_region` VALUES ('995', '115', '三穗县', '3', '0');
INSERT INTO `mall_region` VALUES ('996', '115', '镇远县', '3', '0');
INSERT INTO `mall_region` VALUES ('997', '115', '岑巩县', '3', '0');
INSERT INTO `mall_region` VALUES ('998', '115', '天柱县', '3', '0');
INSERT INTO `mall_region` VALUES ('999', '115', '锦屏县', '3', '0');
INSERT INTO `mall_region` VALUES ('1000', '115', '剑河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1001', '115', '台江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1002', '115', '黎平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1003', '115', '榕江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1004', '115', '从江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1005', '115', '雷山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1006', '115', '麻江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1007', '115', '丹寨县', '3', '0');
INSERT INTO `mall_region` VALUES ('1008', '116', '都匀市', '3', '0');
INSERT INTO `mall_region` VALUES ('1009', '116', '福泉市', '3', '0');
INSERT INTO `mall_region` VALUES ('1010', '116', '荔波县', '3', '0');
INSERT INTO `mall_region` VALUES ('1011', '116', '贵定县', '3', '0');
INSERT INTO `mall_region` VALUES ('1012', '116', '瓮安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1013', '116', '独山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1014', '116', '平塘县', '3', '0');
INSERT INTO `mall_region` VALUES ('1015', '116', '罗甸县', '3', '0');
INSERT INTO `mall_region` VALUES ('1016', '116', '长顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('1017', '116', '龙里县', '3', '0');
INSERT INTO `mall_region` VALUES ('1018', '116', '惠水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1019', '116', '三都', '3', '0');
INSERT INTO `mall_region` VALUES ('1020', '117', '兴义市', '3', '0');
INSERT INTO `mall_region` VALUES ('1021', '117', '兴仁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1022', '117', '普安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1023', '117', '晴隆县', '3', '0');
INSERT INTO `mall_region` VALUES ('1024', '117', '贞丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1025', '117', '望谟县', '3', '0');
INSERT INTO `mall_region` VALUES ('1026', '117', '册亨县', '3', '0');
INSERT INTO `mall_region` VALUES ('1027', '117', '安龙县', '3', '0');
INSERT INTO `mall_region` VALUES ('1028', '118', '铜仁市', '3', '0');
INSERT INTO `mall_region` VALUES ('1029', '118', '江口县', '3', '0');
INSERT INTO `mall_region` VALUES ('1030', '118', '石阡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1031', '118', '思南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1032', '118', '德江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1033', '118', '玉屏', '3', '0');
INSERT INTO `mall_region` VALUES ('1034', '118', '印江', '3', '0');
INSERT INTO `mall_region` VALUES ('1035', '118', '沿河', '3', '0');
INSERT INTO `mall_region` VALUES ('1036', '118', '松桃', '3', '0');
INSERT INTO `mall_region` VALUES ('1037', '118', '万山特区', '3', '0');
INSERT INTO `mall_region` VALUES ('1038', '119', '红花岗区', '3', '0');
INSERT INTO `mall_region` VALUES ('1039', '119', '务川县', '3', '0');
INSERT INTO `mall_region` VALUES ('1040', '119', '道真县', '3', '0');
INSERT INTO `mall_region` VALUES ('1041', '119', '汇川区', '3', '0');
INSERT INTO `mall_region` VALUES ('1042', '119', '赤水市', '3', '0');
INSERT INTO `mall_region` VALUES ('1043', '119', '仁怀市', '3', '0');
INSERT INTO `mall_region` VALUES ('1044', '119', '遵义县', '3', '0');
INSERT INTO `mall_region` VALUES ('1045', '119', '桐梓县', '3', '0');
INSERT INTO `mall_region` VALUES ('1046', '119', '绥阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1047', '119', '正安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1048', '119', '凤冈县', '3', '0');
INSERT INTO `mall_region` VALUES ('1049', '119', '湄潭县', '3', '0');
INSERT INTO `mall_region` VALUES ('1050', '119', '余庆县', '3', '0');
INSERT INTO `mall_region` VALUES ('1051', '119', '习水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1052', '119', '道真', '3', '0');
INSERT INTO `mall_region` VALUES ('1053', '119', '务川', '3', '0');
INSERT INTO `mall_region` VALUES ('1054', '120', '秀英区', '3', '0');
INSERT INTO `mall_region` VALUES ('1055', '120', '龙华区', '3', '0');
INSERT INTO `mall_region` VALUES ('1056', '120', '琼山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1057', '120', '美兰区', '3', '0');
INSERT INTO `mall_region` VALUES ('1058', '137', '市区', '3', '0');
INSERT INTO `mall_region` VALUES ('1059', '137', '洋浦开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1060', '137', '那大镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1061', '137', '王五镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1062', '137', '雅星镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1063', '137', '大成镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1064', '137', '中和镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1065', '137', '峨蔓镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1066', '137', '南丰镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1067', '137', '白马井镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1068', '137', '兰洋镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1069', '137', '和庆镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1070', '137', '海头镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1071', '137', '排浦镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1072', '137', '东成镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1073', '137', '光村镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1074', '137', '木棠镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1075', '137', '新州镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1076', '137', '三都镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1077', '137', '其他', '3', '0');
INSERT INTO `mall_region` VALUES ('1078', '138', '长安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1079', '138', '桥东区', '3', '0');
INSERT INTO `mall_region` VALUES ('1080', '138', '桥西区', '3', '0');
INSERT INTO `mall_region` VALUES ('1081', '138', '新华区', '3', '0');
INSERT INTO `mall_region` VALUES ('1082', '138', '裕华区', '3', '0');
INSERT INTO `mall_region` VALUES ('1083', '138', '井陉矿区', '3', '0');
INSERT INTO `mall_region` VALUES ('1084', '138', '高新区', '3', '0');
INSERT INTO `mall_region` VALUES ('1085', '138', '辛集市', '3', '0');
INSERT INTO `mall_region` VALUES ('1086', '138', '藁城市', '3', '0');
INSERT INTO `mall_region` VALUES ('1087', '138', '晋州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1088', '138', '新乐市', '3', '0');
INSERT INTO `mall_region` VALUES ('1089', '138', '鹿泉市', '3', '0');
INSERT INTO `mall_region` VALUES ('1090', '138', '井陉县', '3', '0');
INSERT INTO `mall_region` VALUES ('1091', '138', '正定县', '3', '0');
INSERT INTO `mall_region` VALUES ('1092', '138', '栾城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1093', '138', '行唐县', '3', '0');
INSERT INTO `mall_region` VALUES ('1094', '138', '灵寿县', '3', '0');
INSERT INTO `mall_region` VALUES ('1095', '138', '高邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('1096', '138', '深泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('1097', '138', '赞皇县', '3', '0');
INSERT INTO `mall_region` VALUES ('1098', '138', '无极县', '3', '0');
INSERT INTO `mall_region` VALUES ('1099', '138', '平山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1100', '138', '元氏县', '3', '0');
INSERT INTO `mall_region` VALUES ('1101', '138', '赵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1102', '139', '新市区', '3', '0');
INSERT INTO `mall_region` VALUES ('1103', '139', '南市区', '3', '0');
INSERT INTO `mall_region` VALUES ('1104', '139', '北市区', '3', '0');
INSERT INTO `mall_region` VALUES ('1105', '139', '涿州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1106', '139', '定州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1107', '139', '安国市', '3', '0');
INSERT INTO `mall_region` VALUES ('1108', '139', '高碑店市', '3', '0');
INSERT INTO `mall_region` VALUES ('1109', '139', '满城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1110', '139', '清苑县', '3', '0');
INSERT INTO `mall_region` VALUES ('1111', '139', '涞水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1112', '139', '阜平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1113', '139', '徐水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1114', '139', '定兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('1115', '139', '唐县', '3', '0');
INSERT INTO `mall_region` VALUES ('1116', '139', '高阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1117', '139', '容城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1118', '139', '涞源县', '3', '0');
INSERT INTO `mall_region` VALUES ('1119', '139', '望都县', '3', '0');
INSERT INTO `mall_region` VALUES ('1120', '139', '安新县', '3', '0');
INSERT INTO `mall_region` VALUES ('1121', '139', '易县', '3', '0');
INSERT INTO `mall_region` VALUES ('1122', '139', '曲阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1123', '139', '蠡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1124', '139', '顺平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1125', '139', '博野县', '3', '0');
INSERT INTO `mall_region` VALUES ('1126', '139', '雄县', '3', '0');
INSERT INTO `mall_region` VALUES ('1127', '140', '运河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1128', '140', '新华区', '3', '0');
INSERT INTO `mall_region` VALUES ('1129', '140', '泊头市', '3', '0');
INSERT INTO `mall_region` VALUES ('1130', '140', '任丘市', '3', '0');
INSERT INTO `mall_region` VALUES ('1131', '140', '黄骅市', '3', '0');
INSERT INTO `mall_region` VALUES ('1132', '140', '河间市', '3', '0');
INSERT INTO `mall_region` VALUES ('1133', '140', '沧县', '3', '0');
INSERT INTO `mall_region` VALUES ('1134', '140', '青县', '3', '0');
INSERT INTO `mall_region` VALUES ('1135', '140', '东光县', '3', '0');
INSERT INTO `mall_region` VALUES ('1136', '140', '海兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('1137', '140', '盐山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1138', '140', '肃宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1139', '140', '南皮县', '3', '0');
INSERT INTO `mall_region` VALUES ('1140', '140', '吴桥县', '3', '0');
INSERT INTO `mall_region` VALUES ('1141', '140', '献县', '3', '0');
INSERT INTO `mall_region` VALUES ('1142', '140', '孟村', '3', '0');
INSERT INTO `mall_region` VALUES ('1143', '141', '双桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('1144', '141', '双滦区', '3', '0');
INSERT INTO `mall_region` VALUES ('1145', '141', '鹰手营子矿区', '3', '0');
INSERT INTO `mall_region` VALUES ('1146', '141', '承德县', '3', '0');
INSERT INTO `mall_region` VALUES ('1147', '141', '兴隆县', '3', '0');
INSERT INTO `mall_region` VALUES ('1148', '141', '平泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('1149', '141', '滦平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1150', '141', '隆化县', '3', '0');
INSERT INTO `mall_region` VALUES ('1151', '141', '丰宁', '3', '0');
INSERT INTO `mall_region` VALUES ('1152', '141', '宽城', '3', '0');
INSERT INTO `mall_region` VALUES ('1153', '141', '围场', '3', '0');
INSERT INTO `mall_region` VALUES ('1154', '142', '从台区', '3', '0');
INSERT INTO `mall_region` VALUES ('1155', '142', '复兴区', '3', '0');
INSERT INTO `mall_region` VALUES ('1156', '142', '邯山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1157', '142', '峰峰矿区', '3', '0');
INSERT INTO `mall_region` VALUES ('1158', '142', '武安市', '3', '0');
INSERT INTO `mall_region` VALUES ('1159', '142', '邯郸县', '3', '0');
INSERT INTO `mall_region` VALUES ('1160', '142', '临漳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1161', '142', '成安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1162', '142', '大名县', '3', '0');
INSERT INTO `mall_region` VALUES ('1163', '142', '涉县', '3', '0');
INSERT INTO `mall_region` VALUES ('1164', '142', '磁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1165', '142', '肥乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1166', '142', '永年县', '3', '0');
INSERT INTO `mall_region` VALUES ('1167', '142', '邱县', '3', '0');
INSERT INTO `mall_region` VALUES ('1168', '142', '鸡泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('1169', '142', '广平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1170', '142', '馆陶县', '3', '0');
INSERT INTO `mall_region` VALUES ('1171', '142', '魏县', '3', '0');
INSERT INTO `mall_region` VALUES ('1172', '142', '曲周县', '3', '0');
INSERT INTO `mall_region` VALUES ('1173', '143', '桃城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1174', '143', '冀州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1175', '143', '深州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1176', '143', '枣强县', '3', '0');
INSERT INTO `mall_region` VALUES ('1177', '143', '武邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('1178', '143', '武强县', '3', '0');
INSERT INTO `mall_region` VALUES ('1179', '143', '饶阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1180', '143', '安平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1181', '143', '故城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1182', '143', '景县', '3', '0');
INSERT INTO `mall_region` VALUES ('1183', '143', '阜城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1184', '144', '安次区', '3', '0');
INSERT INTO `mall_region` VALUES ('1185', '144', '广阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1186', '144', '霸州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1187', '144', '三河市', '3', '0');
INSERT INTO `mall_region` VALUES ('1188', '144', '固安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1189', '144', '永清县', '3', '0');
INSERT INTO `mall_region` VALUES ('1190', '144', '香河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1191', '144', '大城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1192', '144', '文安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1193', '144', '大厂', '3', '0');
INSERT INTO `mall_region` VALUES ('1194', '145', '海港区', '3', '0');
INSERT INTO `mall_region` VALUES ('1195', '145', '山海关区', '3', '0');
INSERT INTO `mall_region` VALUES ('1196', '145', '北戴河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1197', '145', '昌黎县', '3', '0');
INSERT INTO `mall_region` VALUES ('1198', '145', '抚宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1199', '145', '卢龙县', '3', '0');
INSERT INTO `mall_region` VALUES ('1200', '145', '青龙', '3', '0');
INSERT INTO `mall_region` VALUES ('1201', '146', '路北区', '3', '0');
INSERT INTO `mall_region` VALUES ('1202', '146', '路南区', '3', '0');
INSERT INTO `mall_region` VALUES ('1203', '146', '古冶区', '3', '0');
INSERT INTO `mall_region` VALUES ('1204', '146', '开平区', '3', '0');
INSERT INTO `mall_region` VALUES ('1205', '146', '丰南区', '3', '0');
INSERT INTO `mall_region` VALUES ('1206', '146', '丰润区', '3', '0');
INSERT INTO `mall_region` VALUES ('1207', '146', '遵化市', '3', '0');
INSERT INTO `mall_region` VALUES ('1208', '146', '迁安市', '3', '0');
INSERT INTO `mall_region` VALUES ('1209', '146', '滦县', '3', '0');
INSERT INTO `mall_region` VALUES ('1210', '146', '滦南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1211', '146', '乐亭县', '3', '0');
INSERT INTO `mall_region` VALUES ('1212', '146', '迁西县', '3', '0');
INSERT INTO `mall_region` VALUES ('1213', '146', '玉田县', '3', '0');
INSERT INTO `mall_region` VALUES ('1214', '146', '唐海县', '3', '0');
INSERT INTO `mall_region` VALUES ('1215', '147', '桥东区', '3', '0');
INSERT INTO `mall_region` VALUES ('1216', '147', '桥西区', '3', '0');
INSERT INTO `mall_region` VALUES ('1217', '147', '南宫市', '3', '0');
INSERT INTO `mall_region` VALUES ('1218', '147', '沙河市', '3', '0');
INSERT INTO `mall_region` VALUES ('1219', '147', '邢台县', '3', '0');
INSERT INTO `mall_region` VALUES ('1220', '147', '临城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1221', '147', '内丘县', '3', '0');
INSERT INTO `mall_region` VALUES ('1222', '147', '柏乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1223', '147', '隆尧县', '3', '0');
INSERT INTO `mall_region` VALUES ('1224', '147', '任县', '3', '0');
INSERT INTO `mall_region` VALUES ('1225', '147', '南和县', '3', '0');
INSERT INTO `mall_region` VALUES ('1226', '147', '宁晋县', '3', '0');
INSERT INTO `mall_region` VALUES ('1227', '147', '巨鹿县', '3', '0');
INSERT INTO `mall_region` VALUES ('1228', '147', '新河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1229', '147', '广宗县', '3', '0');
INSERT INTO `mall_region` VALUES ('1230', '147', '平乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1231', '147', '威县', '3', '0');
INSERT INTO `mall_region` VALUES ('1232', '147', '清河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1233', '147', '临西县', '3', '0');
INSERT INTO `mall_region` VALUES ('1234', '148', '桥西区', '3', '0');
INSERT INTO `mall_region` VALUES ('1235', '148', '桥东区', '3', '0');
INSERT INTO `mall_region` VALUES ('1236', '148', '宣化区', '3', '0');
INSERT INTO `mall_region` VALUES ('1237', '148', '下花园区', '3', '0');
INSERT INTO `mall_region` VALUES ('1238', '148', '宣化县', '3', '0');
INSERT INTO `mall_region` VALUES ('1239', '148', '张北县', '3', '0');
INSERT INTO `mall_region` VALUES ('1240', '148', '康保县', '3', '0');
INSERT INTO `mall_region` VALUES ('1241', '148', '沽源县', '3', '0');
INSERT INTO `mall_region` VALUES ('1242', '148', '尚义县', '3', '0');
INSERT INTO `mall_region` VALUES ('1243', '148', '蔚县', '3', '0');
INSERT INTO `mall_region` VALUES ('1244', '148', '阳原县', '3', '0');
INSERT INTO `mall_region` VALUES ('1245', '148', '怀安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1246', '148', '万全县', '3', '0');
INSERT INTO `mall_region` VALUES ('1247', '148', '怀来县', '3', '0');
INSERT INTO `mall_region` VALUES ('1248', '148', '涿鹿县', '3', '0');
INSERT INTO `mall_region` VALUES ('1249', '148', '赤城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1250', '148', '崇礼县', '3', '0');
INSERT INTO `mall_region` VALUES ('1251', '149', '金水区', '3', '0');
INSERT INTO `mall_region` VALUES ('1252', '149', '邙山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1253', '149', '二七区', '3', '0');
INSERT INTO `mall_region` VALUES ('1254', '149', '管城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1255', '149', '中原区', '3', '0');
INSERT INTO `mall_region` VALUES ('1256', '149', '上街区', '3', '0');
INSERT INTO `mall_region` VALUES ('1257', '149', '惠济区', '3', '0');
INSERT INTO `mall_region` VALUES ('1258', '149', '郑东新区', '3', '0');
INSERT INTO `mall_region` VALUES ('1259', '149', '经济技术开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1260', '149', '高新开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1261', '149', '出口加工区', '3', '0');
INSERT INTO `mall_region` VALUES ('1262', '149', '巩义市', '3', '0');
INSERT INTO `mall_region` VALUES ('1263', '149', '荥阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1264', '149', '新密市', '3', '0');
INSERT INTO `mall_region` VALUES ('1265', '149', '新郑市', '3', '0');
INSERT INTO `mall_region` VALUES ('1266', '149', '登封市', '3', '0');
INSERT INTO `mall_region` VALUES ('1267', '149', '中牟县', '3', '0');
INSERT INTO `mall_region` VALUES ('1268', '150', '西工区', '3', '0');
INSERT INTO `mall_region` VALUES ('1269', '150', '老城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1270', '150', '涧西区', '3', '0');
INSERT INTO `mall_region` VALUES ('1271', '150', '瀍河回族区', '3', '0');
INSERT INTO `mall_region` VALUES ('1272', '150', '洛龙区', '3', '0');
INSERT INTO `mall_region` VALUES ('1273', '150', '吉利区', '3', '0');
INSERT INTO `mall_region` VALUES ('1274', '150', '偃师市', '3', '0');
INSERT INTO `mall_region` VALUES ('1275', '150', '孟津县', '3', '0');
INSERT INTO `mall_region` VALUES ('1276', '150', '新安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1277', '150', '栾川县', '3', '0');
INSERT INTO `mall_region` VALUES ('1278', '150', '嵩县', '3', '0');
INSERT INTO `mall_region` VALUES ('1279', '150', '汝阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1280', '150', '宜阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1281', '150', '洛宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1282', '150', '伊川县', '3', '0');
INSERT INTO `mall_region` VALUES ('1283', '151', '鼓楼区', '3', '0');
INSERT INTO `mall_region` VALUES ('1284', '151', '龙亭区', '3', '0');
INSERT INTO `mall_region` VALUES ('1285', '151', '顺河回族区', '3', '0');
INSERT INTO `mall_region` VALUES ('1286', '151', '金明区', '3', '0');
INSERT INTO `mall_region` VALUES ('1287', '151', '禹王台区', '3', '0');
INSERT INTO `mall_region` VALUES ('1288', '151', '杞县', '3', '0');
INSERT INTO `mall_region` VALUES ('1289', '151', '通许县', '3', '0');
INSERT INTO `mall_region` VALUES ('1290', '151', '尉氏县', '3', '0');
INSERT INTO `mall_region` VALUES ('1291', '151', '开封县', '3', '0');
INSERT INTO `mall_region` VALUES ('1292', '151', '兰考县', '3', '0');
INSERT INTO `mall_region` VALUES ('1293', '152', '北关区', '3', '0');
INSERT INTO `mall_region` VALUES ('1294', '152', '文峰区', '3', '0');
INSERT INTO `mall_region` VALUES ('1295', '152', '殷都区', '3', '0');
INSERT INTO `mall_region` VALUES ('1296', '152', '龙安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1297', '152', '林州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1298', '152', '安阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1299', '152', '汤阴县', '3', '0');
INSERT INTO `mall_region` VALUES ('1300', '152', '滑县', '3', '0');
INSERT INTO `mall_region` VALUES ('1301', '152', '内黄县', '3', '0');
INSERT INTO `mall_region` VALUES ('1302', '153', '淇滨区', '3', '0');
INSERT INTO `mall_region` VALUES ('1303', '153', '山城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1304', '153', '鹤山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1305', '153', '浚县', '3', '0');
INSERT INTO `mall_region` VALUES ('1306', '153', '淇县', '3', '0');
INSERT INTO `mall_region` VALUES ('1307', '154', '济源市', '3', '0');
INSERT INTO `mall_region` VALUES ('1308', '155', '解放区', '3', '0');
INSERT INTO `mall_region` VALUES ('1309', '155', '中站区', '3', '0');
INSERT INTO `mall_region` VALUES ('1310', '155', '马村区', '3', '0');
INSERT INTO `mall_region` VALUES ('1311', '155', '山阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1312', '155', '沁阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1313', '155', '孟州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1314', '155', '修武县', '3', '0');
INSERT INTO `mall_region` VALUES ('1315', '155', '博爱县', '3', '0');
INSERT INTO `mall_region` VALUES ('1316', '155', '武陟县', '3', '0');
INSERT INTO `mall_region` VALUES ('1317', '155', '温县', '3', '0');
INSERT INTO `mall_region` VALUES ('1318', '156', '卧龙区', '3', '0');
INSERT INTO `mall_region` VALUES ('1319', '156', '宛城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1320', '156', '邓州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1321', '156', '南召县', '3', '0');
INSERT INTO `mall_region` VALUES ('1322', '156', '方城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1323', '156', '西峡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1324', '156', '镇平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1325', '156', '内乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1326', '156', '淅川县', '3', '0');
INSERT INTO `mall_region` VALUES ('1327', '156', '社旗县', '3', '0');
INSERT INTO `mall_region` VALUES ('1328', '156', '唐河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1329', '156', '新野县', '3', '0');
INSERT INTO `mall_region` VALUES ('1330', '156', '桐柏县', '3', '0');
INSERT INTO `mall_region` VALUES ('1331', '157', '新华区', '3', '0');
INSERT INTO `mall_region` VALUES ('1332', '157', '卫东区', '3', '0');
INSERT INTO `mall_region` VALUES ('1333', '157', '湛河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1334', '157', '石龙区', '3', '0');
INSERT INTO `mall_region` VALUES ('1335', '157', '舞钢市', '3', '0');
INSERT INTO `mall_region` VALUES ('1336', '157', '汝州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1337', '157', '宝丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1338', '157', '叶县', '3', '0');
INSERT INTO `mall_region` VALUES ('1339', '157', '鲁山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1340', '157', '郏县', '3', '0');
INSERT INTO `mall_region` VALUES ('1341', '158', '湖滨区', '3', '0');
INSERT INTO `mall_region` VALUES ('1342', '158', '义马市', '3', '0');
INSERT INTO `mall_region` VALUES ('1343', '158', '灵宝市', '3', '0');
INSERT INTO `mall_region` VALUES ('1344', '158', '渑池县', '3', '0');
INSERT INTO `mall_region` VALUES ('1345', '158', '陕县', '3', '0');
INSERT INTO `mall_region` VALUES ('1346', '158', '卢氏县', '3', '0');
INSERT INTO `mall_region` VALUES ('1347', '159', '梁园区', '3', '0');
INSERT INTO `mall_region` VALUES ('1348', '159', '睢阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1349', '159', '永城市', '3', '0');
INSERT INTO `mall_region` VALUES ('1350', '159', '民权县', '3', '0');
INSERT INTO `mall_region` VALUES ('1351', '159', '睢县', '3', '0');
INSERT INTO `mall_region` VALUES ('1352', '159', '宁陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1353', '159', '虞城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1354', '159', '柘城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1355', '159', '夏邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('1356', '160', '卫滨区', '3', '0');
INSERT INTO `mall_region` VALUES ('1357', '160', '红旗区', '3', '0');
INSERT INTO `mall_region` VALUES ('1358', '160', '凤泉区', '3', '0');
INSERT INTO `mall_region` VALUES ('1359', '160', '牧野区', '3', '0');
INSERT INTO `mall_region` VALUES ('1360', '160', '卫辉市', '3', '0');
INSERT INTO `mall_region` VALUES ('1361', '160', '辉县市', '3', '0');
INSERT INTO `mall_region` VALUES ('1362', '160', '新乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1363', '160', '获嘉县', '3', '0');
INSERT INTO `mall_region` VALUES ('1364', '160', '原阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1365', '160', '延津县', '3', '0');
INSERT INTO `mall_region` VALUES ('1366', '160', '封丘县', '3', '0');
INSERT INTO `mall_region` VALUES ('1367', '160', '长垣县', '3', '0');
INSERT INTO `mall_region` VALUES ('1368', '161', '浉河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1369', '161', '平桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('1370', '161', '罗山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1371', '161', '光山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1372', '161', '新县', '3', '0');
INSERT INTO `mall_region` VALUES ('1373', '161', '商城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1374', '161', '固始县', '3', '0');
INSERT INTO `mall_region` VALUES ('1375', '161', '潢川县', '3', '0');
INSERT INTO `mall_region` VALUES ('1376', '161', '淮滨县', '3', '0');
INSERT INTO `mall_region` VALUES ('1377', '161', '息县', '3', '0');
INSERT INTO `mall_region` VALUES ('1378', '162', '魏都区', '3', '0');
INSERT INTO `mall_region` VALUES ('1379', '162', '禹州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1380', '162', '长葛市', '3', '0');
INSERT INTO `mall_region` VALUES ('1381', '162', '许昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('1382', '162', '鄢陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1383', '162', '襄城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1384', '163', '川汇区', '3', '0');
INSERT INTO `mall_region` VALUES ('1385', '163', '项城市', '3', '0');
INSERT INTO `mall_region` VALUES ('1386', '163', '扶沟县', '3', '0');
INSERT INTO `mall_region` VALUES ('1387', '163', '西华县', '3', '0');
INSERT INTO `mall_region` VALUES ('1388', '163', '商水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1389', '163', '沈丘县', '3', '0');
INSERT INTO `mall_region` VALUES ('1390', '163', '郸城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1391', '163', '淮阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1392', '163', '太康县', '3', '0');
INSERT INTO `mall_region` VALUES ('1393', '163', '鹿邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('1394', '164', '驿城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1395', '164', '西平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1396', '164', '上蔡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1397', '164', '平舆县', '3', '0');
INSERT INTO `mall_region` VALUES ('1398', '164', '正阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1399', '164', '确山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1400', '164', '泌阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1401', '164', '汝南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1402', '164', '遂平县', '3', '0');
INSERT INTO `mall_region` VALUES ('1403', '164', '新蔡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1404', '165', '郾城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1405', '165', '源汇区', '3', '0');
INSERT INTO `mall_region` VALUES ('1406', '165', '召陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('1407', '165', '舞阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1408', '165', '临颍县', '3', '0');
INSERT INTO `mall_region` VALUES ('1409', '166', '华龙区', '3', '0');
INSERT INTO `mall_region` VALUES ('1410', '166', '清丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1411', '166', '南乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('1412', '166', '范县', '3', '0');
INSERT INTO `mall_region` VALUES ('1413', '166', '台前县', '3', '0');
INSERT INTO `mall_region` VALUES ('1414', '166', '濮阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1415', '167', '道里区', '3', '0');
INSERT INTO `mall_region` VALUES ('1416', '167', '南岗区', '3', '0');
INSERT INTO `mall_region` VALUES ('1417', '167', '动力区', '3', '0');
INSERT INTO `mall_region` VALUES ('1418', '167', '平房区', '3', '0');
INSERT INTO `mall_region` VALUES ('1419', '167', '香坊区', '3', '0');
INSERT INTO `mall_region` VALUES ('1420', '167', '太平区', '3', '0');
INSERT INTO `mall_region` VALUES ('1421', '167', '道外区', '3', '0');
INSERT INTO `mall_region` VALUES ('1422', '167', '阿城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1423', '167', '呼兰区', '3', '0');
INSERT INTO `mall_region` VALUES ('1424', '167', '松北区', '3', '0');
INSERT INTO `mall_region` VALUES ('1425', '167', '尚志市', '3', '0');
INSERT INTO `mall_region` VALUES ('1426', '167', '双城市', '3', '0');
INSERT INTO `mall_region` VALUES ('1427', '167', '五常市', '3', '0');
INSERT INTO `mall_region` VALUES ('1428', '167', '方正县', '3', '0');
INSERT INTO `mall_region` VALUES ('1429', '167', '宾县', '3', '0');
INSERT INTO `mall_region` VALUES ('1430', '167', '依兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1431', '167', '巴彦县', '3', '0');
INSERT INTO `mall_region` VALUES ('1432', '167', '通河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1433', '167', '木兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1434', '167', '延寿县', '3', '0');
INSERT INTO `mall_region` VALUES ('1435', '168', '萨尔图区', '3', '0');
INSERT INTO `mall_region` VALUES ('1436', '168', '红岗区', '3', '0');
INSERT INTO `mall_region` VALUES ('1437', '168', '龙凤区', '3', '0');
INSERT INTO `mall_region` VALUES ('1438', '168', '让胡路区', '3', '0');
INSERT INTO `mall_region` VALUES ('1439', '168', '大同区', '3', '0');
INSERT INTO `mall_region` VALUES ('1440', '168', '肇州县', '3', '0');
INSERT INTO `mall_region` VALUES ('1441', '168', '肇源县', '3', '0');
INSERT INTO `mall_region` VALUES ('1442', '168', '林甸县', '3', '0');
INSERT INTO `mall_region` VALUES ('1443', '168', '杜尔伯特', '3', '0');
INSERT INTO `mall_region` VALUES ('1444', '169', '呼玛县', '3', '0');
INSERT INTO `mall_region` VALUES ('1445', '169', '漠河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1446', '169', '塔河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1447', '170', '兴山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1448', '170', '工农区', '3', '0');
INSERT INTO `mall_region` VALUES ('1449', '170', '南山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1450', '170', '兴安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1451', '170', '向阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1452', '170', '东山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1453', '170', '萝北县', '3', '0');
INSERT INTO `mall_region` VALUES ('1454', '170', '绥滨县', '3', '0');
INSERT INTO `mall_region` VALUES ('1455', '171', '爱辉区', '3', '0');
INSERT INTO `mall_region` VALUES ('1456', '171', '五大连池市', '3', '0');
INSERT INTO `mall_region` VALUES ('1457', '171', '北安市', '3', '0');
INSERT INTO `mall_region` VALUES ('1458', '171', '嫩江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1459', '171', '逊克县', '3', '0');
INSERT INTO `mall_region` VALUES ('1460', '171', '孙吴县', '3', '0');
INSERT INTO `mall_region` VALUES ('1461', '172', '鸡冠区', '3', '0');
INSERT INTO `mall_region` VALUES ('1462', '172', '恒山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1463', '172', '城子河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1464', '172', '滴道区', '3', '0');
INSERT INTO `mall_region` VALUES ('1465', '172', '梨树区', '3', '0');
INSERT INTO `mall_region` VALUES ('1466', '172', '虎林市', '3', '0');
INSERT INTO `mall_region` VALUES ('1467', '172', '密山市', '3', '0');
INSERT INTO `mall_region` VALUES ('1468', '172', '鸡东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1469', '173', '前进区', '3', '0');
INSERT INTO `mall_region` VALUES ('1470', '173', '郊区', '3', '0');
INSERT INTO `mall_region` VALUES ('1471', '173', '向阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1472', '173', '东风区', '3', '0');
INSERT INTO `mall_region` VALUES ('1473', '173', '同江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1474', '173', '富锦市', '3', '0');
INSERT INTO `mall_region` VALUES ('1475', '173', '桦南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1476', '173', '桦川县', '3', '0');
INSERT INTO `mall_region` VALUES ('1477', '173', '汤原县', '3', '0');
INSERT INTO `mall_region` VALUES ('1478', '173', '抚远县', '3', '0');
INSERT INTO `mall_region` VALUES ('1479', '174', '爱民区', '3', '0');
INSERT INTO `mall_region` VALUES ('1480', '174', '东安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1481', '174', '阳明区', '3', '0');
INSERT INTO `mall_region` VALUES ('1482', '174', '西安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1483', '174', '绥芬河市', '3', '0');
INSERT INTO `mall_region` VALUES ('1484', '174', '海林市', '3', '0');
INSERT INTO `mall_region` VALUES ('1485', '174', '宁安市', '3', '0');
INSERT INTO `mall_region` VALUES ('1486', '174', '穆棱市', '3', '0');
INSERT INTO `mall_region` VALUES ('1487', '174', '东宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1488', '174', '林口县', '3', '0');
INSERT INTO `mall_region` VALUES ('1489', '175', '桃山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1490', '175', '新兴区', '3', '0');
INSERT INTO `mall_region` VALUES ('1491', '175', '茄子河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1492', '175', '勃利县', '3', '0');
INSERT INTO `mall_region` VALUES ('1493', '176', '龙沙区', '3', '0');
INSERT INTO `mall_region` VALUES ('1494', '176', '昂昂溪区', '3', '0');
INSERT INTO `mall_region` VALUES ('1495', '176', '铁峰区', '3', '0');
INSERT INTO `mall_region` VALUES ('1496', '176', '建华区', '3', '0');
INSERT INTO `mall_region` VALUES ('1497', '176', '富拉尔基区', '3', '0');
INSERT INTO `mall_region` VALUES ('1498', '176', '碾子山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1499', '176', '梅里斯达斡尔区', '3', '0');
INSERT INTO `mall_region` VALUES ('1500', '176', '讷河市', '3', '0');
INSERT INTO `mall_region` VALUES ('1501', '176', '龙江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1502', '176', '依安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1503', '176', '泰来县', '3', '0');
INSERT INTO `mall_region` VALUES ('1504', '176', '甘南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1505', '176', '富裕县', '3', '0');
INSERT INTO `mall_region` VALUES ('1506', '176', '克山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1507', '176', '克东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1508', '176', '拜泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('1509', '177', '尖山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1510', '177', '岭东区', '3', '0');
INSERT INTO `mall_region` VALUES ('1511', '177', '四方台区', '3', '0');
INSERT INTO `mall_region` VALUES ('1512', '177', '宝山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1513', '177', '集贤县', '3', '0');
INSERT INTO `mall_region` VALUES ('1514', '177', '友谊县', '3', '0');
INSERT INTO `mall_region` VALUES ('1515', '177', '宝清县', '3', '0');
INSERT INTO `mall_region` VALUES ('1516', '177', '饶河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1517', '178', '北林区', '3', '0');
INSERT INTO `mall_region` VALUES ('1518', '178', '安达市', '3', '0');
INSERT INTO `mall_region` VALUES ('1519', '178', '肇东市', '3', '0');
INSERT INTO `mall_region` VALUES ('1520', '178', '海伦市', '3', '0');
INSERT INTO `mall_region` VALUES ('1521', '178', '望奎县', '3', '0');
INSERT INTO `mall_region` VALUES ('1522', '178', '兰西县', '3', '0');
INSERT INTO `mall_region` VALUES ('1523', '178', '青冈县', '3', '0');
INSERT INTO `mall_region` VALUES ('1524', '178', '庆安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1525', '178', '明水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1526', '178', '绥棱县', '3', '0');
INSERT INTO `mall_region` VALUES ('1527', '179', '伊春区', '3', '0');
INSERT INTO `mall_region` VALUES ('1528', '179', '带岭区', '3', '0');
INSERT INTO `mall_region` VALUES ('1529', '179', '南岔区', '3', '0');
INSERT INTO `mall_region` VALUES ('1530', '179', '金山屯区', '3', '0');
INSERT INTO `mall_region` VALUES ('1531', '179', '西林区', '3', '0');
INSERT INTO `mall_region` VALUES ('1532', '179', '美溪区', '3', '0');
INSERT INTO `mall_region` VALUES ('1533', '179', '乌马河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1534', '179', '翠峦区', '3', '0');
INSERT INTO `mall_region` VALUES ('1535', '179', '友好区', '3', '0');
INSERT INTO `mall_region` VALUES ('1536', '179', '上甘岭区', '3', '0');
INSERT INTO `mall_region` VALUES ('1537', '179', '五营区', '3', '0');
INSERT INTO `mall_region` VALUES ('1538', '179', '红星区', '3', '0');
INSERT INTO `mall_region` VALUES ('1539', '179', '新青区', '3', '0');
INSERT INTO `mall_region` VALUES ('1540', '179', '汤旺河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1541', '179', '乌伊岭区', '3', '0');
INSERT INTO `mall_region` VALUES ('1542', '179', '铁力市', '3', '0');
INSERT INTO `mall_region` VALUES ('1543', '179', '嘉荫县', '3', '0');
INSERT INTO `mall_region` VALUES ('1544', '180', '江岸区', '3', '0');
INSERT INTO `mall_region` VALUES ('1545', '180', '武昌区', '3', '0');
INSERT INTO `mall_region` VALUES ('1546', '180', '江汉区', '3', '0');
INSERT INTO `mall_region` VALUES ('1547', '180', '硚口区', '3', '0');
INSERT INTO `mall_region` VALUES ('1548', '180', '汉阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1549', '180', '青山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1550', '180', '洪山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1551', '180', '东西湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1552', '180', '汉南区', '3', '0');
INSERT INTO `mall_region` VALUES ('1553', '180', '蔡甸区', '3', '0');
INSERT INTO `mall_region` VALUES ('1554', '180', '江夏区', '3', '0');
INSERT INTO `mall_region` VALUES ('1555', '180', '黄陂区', '3', '0');
INSERT INTO `mall_region` VALUES ('1556', '180', '新洲区', '3', '0');
INSERT INTO `mall_region` VALUES ('1557', '180', '经济开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1558', '181', '仙桃市', '3', '0');
INSERT INTO `mall_region` VALUES ('1559', '182', '鄂城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1560', '182', '华容区', '3', '0');
INSERT INTO `mall_region` VALUES ('1561', '182', '梁子湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1562', '183', '黄州区', '3', '0');
INSERT INTO `mall_region` VALUES ('1563', '183', '麻城市', '3', '0');
INSERT INTO `mall_region` VALUES ('1564', '183', '武穴市', '3', '0');
INSERT INTO `mall_region` VALUES ('1565', '183', '团风县', '3', '0');
INSERT INTO `mall_region` VALUES ('1566', '183', '红安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1567', '183', '罗田县', '3', '0');
INSERT INTO `mall_region` VALUES ('1568', '183', '英山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1569', '183', '浠水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1570', '183', '蕲春县', '3', '0');
INSERT INTO `mall_region` VALUES ('1571', '183', '黄梅县', '3', '0');
INSERT INTO `mall_region` VALUES ('1572', '184', '黄石港区', '3', '0');
INSERT INTO `mall_region` VALUES ('1573', '184', '西塞山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1574', '184', '下陆区', '3', '0');
INSERT INTO `mall_region` VALUES ('1575', '184', '铁山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1576', '184', '大冶市', '3', '0');
INSERT INTO `mall_region` VALUES ('1577', '184', '阳新县', '3', '0');
INSERT INTO `mall_region` VALUES ('1578', '185', '东宝区', '3', '0');
INSERT INTO `mall_region` VALUES ('1579', '185', '掇刀区', '3', '0');
INSERT INTO `mall_region` VALUES ('1580', '185', '钟祥市', '3', '0');
INSERT INTO `mall_region` VALUES ('1581', '185', '京山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1582', '185', '沙洋县', '3', '0');
INSERT INTO `mall_region` VALUES ('1583', '186', '沙市区', '3', '0');
INSERT INTO `mall_region` VALUES ('1584', '186', '荆州区', '3', '0');
INSERT INTO `mall_region` VALUES ('1585', '186', '石首市', '3', '0');
INSERT INTO `mall_region` VALUES ('1586', '186', '洪湖市', '3', '0');
INSERT INTO `mall_region` VALUES ('1587', '186', '松滋市', '3', '0');
INSERT INTO `mall_region` VALUES ('1588', '186', '公安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1589', '186', '监利县', '3', '0');
INSERT INTO `mall_region` VALUES ('1590', '186', '江陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1591', '187', '潜江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1592', '188', '神农架林区', '3', '0');
INSERT INTO `mall_region` VALUES ('1593', '189', '张湾区', '3', '0');
INSERT INTO `mall_region` VALUES ('1594', '189', '茅箭区', '3', '0');
INSERT INTO `mall_region` VALUES ('1595', '189', '丹江口市', '3', '0');
INSERT INTO `mall_region` VALUES ('1596', '189', '郧县', '3', '0');
INSERT INTO `mall_region` VALUES ('1597', '189', '郧西县', '3', '0');
INSERT INTO `mall_region` VALUES ('1598', '189', '竹山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1599', '189', '竹溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('1600', '189', '房县', '3', '0');
INSERT INTO `mall_region` VALUES ('1601', '190', '曾都区', '3', '0');
INSERT INTO `mall_region` VALUES ('1602', '190', '广水市', '3', '0');
INSERT INTO `mall_region` VALUES ('1603', '191', '天门市', '3', '0');
INSERT INTO `mall_region` VALUES ('1604', '192', '咸安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1605', '192', '赤壁市', '3', '0');
INSERT INTO `mall_region` VALUES ('1606', '192', '嘉鱼县', '3', '0');
INSERT INTO `mall_region` VALUES ('1607', '192', '通城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1608', '192', '崇阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1609', '192', '通山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1610', '193', '襄城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1611', '193', '樊城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1612', '193', '襄阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1613', '193', '老河口市', '3', '0');
INSERT INTO `mall_region` VALUES ('1614', '193', '枣阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1615', '193', '宜城市', '3', '0');
INSERT INTO `mall_region` VALUES ('1616', '193', '南漳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1617', '193', '谷城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1618', '193', '保康县', '3', '0');
INSERT INTO `mall_region` VALUES ('1619', '194', '孝南区', '3', '0');
INSERT INTO `mall_region` VALUES ('1620', '194', '应城市', '3', '0');
INSERT INTO `mall_region` VALUES ('1621', '194', '安陆市', '3', '0');
INSERT INTO `mall_region` VALUES ('1622', '194', '汉川市', '3', '0');
INSERT INTO `mall_region` VALUES ('1623', '194', '孝昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('1624', '194', '大悟县', '3', '0');
INSERT INTO `mall_region` VALUES ('1625', '194', '云梦县', '3', '0');
INSERT INTO `mall_region` VALUES ('1626', '195', '长阳', '3', '0');
INSERT INTO `mall_region` VALUES ('1627', '195', '五峰', '3', '0');
INSERT INTO `mall_region` VALUES ('1628', '195', '西陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('1629', '195', '伍家岗区', '3', '0');
INSERT INTO `mall_region` VALUES ('1630', '195', '点军区', '3', '0');
INSERT INTO `mall_region` VALUES ('1631', '195', '猇亭区', '3', '0');
INSERT INTO `mall_region` VALUES ('1632', '195', '夷陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('1633', '195', '宜都市', '3', '0');
INSERT INTO `mall_region` VALUES ('1634', '195', '当阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1635', '195', '枝江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1636', '195', '远安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1637', '195', '兴山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1638', '195', '秭归县', '3', '0');
INSERT INTO `mall_region` VALUES ('1639', '196', '恩施市', '3', '0');
INSERT INTO `mall_region` VALUES ('1640', '196', '利川市', '3', '0');
INSERT INTO `mall_region` VALUES ('1641', '196', '建始县', '3', '0');
INSERT INTO `mall_region` VALUES ('1642', '196', '巴东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1643', '196', '宣恩县', '3', '0');
INSERT INTO `mall_region` VALUES ('1644', '196', '咸丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1645', '196', '来凤县', '3', '0');
INSERT INTO `mall_region` VALUES ('1646', '196', '鹤峰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1647', '197', '岳麓区', '3', '0');
INSERT INTO `mall_region` VALUES ('1648', '197', '芙蓉区', '3', '0');
INSERT INTO `mall_region` VALUES ('1649', '197', '天心区', '3', '0');
INSERT INTO `mall_region` VALUES ('1650', '197', '开福区', '3', '0');
INSERT INTO `mall_region` VALUES ('1651', '197', '雨花区', '3', '0');
INSERT INTO `mall_region` VALUES ('1652', '197', '开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1653', '197', '浏阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1654', '197', '长沙县', '3', '0');
INSERT INTO `mall_region` VALUES ('1655', '197', '望城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1656', '197', '宁乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1657', '198', '永定区', '3', '0');
INSERT INTO `mall_region` VALUES ('1658', '198', '武陵源区', '3', '0');
INSERT INTO `mall_region` VALUES ('1659', '198', '慈利县', '3', '0');
INSERT INTO `mall_region` VALUES ('1660', '198', '桑植县', '3', '0');
INSERT INTO `mall_region` VALUES ('1661', '199', '武陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('1662', '199', '鼎城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1663', '199', '津市市', '3', '0');
INSERT INTO `mall_region` VALUES ('1664', '199', '安乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1665', '199', '汉寿县', '3', '0');
INSERT INTO `mall_region` VALUES ('1666', '199', '澧县', '3', '0');
INSERT INTO `mall_region` VALUES ('1667', '199', '临澧县', '3', '0');
INSERT INTO `mall_region` VALUES ('1668', '199', '桃源县', '3', '0');
INSERT INTO `mall_region` VALUES ('1669', '199', '石门县', '3', '0');
INSERT INTO `mall_region` VALUES ('1670', '200', '北湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1671', '200', '苏仙区', '3', '0');
INSERT INTO `mall_region` VALUES ('1672', '200', '资兴市', '3', '0');
INSERT INTO `mall_region` VALUES ('1673', '200', '桂阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1674', '200', '宜章县', '3', '0');
INSERT INTO `mall_region` VALUES ('1675', '200', '永兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('1676', '200', '嘉禾县', '3', '0');
INSERT INTO `mall_region` VALUES ('1677', '200', '临武县', '3', '0');
INSERT INTO `mall_region` VALUES ('1678', '200', '汝城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1679', '200', '桂东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1680', '200', '安仁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1681', '201', '雁峰区', '3', '0');
INSERT INTO `mall_region` VALUES ('1682', '201', '珠晖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1683', '201', '石鼓区', '3', '0');
INSERT INTO `mall_region` VALUES ('1684', '201', '蒸湘区', '3', '0');
INSERT INTO `mall_region` VALUES ('1685', '201', '南岳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1686', '201', '耒阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1687', '201', '常宁市', '3', '0');
INSERT INTO `mall_region` VALUES ('1688', '201', '衡阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1689', '201', '衡南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1690', '201', '衡山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1691', '201', '衡东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1692', '201', '祁东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1693', '202', '鹤城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1694', '202', '靖州', '3', '0');
INSERT INTO `mall_region` VALUES ('1695', '202', '麻阳', '3', '0');
INSERT INTO `mall_region` VALUES ('1696', '202', '通道', '3', '0');
INSERT INTO `mall_region` VALUES ('1697', '202', '新晃', '3', '0');
INSERT INTO `mall_region` VALUES ('1698', '202', '芷江', '3', '0');
INSERT INTO `mall_region` VALUES ('1699', '202', '沅陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1700', '202', '辰溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('1701', '202', '溆浦县', '3', '0');
INSERT INTO `mall_region` VALUES ('1702', '202', '中方县', '3', '0');
INSERT INTO `mall_region` VALUES ('1703', '202', '会同县', '3', '0');
INSERT INTO `mall_region` VALUES ('1704', '202', '洪江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1705', '203', '娄星区', '3', '0');
INSERT INTO `mall_region` VALUES ('1706', '203', '冷水江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1707', '203', '涟源市', '3', '0');
INSERT INTO `mall_region` VALUES ('1708', '203', '双峰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1709', '203', '新化县', '3', '0');
INSERT INTO `mall_region` VALUES ('1710', '204', '城步', '3', '0');
INSERT INTO `mall_region` VALUES ('1711', '204', '双清区', '3', '0');
INSERT INTO `mall_region` VALUES ('1712', '204', '大祥区', '3', '0');
INSERT INTO `mall_region` VALUES ('1713', '204', '北塔区', '3', '0');
INSERT INTO `mall_region` VALUES ('1714', '204', '武冈市', '3', '0');
INSERT INTO `mall_region` VALUES ('1715', '204', '邵东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1716', '204', '新邵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1717', '204', '邵阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1718', '204', '隆回县', '3', '0');
INSERT INTO `mall_region` VALUES ('1719', '204', '洞口县', '3', '0');
INSERT INTO `mall_region` VALUES ('1720', '204', '绥宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1721', '204', '新宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1722', '205', '岳塘区', '3', '0');
INSERT INTO `mall_region` VALUES ('1723', '205', '雨湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1724', '205', '湘乡市', '3', '0');
INSERT INTO `mall_region` VALUES ('1725', '205', '韶山市', '3', '0');
INSERT INTO `mall_region` VALUES ('1726', '205', '湘潭县', '3', '0');
INSERT INTO `mall_region` VALUES ('1727', '206', '吉首市', '3', '0');
INSERT INTO `mall_region` VALUES ('1728', '206', '泸溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('1729', '206', '凤凰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1730', '206', '花垣县', '3', '0');
INSERT INTO `mall_region` VALUES ('1731', '206', '保靖县', '3', '0');
INSERT INTO `mall_region` VALUES ('1732', '206', '古丈县', '3', '0');
INSERT INTO `mall_region` VALUES ('1733', '206', '永顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('1734', '206', '龙山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1735', '207', '赫山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1736', '207', '资阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1737', '207', '沅江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1738', '207', '南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1739', '207', '桃江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1740', '207', '安化县', '3', '0');
INSERT INTO `mall_region` VALUES ('1741', '208', '江华', '3', '0');
INSERT INTO `mall_region` VALUES ('1742', '208', '冷水滩区', '3', '0');
INSERT INTO `mall_region` VALUES ('1743', '208', '零陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('1744', '208', '祁阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1745', '208', '东安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1746', '208', '双牌县', '3', '0');
INSERT INTO `mall_region` VALUES ('1747', '208', '道县', '3', '0');
INSERT INTO `mall_region` VALUES ('1748', '208', '江永县', '3', '0');
INSERT INTO `mall_region` VALUES ('1749', '208', '宁远县', '3', '0');
INSERT INTO `mall_region` VALUES ('1750', '208', '蓝山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1751', '208', '新田县', '3', '0');
INSERT INTO `mall_region` VALUES ('1752', '209', '岳阳楼区', '3', '0');
INSERT INTO `mall_region` VALUES ('1753', '209', '君山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1754', '209', '云溪区', '3', '0');
INSERT INTO `mall_region` VALUES ('1755', '209', '汨罗市', '3', '0');
INSERT INTO `mall_region` VALUES ('1756', '209', '临湘市', '3', '0');
INSERT INTO `mall_region` VALUES ('1757', '209', '岳阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1758', '209', '华容县', '3', '0');
INSERT INTO `mall_region` VALUES ('1759', '209', '湘阴县', '3', '0');
INSERT INTO `mall_region` VALUES ('1760', '209', '平江县', '3', '0');
INSERT INTO `mall_region` VALUES ('1761', '210', '天元区', '3', '0');
INSERT INTO `mall_region` VALUES ('1762', '210', '荷塘区', '3', '0');
INSERT INTO `mall_region` VALUES ('1763', '210', '芦淞区', '3', '0');
INSERT INTO `mall_region` VALUES ('1764', '210', '石峰区', '3', '0');
INSERT INTO `mall_region` VALUES ('1765', '210', '醴陵市', '3', '0');
INSERT INTO `mall_region` VALUES ('1766', '210', '株洲县', '3', '0');
INSERT INTO `mall_region` VALUES ('1767', '210', '攸县', '3', '0');
INSERT INTO `mall_region` VALUES ('1768', '210', '茶陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1769', '210', '炎陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('1770', '211', '朝阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1771', '211', '宽城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1772', '211', '二道区', '3', '0');
INSERT INTO `mall_region` VALUES ('1773', '211', '南关区', '3', '0');
INSERT INTO `mall_region` VALUES ('1774', '211', '绿园区', '3', '0');
INSERT INTO `mall_region` VALUES ('1775', '211', '双阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('1776', '211', '净月潭开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1777', '211', '高新技术开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1778', '211', '经济技术开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1779', '211', '汽车产业开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1780', '211', '德惠市', '3', '0');
INSERT INTO `mall_region` VALUES ('1781', '211', '九台市', '3', '0');
INSERT INTO `mall_region` VALUES ('1782', '211', '榆树市', '3', '0');
INSERT INTO `mall_region` VALUES ('1783', '211', '农安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1784', '212', '船营区', '3', '0');
INSERT INTO `mall_region` VALUES ('1785', '212', '昌邑区', '3', '0');
INSERT INTO `mall_region` VALUES ('1786', '212', '龙潭区', '3', '0');
INSERT INTO `mall_region` VALUES ('1787', '212', '丰满区', '3', '0');
INSERT INTO `mall_region` VALUES ('1788', '212', '蛟河市', '3', '0');
INSERT INTO `mall_region` VALUES ('1789', '212', '桦甸市', '3', '0');
INSERT INTO `mall_region` VALUES ('1790', '212', '舒兰市', '3', '0');
INSERT INTO `mall_region` VALUES ('1791', '212', '磐石市', '3', '0');
INSERT INTO `mall_region` VALUES ('1792', '212', '永吉县', '3', '0');
INSERT INTO `mall_region` VALUES ('1793', '213', '洮北区', '3', '0');
INSERT INTO `mall_region` VALUES ('1794', '213', '洮南市', '3', '0');
INSERT INTO `mall_region` VALUES ('1795', '213', '大安市', '3', '0');
INSERT INTO `mall_region` VALUES ('1796', '213', '镇赉县', '3', '0');
INSERT INTO `mall_region` VALUES ('1797', '213', '通榆县', '3', '0');
INSERT INTO `mall_region` VALUES ('1798', '214', '江源区', '3', '0');
INSERT INTO `mall_region` VALUES ('1799', '214', '八道江区', '3', '0');
INSERT INTO `mall_region` VALUES ('1800', '214', '长白', '3', '0');
INSERT INTO `mall_region` VALUES ('1801', '214', '临江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1802', '214', '抚松县', '3', '0');
INSERT INTO `mall_region` VALUES ('1803', '214', '靖宇县', '3', '0');
INSERT INTO `mall_region` VALUES ('1804', '215', '龙山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1805', '215', '西安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1806', '215', '东丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1807', '215', '东辽县', '3', '0');
INSERT INTO `mall_region` VALUES ('1808', '216', '铁西区', '3', '0');
INSERT INTO `mall_region` VALUES ('1809', '216', '铁东区', '3', '0');
INSERT INTO `mall_region` VALUES ('1810', '216', '伊通', '3', '0');
INSERT INTO `mall_region` VALUES ('1811', '216', '公主岭市', '3', '0');
INSERT INTO `mall_region` VALUES ('1812', '216', '双辽市', '3', '0');
INSERT INTO `mall_region` VALUES ('1813', '216', '梨树县', '3', '0');
INSERT INTO `mall_region` VALUES ('1814', '217', '前郭尔罗斯', '3', '0');
INSERT INTO `mall_region` VALUES ('1815', '217', '宁江区', '3', '0');
INSERT INTO `mall_region` VALUES ('1816', '217', '长岭县', '3', '0');
INSERT INTO `mall_region` VALUES ('1817', '217', '乾安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1818', '217', '扶余县', '3', '0');
INSERT INTO `mall_region` VALUES ('1819', '218', '东昌区', '3', '0');
INSERT INTO `mall_region` VALUES ('1820', '218', '二道江区', '3', '0');
INSERT INTO `mall_region` VALUES ('1821', '218', '梅河口市', '3', '0');
INSERT INTO `mall_region` VALUES ('1822', '218', '集安市', '3', '0');
INSERT INTO `mall_region` VALUES ('1823', '218', '通化县', '3', '0');
INSERT INTO `mall_region` VALUES ('1824', '218', '辉南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1825', '218', '柳河县', '3', '0');
INSERT INTO `mall_region` VALUES ('1826', '219', '延吉市', '3', '0');
INSERT INTO `mall_region` VALUES ('1827', '219', '图们市', '3', '0');
INSERT INTO `mall_region` VALUES ('1828', '219', '敦化市', '3', '0');
INSERT INTO `mall_region` VALUES ('1829', '219', '珲春市', '3', '0');
INSERT INTO `mall_region` VALUES ('1830', '219', '龙井市', '3', '0');
INSERT INTO `mall_region` VALUES ('1831', '219', '和龙市', '3', '0');
INSERT INTO `mall_region` VALUES ('1832', '219', '安图县', '3', '0');
INSERT INTO `mall_region` VALUES ('1833', '219', '汪清县', '3', '0');
INSERT INTO `mall_region` VALUES ('1834', '220', '玄武区', '3', '0');
INSERT INTO `mall_region` VALUES ('1835', '220', '鼓楼区', '3', '0');
INSERT INTO `mall_region` VALUES ('1836', '220', '白下区', '3', '0');
INSERT INTO `mall_region` VALUES ('1837', '220', '建邺区', '3', '0');
INSERT INTO `mall_region` VALUES ('1838', '220', '秦淮区', '3', '0');
INSERT INTO `mall_region` VALUES ('1839', '220', '雨花台区', '3', '0');
INSERT INTO `mall_region` VALUES ('1840', '220', '下关区', '3', '0');
INSERT INTO `mall_region` VALUES ('1841', '220', '栖霞区', '3', '0');
INSERT INTO `mall_region` VALUES ('1842', '220', '浦口区', '3', '0');
INSERT INTO `mall_region` VALUES ('1843', '220', '江宁区', '3', '0');
INSERT INTO `mall_region` VALUES ('1844', '220', '六合区', '3', '0');
INSERT INTO `mall_region` VALUES ('1845', '220', '溧水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1846', '220', '高淳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1847', '221', '沧浪区', '3', '0');
INSERT INTO `mall_region` VALUES ('1848', '221', '金阊区', '3', '0');
INSERT INTO `mall_region` VALUES ('1849', '221', '平江区', '3', '0');
INSERT INTO `mall_region` VALUES ('1850', '221', '虎丘区', '3', '0');
INSERT INTO `mall_region` VALUES ('1851', '221', '吴中区', '3', '0');
INSERT INTO `mall_region` VALUES ('1852', '221', '相城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1853', '221', '园区', '3', '0');
INSERT INTO `mall_region` VALUES ('1854', '221', '新区', '3', '0');
INSERT INTO `mall_region` VALUES ('1855', '221', '常熟市', '3', '0');
INSERT INTO `mall_region` VALUES ('1856', '221', '张家港市', '3', '0');
INSERT INTO `mall_region` VALUES ('1857', '221', '玉山镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1858', '221', '巴城镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1859', '221', '周市镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1860', '221', '陆家镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1861', '221', '花桥镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1862', '221', '淀山湖镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1863', '221', '张浦镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1864', '221', '周庄镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1865', '221', '千灯镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1866', '221', '锦溪镇', '3', '0');
INSERT INTO `mall_region` VALUES ('1867', '221', '开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1868', '221', '吴江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1869', '221', '太仓市', '3', '0');
INSERT INTO `mall_region` VALUES ('1870', '222', '崇安区', '3', '0');
INSERT INTO `mall_region` VALUES ('1871', '222', '北塘区', '3', '0');
INSERT INTO `mall_region` VALUES ('1872', '222', '南长区', '3', '0');
INSERT INTO `mall_region` VALUES ('1873', '222', '锡山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1874', '222', '惠山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1875', '222', '滨湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1876', '222', '新区', '3', '0');
INSERT INTO `mall_region` VALUES ('1877', '222', '江阴市', '3', '0');
INSERT INTO `mall_region` VALUES ('1878', '222', '宜兴市', '3', '0');
INSERT INTO `mall_region` VALUES ('1879', '223', '天宁区', '3', '0');
INSERT INTO `mall_region` VALUES ('1880', '223', '钟楼区', '3', '0');
INSERT INTO `mall_region` VALUES ('1881', '223', '戚墅堰区', '3', '0');
INSERT INTO `mall_region` VALUES ('1882', '223', '郊区', '3', '0');
INSERT INTO `mall_region` VALUES ('1883', '223', '新北区', '3', '0');
INSERT INTO `mall_region` VALUES ('1884', '223', '武进区', '3', '0');
INSERT INTO `mall_region` VALUES ('1885', '223', '溧阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1886', '223', '金坛市', '3', '0');
INSERT INTO `mall_region` VALUES ('1887', '224', '清河区', '3', '0');
INSERT INTO `mall_region` VALUES ('1888', '224', '清浦区', '3', '0');
INSERT INTO `mall_region` VALUES ('1889', '224', '楚州区', '3', '0');
INSERT INTO `mall_region` VALUES ('1890', '224', '淮阴区', '3', '0');
INSERT INTO `mall_region` VALUES ('1891', '224', '涟水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1892', '224', '洪泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('1893', '224', '盱眙县', '3', '0');
INSERT INTO `mall_region` VALUES ('1894', '224', '金湖县', '3', '0');
INSERT INTO `mall_region` VALUES ('1895', '225', '新浦区', '3', '0');
INSERT INTO `mall_region` VALUES ('1896', '225', '连云区', '3', '0');
INSERT INTO `mall_region` VALUES ('1897', '225', '海州区', '3', '0');
INSERT INTO `mall_region` VALUES ('1898', '225', '赣榆县', '3', '0');
INSERT INTO `mall_region` VALUES ('1899', '225', '东海县', '3', '0');
INSERT INTO `mall_region` VALUES ('1900', '225', '灌云县', '3', '0');
INSERT INTO `mall_region` VALUES ('1901', '225', '灌南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1902', '226', '崇川区', '3', '0');
INSERT INTO `mall_region` VALUES ('1903', '226', '港闸区', '3', '0');
INSERT INTO `mall_region` VALUES ('1904', '226', '经济开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('1905', '226', '启东市', '3', '0');
INSERT INTO `mall_region` VALUES ('1906', '226', '如皋市', '3', '0');
INSERT INTO `mall_region` VALUES ('1907', '226', '通州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1908', '226', '海门市', '3', '0');
INSERT INTO `mall_region` VALUES ('1909', '226', '海安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1910', '226', '如东县', '3', '0');
INSERT INTO `mall_region` VALUES ('1911', '227', '宿城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1912', '227', '宿豫区', '3', '0');
INSERT INTO `mall_region` VALUES ('1913', '227', '宿豫县', '3', '0');
INSERT INTO `mall_region` VALUES ('1914', '227', '沭阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1915', '227', '泗阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1916', '227', '泗洪县', '3', '0');
INSERT INTO `mall_region` VALUES ('1917', '228', '海陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('1918', '228', '高港区', '3', '0');
INSERT INTO `mall_region` VALUES ('1919', '228', '兴化市', '3', '0');
INSERT INTO `mall_region` VALUES ('1920', '228', '靖江市', '3', '0');
INSERT INTO `mall_region` VALUES ('1921', '228', '泰兴市', '3', '0');
INSERT INTO `mall_region` VALUES ('1922', '228', '姜堰市', '3', '0');
INSERT INTO `mall_region` VALUES ('1923', '229', '云龙区', '3', '0');
INSERT INTO `mall_region` VALUES ('1924', '229', '鼓楼区', '3', '0');
INSERT INTO `mall_region` VALUES ('1925', '229', '九里区', '3', '0');
INSERT INTO `mall_region` VALUES ('1926', '229', '贾汪区', '3', '0');
INSERT INTO `mall_region` VALUES ('1927', '229', '泉山区', '3', '0');
INSERT INTO `mall_region` VALUES ('1928', '229', '新沂市', '3', '0');
INSERT INTO `mall_region` VALUES ('1929', '229', '邳州市', '3', '0');
INSERT INTO `mall_region` VALUES ('1930', '229', '丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1931', '229', '沛县', '3', '0');
INSERT INTO `mall_region` VALUES ('1932', '229', '铜山县', '3', '0');
INSERT INTO `mall_region` VALUES ('1933', '229', '睢宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1934', '230', '城区', '3', '0');
INSERT INTO `mall_region` VALUES ('1935', '230', '亭湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1936', '230', '盐都区', '3', '0');
INSERT INTO `mall_region` VALUES ('1937', '230', '盐都县', '3', '0');
INSERT INTO `mall_region` VALUES ('1938', '230', '东台市', '3', '0');
INSERT INTO `mall_region` VALUES ('1939', '230', '大丰市', '3', '0');
INSERT INTO `mall_region` VALUES ('1940', '230', '响水县', '3', '0');
INSERT INTO `mall_region` VALUES ('1941', '230', '滨海县', '3', '0');
INSERT INTO `mall_region` VALUES ('1942', '230', '阜宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1943', '230', '射阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('1944', '230', '建湖县', '3', '0');
INSERT INTO `mall_region` VALUES ('1945', '231', '广陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('1946', '231', '维扬区', '3', '0');
INSERT INTO `mall_region` VALUES ('1947', '231', '邗江区', '3', '0');
INSERT INTO `mall_region` VALUES ('1948', '231', '仪征市', '3', '0');
INSERT INTO `mall_region` VALUES ('1949', '231', '高邮市', '3', '0');
INSERT INTO `mall_region` VALUES ('1950', '231', '江都市', '3', '0');
INSERT INTO `mall_region` VALUES ('1951', '231', '宝应县', '3', '0');
INSERT INTO `mall_region` VALUES ('1952', '232', '京口区', '3', '0');
INSERT INTO `mall_region` VALUES ('1953', '232', '润州区', '3', '0');
INSERT INTO `mall_region` VALUES ('1954', '232', '丹徒区', '3', '0');
INSERT INTO `mall_region` VALUES ('1955', '232', '丹阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('1956', '232', '扬中市', '3', '0');
INSERT INTO `mall_region` VALUES ('1957', '232', '句容市', '3', '0');
INSERT INTO `mall_region` VALUES ('1958', '233', '东湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1959', '233', '西湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1960', '233', '青云谱区', '3', '0');
INSERT INTO `mall_region` VALUES ('1961', '233', '湾里区', '3', '0');
INSERT INTO `mall_region` VALUES ('1962', '233', '青山湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('1963', '233', '红谷滩新区', '3', '0');
INSERT INTO `mall_region` VALUES ('1964', '233', '昌北区', '3', '0');
INSERT INTO `mall_region` VALUES ('1965', '233', '高新区', '3', '0');
INSERT INTO `mall_region` VALUES ('1966', '233', '南昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('1967', '233', '新建县', '3', '0');
INSERT INTO `mall_region` VALUES ('1968', '233', '安义县', '3', '0');
INSERT INTO `mall_region` VALUES ('1969', '233', '进贤县', '3', '0');
INSERT INTO `mall_region` VALUES ('1970', '234', '临川区', '3', '0');
INSERT INTO `mall_region` VALUES ('1971', '234', '南城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1972', '234', '黎川县', '3', '0');
INSERT INTO `mall_region` VALUES ('1973', '234', '南丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1974', '234', '崇仁县', '3', '0');
INSERT INTO `mall_region` VALUES ('1975', '234', '乐安县', '3', '0');
INSERT INTO `mall_region` VALUES ('1976', '234', '宜黄县', '3', '0');
INSERT INTO `mall_region` VALUES ('1977', '234', '金溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('1978', '234', '资溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('1979', '234', '东乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('1980', '234', '广昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('1981', '235', '章贡区', '3', '0');
INSERT INTO `mall_region` VALUES ('1982', '235', '于都县', '3', '0');
INSERT INTO `mall_region` VALUES ('1983', '235', '瑞金市', '3', '0');
INSERT INTO `mall_region` VALUES ('1984', '235', '南康市', '3', '0');
INSERT INTO `mall_region` VALUES ('1985', '235', '赣县', '3', '0');
INSERT INTO `mall_region` VALUES ('1986', '235', '信丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('1987', '235', '大余县', '3', '0');
INSERT INTO `mall_region` VALUES ('1988', '235', '上犹县', '3', '0');
INSERT INTO `mall_region` VALUES ('1989', '235', '崇义县', '3', '0');
INSERT INTO `mall_region` VALUES ('1990', '235', '安远县', '3', '0');
INSERT INTO `mall_region` VALUES ('1991', '235', '龙南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1992', '235', '定南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1993', '235', '全南县', '3', '0');
INSERT INTO `mall_region` VALUES ('1994', '235', '宁都县', '3', '0');
INSERT INTO `mall_region` VALUES ('1995', '235', '兴国县', '3', '0');
INSERT INTO `mall_region` VALUES ('1996', '235', '会昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('1997', '235', '寻乌县', '3', '0');
INSERT INTO `mall_region` VALUES ('1998', '235', '石城县', '3', '0');
INSERT INTO `mall_region` VALUES ('1999', '236', '安福县', '3', '0');
INSERT INTO `mall_region` VALUES ('2000', '236', '吉州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2001', '236', '青原区', '3', '0');
INSERT INTO `mall_region` VALUES ('2002', '236', '井冈山市', '3', '0');
INSERT INTO `mall_region` VALUES ('2003', '236', '吉安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2004', '236', '吉水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2005', '236', '峡江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2006', '236', '新干县', '3', '0');
INSERT INTO `mall_region` VALUES ('2007', '236', '永丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2008', '236', '泰和县', '3', '0');
INSERT INTO `mall_region` VALUES ('2009', '236', '遂川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2010', '236', '万安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2011', '236', '永新县', '3', '0');
INSERT INTO `mall_region` VALUES ('2012', '237', '珠山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2013', '237', '昌江区', '3', '0');
INSERT INTO `mall_region` VALUES ('2014', '237', '乐平市', '3', '0');
INSERT INTO `mall_region` VALUES ('2015', '237', '浮梁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2016', '238', '浔阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('2017', '238', '庐山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2018', '238', '瑞昌市', '3', '0');
INSERT INTO `mall_region` VALUES ('2019', '238', '九江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2020', '238', '武宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2021', '238', '修水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2022', '238', '永修县', '3', '0');
INSERT INTO `mall_region` VALUES ('2023', '238', '德安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2024', '238', '星子县', '3', '0');
INSERT INTO `mall_region` VALUES ('2025', '238', '都昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('2026', '238', '湖口县', '3', '0');
INSERT INTO `mall_region` VALUES ('2027', '238', '彭泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('2028', '239', '安源区', '3', '0');
INSERT INTO `mall_region` VALUES ('2029', '239', '湘东区', '3', '0');
INSERT INTO `mall_region` VALUES ('2030', '239', '莲花县', '3', '0');
INSERT INTO `mall_region` VALUES ('2031', '239', '芦溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('2032', '239', '上栗县', '3', '0');
INSERT INTO `mall_region` VALUES ('2033', '240', '信州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2034', '240', '德兴市', '3', '0');
INSERT INTO `mall_region` VALUES ('2035', '240', '上饶县', '3', '0');
INSERT INTO `mall_region` VALUES ('2036', '240', '广丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2037', '240', '玉山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2038', '240', '铅山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2039', '240', '横峰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2040', '240', '弋阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2041', '240', '余干县', '3', '0');
INSERT INTO `mall_region` VALUES ('2042', '240', '波阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2043', '240', '万年县', '3', '0');
INSERT INTO `mall_region` VALUES ('2044', '240', '婺源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2045', '241', '渝水区', '3', '0');
INSERT INTO `mall_region` VALUES ('2046', '241', '分宜县', '3', '0');
INSERT INTO `mall_region` VALUES ('2047', '242', '袁州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2048', '242', '丰城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2049', '242', '樟树市', '3', '0');
INSERT INTO `mall_region` VALUES ('2050', '242', '高安市', '3', '0');
INSERT INTO `mall_region` VALUES ('2051', '242', '奉新县', '3', '0');
INSERT INTO `mall_region` VALUES ('2052', '242', '万载县', '3', '0');
INSERT INTO `mall_region` VALUES ('2053', '242', '上高县', '3', '0');
INSERT INTO `mall_region` VALUES ('2054', '242', '宜丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2055', '242', '靖安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2056', '242', '铜鼓县', '3', '0');
INSERT INTO `mall_region` VALUES ('2057', '243', '月湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('2058', '243', '贵溪市', '3', '0');
INSERT INTO `mall_region` VALUES ('2059', '243', '余江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2060', '244', '沈河区', '3', '0');
INSERT INTO `mall_region` VALUES ('2061', '244', '皇姑区', '3', '0');
INSERT INTO `mall_region` VALUES ('2062', '244', '和平区', '3', '0');
INSERT INTO `mall_region` VALUES ('2063', '244', '大东区', '3', '0');
INSERT INTO `mall_region` VALUES ('2064', '244', '铁西区', '3', '0');
INSERT INTO `mall_region` VALUES ('2065', '244', '苏家屯区', '3', '0');
INSERT INTO `mall_region` VALUES ('2066', '244', '东陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('2067', '244', '沈北新区', '3', '0');
INSERT INTO `mall_region` VALUES ('2068', '244', '于洪区', '3', '0');
INSERT INTO `mall_region` VALUES ('2069', '244', '浑南新区', '3', '0');
INSERT INTO `mall_region` VALUES ('2070', '244', '新民市', '3', '0');
INSERT INTO `mall_region` VALUES ('2071', '244', '辽中县', '3', '0');
INSERT INTO `mall_region` VALUES ('2072', '244', '康平县', '3', '0');
INSERT INTO `mall_region` VALUES ('2073', '244', '法库县', '3', '0');
INSERT INTO `mall_region` VALUES ('2074', '245', '西岗区', '3', '0');
INSERT INTO `mall_region` VALUES ('2075', '245', '中山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2076', '245', '沙河口区', '3', '0');
INSERT INTO `mall_region` VALUES ('2077', '245', '甘井子区', '3', '0');
INSERT INTO `mall_region` VALUES ('2078', '245', '旅顺口区', '3', '0');
INSERT INTO `mall_region` VALUES ('2079', '245', '金州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2080', '245', '开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('2081', '245', '瓦房店市', '3', '0');
INSERT INTO `mall_region` VALUES ('2082', '245', '普兰店市', '3', '0');
INSERT INTO `mall_region` VALUES ('2083', '245', '庄河市', '3', '0');
INSERT INTO `mall_region` VALUES ('2084', '245', '长海县', '3', '0');
INSERT INTO `mall_region` VALUES ('2085', '246', '铁东区', '3', '0');
INSERT INTO `mall_region` VALUES ('2086', '246', '铁西区', '3', '0');
INSERT INTO `mall_region` VALUES ('2087', '246', '立山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2088', '246', '千山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2089', '246', '岫岩', '3', '0');
INSERT INTO `mall_region` VALUES ('2090', '246', '海城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2091', '246', '台安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2092', '247', '本溪', '3', '0');
INSERT INTO `mall_region` VALUES ('2093', '247', '平山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2094', '247', '明山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2095', '247', '溪湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('2096', '247', '南芬区', '3', '0');
INSERT INTO `mall_region` VALUES ('2097', '247', '桓仁', '3', '0');
INSERT INTO `mall_region` VALUES ('2098', '248', '双塔区', '3', '0');
INSERT INTO `mall_region` VALUES ('2099', '248', '龙城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2100', '248', '喀喇沁左翼蒙古族自治县', '3', '0');
INSERT INTO `mall_region` VALUES ('2101', '248', '北票市', '3', '0');
INSERT INTO `mall_region` VALUES ('2102', '248', '凌源市', '3', '0');
INSERT INTO `mall_region` VALUES ('2103', '248', '朝阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2104', '248', '建平县', '3', '0');
INSERT INTO `mall_region` VALUES ('2105', '249', '振兴区', '3', '0');
INSERT INTO `mall_region` VALUES ('2106', '249', '元宝区', '3', '0');
INSERT INTO `mall_region` VALUES ('2107', '249', '振安区', '3', '0');
INSERT INTO `mall_region` VALUES ('2108', '249', '宽甸', '3', '0');
INSERT INTO `mall_region` VALUES ('2109', '249', '东港市', '3', '0');
INSERT INTO `mall_region` VALUES ('2110', '249', '凤城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2111', '250', '顺城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2112', '250', '新抚区', '3', '0');
INSERT INTO `mall_region` VALUES ('2113', '250', '东洲区', '3', '0');
INSERT INTO `mall_region` VALUES ('2114', '250', '望花区', '3', '0');
INSERT INTO `mall_region` VALUES ('2115', '250', '清原', '3', '0');
INSERT INTO `mall_region` VALUES ('2116', '250', '新宾', '3', '0');
INSERT INTO `mall_region` VALUES ('2117', '250', '抚顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('2118', '251', '阜新', '3', '0');
INSERT INTO `mall_region` VALUES ('2119', '251', '海州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2120', '251', '新邱区', '3', '0');
INSERT INTO `mall_region` VALUES ('2121', '251', '太平区', '3', '0');
INSERT INTO `mall_region` VALUES ('2122', '251', '清河门区', '3', '0');
INSERT INTO `mall_region` VALUES ('2123', '251', '细河区', '3', '0');
INSERT INTO `mall_region` VALUES ('2124', '251', '彰武县', '3', '0');
INSERT INTO `mall_region` VALUES ('2125', '252', '龙港区', '3', '0');
INSERT INTO `mall_region` VALUES ('2126', '252', '南票区', '3', '0');
INSERT INTO `mall_region` VALUES ('2127', '252', '连山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2128', '252', '兴城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2129', '252', '绥中县', '3', '0');
INSERT INTO `mall_region` VALUES ('2130', '252', '建昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('2131', '253', '太和区', '3', '0');
INSERT INTO `mall_region` VALUES ('2132', '253', '古塔区', '3', '0');
INSERT INTO `mall_region` VALUES ('2133', '253', '凌河区', '3', '0');
INSERT INTO `mall_region` VALUES ('2134', '253', '凌海市', '3', '0');
INSERT INTO `mall_region` VALUES ('2135', '253', '北镇市', '3', '0');
INSERT INTO `mall_region` VALUES ('2136', '253', '黑山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2137', '253', '义县', '3', '0');
INSERT INTO `mall_region` VALUES ('2138', '254', '白塔区', '3', '0');
INSERT INTO `mall_region` VALUES ('2139', '254', '文圣区', '3', '0');
INSERT INTO `mall_region` VALUES ('2140', '254', '宏伟区', '3', '0');
INSERT INTO `mall_region` VALUES ('2141', '254', '太子河区', '3', '0');
INSERT INTO `mall_region` VALUES ('2142', '254', '弓长岭区', '3', '0');
INSERT INTO `mall_region` VALUES ('2143', '254', '灯塔市', '3', '0');
INSERT INTO `mall_region` VALUES ('2144', '254', '辽阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2145', '255', '双台子区', '3', '0');
INSERT INTO `mall_region` VALUES ('2146', '255', '兴隆台区', '3', '0');
INSERT INTO `mall_region` VALUES ('2147', '255', '大洼县', '3', '0');
INSERT INTO `mall_region` VALUES ('2148', '255', '盘山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2149', '256', '银州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2150', '256', '清河区', '3', '0');
INSERT INTO `mall_region` VALUES ('2151', '256', '调兵山市', '3', '0');
INSERT INTO `mall_region` VALUES ('2152', '256', '开原市', '3', '0');
INSERT INTO `mall_region` VALUES ('2153', '256', '铁岭县', '3', '0');
INSERT INTO `mall_region` VALUES ('2154', '256', '西丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2155', '256', '昌图县', '3', '0');
INSERT INTO `mall_region` VALUES ('2156', '257', '站前区', '3', '0');
INSERT INTO `mall_region` VALUES ('2157', '257', '西市区', '3', '0');
INSERT INTO `mall_region` VALUES ('2158', '257', '鲅鱼圈区', '3', '0');
INSERT INTO `mall_region` VALUES ('2159', '257', '老边区', '3', '0');
INSERT INTO `mall_region` VALUES ('2160', '257', '盖州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2161', '257', '大石桥市', '3', '0');
INSERT INTO `mall_region` VALUES ('2162', '258', '回民区', '3', '0');
INSERT INTO `mall_region` VALUES ('2163', '258', '玉泉区', '3', '0');
INSERT INTO `mall_region` VALUES ('2164', '258', '新城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2165', '258', '赛罕区', '3', '0');
INSERT INTO `mall_region` VALUES ('2166', '258', '清水河县', '3', '0');
INSERT INTO `mall_region` VALUES ('2167', '258', '土默特左旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2168', '258', '托克托县', '3', '0');
INSERT INTO `mall_region` VALUES ('2169', '258', '和林格尔县', '3', '0');
INSERT INTO `mall_region` VALUES ('2170', '258', '武川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2171', '259', '阿拉善左旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2172', '259', '阿拉善右旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2173', '259', '额济纳旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2174', '260', '临河区', '3', '0');
INSERT INTO `mall_region` VALUES ('2175', '260', '五原县', '3', '0');
INSERT INTO `mall_region` VALUES ('2176', '260', '磴口县', '3', '0');
INSERT INTO `mall_region` VALUES ('2177', '260', '乌拉特前旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2178', '260', '乌拉特中旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2179', '260', '乌拉特后旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2180', '260', '杭锦后旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2181', '261', '昆都仑区', '3', '0');
INSERT INTO `mall_region` VALUES ('2182', '261', '青山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2183', '261', '东河区', '3', '0');
INSERT INTO `mall_region` VALUES ('2184', '261', '九原区', '3', '0');
INSERT INTO `mall_region` VALUES ('2185', '261', '石拐区', '3', '0');
INSERT INTO `mall_region` VALUES ('2186', '261', '白云矿区', '3', '0');
INSERT INTO `mall_region` VALUES ('2187', '261', '土默特右旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2188', '261', '固阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2189', '261', '达尔罕茂明安联合旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2190', '262', '红山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2191', '262', '元宝山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2192', '262', '松山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2193', '262', '阿鲁科尔沁旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2194', '262', '巴林左旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2195', '262', '巴林右旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2196', '262', '林西县', '3', '0');
INSERT INTO `mall_region` VALUES ('2197', '262', '克什克腾旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2198', '262', '翁牛特旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2199', '262', '喀喇沁旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2200', '262', '宁城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2201', '262', '敖汉旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2202', '263', '东胜区', '3', '0');
INSERT INTO `mall_region` VALUES ('2203', '263', '达拉特旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2204', '263', '准格尔旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2205', '263', '鄂托克前旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2206', '263', '鄂托克旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2207', '263', '杭锦旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2208', '263', '乌审旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2209', '263', '伊金霍洛旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2210', '264', '海拉尔区', '3', '0');
INSERT INTO `mall_region` VALUES ('2211', '264', '莫力达瓦', '3', '0');
INSERT INTO `mall_region` VALUES ('2212', '264', '满洲里市', '3', '0');
INSERT INTO `mall_region` VALUES ('2213', '264', '牙克石市', '3', '0');
INSERT INTO `mall_region` VALUES ('2214', '264', '扎兰屯市', '3', '0');
INSERT INTO `mall_region` VALUES ('2215', '264', '额尔古纳市', '3', '0');
INSERT INTO `mall_region` VALUES ('2216', '264', '根河市', '3', '0');
INSERT INTO `mall_region` VALUES ('2217', '264', '阿荣旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2218', '264', '鄂伦春自治旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2219', '264', '鄂温克族自治旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2220', '264', '陈巴尔虎旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2221', '264', '新巴尔虎左旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2222', '264', '新巴尔虎右旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2223', '265', '科尔沁区', '3', '0');
INSERT INTO `mall_region` VALUES ('2224', '265', '霍林郭勒市', '3', '0');
INSERT INTO `mall_region` VALUES ('2225', '265', '科尔沁左翼中旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2226', '265', '科尔沁左翼后旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2227', '265', '开鲁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2228', '265', '库伦旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2229', '265', '奈曼旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2230', '265', '扎鲁特旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2231', '266', '海勃湾区', '3', '0');
INSERT INTO `mall_region` VALUES ('2232', '266', '乌达区', '3', '0');
INSERT INTO `mall_region` VALUES ('2233', '266', '海南区', '3', '0');
INSERT INTO `mall_region` VALUES ('2234', '267', '化德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2235', '267', '集宁区', '3', '0');
INSERT INTO `mall_region` VALUES ('2236', '267', '丰镇市', '3', '0');
INSERT INTO `mall_region` VALUES ('2237', '267', '卓资县', '3', '0');
INSERT INTO `mall_region` VALUES ('2238', '267', '商都县', '3', '0');
INSERT INTO `mall_region` VALUES ('2239', '267', '兴和县', '3', '0');
INSERT INTO `mall_region` VALUES ('2240', '267', '凉城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2241', '267', '察哈尔右翼前旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2242', '267', '察哈尔右翼中旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2243', '267', '察哈尔右翼后旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2244', '267', '四子王旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2245', '268', '二连浩特市', '3', '0');
INSERT INTO `mall_region` VALUES ('2246', '268', '锡林浩特市', '3', '0');
INSERT INTO `mall_region` VALUES ('2247', '268', '阿巴嘎旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2248', '268', '苏尼特左旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2249', '268', '苏尼特右旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2250', '268', '东乌珠穆沁旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2251', '268', '西乌珠穆沁旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2252', '268', '太仆寺旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2253', '268', '镶黄旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2254', '268', '正镶白旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2255', '268', '正蓝旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2256', '268', '多伦县', '3', '0');
INSERT INTO `mall_region` VALUES ('2257', '269', '乌兰浩特市', '3', '0');
INSERT INTO `mall_region` VALUES ('2258', '269', '阿尔山市', '3', '0');
INSERT INTO `mall_region` VALUES ('2259', '269', '科尔沁右翼前旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2260', '269', '科尔沁右翼中旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2261', '269', '扎赉特旗', '3', '0');
INSERT INTO `mall_region` VALUES ('2262', '269', '突泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2263', '270', '西夏区', '3', '0');
INSERT INTO `mall_region` VALUES ('2264', '270', '金凤区', '3', '0');
INSERT INTO `mall_region` VALUES ('2265', '270', '兴庆区', '3', '0');
INSERT INTO `mall_region` VALUES ('2266', '270', '灵武市', '3', '0');
INSERT INTO `mall_region` VALUES ('2267', '270', '永宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2268', '270', '贺兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2269', '271', '原州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2270', '271', '海原县', '3', '0');
INSERT INTO `mall_region` VALUES ('2271', '271', '西吉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2272', '271', '隆德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2273', '271', '泾源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2274', '271', '彭阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2275', '272', '惠农县', '3', '0');
INSERT INTO `mall_region` VALUES ('2276', '272', '大武口区', '3', '0');
INSERT INTO `mall_region` VALUES ('2277', '272', '惠农区', '3', '0');
INSERT INTO `mall_region` VALUES ('2278', '272', '陶乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('2279', '272', '平罗县', '3', '0');
INSERT INTO `mall_region` VALUES ('2280', '273', '利通区', '3', '0');
INSERT INTO `mall_region` VALUES ('2281', '273', '中卫县', '3', '0');
INSERT INTO `mall_region` VALUES ('2282', '273', '青铜峡市', '3', '0');
INSERT INTO `mall_region` VALUES ('2283', '273', '中宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2284', '273', '盐池县', '3', '0');
INSERT INTO `mall_region` VALUES ('2285', '273', '同心县', '3', '0');
INSERT INTO `mall_region` VALUES ('2286', '274', '沙坡头区', '3', '0');
INSERT INTO `mall_region` VALUES ('2287', '274', '海原县', '3', '0');
INSERT INTO `mall_region` VALUES ('2288', '274', '中宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2289', '275', '城中区', '3', '0');
INSERT INTO `mall_region` VALUES ('2290', '275', '城东区', '3', '0');
INSERT INTO `mall_region` VALUES ('2291', '275', '城西区', '3', '0');
INSERT INTO `mall_region` VALUES ('2292', '275', '城北区', '3', '0');
INSERT INTO `mall_region` VALUES ('2293', '275', '湟中县', '3', '0');
INSERT INTO `mall_region` VALUES ('2294', '275', '湟源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2295', '275', '大通', '3', '0');
INSERT INTO `mall_region` VALUES ('2296', '276', '玛沁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2297', '276', '班玛县', '3', '0');
INSERT INTO `mall_region` VALUES ('2298', '276', '甘德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2299', '276', '达日县', '3', '0');
INSERT INTO `mall_region` VALUES ('2300', '276', '久治县', '3', '0');
INSERT INTO `mall_region` VALUES ('2301', '276', '玛多县', '3', '0');
INSERT INTO `mall_region` VALUES ('2302', '277', '海晏县', '3', '0');
INSERT INTO `mall_region` VALUES ('2303', '277', '祁连县', '3', '0');
INSERT INTO `mall_region` VALUES ('2304', '277', '刚察县', '3', '0');
INSERT INTO `mall_region` VALUES ('2305', '277', '门源', '3', '0');
INSERT INTO `mall_region` VALUES ('2306', '278', '平安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2307', '278', '乐都县', '3', '0');
INSERT INTO `mall_region` VALUES ('2308', '278', '民和', '3', '0');
INSERT INTO `mall_region` VALUES ('2309', '278', '互助', '3', '0');
INSERT INTO `mall_region` VALUES ('2310', '278', '化隆', '3', '0');
INSERT INTO `mall_region` VALUES ('2311', '278', '循化', '3', '0');
INSERT INTO `mall_region` VALUES ('2312', '279', '共和县', '3', '0');
INSERT INTO `mall_region` VALUES ('2313', '279', '同德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2314', '279', '贵德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2315', '279', '兴海县', '3', '0');
INSERT INTO `mall_region` VALUES ('2316', '279', '贵南县', '3', '0');
INSERT INTO `mall_region` VALUES ('2317', '280', '德令哈市', '3', '0');
INSERT INTO `mall_region` VALUES ('2318', '280', '格尔木市', '3', '0');
INSERT INTO `mall_region` VALUES ('2319', '280', '乌兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2320', '280', '都兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2321', '280', '天峻县', '3', '0');
INSERT INTO `mall_region` VALUES ('2322', '281', '同仁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2323', '281', '尖扎县', '3', '0');
INSERT INTO `mall_region` VALUES ('2324', '281', '泽库县', '3', '0');
INSERT INTO `mall_region` VALUES ('2325', '281', '河南蒙古族自治县', '3', '0');
INSERT INTO `mall_region` VALUES ('2326', '282', '玉树县', '3', '0');
INSERT INTO `mall_region` VALUES ('2327', '282', '杂多县', '3', '0');
INSERT INTO `mall_region` VALUES ('2328', '282', '称多县', '3', '0');
INSERT INTO `mall_region` VALUES ('2329', '282', '治多县', '3', '0');
INSERT INTO `mall_region` VALUES ('2330', '282', '囊谦县', '3', '0');
INSERT INTO `mall_region` VALUES ('2331', '282', '曲麻莱县', '3', '0');
INSERT INTO `mall_region` VALUES ('2332', '283', '市中区', '3', '0');
INSERT INTO `mall_region` VALUES ('2333', '283', '历下区', '3', '0');
INSERT INTO `mall_region` VALUES ('2334', '283', '天桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('2335', '283', '槐荫区', '3', '0');
INSERT INTO `mall_region` VALUES ('2336', '283', '历城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2337', '283', '长清区', '3', '0');
INSERT INTO `mall_region` VALUES ('2338', '283', '章丘市', '3', '0');
INSERT INTO `mall_region` VALUES ('2339', '283', '平阴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2340', '283', '济阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2341', '283', '商河县', '3', '0');
INSERT INTO `mall_region` VALUES ('2342', '284', '市南区', '3', '0');
INSERT INTO `mall_region` VALUES ('2343', '284', '市北区', '3', '0');
INSERT INTO `mall_region` VALUES ('2344', '284', '城阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('2345', '284', '四方区', '3', '0');
INSERT INTO `mall_region` VALUES ('2346', '284', '李沧区', '3', '0');
INSERT INTO `mall_region` VALUES ('2347', '284', '黄岛区', '3', '0');
INSERT INTO `mall_region` VALUES ('2348', '284', '崂山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2349', '284', '胶州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2350', '284', '即墨市', '3', '0');
INSERT INTO `mall_region` VALUES ('2351', '284', '平度市', '3', '0');
INSERT INTO `mall_region` VALUES ('2352', '284', '胶南市', '3', '0');
INSERT INTO `mall_region` VALUES ('2353', '284', '莱西市', '3', '0');
INSERT INTO `mall_region` VALUES ('2354', '285', '滨城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2355', '285', '惠民县', '3', '0');
INSERT INTO `mall_region` VALUES ('2356', '285', '阳信县', '3', '0');
INSERT INTO `mall_region` VALUES ('2357', '285', '无棣县', '3', '0');
INSERT INTO `mall_region` VALUES ('2358', '285', '沾化县', '3', '0');
INSERT INTO `mall_region` VALUES ('2359', '285', '博兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2360', '285', '邹平县', '3', '0');
INSERT INTO `mall_region` VALUES ('2361', '286', '德城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2362', '286', '陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('2363', '286', '乐陵市', '3', '0');
INSERT INTO `mall_region` VALUES ('2364', '286', '禹城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2365', '286', '宁津县', '3', '0');
INSERT INTO `mall_region` VALUES ('2366', '286', '庆云县', '3', '0');
INSERT INTO `mall_region` VALUES ('2367', '286', '临邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('2368', '286', '齐河县', '3', '0');
INSERT INTO `mall_region` VALUES ('2369', '286', '平原县', '3', '0');
INSERT INTO `mall_region` VALUES ('2370', '286', '夏津县', '3', '0');
INSERT INTO `mall_region` VALUES ('2371', '286', '武城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2372', '287', '东营区', '3', '0');
INSERT INTO `mall_region` VALUES ('2373', '287', '河口区', '3', '0');
INSERT INTO `mall_region` VALUES ('2374', '287', '垦利县', '3', '0');
INSERT INTO `mall_region` VALUES ('2375', '287', '利津县', '3', '0');
INSERT INTO `mall_region` VALUES ('2376', '287', '广饶县', '3', '0');
INSERT INTO `mall_region` VALUES ('2377', '288', '牡丹区', '3', '0');
INSERT INTO `mall_region` VALUES ('2378', '288', '曹县', '3', '0');
INSERT INTO `mall_region` VALUES ('2379', '288', '单县', '3', '0');
INSERT INTO `mall_region` VALUES ('2380', '288', '成武县', '3', '0');
INSERT INTO `mall_region` VALUES ('2381', '288', '巨野县', '3', '0');
INSERT INTO `mall_region` VALUES ('2382', '288', '郓城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2383', '288', '鄄城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2384', '288', '定陶县', '3', '0');
INSERT INTO `mall_region` VALUES ('2385', '288', '东明县', '3', '0');
INSERT INTO `mall_region` VALUES ('2386', '289', '市中区', '3', '0');
INSERT INTO `mall_region` VALUES ('2387', '289', '任城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2388', '289', '曲阜市', '3', '0');
INSERT INTO `mall_region` VALUES ('2389', '289', '兖州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2390', '289', '邹城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2391', '289', '微山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2392', '289', '鱼台县', '3', '0');
INSERT INTO `mall_region` VALUES ('2393', '289', '金乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('2394', '289', '嘉祥县', '3', '0');
INSERT INTO `mall_region` VALUES ('2395', '289', '汶上县', '3', '0');
INSERT INTO `mall_region` VALUES ('2396', '289', '泗水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2397', '289', '梁山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2398', '290', '莱城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2399', '290', '钢城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2400', '291', '东昌府区', '3', '0');
INSERT INTO `mall_region` VALUES ('2401', '291', '临清市', '3', '0');
INSERT INTO `mall_region` VALUES ('2402', '291', '阳谷县', '3', '0');
INSERT INTO `mall_region` VALUES ('2403', '291', '莘县', '3', '0');
INSERT INTO `mall_region` VALUES ('2404', '291', '茌平县', '3', '0');
INSERT INTO `mall_region` VALUES ('2405', '291', '东阿县', '3', '0');
INSERT INTO `mall_region` VALUES ('2406', '291', '冠县', '3', '0');
INSERT INTO `mall_region` VALUES ('2407', '291', '高唐县', '3', '0');
INSERT INTO `mall_region` VALUES ('2408', '292', '兰山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2409', '292', '罗庄区', '3', '0');
INSERT INTO `mall_region` VALUES ('2410', '292', '河东区', '3', '0');
INSERT INTO `mall_region` VALUES ('2411', '292', '沂南县', '3', '0');
INSERT INTO `mall_region` VALUES ('2412', '292', '郯城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2413', '292', '沂水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2414', '292', '苍山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2415', '292', '费县', '3', '0');
INSERT INTO `mall_region` VALUES ('2416', '292', '平邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('2417', '292', '莒南县', '3', '0');
INSERT INTO `mall_region` VALUES ('2418', '292', '蒙阴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2419', '292', '临沭县', '3', '0');
INSERT INTO `mall_region` VALUES ('2420', '293', '东港区', '3', '0');
INSERT INTO `mall_region` VALUES ('2421', '293', '岚山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2422', '293', '五莲县', '3', '0');
INSERT INTO `mall_region` VALUES ('2423', '293', '莒县', '3', '0');
INSERT INTO `mall_region` VALUES ('2424', '294', '泰山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2425', '294', '岱岳区', '3', '0');
INSERT INTO `mall_region` VALUES ('2426', '294', '新泰市', '3', '0');
INSERT INTO `mall_region` VALUES ('2427', '294', '肥城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2428', '294', '宁阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2429', '294', '东平县', '3', '0');
INSERT INTO `mall_region` VALUES ('2430', '295', '荣成市', '3', '0');
INSERT INTO `mall_region` VALUES ('2431', '295', '乳山市', '3', '0');
INSERT INTO `mall_region` VALUES ('2432', '295', '环翠区', '3', '0');
INSERT INTO `mall_region` VALUES ('2433', '295', '文登市', '3', '0');
INSERT INTO `mall_region` VALUES ('2434', '296', '潍城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2435', '296', '寒亭区', '3', '0');
INSERT INTO `mall_region` VALUES ('2436', '296', '坊子区', '3', '0');
INSERT INTO `mall_region` VALUES ('2437', '296', '奎文区', '3', '0');
INSERT INTO `mall_region` VALUES ('2438', '296', '青州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2439', '296', '诸城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2440', '296', '寿光市', '3', '0');
INSERT INTO `mall_region` VALUES ('2441', '296', '安丘市', '3', '0');
INSERT INTO `mall_region` VALUES ('2442', '296', '高密市', '3', '0');
INSERT INTO `mall_region` VALUES ('2443', '296', '昌邑市', '3', '0');
INSERT INTO `mall_region` VALUES ('2444', '296', '临朐县', '3', '0');
INSERT INTO `mall_region` VALUES ('2445', '296', '昌乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('2446', '297', '芝罘区', '3', '0');
INSERT INTO `mall_region` VALUES ('2447', '297', '福山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2448', '297', '牟平区', '3', '0');
INSERT INTO `mall_region` VALUES ('2449', '297', '莱山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2450', '297', '开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('2451', '297', '龙口市', '3', '0');
INSERT INTO `mall_region` VALUES ('2452', '297', '莱阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('2453', '297', '莱州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2454', '297', '蓬莱市', '3', '0');
INSERT INTO `mall_region` VALUES ('2455', '297', '招远市', '3', '0');
INSERT INTO `mall_region` VALUES ('2456', '297', '栖霞市', '3', '0');
INSERT INTO `mall_region` VALUES ('2457', '297', '海阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('2458', '297', '长岛县', '3', '0');
INSERT INTO `mall_region` VALUES ('2459', '298', '市中区', '3', '0');
INSERT INTO `mall_region` VALUES ('2460', '298', '山亭区', '3', '0');
INSERT INTO `mall_region` VALUES ('2461', '298', '峄城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2462', '298', '台儿庄区', '3', '0');
INSERT INTO `mall_region` VALUES ('2463', '298', '薛城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2464', '298', '滕州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2465', '299', '张店区', '3', '0');
INSERT INTO `mall_region` VALUES ('2466', '299', '临淄区', '3', '0');
INSERT INTO `mall_region` VALUES ('2467', '299', '淄川区', '3', '0');
INSERT INTO `mall_region` VALUES ('2468', '299', '博山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2469', '299', '周村区', '3', '0');
INSERT INTO `mall_region` VALUES ('2470', '299', '桓台县', '3', '0');
INSERT INTO `mall_region` VALUES ('2471', '299', '高青县', '3', '0');
INSERT INTO `mall_region` VALUES ('2472', '299', '沂源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2473', '300', '杏花岭区', '3', '0');
INSERT INTO `mall_region` VALUES ('2474', '300', '小店区', '3', '0');
INSERT INTO `mall_region` VALUES ('2475', '300', '迎泽区', '3', '0');
INSERT INTO `mall_region` VALUES ('2476', '300', '尖草坪区', '3', '0');
INSERT INTO `mall_region` VALUES ('2477', '300', '万柏林区', '3', '0');
INSERT INTO `mall_region` VALUES ('2478', '300', '晋源区', '3', '0');
INSERT INTO `mall_region` VALUES ('2479', '300', '高新开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('2480', '300', '民营经济开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('2481', '300', '经济技术开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('2482', '300', '清徐县', '3', '0');
INSERT INTO `mall_region` VALUES ('2483', '300', '阳曲县', '3', '0');
INSERT INTO `mall_region` VALUES ('2484', '300', '娄烦县', '3', '0');
INSERT INTO `mall_region` VALUES ('2485', '300', '古交市', '3', '0');
INSERT INTO `mall_region` VALUES ('2486', '301', '城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2487', '301', '郊区', '3', '0');
INSERT INTO `mall_region` VALUES ('2488', '301', '沁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2489', '301', '潞城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2490', '301', '长治县', '3', '0');
INSERT INTO `mall_region` VALUES ('2491', '301', '襄垣县', '3', '0');
INSERT INTO `mall_region` VALUES ('2492', '301', '屯留县', '3', '0');
INSERT INTO `mall_region` VALUES ('2493', '301', '平顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('2494', '301', '黎城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2495', '301', '壶关县', '3', '0');
INSERT INTO `mall_region` VALUES ('2496', '301', '长子县', '3', '0');
INSERT INTO `mall_region` VALUES ('2497', '301', '武乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('2498', '301', '沁源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2499', '302', '城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2500', '302', '矿区', '3', '0');
INSERT INTO `mall_region` VALUES ('2501', '302', '南郊区', '3', '0');
INSERT INTO `mall_region` VALUES ('2502', '302', '新荣区', '3', '0');
INSERT INTO `mall_region` VALUES ('2503', '302', '阳高县', '3', '0');
INSERT INTO `mall_region` VALUES ('2504', '302', '天镇县', '3', '0');
INSERT INTO `mall_region` VALUES ('2505', '302', '广灵县', '3', '0');
INSERT INTO `mall_region` VALUES ('2506', '302', '灵丘县', '3', '0');
INSERT INTO `mall_region` VALUES ('2507', '302', '浑源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2508', '302', '左云县', '3', '0');
INSERT INTO `mall_region` VALUES ('2509', '302', '大同县', '3', '0');
INSERT INTO `mall_region` VALUES ('2510', '303', '城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2511', '303', '高平市', '3', '0');
INSERT INTO `mall_region` VALUES ('2512', '303', '沁水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2513', '303', '阳城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2514', '303', '陵川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2515', '303', '泽州县', '3', '0');
INSERT INTO `mall_region` VALUES ('2516', '304', '榆次区', '3', '0');
INSERT INTO `mall_region` VALUES ('2517', '304', '介休市', '3', '0');
INSERT INTO `mall_region` VALUES ('2518', '304', '榆社县', '3', '0');
INSERT INTO `mall_region` VALUES ('2519', '304', '左权县', '3', '0');
INSERT INTO `mall_region` VALUES ('2520', '304', '和顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('2521', '304', '昔阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2522', '304', '寿阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2523', '304', '太谷县', '3', '0');
INSERT INTO `mall_region` VALUES ('2524', '304', '祁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2525', '304', '平遥县', '3', '0');
INSERT INTO `mall_region` VALUES ('2526', '304', '灵石县', '3', '0');
INSERT INTO `mall_region` VALUES ('2527', '305', '尧都区', '3', '0');
INSERT INTO `mall_region` VALUES ('2528', '305', '侯马市', '3', '0');
INSERT INTO `mall_region` VALUES ('2529', '305', '霍州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2530', '305', '曲沃县', '3', '0');
INSERT INTO `mall_region` VALUES ('2531', '305', '翼城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2532', '305', '襄汾县', '3', '0');
INSERT INTO `mall_region` VALUES ('2533', '305', '洪洞县', '3', '0');
INSERT INTO `mall_region` VALUES ('2534', '305', '吉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2535', '305', '安泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('2536', '305', '浮山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2537', '305', '古县', '3', '0');
INSERT INTO `mall_region` VALUES ('2538', '305', '乡宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2539', '305', '大宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2540', '305', '隰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2541', '305', '永和县', '3', '0');
INSERT INTO `mall_region` VALUES ('2542', '305', '蒲县', '3', '0');
INSERT INTO `mall_region` VALUES ('2543', '305', '汾西县', '3', '0');
INSERT INTO `mall_region` VALUES ('2544', '306', '离石市', '3', '0');
INSERT INTO `mall_region` VALUES ('2545', '306', '离石区', '3', '0');
INSERT INTO `mall_region` VALUES ('2546', '306', '孝义市', '3', '0');
INSERT INTO `mall_region` VALUES ('2547', '306', '汾阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('2548', '306', '文水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2549', '306', '交城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2550', '306', '兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2551', '306', '临县', '3', '0');
INSERT INTO `mall_region` VALUES ('2552', '306', '柳林县', '3', '0');
INSERT INTO `mall_region` VALUES ('2553', '306', '石楼县', '3', '0');
INSERT INTO `mall_region` VALUES ('2554', '306', '岚县', '3', '0');
INSERT INTO `mall_region` VALUES ('2555', '306', '方山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2556', '306', '中阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2557', '306', '交口县', '3', '0');
INSERT INTO `mall_region` VALUES ('2558', '307', '朔城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2559', '307', '平鲁区', '3', '0');
INSERT INTO `mall_region` VALUES ('2560', '307', '山阴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2561', '307', '应县', '3', '0');
INSERT INTO `mall_region` VALUES ('2562', '307', '右玉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2563', '307', '怀仁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2564', '308', '忻府区', '3', '0');
INSERT INTO `mall_region` VALUES ('2565', '308', '原平市', '3', '0');
INSERT INTO `mall_region` VALUES ('2566', '308', '定襄县', '3', '0');
INSERT INTO `mall_region` VALUES ('2567', '308', '五台县', '3', '0');
INSERT INTO `mall_region` VALUES ('2568', '308', '代县', '3', '0');
INSERT INTO `mall_region` VALUES ('2569', '308', '繁峙县', '3', '0');
INSERT INTO `mall_region` VALUES ('2570', '308', '宁武县', '3', '0');
INSERT INTO `mall_region` VALUES ('2571', '308', '静乐县', '3', '0');
INSERT INTO `mall_region` VALUES ('2572', '308', '神池县', '3', '0');
INSERT INTO `mall_region` VALUES ('2573', '308', '五寨县', '3', '0');
INSERT INTO `mall_region` VALUES ('2574', '308', '岢岚县', '3', '0');
INSERT INTO `mall_region` VALUES ('2575', '308', '河曲县', '3', '0');
INSERT INTO `mall_region` VALUES ('2576', '308', '保德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2577', '308', '偏关县', '3', '0');
INSERT INTO `mall_region` VALUES ('2578', '309', '城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2579', '309', '矿区', '3', '0');
INSERT INTO `mall_region` VALUES ('2580', '309', '郊区', '3', '0');
INSERT INTO `mall_region` VALUES ('2581', '309', '平定县', '3', '0');
INSERT INTO `mall_region` VALUES ('2582', '309', '盂县', '3', '0');
INSERT INTO `mall_region` VALUES ('2583', '310', '盐湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('2584', '310', '永济市', '3', '0');
INSERT INTO `mall_region` VALUES ('2585', '310', '河津市', '3', '0');
INSERT INTO `mall_region` VALUES ('2586', '310', '临猗县', '3', '0');
INSERT INTO `mall_region` VALUES ('2587', '310', '万荣县', '3', '0');
INSERT INTO `mall_region` VALUES ('2588', '310', '闻喜县', '3', '0');
INSERT INTO `mall_region` VALUES ('2589', '310', '稷山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2590', '310', '新绛县', '3', '0');
INSERT INTO `mall_region` VALUES ('2591', '310', '绛县', '3', '0');
INSERT INTO `mall_region` VALUES ('2592', '310', '垣曲县', '3', '0');
INSERT INTO `mall_region` VALUES ('2593', '310', '夏县', '3', '0');
INSERT INTO `mall_region` VALUES ('2594', '310', '平陆县', '3', '0');
INSERT INTO `mall_region` VALUES ('2595', '310', '芮城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2596', '311', '莲湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('2597', '311', '新城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2598', '311', '碑林区', '3', '0');
INSERT INTO `mall_region` VALUES ('2599', '311', '雁塔区', '3', '0');
INSERT INTO `mall_region` VALUES ('2600', '311', '灞桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('2601', '311', '未央区', '3', '0');
INSERT INTO `mall_region` VALUES ('2602', '311', '阎良区', '3', '0');
INSERT INTO `mall_region` VALUES ('2603', '311', '临潼区', '3', '0');
INSERT INTO `mall_region` VALUES ('2604', '311', '长安区', '3', '0');
INSERT INTO `mall_region` VALUES ('2605', '311', '蓝田县', '3', '0');
INSERT INTO `mall_region` VALUES ('2606', '311', '周至县', '3', '0');
INSERT INTO `mall_region` VALUES ('2607', '311', '户县', '3', '0');
INSERT INTO `mall_region` VALUES ('2608', '311', '高陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('2609', '312', '汉滨区', '3', '0');
INSERT INTO `mall_region` VALUES ('2610', '312', '汉阴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2611', '312', '石泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2612', '312', '宁陕县', '3', '0');
INSERT INTO `mall_region` VALUES ('2613', '312', '紫阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2614', '312', '岚皋县', '3', '0');
INSERT INTO `mall_region` VALUES ('2615', '312', '平利县', '3', '0');
INSERT INTO `mall_region` VALUES ('2616', '312', '镇坪县', '3', '0');
INSERT INTO `mall_region` VALUES ('2617', '312', '旬阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2618', '312', '白河县', '3', '0');
INSERT INTO `mall_region` VALUES ('2619', '313', '陈仓区', '3', '0');
INSERT INTO `mall_region` VALUES ('2620', '313', '渭滨区', '3', '0');
INSERT INTO `mall_region` VALUES ('2621', '313', '金台区', '3', '0');
INSERT INTO `mall_region` VALUES ('2622', '313', '凤翔县', '3', '0');
INSERT INTO `mall_region` VALUES ('2623', '313', '岐山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2624', '313', '扶风县', '3', '0');
INSERT INTO `mall_region` VALUES ('2625', '313', '眉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2626', '313', '陇县', '3', '0');
INSERT INTO `mall_region` VALUES ('2627', '313', '千阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2628', '313', '麟游县', '3', '0');
INSERT INTO `mall_region` VALUES ('2629', '313', '凤县', '3', '0');
INSERT INTO `mall_region` VALUES ('2630', '313', '太白县', '3', '0');
INSERT INTO `mall_region` VALUES ('2631', '314', '汉台区', '3', '0');
INSERT INTO `mall_region` VALUES ('2632', '314', '南郑县', '3', '0');
INSERT INTO `mall_region` VALUES ('2633', '314', '城固县', '3', '0');
INSERT INTO `mall_region` VALUES ('2634', '314', '洋县', '3', '0');
INSERT INTO `mall_region` VALUES ('2635', '314', '西乡县', '3', '0');
INSERT INTO `mall_region` VALUES ('2636', '314', '勉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2637', '314', '宁强县', '3', '0');
INSERT INTO `mall_region` VALUES ('2638', '314', '略阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2639', '314', '镇巴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2640', '314', '留坝县', '3', '0');
INSERT INTO `mall_region` VALUES ('2641', '314', '佛坪县', '3', '0');
INSERT INTO `mall_region` VALUES ('2642', '315', '商州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2643', '315', '洛南县', '3', '0');
INSERT INTO `mall_region` VALUES ('2644', '315', '丹凤县', '3', '0');
INSERT INTO `mall_region` VALUES ('2645', '315', '商南县', '3', '0');
INSERT INTO `mall_region` VALUES ('2646', '315', '山阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2647', '315', '镇安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2648', '315', '柞水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2649', '316', '耀州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2650', '316', '王益区', '3', '0');
INSERT INTO `mall_region` VALUES ('2651', '316', '印台区', '3', '0');
INSERT INTO `mall_region` VALUES ('2652', '316', '宜君县', '3', '0');
INSERT INTO `mall_region` VALUES ('2653', '317', '临渭区', '3', '0');
INSERT INTO `mall_region` VALUES ('2654', '317', '韩城市', '3', '0');
INSERT INTO `mall_region` VALUES ('2655', '317', '华阴市', '3', '0');
INSERT INTO `mall_region` VALUES ('2656', '317', '华县', '3', '0');
INSERT INTO `mall_region` VALUES ('2657', '317', '潼关县', '3', '0');
INSERT INTO `mall_region` VALUES ('2658', '317', '大荔县', '3', '0');
INSERT INTO `mall_region` VALUES ('2659', '317', '合阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2660', '317', '澄城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2661', '317', '蒲城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2662', '317', '白水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2663', '317', '富平县', '3', '0');
INSERT INTO `mall_region` VALUES ('2664', '318', '秦都区', '3', '0');
INSERT INTO `mall_region` VALUES ('2665', '318', '渭城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2666', '318', '杨陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('2667', '318', '兴平市', '3', '0');
INSERT INTO `mall_region` VALUES ('2668', '318', '三原县', '3', '0');
INSERT INTO `mall_region` VALUES ('2669', '318', '泾阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2670', '318', '乾县', '3', '0');
INSERT INTO `mall_region` VALUES ('2671', '318', '礼泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2672', '318', '永寿县', '3', '0');
INSERT INTO `mall_region` VALUES ('2673', '318', '彬县', '3', '0');
INSERT INTO `mall_region` VALUES ('2674', '318', '长武县', '3', '0');
INSERT INTO `mall_region` VALUES ('2675', '318', '旬邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('2676', '318', '淳化县', '3', '0');
INSERT INTO `mall_region` VALUES ('2677', '318', '武功县', '3', '0');
INSERT INTO `mall_region` VALUES ('2678', '319', '吴起县', '3', '0');
INSERT INTO `mall_region` VALUES ('2679', '319', '宝塔区', '3', '0');
INSERT INTO `mall_region` VALUES ('2680', '319', '延长县', '3', '0');
INSERT INTO `mall_region` VALUES ('2681', '319', '延川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2682', '319', '子长县', '3', '0');
INSERT INTO `mall_region` VALUES ('2683', '319', '安塞县', '3', '0');
INSERT INTO `mall_region` VALUES ('2684', '319', '志丹县', '3', '0');
INSERT INTO `mall_region` VALUES ('2685', '319', '甘泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2686', '319', '富县', '3', '0');
INSERT INTO `mall_region` VALUES ('2687', '319', '洛川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2688', '319', '宜川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2689', '319', '黄龙县', '3', '0');
INSERT INTO `mall_region` VALUES ('2690', '319', '黄陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('2691', '320', '榆阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('2692', '320', '神木县', '3', '0');
INSERT INTO `mall_region` VALUES ('2693', '320', '府谷县', '3', '0');
INSERT INTO `mall_region` VALUES ('2694', '320', '横山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2695', '320', '靖边县', '3', '0');
INSERT INTO `mall_region` VALUES ('2696', '320', '定边县', '3', '0');
INSERT INTO `mall_region` VALUES ('2697', '320', '绥德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2698', '320', '米脂县', '3', '0');
INSERT INTO `mall_region` VALUES ('2699', '320', '佳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2700', '320', '吴堡县', '3', '0');
INSERT INTO `mall_region` VALUES ('2701', '320', '清涧县', '3', '0');
INSERT INTO `mall_region` VALUES ('2702', '320', '子洲县', '3', '0');
INSERT INTO `mall_region` VALUES ('2703', '321', '长宁区', '3', '0');
INSERT INTO `mall_region` VALUES ('2704', '321', '闸北区', '3', '0');
INSERT INTO `mall_region` VALUES ('2705', '321', '闵行区', '3', '0');
INSERT INTO `mall_region` VALUES ('2706', '321', '徐汇区', '3', '0');
INSERT INTO `mall_region` VALUES ('2707', '321', '浦东新区', '3', '0');
INSERT INTO `mall_region` VALUES ('2708', '321', '杨浦区', '3', '0');
INSERT INTO `mall_region` VALUES ('2709', '321', '普陀区', '3', '0');
INSERT INTO `mall_region` VALUES ('2710', '321', '静安区', '3', '0');
INSERT INTO `mall_region` VALUES ('2711', '321', '卢湾区', '3', '0');
INSERT INTO `mall_region` VALUES ('2712', '321', '虹口区', '3', '0');
INSERT INTO `mall_region` VALUES ('2713', '321', '黄浦区', '3', '0');
INSERT INTO `mall_region` VALUES ('2714', '321', '南汇区', '3', '0');
INSERT INTO `mall_region` VALUES ('2715', '321', '松江区', '3', '0');
INSERT INTO `mall_region` VALUES ('2716', '321', '嘉定区', '3', '0');
INSERT INTO `mall_region` VALUES ('2717', '321', '宝山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2718', '321', '青浦区', '3', '0');
INSERT INTO `mall_region` VALUES ('2719', '321', '金山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2720', '321', '奉贤区', '3', '0');
INSERT INTO `mall_region` VALUES ('2721', '321', '崇明县', '3', '0');
INSERT INTO `mall_region` VALUES ('2722', '322', '青羊区', '3', '0');
INSERT INTO `mall_region` VALUES ('2723', '322', '锦江区', '3', '0');
INSERT INTO `mall_region` VALUES ('2724', '322', '金牛区', '3', '0');
INSERT INTO `mall_region` VALUES ('2725', '322', '武侯区', '3', '0');
INSERT INTO `mall_region` VALUES ('2726', '322', '成华区', '3', '0');
INSERT INTO `mall_region` VALUES ('2727', '322', '龙泉驿区', '3', '0');
INSERT INTO `mall_region` VALUES ('2728', '322', '青白江区', '3', '0');
INSERT INTO `mall_region` VALUES ('2729', '322', '新都区', '3', '0');
INSERT INTO `mall_region` VALUES ('2730', '322', '温江区', '3', '0');
INSERT INTO `mall_region` VALUES ('2731', '322', '高新区', '3', '0');
INSERT INTO `mall_region` VALUES ('2732', '322', '高新西区', '3', '0');
INSERT INTO `mall_region` VALUES ('2733', '322', '都江堰市', '3', '0');
INSERT INTO `mall_region` VALUES ('2734', '322', '彭州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2735', '322', '邛崃市', '3', '0');
INSERT INTO `mall_region` VALUES ('2736', '322', '崇州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2737', '322', '金堂县', '3', '0');
INSERT INTO `mall_region` VALUES ('2738', '322', '双流县', '3', '0');
INSERT INTO `mall_region` VALUES ('2739', '322', '郫县', '3', '0');
INSERT INTO `mall_region` VALUES ('2740', '322', '大邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('2741', '322', '蒲江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2742', '322', '新津县', '3', '0');
INSERT INTO `mall_region` VALUES ('2743', '322', '都江堰市', '3', '0');
INSERT INTO `mall_region` VALUES ('2744', '322', '彭州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2745', '322', '邛崃市', '3', '0');
INSERT INTO `mall_region` VALUES ('2746', '322', '崇州市', '3', '0');
INSERT INTO `mall_region` VALUES ('2747', '322', '金堂县', '3', '0');
INSERT INTO `mall_region` VALUES ('2748', '322', '双流县', '3', '0');
INSERT INTO `mall_region` VALUES ('2749', '322', '郫县', '3', '0');
INSERT INTO `mall_region` VALUES ('2750', '322', '大邑县', '3', '0');
INSERT INTO `mall_region` VALUES ('2751', '322', '蒲江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2752', '322', '新津县', '3', '0');
INSERT INTO `mall_region` VALUES ('2753', '323', '涪城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2754', '323', '游仙区', '3', '0');
INSERT INTO `mall_region` VALUES ('2755', '323', '江油市', '3', '0');
INSERT INTO `mall_region` VALUES ('2756', '323', '盐亭县', '3', '0');
INSERT INTO `mall_region` VALUES ('2757', '323', '三台县', '3', '0');
INSERT INTO `mall_region` VALUES ('2758', '323', '平武县', '3', '0');
INSERT INTO `mall_region` VALUES ('2759', '323', '安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2760', '323', '梓潼县', '3', '0');
INSERT INTO `mall_region` VALUES ('2761', '323', '北川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2762', '324', '马尔康县', '3', '0');
INSERT INTO `mall_region` VALUES ('2763', '324', '汶川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2764', '324', '理县', '3', '0');
INSERT INTO `mall_region` VALUES ('2765', '324', '茂县', '3', '0');
INSERT INTO `mall_region` VALUES ('2766', '324', '松潘县', '3', '0');
INSERT INTO `mall_region` VALUES ('2767', '324', '九寨沟县', '3', '0');
INSERT INTO `mall_region` VALUES ('2768', '324', '金川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2769', '324', '小金县', '3', '0');
INSERT INTO `mall_region` VALUES ('2770', '324', '黑水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2771', '324', '壤塘县', '3', '0');
INSERT INTO `mall_region` VALUES ('2772', '324', '阿坝县', '3', '0');
INSERT INTO `mall_region` VALUES ('2773', '324', '若尔盖县', '3', '0');
INSERT INTO `mall_region` VALUES ('2774', '324', '红原县', '3', '0');
INSERT INTO `mall_region` VALUES ('2775', '325', '巴州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2776', '325', '通江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2777', '325', '南江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2778', '325', '平昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('2779', '326', '通川区', '3', '0');
INSERT INTO `mall_region` VALUES ('2780', '326', '万源市', '3', '0');
INSERT INTO `mall_region` VALUES ('2781', '326', '达县', '3', '0');
INSERT INTO `mall_region` VALUES ('2782', '326', '宣汉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2783', '326', '开江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2784', '326', '大竹县', '3', '0');
INSERT INTO `mall_region` VALUES ('2785', '326', '渠县', '3', '0');
INSERT INTO `mall_region` VALUES ('2786', '327', '旌阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('2787', '327', '广汉市', '3', '0');
INSERT INTO `mall_region` VALUES ('2788', '327', '什邡市', '3', '0');
INSERT INTO `mall_region` VALUES ('2789', '327', '绵竹市', '3', '0');
INSERT INTO `mall_region` VALUES ('2790', '327', '罗江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2791', '327', '中江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2792', '328', '康定县', '3', '0');
INSERT INTO `mall_region` VALUES ('2793', '328', '丹巴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2794', '328', '泸定县', '3', '0');
INSERT INTO `mall_region` VALUES ('2795', '328', '炉霍县', '3', '0');
INSERT INTO `mall_region` VALUES ('2796', '328', '九龙县', '3', '0');
INSERT INTO `mall_region` VALUES ('2797', '328', '甘孜县', '3', '0');
INSERT INTO `mall_region` VALUES ('2798', '328', '雅江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2799', '328', '新龙县', '3', '0');
INSERT INTO `mall_region` VALUES ('2800', '328', '道孚县', '3', '0');
INSERT INTO `mall_region` VALUES ('2801', '328', '白玉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2802', '328', '理塘县', '3', '0');
INSERT INTO `mall_region` VALUES ('2803', '328', '德格县', '3', '0');
INSERT INTO `mall_region` VALUES ('2804', '328', '乡城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2805', '328', '石渠县', '3', '0');
INSERT INTO `mall_region` VALUES ('2806', '328', '稻城县', '3', '0');
INSERT INTO `mall_region` VALUES ('2807', '328', '色达县', '3', '0');
INSERT INTO `mall_region` VALUES ('2808', '328', '巴塘县', '3', '0');
INSERT INTO `mall_region` VALUES ('2809', '328', '得荣县', '3', '0');
INSERT INTO `mall_region` VALUES ('2810', '329', '广安区', '3', '0');
INSERT INTO `mall_region` VALUES ('2811', '329', '华蓥市', '3', '0');
INSERT INTO `mall_region` VALUES ('2812', '329', '岳池县', '3', '0');
INSERT INTO `mall_region` VALUES ('2813', '329', '武胜县', '3', '0');
INSERT INTO `mall_region` VALUES ('2814', '329', '邻水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2815', '330', '利州区', '3', '0');
INSERT INTO `mall_region` VALUES ('2816', '330', '元坝区', '3', '0');
INSERT INTO `mall_region` VALUES ('2817', '330', '朝天区', '3', '0');
INSERT INTO `mall_region` VALUES ('2818', '330', '旺苍县', '3', '0');
INSERT INTO `mall_region` VALUES ('2819', '330', '青川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2820', '330', '剑阁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2821', '330', '苍溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('2822', '331', '峨眉山市', '3', '0');
INSERT INTO `mall_region` VALUES ('2823', '331', '乐山市', '3', '0');
INSERT INTO `mall_region` VALUES ('2824', '331', '犍为县', '3', '0');
INSERT INTO `mall_region` VALUES ('2825', '331', '井研县', '3', '0');
INSERT INTO `mall_region` VALUES ('2826', '331', '夹江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2827', '331', '沐川县', '3', '0');
INSERT INTO `mall_region` VALUES ('2828', '331', '峨边', '3', '0');
INSERT INTO `mall_region` VALUES ('2829', '331', '马边', '3', '0');
INSERT INTO `mall_region` VALUES ('2830', '332', '西昌市', '3', '0');
INSERT INTO `mall_region` VALUES ('2831', '332', '盐源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2832', '332', '德昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('2833', '332', '会理县', '3', '0');
INSERT INTO `mall_region` VALUES ('2834', '332', '会东县', '3', '0');
INSERT INTO `mall_region` VALUES ('2835', '332', '宁南县', '3', '0');
INSERT INTO `mall_region` VALUES ('2836', '332', '普格县', '3', '0');
INSERT INTO `mall_region` VALUES ('2837', '332', '布拖县', '3', '0');
INSERT INTO `mall_region` VALUES ('2838', '332', '金阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2839', '332', '昭觉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2840', '332', '喜德县', '3', '0');
INSERT INTO `mall_region` VALUES ('2841', '332', '冕宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2842', '332', '越西县', '3', '0');
INSERT INTO `mall_region` VALUES ('2843', '332', '甘洛县', '3', '0');
INSERT INTO `mall_region` VALUES ('2844', '332', '美姑县', '3', '0');
INSERT INTO `mall_region` VALUES ('2845', '332', '雷波县', '3', '0');
INSERT INTO `mall_region` VALUES ('2846', '332', '木里', '3', '0');
INSERT INTO `mall_region` VALUES ('2847', '333', '东坡区', '3', '0');
INSERT INTO `mall_region` VALUES ('2848', '333', '仁寿县', '3', '0');
INSERT INTO `mall_region` VALUES ('2849', '333', '彭山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2850', '333', '洪雅县', '3', '0');
INSERT INTO `mall_region` VALUES ('2851', '333', '丹棱县', '3', '0');
INSERT INTO `mall_region` VALUES ('2852', '333', '青神县', '3', '0');
INSERT INTO `mall_region` VALUES ('2853', '334', '阆中市', '3', '0');
INSERT INTO `mall_region` VALUES ('2854', '334', '南部县', '3', '0');
INSERT INTO `mall_region` VALUES ('2855', '334', '营山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2856', '334', '蓬安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2857', '334', '仪陇县', '3', '0');
INSERT INTO `mall_region` VALUES ('2858', '334', '顺庆区', '3', '0');
INSERT INTO `mall_region` VALUES ('2859', '334', '高坪区', '3', '0');
INSERT INTO `mall_region` VALUES ('2860', '334', '嘉陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('2861', '334', '西充县', '3', '0');
INSERT INTO `mall_region` VALUES ('2862', '335', '市中区', '3', '0');
INSERT INTO `mall_region` VALUES ('2863', '335', '东兴区', '3', '0');
INSERT INTO `mall_region` VALUES ('2864', '335', '威远县', '3', '0');
INSERT INTO `mall_region` VALUES ('2865', '335', '资中县', '3', '0');
INSERT INTO `mall_region` VALUES ('2866', '335', '隆昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('2867', '336', '东  区', '3', '0');
INSERT INTO `mall_region` VALUES ('2868', '336', '西  区', '3', '0');
INSERT INTO `mall_region` VALUES ('2869', '336', '仁和区', '3', '0');
INSERT INTO `mall_region` VALUES ('2870', '336', '米易县', '3', '0');
INSERT INTO `mall_region` VALUES ('2871', '336', '盐边县', '3', '0');
INSERT INTO `mall_region` VALUES ('2872', '337', '船山区', '3', '0');
INSERT INTO `mall_region` VALUES ('2873', '337', '安居区', '3', '0');
INSERT INTO `mall_region` VALUES ('2874', '337', '蓬溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('2875', '337', '射洪县', '3', '0');
INSERT INTO `mall_region` VALUES ('2876', '337', '大英县', '3', '0');
INSERT INTO `mall_region` VALUES ('2877', '338', '雨城区', '3', '0');
INSERT INTO `mall_region` VALUES ('2878', '338', '名山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2879', '338', '荥经县', '3', '0');
INSERT INTO `mall_region` VALUES ('2880', '338', '汉源县', '3', '0');
INSERT INTO `mall_region` VALUES ('2881', '338', '石棉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2882', '338', '天全县', '3', '0');
INSERT INTO `mall_region` VALUES ('2883', '338', '芦山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2884', '338', '宝兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2885', '339', '翠屏区', '3', '0');
INSERT INTO `mall_region` VALUES ('2886', '339', '宜宾县', '3', '0');
INSERT INTO `mall_region` VALUES ('2887', '339', '南溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('2888', '339', '江安县', '3', '0');
INSERT INTO `mall_region` VALUES ('2889', '339', '长宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2890', '339', '高县', '3', '0');
INSERT INTO `mall_region` VALUES ('2891', '339', '珙县', '3', '0');
INSERT INTO `mall_region` VALUES ('2892', '339', '筠连县', '3', '0');
INSERT INTO `mall_region` VALUES ('2893', '339', '兴文县', '3', '0');
INSERT INTO `mall_region` VALUES ('2894', '339', '屏山县', '3', '0');
INSERT INTO `mall_region` VALUES ('2895', '340', '雁江区', '3', '0');
INSERT INTO `mall_region` VALUES ('2896', '340', '简阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('2897', '340', '安岳县', '3', '0');
INSERT INTO `mall_region` VALUES ('2898', '340', '乐至县', '3', '0');
INSERT INTO `mall_region` VALUES ('2899', '341', '大安区', '3', '0');
INSERT INTO `mall_region` VALUES ('2900', '341', '自流井区', '3', '0');
INSERT INTO `mall_region` VALUES ('2901', '341', '贡井区', '3', '0');
INSERT INTO `mall_region` VALUES ('2902', '341', '沿滩区', '3', '0');
INSERT INTO `mall_region` VALUES ('2903', '341', '荣县', '3', '0');
INSERT INTO `mall_region` VALUES ('2904', '341', '富顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('2905', '342', '江阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('2906', '342', '纳溪区', '3', '0');
INSERT INTO `mall_region` VALUES ('2907', '342', '龙马潭区', '3', '0');
INSERT INTO `mall_region` VALUES ('2908', '342', '泸县', '3', '0');
INSERT INTO `mall_region` VALUES ('2909', '342', '合江县', '3', '0');
INSERT INTO `mall_region` VALUES ('2910', '342', '叙永县', '3', '0');
INSERT INTO `mall_region` VALUES ('2911', '342', '古蔺县', '3', '0');
INSERT INTO `mall_region` VALUES ('2912', '343', '和平区', '3', '0');
INSERT INTO `mall_region` VALUES ('2913', '343', '河西区', '3', '0');
INSERT INTO `mall_region` VALUES ('2914', '343', '南开区', '3', '0');
INSERT INTO `mall_region` VALUES ('2915', '343', '河北区', '3', '0');
INSERT INTO `mall_region` VALUES ('2916', '343', '河东区', '3', '0');
INSERT INTO `mall_region` VALUES ('2917', '343', '红桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('2918', '343', '东丽区', '3', '0');
INSERT INTO `mall_region` VALUES ('2919', '343', '津南区', '3', '0');
INSERT INTO `mall_region` VALUES ('2920', '343', '西青区', '3', '0');
INSERT INTO `mall_region` VALUES ('2921', '343', '北辰区', '3', '0');
INSERT INTO `mall_region` VALUES ('2922', '343', '塘沽区', '3', '0');
INSERT INTO `mall_region` VALUES ('2923', '343', '汉沽区', '3', '0');
INSERT INTO `mall_region` VALUES ('2924', '343', '大港区', '3', '0');
INSERT INTO `mall_region` VALUES ('2925', '343', '武清区', '3', '0');
INSERT INTO `mall_region` VALUES ('2926', '343', '宝坻区', '3', '0');
INSERT INTO `mall_region` VALUES ('2927', '343', '经济开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('2928', '343', '宁河县', '3', '0');
INSERT INTO `mall_region` VALUES ('2929', '343', '静海县', '3', '0');
INSERT INTO `mall_region` VALUES ('2930', '343', '蓟县', '3', '0');
INSERT INTO `mall_region` VALUES ('2931', '344', '城关区', '3', '0');
INSERT INTO `mall_region` VALUES ('2932', '344', '林周县', '3', '0');
INSERT INTO `mall_region` VALUES ('2933', '344', '当雄县', '3', '0');
INSERT INTO `mall_region` VALUES ('2934', '344', '尼木县', '3', '0');
INSERT INTO `mall_region` VALUES ('2935', '344', '曲水县', '3', '0');
INSERT INTO `mall_region` VALUES ('2936', '344', '堆龙德庆县', '3', '0');
INSERT INTO `mall_region` VALUES ('2937', '344', '达孜县', '3', '0');
INSERT INTO `mall_region` VALUES ('2938', '344', '墨竹工卡县', '3', '0');
INSERT INTO `mall_region` VALUES ('2939', '345', '噶尔县', '3', '0');
INSERT INTO `mall_region` VALUES ('2940', '345', '普兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('2941', '345', '札达县', '3', '0');
INSERT INTO `mall_region` VALUES ('2942', '345', '日土县', '3', '0');
INSERT INTO `mall_region` VALUES ('2943', '345', '革吉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2944', '345', '改则县', '3', '0');
INSERT INTO `mall_region` VALUES ('2945', '345', '措勤县', '3', '0');
INSERT INTO `mall_region` VALUES ('2946', '346', '昌都县', '3', '0');
INSERT INTO `mall_region` VALUES ('2947', '346', '江达县', '3', '0');
INSERT INTO `mall_region` VALUES ('2948', '346', '贡觉县', '3', '0');
INSERT INTO `mall_region` VALUES ('2949', '346', '类乌齐县', '3', '0');
INSERT INTO `mall_region` VALUES ('2950', '346', '丁青县', '3', '0');
INSERT INTO `mall_region` VALUES ('2951', '346', '察雅县', '3', '0');
INSERT INTO `mall_region` VALUES ('2952', '346', '八宿县', '3', '0');
INSERT INTO `mall_region` VALUES ('2953', '346', '左贡县', '3', '0');
INSERT INTO `mall_region` VALUES ('2954', '346', '芒康县', '3', '0');
INSERT INTO `mall_region` VALUES ('2955', '346', '洛隆县', '3', '0');
INSERT INTO `mall_region` VALUES ('2956', '346', '边坝县', '3', '0');
INSERT INTO `mall_region` VALUES ('2957', '347', '林芝县', '3', '0');
INSERT INTO `mall_region` VALUES ('2958', '347', '工布江达县', '3', '0');
INSERT INTO `mall_region` VALUES ('2959', '347', '米林县', '3', '0');
INSERT INTO `mall_region` VALUES ('2960', '347', '墨脱县', '3', '0');
INSERT INTO `mall_region` VALUES ('2961', '347', '波密县', '3', '0');
INSERT INTO `mall_region` VALUES ('2962', '347', '察隅县', '3', '0');
INSERT INTO `mall_region` VALUES ('2963', '347', '朗县', '3', '0');
INSERT INTO `mall_region` VALUES ('2964', '348', '那曲县', '3', '0');
INSERT INTO `mall_region` VALUES ('2965', '348', '嘉黎县', '3', '0');
INSERT INTO `mall_region` VALUES ('2966', '348', '比如县', '3', '0');
INSERT INTO `mall_region` VALUES ('2967', '348', '聂荣县', '3', '0');
INSERT INTO `mall_region` VALUES ('2968', '348', '安多县', '3', '0');
INSERT INTO `mall_region` VALUES ('2969', '348', '申扎县', '3', '0');
INSERT INTO `mall_region` VALUES ('2970', '348', '索县', '3', '0');
INSERT INTO `mall_region` VALUES ('2971', '348', '班戈县', '3', '0');
INSERT INTO `mall_region` VALUES ('2972', '348', '巴青县', '3', '0');
INSERT INTO `mall_region` VALUES ('2973', '348', '尼玛县', '3', '0');
INSERT INTO `mall_region` VALUES ('2974', '349', '日喀则市', '3', '0');
INSERT INTO `mall_region` VALUES ('2975', '349', '南木林县', '3', '0');
INSERT INTO `mall_region` VALUES ('2976', '349', '江孜县', '3', '0');
INSERT INTO `mall_region` VALUES ('2977', '349', '定日县', '3', '0');
INSERT INTO `mall_region` VALUES ('2978', '349', '萨迦县', '3', '0');
INSERT INTO `mall_region` VALUES ('2979', '349', '拉孜县', '3', '0');
INSERT INTO `mall_region` VALUES ('2980', '349', '昂仁县', '3', '0');
INSERT INTO `mall_region` VALUES ('2981', '349', '谢通门县', '3', '0');
INSERT INTO `mall_region` VALUES ('2982', '349', '白朗县', '3', '0');
INSERT INTO `mall_region` VALUES ('2983', '349', '仁布县', '3', '0');
INSERT INTO `mall_region` VALUES ('2984', '349', '康马县', '3', '0');
INSERT INTO `mall_region` VALUES ('2985', '349', '定结县', '3', '0');
INSERT INTO `mall_region` VALUES ('2986', '349', '仲巴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2987', '349', '亚东县', '3', '0');
INSERT INTO `mall_region` VALUES ('2988', '349', '吉隆县', '3', '0');
INSERT INTO `mall_region` VALUES ('2989', '349', '聂拉木县', '3', '0');
INSERT INTO `mall_region` VALUES ('2990', '349', '萨嘎县', '3', '0');
INSERT INTO `mall_region` VALUES ('2991', '349', '岗巴县', '3', '0');
INSERT INTO `mall_region` VALUES ('2992', '350', '乃东县', '3', '0');
INSERT INTO `mall_region` VALUES ('2993', '350', '扎囊县', '3', '0');
INSERT INTO `mall_region` VALUES ('2994', '350', '贡嘎县', '3', '0');
INSERT INTO `mall_region` VALUES ('2995', '350', '桑日县', '3', '0');
INSERT INTO `mall_region` VALUES ('2996', '350', '琼结县', '3', '0');
INSERT INTO `mall_region` VALUES ('2997', '350', '曲松县', '3', '0');
INSERT INTO `mall_region` VALUES ('2998', '350', '措美县', '3', '0');
INSERT INTO `mall_region` VALUES ('2999', '350', '洛扎县', '3', '0');
INSERT INTO `mall_region` VALUES ('3000', '350', '加查县', '3', '0');
INSERT INTO `mall_region` VALUES ('3001', '350', '隆子县', '3', '0');
INSERT INTO `mall_region` VALUES ('3002', '350', '错那县', '3', '0');
INSERT INTO `mall_region` VALUES ('3003', '350', '浪卡子县', '3', '0');
INSERT INTO `mall_region` VALUES ('3004', '351', '天山区', '3', '0');
INSERT INTO `mall_region` VALUES ('3005', '351', '沙依巴克区', '3', '0');
INSERT INTO `mall_region` VALUES ('3006', '351', '新市区', '3', '0');
INSERT INTO `mall_region` VALUES ('3007', '351', '水磨沟区', '3', '0');
INSERT INTO `mall_region` VALUES ('3008', '351', '头屯河区', '3', '0');
INSERT INTO `mall_region` VALUES ('3009', '351', '达坂城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3010', '351', '米东区', '3', '0');
INSERT INTO `mall_region` VALUES ('3011', '351', '乌鲁木齐县', '3', '0');
INSERT INTO `mall_region` VALUES ('3012', '352', '阿克苏市', '3', '0');
INSERT INTO `mall_region` VALUES ('3013', '352', '温宿县', '3', '0');
INSERT INTO `mall_region` VALUES ('3014', '352', '库车县', '3', '0');
INSERT INTO `mall_region` VALUES ('3015', '352', '沙雅县', '3', '0');
INSERT INTO `mall_region` VALUES ('3016', '352', '新和县', '3', '0');
INSERT INTO `mall_region` VALUES ('3017', '352', '拜城县', '3', '0');
INSERT INTO `mall_region` VALUES ('3018', '352', '乌什县', '3', '0');
INSERT INTO `mall_region` VALUES ('3019', '352', '阿瓦提县', '3', '0');
INSERT INTO `mall_region` VALUES ('3020', '352', '柯坪县', '3', '0');
INSERT INTO `mall_region` VALUES ('3021', '353', '阿拉尔市', '3', '0');
INSERT INTO `mall_region` VALUES ('3022', '354', '库尔勒市', '3', '0');
INSERT INTO `mall_region` VALUES ('3023', '354', '轮台县', '3', '0');
INSERT INTO `mall_region` VALUES ('3024', '354', '尉犁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3025', '354', '若羌县', '3', '0');
INSERT INTO `mall_region` VALUES ('3026', '354', '且末县', '3', '0');
INSERT INTO `mall_region` VALUES ('3027', '354', '焉耆', '3', '0');
INSERT INTO `mall_region` VALUES ('3028', '354', '和静县', '3', '0');
INSERT INTO `mall_region` VALUES ('3029', '354', '和硕县', '3', '0');
INSERT INTO `mall_region` VALUES ('3030', '354', '博湖县', '3', '0');
INSERT INTO `mall_region` VALUES ('3031', '355', '博乐市', '3', '0');
INSERT INTO `mall_region` VALUES ('3032', '355', '精河县', '3', '0');
INSERT INTO `mall_region` VALUES ('3033', '355', '温泉县', '3', '0');
INSERT INTO `mall_region` VALUES ('3034', '356', '呼图壁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3035', '356', '米泉市', '3', '0');
INSERT INTO `mall_region` VALUES ('3036', '356', '昌吉市', '3', '0');
INSERT INTO `mall_region` VALUES ('3037', '356', '阜康市', '3', '0');
INSERT INTO `mall_region` VALUES ('3038', '356', '玛纳斯县', '3', '0');
INSERT INTO `mall_region` VALUES ('3039', '356', '奇台县', '3', '0');
INSERT INTO `mall_region` VALUES ('3040', '356', '吉木萨尔县', '3', '0');
INSERT INTO `mall_region` VALUES ('3041', '356', '木垒', '3', '0');
INSERT INTO `mall_region` VALUES ('3042', '357', '哈密市', '3', '0');
INSERT INTO `mall_region` VALUES ('3043', '357', '伊吾县', '3', '0');
INSERT INTO `mall_region` VALUES ('3044', '357', '巴里坤', '3', '0');
INSERT INTO `mall_region` VALUES ('3045', '358', '和田市', '3', '0');
INSERT INTO `mall_region` VALUES ('3046', '358', '和田县', '3', '0');
INSERT INTO `mall_region` VALUES ('3047', '358', '墨玉县', '3', '0');
INSERT INTO `mall_region` VALUES ('3048', '358', '皮山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3049', '358', '洛浦县', '3', '0');
INSERT INTO `mall_region` VALUES ('3050', '358', '策勒县', '3', '0');
INSERT INTO `mall_region` VALUES ('3051', '358', '于田县', '3', '0');
INSERT INTO `mall_region` VALUES ('3052', '358', '民丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('3053', '359', '喀什市', '3', '0');
INSERT INTO `mall_region` VALUES ('3054', '359', '疏附县', '3', '0');
INSERT INTO `mall_region` VALUES ('3055', '359', '疏勒县', '3', '0');
INSERT INTO `mall_region` VALUES ('3056', '359', '英吉沙县', '3', '0');
INSERT INTO `mall_region` VALUES ('3057', '359', '泽普县', '3', '0');
INSERT INTO `mall_region` VALUES ('3058', '359', '莎车县', '3', '0');
INSERT INTO `mall_region` VALUES ('3059', '359', '叶城县', '3', '0');
INSERT INTO `mall_region` VALUES ('3060', '359', '麦盖提县', '3', '0');
INSERT INTO `mall_region` VALUES ('3061', '359', '岳普湖县', '3', '0');
INSERT INTO `mall_region` VALUES ('3062', '359', '伽师县', '3', '0');
INSERT INTO `mall_region` VALUES ('3063', '359', '巴楚县', '3', '0');
INSERT INTO `mall_region` VALUES ('3064', '359', '塔什库尔干', '3', '0');
INSERT INTO `mall_region` VALUES ('3065', '360', '克拉玛依市', '3', '0');
INSERT INTO `mall_region` VALUES ('3066', '361', '阿图什市', '3', '0');
INSERT INTO `mall_region` VALUES ('3067', '361', '阿克陶县', '3', '0');
INSERT INTO `mall_region` VALUES ('3068', '361', '阿合奇县', '3', '0');
INSERT INTO `mall_region` VALUES ('3069', '361', '乌恰县', '3', '0');
INSERT INTO `mall_region` VALUES ('3070', '362', '石河子市', '3', '0');
INSERT INTO `mall_region` VALUES ('3071', '363', '图木舒克市', '3', '0');
INSERT INTO `mall_region` VALUES ('3072', '364', '吐鲁番市', '3', '0');
INSERT INTO `mall_region` VALUES ('3073', '364', '鄯善县', '3', '0');
INSERT INTO `mall_region` VALUES ('3074', '364', '托克逊县', '3', '0');
INSERT INTO `mall_region` VALUES ('3075', '365', '五家渠市', '3', '0');
INSERT INTO `mall_region` VALUES ('3076', '366', '阿勒泰市', '3', '0');
INSERT INTO `mall_region` VALUES ('3077', '366', '布克赛尔', '3', '0');
INSERT INTO `mall_region` VALUES ('3078', '366', '伊宁市', '3', '0');
INSERT INTO `mall_region` VALUES ('3079', '366', '布尔津县', '3', '0');
INSERT INTO `mall_region` VALUES ('3080', '366', '奎屯市', '3', '0');
INSERT INTO `mall_region` VALUES ('3081', '366', '乌苏市', '3', '0');
INSERT INTO `mall_region` VALUES ('3082', '366', '额敏县', '3', '0');
INSERT INTO `mall_region` VALUES ('3083', '366', '富蕴县', '3', '0');
INSERT INTO `mall_region` VALUES ('3084', '366', '伊宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3085', '366', '福海县', '3', '0');
INSERT INTO `mall_region` VALUES ('3086', '366', '霍城县', '3', '0');
INSERT INTO `mall_region` VALUES ('3087', '366', '沙湾县', '3', '0');
INSERT INTO `mall_region` VALUES ('3088', '366', '巩留县', '3', '0');
INSERT INTO `mall_region` VALUES ('3089', '366', '哈巴河县', '3', '0');
INSERT INTO `mall_region` VALUES ('3090', '366', '托里县', '3', '0');
INSERT INTO `mall_region` VALUES ('3091', '366', '青河县', '3', '0');
INSERT INTO `mall_region` VALUES ('3092', '366', '新源县', '3', '0');
INSERT INTO `mall_region` VALUES ('3093', '366', '裕民县', '3', '0');
INSERT INTO `mall_region` VALUES ('3094', '366', '和布克赛尔', '3', '0');
INSERT INTO `mall_region` VALUES ('3095', '366', '吉木乃县', '3', '0');
INSERT INTO `mall_region` VALUES ('3096', '366', '昭苏县', '3', '0');
INSERT INTO `mall_region` VALUES ('3097', '366', '特克斯县', '3', '0');
INSERT INTO `mall_region` VALUES ('3098', '366', '尼勒克县', '3', '0');
INSERT INTO `mall_region` VALUES ('3099', '366', '察布查尔', '3', '0');
INSERT INTO `mall_region` VALUES ('3100', '367', '盘龙区', '3', '0');
INSERT INTO `mall_region` VALUES ('3101', '367', '五华区', '3', '0');
INSERT INTO `mall_region` VALUES ('3102', '367', '官渡区', '3', '0');
INSERT INTO `mall_region` VALUES ('3103', '367', '西山区', '3', '0');
INSERT INTO `mall_region` VALUES ('3104', '367', '东川区', '3', '0');
INSERT INTO `mall_region` VALUES ('3105', '367', '安宁市', '3', '0');
INSERT INTO `mall_region` VALUES ('3106', '367', '呈贡县', '3', '0');
INSERT INTO `mall_region` VALUES ('3107', '367', '晋宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3108', '367', '富民县', '3', '0');
INSERT INTO `mall_region` VALUES ('3109', '367', '宜良县', '3', '0');
INSERT INTO `mall_region` VALUES ('3110', '367', '嵩明县', '3', '0');
INSERT INTO `mall_region` VALUES ('3111', '367', '石林县', '3', '0');
INSERT INTO `mall_region` VALUES ('3112', '367', '禄劝', '3', '0');
INSERT INTO `mall_region` VALUES ('3113', '367', '寻甸', '3', '0');
INSERT INTO `mall_region` VALUES ('3114', '368', '兰坪', '3', '0');
INSERT INTO `mall_region` VALUES ('3115', '368', '泸水县', '3', '0');
INSERT INTO `mall_region` VALUES ('3116', '368', '福贡县', '3', '0');
INSERT INTO `mall_region` VALUES ('3117', '368', '贡山', '3', '0');
INSERT INTO `mall_region` VALUES ('3118', '369', '宁洱', '3', '0');
INSERT INTO `mall_region` VALUES ('3119', '369', '思茅区', '3', '0');
INSERT INTO `mall_region` VALUES ('3120', '369', '墨江', '3', '0');
INSERT INTO `mall_region` VALUES ('3121', '369', '景东', '3', '0');
INSERT INTO `mall_region` VALUES ('3122', '369', '景谷', '3', '0');
INSERT INTO `mall_region` VALUES ('3123', '369', '镇沅', '3', '0');
INSERT INTO `mall_region` VALUES ('3124', '369', '江城', '3', '0');
INSERT INTO `mall_region` VALUES ('3125', '369', '孟连', '3', '0');
INSERT INTO `mall_region` VALUES ('3126', '369', '澜沧', '3', '0');
INSERT INTO `mall_region` VALUES ('3127', '369', '西盟', '3', '0');
INSERT INTO `mall_region` VALUES ('3128', '370', '古城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3129', '370', '宁蒗', '3', '0');
INSERT INTO `mall_region` VALUES ('3130', '370', '玉龙', '3', '0');
INSERT INTO `mall_region` VALUES ('3131', '370', '永胜县', '3', '0');
INSERT INTO `mall_region` VALUES ('3132', '370', '华坪县', '3', '0');
INSERT INTO `mall_region` VALUES ('3133', '371', '隆阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('3134', '371', '施甸县', '3', '0');
INSERT INTO `mall_region` VALUES ('3135', '371', '腾冲县', '3', '0');
INSERT INTO `mall_region` VALUES ('3136', '371', '龙陵县', '3', '0');
INSERT INTO `mall_region` VALUES ('3137', '371', '昌宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3138', '372', '楚雄市', '3', '0');
INSERT INTO `mall_region` VALUES ('3139', '372', '双柏县', '3', '0');
INSERT INTO `mall_region` VALUES ('3140', '372', '牟定县', '3', '0');
INSERT INTO `mall_region` VALUES ('3141', '372', '南华县', '3', '0');
INSERT INTO `mall_region` VALUES ('3142', '372', '姚安县', '3', '0');
INSERT INTO `mall_region` VALUES ('3143', '372', '大姚县', '3', '0');
INSERT INTO `mall_region` VALUES ('3144', '372', '永仁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3145', '372', '元谋县', '3', '0');
INSERT INTO `mall_region` VALUES ('3146', '372', '武定县', '3', '0');
INSERT INTO `mall_region` VALUES ('3147', '372', '禄丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('3148', '373', '大理市', '3', '0');
INSERT INTO `mall_region` VALUES ('3149', '373', '祥云县', '3', '0');
INSERT INTO `mall_region` VALUES ('3150', '373', '宾川县', '3', '0');
INSERT INTO `mall_region` VALUES ('3151', '373', '弥渡县', '3', '0');
INSERT INTO `mall_region` VALUES ('3152', '373', '永平县', '3', '0');
INSERT INTO `mall_region` VALUES ('3153', '373', '云龙县', '3', '0');
INSERT INTO `mall_region` VALUES ('3154', '373', '洱源县', '3', '0');
INSERT INTO `mall_region` VALUES ('3155', '373', '剑川县', '3', '0');
INSERT INTO `mall_region` VALUES ('3156', '373', '鹤庆县', '3', '0');
INSERT INTO `mall_region` VALUES ('3157', '373', '漾濞', '3', '0');
INSERT INTO `mall_region` VALUES ('3158', '373', '南涧', '3', '0');
INSERT INTO `mall_region` VALUES ('3159', '373', '巍山', '3', '0');
INSERT INTO `mall_region` VALUES ('3160', '374', '潞西市', '3', '0');
INSERT INTO `mall_region` VALUES ('3161', '374', '瑞丽市', '3', '0');
INSERT INTO `mall_region` VALUES ('3162', '374', '梁河县', '3', '0');
INSERT INTO `mall_region` VALUES ('3163', '374', '盈江县', '3', '0');
INSERT INTO `mall_region` VALUES ('3164', '374', '陇川县', '3', '0');
INSERT INTO `mall_region` VALUES ('3165', '375', '香格里拉县', '3', '0');
INSERT INTO `mall_region` VALUES ('3166', '375', '德钦县', '3', '0');
INSERT INTO `mall_region` VALUES ('3167', '375', '维西', '3', '0');
INSERT INTO `mall_region` VALUES ('3168', '376', '泸西县', '3', '0');
INSERT INTO `mall_region` VALUES ('3169', '376', '蒙自县', '3', '0');
INSERT INTO `mall_region` VALUES ('3170', '376', '个旧市', '3', '0');
INSERT INTO `mall_region` VALUES ('3171', '376', '开远市', '3', '0');
INSERT INTO `mall_region` VALUES ('3172', '376', '绿春县', '3', '0');
INSERT INTO `mall_region` VALUES ('3173', '376', '建水县', '3', '0');
INSERT INTO `mall_region` VALUES ('3174', '376', '石屏县', '3', '0');
INSERT INTO `mall_region` VALUES ('3175', '376', '弥勒县', '3', '0');
INSERT INTO `mall_region` VALUES ('3176', '376', '元阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('3177', '376', '红河县', '3', '0');
INSERT INTO `mall_region` VALUES ('3178', '376', '金平', '3', '0');
INSERT INTO `mall_region` VALUES ('3179', '376', '河口', '3', '0');
INSERT INTO `mall_region` VALUES ('3180', '376', '屏边', '3', '0');
INSERT INTO `mall_region` VALUES ('3181', '377', '临翔区', '3', '0');
INSERT INTO `mall_region` VALUES ('3182', '377', '凤庆县', '3', '0');
INSERT INTO `mall_region` VALUES ('3183', '377', '云县', '3', '0');
INSERT INTO `mall_region` VALUES ('3184', '377', '永德县', '3', '0');
INSERT INTO `mall_region` VALUES ('3185', '377', '镇康县', '3', '0');
INSERT INTO `mall_region` VALUES ('3186', '377', '双江', '3', '0');
INSERT INTO `mall_region` VALUES ('3187', '377', '耿马', '3', '0');
INSERT INTO `mall_region` VALUES ('3188', '377', '沧源', '3', '0');
INSERT INTO `mall_region` VALUES ('3189', '378', '麒麟区', '3', '0');
INSERT INTO `mall_region` VALUES ('3190', '378', '宣威市', '3', '0');
INSERT INTO `mall_region` VALUES ('3191', '378', '马龙县', '3', '0');
INSERT INTO `mall_region` VALUES ('3192', '378', '陆良县', '3', '0');
INSERT INTO `mall_region` VALUES ('3193', '378', '师宗县', '3', '0');
INSERT INTO `mall_region` VALUES ('3194', '378', '罗平县', '3', '0');
INSERT INTO `mall_region` VALUES ('3195', '378', '富源县', '3', '0');
INSERT INTO `mall_region` VALUES ('3196', '378', '会泽县', '3', '0');
INSERT INTO `mall_region` VALUES ('3197', '378', '沾益县', '3', '0');
INSERT INTO `mall_region` VALUES ('3198', '379', '文山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3199', '379', '砚山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3200', '379', '西畴县', '3', '0');
INSERT INTO `mall_region` VALUES ('3201', '379', '麻栗坡县', '3', '0');
INSERT INTO `mall_region` VALUES ('3202', '379', '马关县', '3', '0');
INSERT INTO `mall_region` VALUES ('3203', '379', '丘北县', '3', '0');
INSERT INTO `mall_region` VALUES ('3204', '379', '广南县', '3', '0');
INSERT INTO `mall_region` VALUES ('3205', '379', '富宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3206', '380', '景洪市', '3', '0');
INSERT INTO `mall_region` VALUES ('3207', '380', '勐海县', '3', '0');
INSERT INTO `mall_region` VALUES ('3208', '380', '勐腊县', '3', '0');
INSERT INTO `mall_region` VALUES ('3209', '381', '红塔区', '3', '0');
INSERT INTO `mall_region` VALUES ('3210', '381', '江川县', '3', '0');
INSERT INTO `mall_region` VALUES ('3211', '381', '澄江县', '3', '0');
INSERT INTO `mall_region` VALUES ('3212', '381', '通海县', '3', '0');
INSERT INTO `mall_region` VALUES ('3213', '381', '华宁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3214', '381', '易门县', '3', '0');
INSERT INTO `mall_region` VALUES ('3215', '381', '峨山', '3', '0');
INSERT INTO `mall_region` VALUES ('3216', '381', '新平', '3', '0');
INSERT INTO `mall_region` VALUES ('3217', '381', '元江', '3', '0');
INSERT INTO `mall_region` VALUES ('3218', '382', '昭阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('3219', '382', '鲁甸县', '3', '0');
INSERT INTO `mall_region` VALUES ('3220', '382', '巧家县', '3', '0');
INSERT INTO `mall_region` VALUES ('3221', '382', '盐津县', '3', '0');
INSERT INTO `mall_region` VALUES ('3222', '382', '大关县', '3', '0');
INSERT INTO `mall_region` VALUES ('3223', '382', '永善县', '3', '0');
INSERT INTO `mall_region` VALUES ('3224', '382', '绥江县', '3', '0');
INSERT INTO `mall_region` VALUES ('3225', '382', '镇雄县', '3', '0');
INSERT INTO `mall_region` VALUES ('3226', '382', '彝良县', '3', '0');
INSERT INTO `mall_region` VALUES ('3227', '382', '威信县', '3', '0');
INSERT INTO `mall_region` VALUES ('3228', '382', '水富县', '3', '0');
INSERT INTO `mall_region` VALUES ('3229', '383', '西湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('3230', '383', '上城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3231', '383', '下城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3232', '383', '拱墅区', '3', '0');
INSERT INTO `mall_region` VALUES ('3233', '383', '滨江区', '3', '0');
INSERT INTO `mall_region` VALUES ('3234', '383', '江干区', '3', '0');
INSERT INTO `mall_region` VALUES ('3235', '383', '萧山区', '3', '0');
INSERT INTO `mall_region` VALUES ('3236', '383', '余杭区', '3', '0');
INSERT INTO `mall_region` VALUES ('3237', '383', '市郊', '3', '0');
INSERT INTO `mall_region` VALUES ('3238', '383', '建德市', '3', '0');
INSERT INTO `mall_region` VALUES ('3239', '383', '富阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('3240', '383', '临安市', '3', '0');
INSERT INTO `mall_region` VALUES ('3241', '383', '桐庐县', '3', '0');
INSERT INTO `mall_region` VALUES ('3242', '383', '淳安县', '3', '0');
INSERT INTO `mall_region` VALUES ('3243', '384', '吴兴区', '3', '0');
INSERT INTO `mall_region` VALUES ('3244', '384', '南浔区', '3', '0');
INSERT INTO `mall_region` VALUES ('3245', '384', '德清县', '3', '0');
INSERT INTO `mall_region` VALUES ('3246', '384', '长兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('3247', '384', '安吉县', '3', '0');
INSERT INTO `mall_region` VALUES ('3248', '385', '南湖区', '3', '0');
INSERT INTO `mall_region` VALUES ('3249', '385', '秀洲区', '3', '0');
INSERT INTO `mall_region` VALUES ('3250', '385', '海宁市', '3', '0');
INSERT INTO `mall_region` VALUES ('3251', '385', '嘉善县', '3', '0');
INSERT INTO `mall_region` VALUES ('3252', '385', '平湖市', '3', '0');
INSERT INTO `mall_region` VALUES ('3253', '385', '桐乡市', '3', '0');
INSERT INTO `mall_region` VALUES ('3254', '385', '海盐县', '3', '0');
INSERT INTO `mall_region` VALUES ('3255', '386', '婺城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3256', '386', '金东区', '3', '0');
INSERT INTO `mall_region` VALUES ('3257', '386', '兰溪市', '3', '0');
INSERT INTO `mall_region` VALUES ('3258', '386', '市区', '3', '0');
INSERT INTO `mall_region` VALUES ('3259', '386', '佛堂镇', '3', '0');
INSERT INTO `mall_region` VALUES ('3260', '386', '上溪镇', '3', '0');
INSERT INTO `mall_region` VALUES ('3261', '386', '义亭镇', '3', '0');
INSERT INTO `mall_region` VALUES ('3262', '386', '大陈镇', '3', '0');
INSERT INTO `mall_region` VALUES ('3263', '386', '苏溪镇', '3', '0');
INSERT INTO `mall_region` VALUES ('3264', '386', '赤岸镇', '3', '0');
INSERT INTO `mall_region` VALUES ('3265', '386', '东阳市', '3', '0');
INSERT INTO `mall_region` VALUES ('3266', '386', '永康市', '3', '0');
INSERT INTO `mall_region` VALUES ('3267', '386', '武义县', '3', '0');
INSERT INTO `mall_region` VALUES ('3268', '386', '浦江县', '3', '0');
INSERT INTO `mall_region` VALUES ('3269', '386', '磐安县', '3', '0');
INSERT INTO `mall_region` VALUES ('3270', '387', '莲都区', '3', '0');
INSERT INTO `mall_region` VALUES ('3271', '387', '龙泉市', '3', '0');
INSERT INTO `mall_region` VALUES ('3272', '387', '青田县', '3', '0');
INSERT INTO `mall_region` VALUES ('3273', '387', '缙云县', '3', '0');
INSERT INTO `mall_region` VALUES ('3274', '387', '遂昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('3275', '387', '松阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('3276', '387', '云和县', '3', '0');
INSERT INTO `mall_region` VALUES ('3277', '387', '庆元县', '3', '0');
INSERT INTO `mall_region` VALUES ('3278', '387', '景宁', '3', '0');
INSERT INTO `mall_region` VALUES ('3279', '388', '海曙区', '3', '0');
INSERT INTO `mall_region` VALUES ('3280', '388', '江东区', '3', '0');
INSERT INTO `mall_region` VALUES ('3281', '388', '江北区', '3', '0');
INSERT INTO `mall_region` VALUES ('3282', '388', '镇海区', '3', '0');
INSERT INTO `mall_region` VALUES ('3283', '388', '北仑区', '3', '0');
INSERT INTO `mall_region` VALUES ('3284', '388', '鄞州区', '3', '0');
INSERT INTO `mall_region` VALUES ('3285', '388', '余姚市', '3', '0');
INSERT INTO `mall_region` VALUES ('3286', '388', '慈溪市', '3', '0');
INSERT INTO `mall_region` VALUES ('3287', '388', '奉化市', '3', '0');
INSERT INTO `mall_region` VALUES ('3288', '388', '象山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3289', '388', '宁海县', '3', '0');
INSERT INTO `mall_region` VALUES ('3290', '389', '越城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3291', '389', '上虞市', '3', '0');
INSERT INTO `mall_region` VALUES ('3292', '389', '嵊州市', '3', '0');
INSERT INTO `mall_region` VALUES ('3293', '389', '绍兴县', '3', '0');
INSERT INTO `mall_region` VALUES ('3294', '389', '新昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('3295', '389', '诸暨市', '3', '0');
INSERT INTO `mall_region` VALUES ('3296', '390', '椒江区', '3', '0');
INSERT INTO `mall_region` VALUES ('3297', '390', '黄岩区', '3', '0');
INSERT INTO `mall_region` VALUES ('3298', '390', '路桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('3299', '390', '温岭市', '3', '0');
INSERT INTO `mall_region` VALUES ('3300', '390', '临海市', '3', '0');
INSERT INTO `mall_region` VALUES ('3301', '390', '玉环县', '3', '0');
INSERT INTO `mall_region` VALUES ('3302', '390', '三门县', '3', '0');
INSERT INTO `mall_region` VALUES ('3303', '390', '天台县', '3', '0');
INSERT INTO `mall_region` VALUES ('3304', '390', '仙居县', '3', '0');
INSERT INTO `mall_region` VALUES ('3305', '391', '鹿城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3306', '391', '龙湾区', '3', '0');
INSERT INTO `mall_region` VALUES ('3307', '391', '瓯海区', '3', '0');
INSERT INTO `mall_region` VALUES ('3308', '391', '瑞安市', '3', '0');
INSERT INTO `mall_region` VALUES ('3309', '391', '乐清市', '3', '0');
INSERT INTO `mall_region` VALUES ('3310', '391', '洞头县', '3', '0');
INSERT INTO `mall_region` VALUES ('3311', '391', '永嘉县', '3', '0');
INSERT INTO `mall_region` VALUES ('3312', '391', '平阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('3313', '391', '苍南县', '3', '0');
INSERT INTO `mall_region` VALUES ('3314', '391', '文成县', '3', '0');
INSERT INTO `mall_region` VALUES ('3315', '391', '泰顺县', '3', '0');
INSERT INTO `mall_region` VALUES ('3316', '392', '定海区', '3', '0');
INSERT INTO `mall_region` VALUES ('3317', '392', '普陀区', '3', '0');
INSERT INTO `mall_region` VALUES ('3318', '392', '岱山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3319', '392', '嵊泗县', '3', '0');
INSERT INTO `mall_region` VALUES ('3320', '393', '衢州市', '3', '0');
INSERT INTO `mall_region` VALUES ('3321', '393', '江山市', '3', '0');
INSERT INTO `mall_region` VALUES ('3322', '393', '常山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3323', '393', '开化县', '3', '0');
INSERT INTO `mall_region` VALUES ('3324', '393', '龙游县', '3', '0');
INSERT INTO `mall_region` VALUES ('3325', '394', '合川区', '3', '0');
INSERT INTO `mall_region` VALUES ('3326', '394', '江津区', '3', '0');
INSERT INTO `mall_region` VALUES ('3327', '394', '南川区', '3', '0');
INSERT INTO `mall_region` VALUES ('3328', '394', '永川区', '3', '0');
INSERT INTO `mall_region` VALUES ('3329', '394', '南岸区', '3', '0');
INSERT INTO `mall_region` VALUES ('3330', '394', '渝北区', '3', '0');
INSERT INTO `mall_region` VALUES ('3331', '394', '万盛区', '3', '0');
INSERT INTO `mall_region` VALUES ('3332', '394', '大渡口区', '3', '0');
INSERT INTO `mall_region` VALUES ('3333', '394', '万州区', '3', '0');
INSERT INTO `mall_region` VALUES ('3334', '394', '北碚区', '3', '0');
INSERT INTO `mall_region` VALUES ('3335', '394', '沙坪坝区', '3', '0');
INSERT INTO `mall_region` VALUES ('3336', '394', '巴南区', '3', '0');
INSERT INTO `mall_region` VALUES ('3337', '394', '涪陵区', '3', '0');
INSERT INTO `mall_region` VALUES ('3338', '394', '江北区', '3', '0');
INSERT INTO `mall_region` VALUES ('3339', '394', '九龙坡区', '3', '0');
INSERT INTO `mall_region` VALUES ('3340', '394', '渝中区', '3', '0');
INSERT INTO `mall_region` VALUES ('3341', '394', '黔江开发区', '3', '0');
INSERT INTO `mall_region` VALUES ('3342', '394', '长寿区', '3', '0');
INSERT INTO `mall_region` VALUES ('3343', '394', '双桥区', '3', '0');
INSERT INTO `mall_region` VALUES ('3344', '394', '綦江县', '3', '0');
INSERT INTO `mall_region` VALUES ('3345', '394', '潼南县', '3', '0');
INSERT INTO `mall_region` VALUES ('3346', '394', '铜梁县', '3', '0');
INSERT INTO `mall_region` VALUES ('3347', '394', '大足县', '3', '0');
INSERT INTO `mall_region` VALUES ('3348', '394', '荣昌县', '3', '0');
INSERT INTO `mall_region` VALUES ('3349', '394', '璧山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3350', '394', '垫江县', '3', '0');
INSERT INTO `mall_region` VALUES ('3351', '394', '武隆县', '3', '0');
INSERT INTO `mall_region` VALUES ('3352', '394', '丰都县', '3', '0');
INSERT INTO `mall_region` VALUES ('3353', '394', '城口县', '3', '0');
INSERT INTO `mall_region` VALUES ('3354', '394', '梁平县', '3', '0');
INSERT INTO `mall_region` VALUES ('3355', '394', '开县', '3', '0');
INSERT INTO `mall_region` VALUES ('3356', '394', '巫溪县', '3', '0');
INSERT INTO `mall_region` VALUES ('3357', '394', '巫山县', '3', '0');
INSERT INTO `mall_region` VALUES ('3358', '394', '奉节县', '3', '0');
INSERT INTO `mall_region` VALUES ('3359', '394', '云阳县', '3', '0');
INSERT INTO `mall_region` VALUES ('3360', '394', '忠县', '3', '0');
INSERT INTO `mall_region` VALUES ('3361', '394', '石柱', '3', '0');
INSERT INTO `mall_region` VALUES ('3362', '394', '彭水', '3', '0');
INSERT INTO `mall_region` VALUES ('3363', '394', '酉阳', '3', '0');
INSERT INTO `mall_region` VALUES ('3364', '394', '秀山', '3', '0');
INSERT INTO `mall_region` VALUES ('3365', '395', '沙田区', '3', '0');
INSERT INTO `mall_region` VALUES ('3366', '395', '东区', '3', '0');
INSERT INTO `mall_region` VALUES ('3367', '395', '观塘区', '3', '0');
INSERT INTO `mall_region` VALUES ('3368', '395', '黄大仙区', '3', '0');
INSERT INTO `mall_region` VALUES ('3369', '395', '九龙城区', '3', '0');
INSERT INTO `mall_region` VALUES ('3370', '395', '屯门区', '3', '0');
INSERT INTO `mall_region` VALUES ('3371', '395', '葵青区', '3', '0');
INSERT INTO `mall_region` VALUES ('3372', '395', '元朗区', '3', '0');
INSERT INTO `mall_region` VALUES ('3373', '395', '深水埗区', '3', '0');
INSERT INTO `mall_region` VALUES ('3374', '395', '西贡区', '3', '0');
INSERT INTO `mall_region` VALUES ('3375', '395', '大埔区', '3', '0');
INSERT INTO `mall_region` VALUES ('3376', '395', '湾仔区', '3', '0');
INSERT INTO `mall_region` VALUES ('3377', '395', '油尖旺区', '3', '0');
INSERT INTO `mall_region` VALUES ('3378', '395', '北区', '3', '0');
INSERT INTO `mall_region` VALUES ('3379', '395', '南区', '3', '0');
INSERT INTO `mall_region` VALUES ('3380', '395', '荃湾区', '3', '0');
INSERT INTO `mall_region` VALUES ('3381', '395', '中西区', '3', '0');
INSERT INTO `mall_region` VALUES ('3382', '395', '离岛区', '3', '0');
INSERT INTO `mall_region` VALUES ('3383', '396', '澳门', '3', '0');
INSERT INTO `mall_region` VALUES ('3384', '397', '台北', '3', '0');
INSERT INTO `mall_region` VALUES ('3385', '397', '高雄', '3', '0');
INSERT INTO `mall_region` VALUES ('3386', '397', '基隆', '3', '0');
INSERT INTO `mall_region` VALUES ('3387', '397', '台中', '3', '0');
INSERT INTO `mall_region` VALUES ('3388', '397', '台南', '3', '0');
INSERT INTO `mall_region` VALUES ('3389', '397', '新竹', '3', '0');
INSERT INTO `mall_region` VALUES ('3390', '397', '嘉义', '3', '0');
INSERT INTO `mall_region` VALUES ('3391', '397', '宜兰县', '3', '0');
INSERT INTO `mall_region` VALUES ('3392', '397', '桃园县', '3', '0');
INSERT INTO `mall_region` VALUES ('3393', '397', '苗栗县', '3', '0');
INSERT INTO `mall_region` VALUES ('3394', '397', '彰化县', '3', '0');
INSERT INTO `mall_region` VALUES ('3395', '397', '南投县', '3', '0');
INSERT INTO `mall_region` VALUES ('3396', '397', '云林县', '3', '0');
INSERT INTO `mall_region` VALUES ('3397', '397', '屏东县', '3', '0');
INSERT INTO `mall_region` VALUES ('3398', '397', '台东县', '3', '0');
INSERT INTO `mall_region` VALUES ('3399', '397', '花莲县', '3', '0');
INSERT INTO `mall_region` VALUES ('3400', '397', '澎湖县', '3', '0');
INSERT INTO `mall_region` VALUES ('3401', '3', '合肥', '2', '0');
INSERT INTO `mall_region` VALUES ('3402', '3401', '庐阳区', '3', '0');
INSERT INTO `mall_region` VALUES ('3403', '3401', '瑶海区', '3', '0');
INSERT INTO `mall_region` VALUES ('3404', '3401', '蜀山区', '3', '0');
INSERT INTO `mall_region` VALUES ('3405', '3401', '包河区', '3', '0');
INSERT INTO `mall_region` VALUES ('3406', '3401', '长丰县', '3', '0');
INSERT INTO `mall_region` VALUES ('3407', '3401', '肥东县', '3', '0');
INSERT INTO `mall_region` VALUES ('3408', '3401', '肥西县', '3', '0');

-- ----------------------------
-- Table structure for mall_role
-- ----------------------------
DROP TABLE IF EXISTS `mall_role`;
CREATE TABLE `mall_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY (`role_id`),
  KEY `user_name` (`role_name`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_role
-- ----------------------------

-- ----------------------------
-- Table structure for mall_searchengine
-- ----------------------------
DROP TABLE IF EXISTS `mall_searchengine`;
CREATE TABLE `mall_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_searchengine
-- ----------------------------

-- ----------------------------
-- Table structure for mall_seller
-- ----------------------------
DROP TABLE IF EXISTS `mall_seller`;
CREATE TABLE `mall_seller` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `seller_name` varchar(60) NOT NULL DEFAULT '',
  `seller_email` varchar(60) NOT NULL DEFAULT '',
  `seller_pwd` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_name` (`seller_name`) USING BTREE,
  KEY `agency_id` (`agency_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_seller
-- ----------------------------
INSERT INTO `mall_seller` VALUES ('1', 'seller1', 'zyddj123@163.com', 'e10adc3949ba59abbe56e057f20f883e', '680', '1514448117', '1537751566', '127.0.0.1', 'all', '商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit', '', '0', '0', null, null);

-- ----------------------------
-- Table structure for mall_seller_session
-- ----------------------------
DROP TABLE IF EXISTS `mall_seller_session`;
CREATE TABLE `mall_seller_session` (
  `SESS_KEY` varchar(32) NOT NULL,
  `EXPIRY_DATE` bigint(20) NOT NULL,
  `SESS_VALUE` varchar(4000) NOT NULL,
  `LOGIN_DATE` datetime NOT NULL,
  `LOGIN_IP` bigint(20) NOT NULL,
  `UID` varchar(50) NOT NULL,
  PRIMARY KEY (`SESS_KEY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_seller_session
-- ----------------------------
INSERT INTO `mall_seller_session` VALUES ('40dtc9r0ltcj77tnqqsgklp0d1', '1541676793', 'seller|a:5:{s:10:\"csrf_token\";s:10:\"0826cb98b3\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:16:\"left_menu_action\";s:17:\"goods/goods_brand\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('7071kuhdm7fur4eqtk2jsfcnoh', '1541565327', 'seller|a:10:{s:10:\"csrf_token\";s:10:\"d928d41ecd\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:10:\"seller_sex\";N;s:12:\"seller_phone\";N;s:10:\"seller_img\";N;s:11:\"seller_mail\";N;s:13:\"seller_status\";N;s:16:\"left_menu_action\";s:17:\"goods/goods_brand\";}', '0000-00-00 00:00:00', '2130706433', '');
INSERT INTO `mall_seller_session` VALUES ('8b5dh842j4c83ol26r3pcbdpf0', '1541562881', 'seller|a:1:{s:10:\"csrf_token\";s:10:\"555c6e2526\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('bg3pdjpnbq2u8sqajv5qoa5s13', '1542194302', 'seller|a:5:{s:10:\"csrf_token\";s:10:\"65e305f852\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:16:\"left_menu_action\";s:15:\"goods/goods_add\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('c2fog0pm4b85bor2hhdks8p162', '1541562718', 'seller|a:1:{s:10:\"csrf_token\";s:10:\"9662634db1\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('cg7j7pdelt1ho79ipf8g9sddd1', '1542019027', 'seller|a:5:{s:10:\"csrf_token\";s:10:\"1d5942472e\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:16:\"left_menu_action\";s:15:\"goods/goods_add\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('e28pnu7uuar83ipqanat7lct32', '1541563146', 'seller|a:4:{s:10:\"csrf_token\";s:10:\"69578e53a2\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('gmbe73c1t4iueldobciov2t5m5', '1541759791', 'seller|a:5:{s:10:\"csrf_token\";s:10:\"9ac6d9da47\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:16:\"left_menu_action\";s:20:\"goods/goods_category\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('le7r116nmqk79usp45hh1v4un0', '1541590478', 'seller|a:5:{s:10:\"csrf_token\";s:10:\"c337b29db9\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:16:\"left_menu_action\";s:17:\"goods/goods_brand\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('lrggi90p3etc4qhtr2f13u5qm3', '1541561253', 'seller|a:1:{s:10:\"csrf_token\";s:10:\"1c09077cea\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('rn72k6t7cbfec916lp6grso213', '1541562887', 'seller|a:1:{s:10:\"csrf_token\";s:10:\"6a4f3c6026\";}', '0000-00-00 00:00:00', '3232235901', '');
INSERT INTO `mall_seller_session` VALUES ('vchbjq8mof9vt6p35bi85knsi4', '1542106287', 'seller|a:5:{s:10:\"csrf_token\";s:10:\"5366a17b5c\";s:2:\"id\";s:1:\"1\";s:11:\"seller_name\";s:7:\"seller1\";s:10:\"seller_pwd\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:16:\"left_menu_action\";s:15:\"goods/goods_add\";}', '0000-00-00 00:00:00', '3232235901', '');

-- ----------------------------
-- Table structure for mall_sessions
-- ----------------------------
DROP TABLE IF EXISTS `mall_sessions`;
CREATE TABLE `mall_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`) USING HASH
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_sessions
-- ----------------------------

-- ----------------------------
-- Table structure for mall_sessions_data
-- ----------------------------
DROP TABLE IF EXISTS `mall_sessions_data`;
CREATE TABLE `mall_sessions_data` (
  `sesskey` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `data` longtext NOT NULL,
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_sessions_data
-- ----------------------------

-- ----------------------------
-- Table structure for mall_shipping
-- ----------------------------
DROP TABLE IF EXISTS `mall_shipping`;
CREATE TABLE `mall_shipping` (
  `shipping_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_code` varchar(20) NOT NULL DEFAULT '',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `shipping_desc` varchar(255) NOT NULL DEFAULT '',
  `insure` varchar(10) NOT NULL DEFAULT '0',
  `support_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_print` text NOT NULL,
  `print_bg` varchar(255) DEFAULT NULL,
  `config_lable` text,
  `print_model` tinyint(1) DEFAULT '0',
  `shipping_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_id`),
  KEY `shipping_code` (`shipping_code`,`enabled`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_shipping
-- ----------------------------
INSERT INTO `mall_shipping` VALUES ('1', 'post_express', '邮政快递包裹', '邮政快递包裹的描述内容。', '1%', '0', '1', '', null, null, '0', '0');
INSERT INTO `mall_shipping` VALUES ('2', 'yto', '圆通速递', '上海圆通物流（速递）有限公司经过多年的网络快速发展，在中国速递行业中一直处于领先地位。为了能更好的发展国际快件市场，加快与国际市场的接轨，强化圆通的整体实力，圆通已在东南亚、欧美、中东、北美洲、非洲等许多城市运作国际快件业务', '0', '1', '1', '', null, null, '0', '0');
INSERT INTO `mall_shipping` VALUES ('3', 'city_express', '城际快递', '配送的运费是固定的', '0', '1', '1', '', null, null, '0', '0');
INSERT INTO `mall_shipping` VALUES ('4', 'flat', '市内快递', '固定运费的配送方式内容', '0', '1', '1', '', null, null, '0', '0');
INSERT INTO `mall_shipping` VALUES ('5', 'sto_express', '申通快递', '江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元', '0', '0', '1', '', null, null, '0', '0');
INSERT INTO `mall_shipping` VALUES ('6', 'post_mail', '邮局平邮', '邮局平邮的描述内容。', '0', '0', '1', '', null, null, '0', '0');
INSERT INTO `mall_shipping` VALUES ('7', 'fpd', '运费到付', '所购商品到达即付运费', '0', '0', '1', '', null, null, '0', '0');

-- ----------------------------
-- Table structure for mall_shipping_area
-- ----------------------------
DROP TABLE IF EXISTS `mall_shipping_area`;
CREATE TABLE `mall_shipping_area` (
  `shipping_area_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_area_name` varchar(150) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `configure` text NOT NULL,
  PRIMARY KEY (`shipping_area_id`),
  KEY `shipping_id` (`shipping_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_shipping_area
-- ----------------------------
INSERT INTO `mall_shipping_area` VALUES ('1', '申通', '5', 'a:5:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:2:\"15\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:2:\"15\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:1:\"5\";}i:3;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:1:\"0\";}i:4;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}}');
INSERT INTO `mall_shipping_area` VALUES ('2', '1', '3', 'a:4:{i:0;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:2:\"10\";}i:1;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:6:\"100000\";}i:2;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";N;}i:3;a:2:{s:4:\"name\";s:7:\"pay_fee\";s:5:\"value\";s:1:\"5\";}}');
INSERT INTO `mall_shipping_area` VALUES ('3', '邮局', '6', 'a:7:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:1:\"4\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:3:\"3.5\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:3:\"2.5\";}i:3;a:2:{s:4:\"name\";s:9:\"step_fee1\";s:5:\"value\";N;}i:4;a:2:{s:4:\"name\";s:8:\"pack_fee\";s:5:\"value\";s:1:\"0\";}i:5;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:5:\"50000\";}i:6;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}}');
INSERT INTO `mall_shipping_area` VALUES ('4', '运费到付', '7', 'a:2:{i:0;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:5:\"50000\";}i:1;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";N;}}');

-- ----------------------------
-- Table structure for mall_shop_config
-- ----------------------------
DROP TABLE IF EXISTS `mall_shop_config`;
CREATE TABLE `mall_shop_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`) USING BTREE,
  KEY `parent_id` (`parent_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=904 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_shop_config
-- ----------------------------
INSERT INTO `mall_shop_config` VALUES ('1', '0', 'shop_info', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('2', '0', 'basic', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('3', '0', 'display', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('4', '0', 'shopping_flow', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('5', '0', 'smtp', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('6', '0', 'hidden', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('7', '0', 'goods', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('8', '0', 'sms', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('9', '0', 'wap', 'group', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('101', '1', 'shop_name', 'text', '', '', 'ECSHOP', '1');
INSERT INTO `mall_shop_config` VALUES ('102', '1', 'shop_title', 'text', '', '', 'ECSHOP演示站', '1');
INSERT INTO `mall_shop_config` VALUES ('103', '1', 'shop_desc', 'text', '', '', 'ECSHOP演示站', '1');
INSERT INTO `mall_shop_config` VALUES ('104', '1', 'shop_keywords', 'text', '', '', 'ECSHOP演示站', '1');
INSERT INTO `mall_shop_config` VALUES ('105', '1', 'shop_country', 'manual', '', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('106', '1', 'shop_province', 'manual', '', '', '2', '1');
INSERT INTO `mall_shop_config` VALUES ('107', '1', 'shop_city', 'manual', '', '', '52', '1');
INSERT INTO `mall_shop_config` VALUES ('108', '1', 'shop_address', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('109', '1', 'qq', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('110', '1', 'ww', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('111', '1', 'skype', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('112', '1', 'ym', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('113', '1', 'msn', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('114', '1', 'service_email', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('115', '1', 'service_phone', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('116', '1', 'shop_closed', 'select', '0,1', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('117', '1', 'close_comment', 'textarea', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('118', '1', 'shop_logo', 'file', '', '../themes/{$template}/images/', '', '1');
INSERT INTO `mall_shop_config` VALUES ('119', '1', 'licensed', 'select', '0,1', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('120', '1', 'user_notice', 'textarea', '', '', '用户中心公告！', '1');
INSERT INTO `mall_shop_config` VALUES ('121', '1', 'shop_notice', 'textarea', '', '', '欢迎光临手机网,我们的宗旨：诚信经营、服务客户！\r\n<MARQUEE onmouseover=this.stop() onmouseout=this.start() \r\nscrollAmount=3><U><FONT color=red>\r\n<P>咨询电话010-10124444  010-21252454 8465544</P></FONT></U></MARQUEE>', '1');
INSERT INTO `mall_shop_config` VALUES ('122', '1', 'shop_reg_closed', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('201', '2', 'lang', 'manual', '', '', 'zh_cn', '1');
INSERT INTO `mall_shop_config` VALUES ('202', '2', 'icp_number', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('203', '2', 'icp_file', 'file', '', '../cert/', '', '1');
INSERT INTO `mall_shop_config` VALUES ('204', '2', 'watermark', 'file', '', '../images/', '', '1');
INSERT INTO `mall_shop_config` VALUES ('205', '2', 'watermark_place', 'select', '0,1,2,3,4,5', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('206', '2', 'watermark_alpha', 'text', '', '', '65', '1');
INSERT INTO `mall_shop_config` VALUES ('207', '2', 'use_storage', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('208', '2', 'market_price_rate', 'text', '', '', '1.2', '1');
INSERT INTO `mall_shop_config` VALUES ('209', '2', 'rewrite', 'select', '0,1,2', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('210', '2', 'integral_name', 'text', '', '', '积分', '1');
INSERT INTO `mall_shop_config` VALUES ('211', '2', 'integral_scale', 'text', '', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('212', '2', 'integral_percent', 'text', '', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('213', '2', 'sn_prefix', 'text', '', '', 'ECS', '1');
INSERT INTO `mall_shop_config` VALUES ('214', '2', 'comment_check', 'select', '0,1', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('215', '2', 'no_picture', 'file', '', '../images/', '', '1');
INSERT INTO `mall_shop_config` VALUES ('218', '2', 'stats_code', 'textarea', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('219', '2', 'cache_time', 'text', '', '', '3600', '1');
INSERT INTO `mall_shop_config` VALUES ('220', '2', 'register_points', 'text', '', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('221', '2', 'enable_gzip', 'select', '0,1', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('222', '2', 'top10_time', 'select', '0,1,2,3,4', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('223', '2', 'timezone', 'options', '-12,-11,-10,-9,-8,-7,-6,-5,-4,-3.5,-3,-2,-1,0,1,2,3,3.5,4,4.5,5,5.5,5.75,6,6.5,7,8,9,9.5,10,11,12', '', '8', '1');
INSERT INTO `mall_shop_config` VALUES ('224', '2', 'upload_size_limit', 'options', '-1,0,64,128,256,512,1024,2048,4096', '', '64', '1');
INSERT INTO `mall_shop_config` VALUES ('226', '2', 'cron_method', 'select', '0,1', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('227', '2', 'comment_factor', 'select', '0,1,2,3', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('228', '2', 'enable_order_check', 'select', '0,1', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('229', '2', 'default_storage', 'text', '', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('230', '2', 'bgcolor', 'text', '', '', '#FFFFFF', '1');
INSERT INTO `mall_shop_config` VALUES ('231', '2', 'visit_stats', 'select', 'on,off', '', 'on', '1');
INSERT INTO `mall_shop_config` VALUES ('232', '2', 'send_mail_on', 'select', 'on,off', '', 'off', '1');
INSERT INTO `mall_shop_config` VALUES ('233', '2', 'auto_generate_gallery', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('234', '2', 'retain_original_img', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('235', '2', 'member_email_validate', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('236', '2', 'message_board', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('239', '2', 'certificate_id', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('240', '2', 'token', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('241', '2', 'certi', 'hidden', '', '', 'http://service.shopex.cn/openapi/api.php', '1');
INSERT INTO `mall_shop_config` VALUES ('242', '2', 'send_verify_email', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('243', '2', 'ent_id', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('244', '2', 'ent_ac', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('245', '2', 'ent_sign', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('246', '2', 'ent_email', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('301', '3', 'date_format', 'hidden', '', '', 'Y-m-d', '1');
INSERT INTO `mall_shop_config` VALUES ('302', '3', 'time_format', 'text', '', '', 'Y-m-d H:i:s', '1');
INSERT INTO `mall_shop_config` VALUES ('303', '3', 'currency_format', 'text', '', '', '￥%s元', '1');
INSERT INTO `mall_shop_config` VALUES ('304', '3', 'thumb_width', 'text', '', '', '100', '1');
INSERT INTO `mall_shop_config` VALUES ('305', '3', 'thumb_height', 'text', '', '', '100', '1');
INSERT INTO `mall_shop_config` VALUES ('306', '3', 'image_width', 'text', '', '', '230', '1');
INSERT INTO `mall_shop_config` VALUES ('307', '3', 'image_height', 'text', '', '', '230', '1');
INSERT INTO `mall_shop_config` VALUES ('312', '3', 'top_number', 'text', '', '', '10', '1');
INSERT INTO `mall_shop_config` VALUES ('313', '3', 'history_number', 'text', '', '', '5', '1');
INSERT INTO `mall_shop_config` VALUES ('314', '3', 'comments_number', 'text', '', '', '5', '1');
INSERT INTO `mall_shop_config` VALUES ('315', '3', 'bought_goods', 'text', '', '', '3', '1');
INSERT INTO `mall_shop_config` VALUES ('316', '3', 'article_number', 'text', '', '', '8', '1');
INSERT INTO `mall_shop_config` VALUES ('317', '3', 'goods_name_length', 'text', '', '', '7', '1');
INSERT INTO `mall_shop_config` VALUES ('318', '3', 'price_format', 'select', '0,1,2,3,4,5', '', '5', '1');
INSERT INTO `mall_shop_config` VALUES ('319', '3', 'page_size', 'text', '', '', '10', '1');
INSERT INTO `mall_shop_config` VALUES ('320', '3', 'sort_order_type', 'select', '0,1,2', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('321', '3', 'sort_order_method', 'select', '0,1', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('322', '3', 'show_order_type', 'select', '0,1,2', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('323', '3', 'attr_related_number', 'text', '', '', '5', '1');
INSERT INTO `mall_shop_config` VALUES ('324', '3', 'goods_gallery_number', 'text', '', '', '5', '1');
INSERT INTO `mall_shop_config` VALUES ('325', '3', 'article_title_length', 'text', '', '', '16', '1');
INSERT INTO `mall_shop_config` VALUES ('326', '3', 'name_of_region_1', 'text', '', '', '国家', '1');
INSERT INTO `mall_shop_config` VALUES ('327', '3', 'name_of_region_2', 'text', '', '', '省', '1');
INSERT INTO `mall_shop_config` VALUES ('328', '3', 'name_of_region_3', 'text', '', '', '市', '1');
INSERT INTO `mall_shop_config` VALUES ('329', '3', 'name_of_region_4', 'text', '', '', '区', '1');
INSERT INTO `mall_shop_config` VALUES ('330', '3', 'search_keywords', 'text', '', '', '', '0');
INSERT INTO `mall_shop_config` VALUES ('332', '3', 'related_goods_number', 'text', '', '', '4', '1');
INSERT INTO `mall_shop_config` VALUES ('333', '3', 'help_open', 'select', '0,1', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('334', '3', 'article_page_size', 'text', '', '', '10', '1');
INSERT INTO `mall_shop_config` VALUES ('335', '3', 'page_style', 'select', '0,1', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('336', '3', 'recommend_order', 'select', '0,1', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('337', '3', 'index_ad', 'hidden', '', '', 'sys', '1');
INSERT INTO `mall_shop_config` VALUES ('401', '4', 'can_invoice', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('402', '4', 'use_integral', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('403', '4', 'use_bonus', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('404', '4', 'use_surplus', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('405', '4', 'use_how_oos', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('406', '4', 'send_confirm_email', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('407', '4', 'send_ship_email', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('408', '4', 'send_cancel_email', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('409', '4', 'send_invalid_email', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('410', '4', 'order_pay_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('411', '4', 'order_unpay_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('412', '4', 'order_ship_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('413', '4', 'order_receive_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('414', '4', 'order_unship_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('415', '4', 'order_return_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('416', '4', 'order_invalid_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('417', '4', 'order_cancel_note', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('418', '4', 'invoice_content', 'textarea', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('419', '4', 'anonymous_buy', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('420', '4', 'min_goods_amount', 'text', '', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('421', '4', 'one_step_buy', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('422', '4', 'invoice_type', 'manual', '', '', 'a:2:{s:4:\"type\";a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:0:\"\";}s:4:\"rate\";a:3:{i:0;d:1;i:1;d:1.5;i:2;d:0;}}', '1');
INSERT INTO `mall_shop_config` VALUES ('423', '4', 'stock_dec_time', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('424', '4', 'cart_confirm', 'options', '1,2,3,4', '', '3', '0');
INSERT INTO `mall_shop_config` VALUES ('425', '4', 'send_service_email', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('426', '4', 'show_goods_in_cart', 'select', '1,2,3', '', '3', '1');
INSERT INTO `mall_shop_config` VALUES ('427', '4', 'show_attr_in_cart', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('501', '5', 'smtp_host', 'text', '', '', 'localhost', '1');
INSERT INTO `mall_shop_config` VALUES ('502', '5', 'smtp_port', 'text', '', '', '25', '1');
INSERT INTO `mall_shop_config` VALUES ('503', '5', 'smtp_user', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('504', '5', 'smtp_pass', 'password', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('505', '5', 'smtp_mail', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('506', '5', 'mail_charset', 'select', 'UTF8,GB2312,BIG5', '', 'UTF8', '1');
INSERT INTO `mall_shop_config` VALUES ('507', '5', 'mail_service', 'select', '0,1', '', '0', '0');
INSERT INTO `mall_shop_config` VALUES ('508', '5', 'smtp_ssl', 'select', '0,1', '', '0', '0');
INSERT INTO `mall_shop_config` VALUES ('601', '6', 'integrate_code', 'hidden', '', '', 'ecshop', '1');
INSERT INTO `mall_shop_config` VALUES ('602', '6', 'integrate_config', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('603', '6', 'hash_code', 'hidden', '', '', '2dc2153a1e453a31ca3ab1f474198f8d', '1');
INSERT INTO `mall_shop_config` VALUES ('604', '6', 'template', 'hidden', '', '', 'default', '1');
INSERT INTO `mall_shop_config` VALUES ('605', '6', 'install_date', 'hidden', '', '', '1514448124', '1');
INSERT INTO `mall_shop_config` VALUES ('606', '6', 'ecs_version', 'hidden', '', '', 'v2.7.3', '1');
INSERT INTO `mall_shop_config` VALUES ('607', '6', 'sms_user_name', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('608', '6', 'sms_password', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('609', '6', 'sms_auth_str', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('610', '6', 'sms_domain', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('611', '6', 'sms_count', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('612', '6', 'sms_total_money', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('613', '6', 'sms_balance', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('614', '6', 'sms_last_request', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('616', '6', 'affiliate', 'hidden', '', '', 'a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:4:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}}s:2:\"on\";i:1;}', '1');
INSERT INTO `mall_shop_config` VALUES ('617', '6', 'captcha', 'hidden', '', '', '12', '1');
INSERT INTO `mall_shop_config` VALUES ('618', '6', 'captcha_width', 'hidden', '', '', '100', '1');
INSERT INTO `mall_shop_config` VALUES ('619', '6', 'captcha_height', 'hidden', '', '', '20', '1');
INSERT INTO `mall_shop_config` VALUES ('620', '6', 'sitemap', 'hidden', '', '', 'a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}', '0');
INSERT INTO `mall_shop_config` VALUES ('621', '6', 'points_rule', 'hidden', '', '', '', '0');
INSERT INTO `mall_shop_config` VALUES ('622', '6', 'flash_theme', 'hidden', '', '', 'dynfocus', '1');
INSERT INTO `mall_shop_config` VALUES ('623', '6', 'stylename', 'hidden', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('701', '7', 'show_goodssn', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('702', '7', 'show_brand', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('703', '7', 'show_goodsweight', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('704', '7', 'show_goodsnumber', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('705', '7', 'show_addtime', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('706', '7', 'goodsattr_style', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('707', '7', 'show_marketprice', 'select', '1,0', '', '1', '1');
INSERT INTO `mall_shop_config` VALUES ('801', '8', 'sms_shop_mobile', 'text', '', '', '', '1');
INSERT INTO `mall_shop_config` VALUES ('802', '8', 'sms_order_placed', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('803', '8', 'sms_order_payed', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('804', '8', 'sms_order_shipped', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('901', '9', 'wap_config', 'select', '1,0', '', '0', '1');
INSERT INTO `mall_shop_config` VALUES ('902', '9', 'wap_logo', 'file', '', '../images/', '', '1');
INSERT INTO `mall_shop_config` VALUES ('903', '2', 'message_check', 'select', '1,0', '', '1', '1');

-- ----------------------------
-- Table structure for mall_snatch_log
-- ----------------------------
DROP TABLE IF EXISTS `mall_snatch_log`;
CREATE TABLE `mall_snatch_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `snatch_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `bid_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bid_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `snatch_id` (`snatch_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_snatch_log
-- ----------------------------
INSERT INTO `mall_snatch_log` VALUES ('1', '2', '1', '17.00', '1242142910');
INSERT INTO `mall_snatch_log` VALUES ('2', '1', '1', '50.00', '1242142935');

-- ----------------------------
-- Table structure for mall_stats
-- ----------------------------
DROP TABLE IF EXISTS `mall_stats`;
CREATE TABLE `mall_stats` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `visit_times` smallint(5) unsigned NOT NULL DEFAULT '1',
  `browser` varchar(60) NOT NULL DEFAULT '',
  `system` varchar(20) NOT NULL DEFAULT '',
  `language` varchar(20) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  `referer_domain` varchar(100) NOT NULL DEFAULT '',
  `referer_path` varchar(200) NOT NULL DEFAULT '',
  `access_url` varchar(255) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_stats
-- ----------------------------
INSERT INTO `mall_stats` VALUES ('1240294063', '0.0.0.0', '196', 'FireFox 3.0.8', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1240298833', '0.0.0.0', '198', 'FireFox 3.0.8', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1240380013', '0.0.0.0', '204', 'FireFox 3.0.8', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1240463462', '0.0.0.0', '208', 'FireFox 3.0.9', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1240800901', '0.0.0.0', '222', 'FireFox 3.0.9', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1240803254', '0.0.0.0', '227', 'FireFox 3.0.9', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1240904381', '0.0.0.0', '237', 'FireFox 3.0.9', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241419322', '0.0.0.0', '250', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/goods.php?act=list', '/shoujitiyan/goods.php');
INSERT INTO `mall_stats` VALUES ('1241420999', '0.0.0.0', '252', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241424831', '0.0.0.0', '253', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/goods.php?act=list', '/shoujitiyan/goods.php');
INSERT INTO `mall_stats` VALUES ('1241498580', '0.0.0.0', '257', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241511324', '0.0.0.0', '262', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/goods.php?act=list', '/shoujitiyan/goods.php');
INSERT INTO `mall_stats` VALUES ('1241514671', '0.0.0.0', '263', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241517726', '0.0.0.0', '265', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', '', '', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241946350', '127.0.0.1', '39', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241965138', '127.0.0.1', '41', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241966751', '127.0.0.1', '43', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1241970153', '127.0.0.1', '45', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/goods.php?act=list', '/shoujitiyan/goods.php');
INSERT INTO `mall_stats` VALUES ('1241970640', '127.0.0.1', '47', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1242105962', '0.0.0.0', '310', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/goods.php?act=list', '/shoujitiyan/goods.php');
INSERT INTO `mall_stats` VALUES ('1242140915', '127.0.0.1', '52', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1242141002', '127.0.0.1', '54', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/user.php', '/shoujitiyan/user.php');
INSERT INTO `mall_stats` VALUES ('1242141352', '127.0.0.1', '57', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/user.php?act=address_list', '/shoujitiyan/user.php');
INSERT INTO `mall_stats` VALUES ('1242141605', '127.0.0.1', '59', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/user.php', '/shoujitiyan/user.php');
INSERT INTO `mall_stats` VALUES ('1242576210', '127.0.0.1', '72', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1242576982', '127.0.0.1', '74', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/article.php?act=list&uselastfilter=1', '/shoujitiyan/article.php');
INSERT INTO `mall_stats` VALUES ('1242577205', '127.0.0.1', '76', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/article.php?act=list', '/shoujitiyan/article.php');
INSERT INTO `mall_stats` VALUES ('1242579230', '127.0.0.1', '78', 'FireFox 2.0.0.20', 'Windows XP', 'zh-cn', 'LAN', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1242973907', '0.0.0.0', '375', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1242974337', '0.0.0.0', '377', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/', '/shoujitiyan/search.php');
INSERT INTO `mall_stats` VALUES ('1242976474', '0.0.0.0', '379', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1244189098', '0.0.0.0', '418', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1244191271', '0.0.0.0', '420', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/index.php', '/shoujitiyan/article.php');
INSERT INTO `mall_stats` VALUES ('1244191479', '0.0.0.0', '422', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1244193068', '0.0.0.0', '426', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/article.php?id=33', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1244772987', '0.0.0.0', '466', 'FireFox 3.0.10', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shoujitiyan/admin/index.php?act=top', '/shoujitiyan/index.php');
INSERT INTO `mall_stats` VALUES ('1245042503', '0.0.0.0', '472', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/admin/privilege.php?act=login', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245042507', '0.0.0.0', '472', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/admin/index.php?act=top', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245046089', '0.0.0.0', '474', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/admin/index.php?act=top', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245047906', '0.0.0.0', '476', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/goods.php?id=24', '/shouji/user.php');
INSERT INTO `mall_stats` VALUES ('1245047951', '0.0.0.0', '478', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/group_buy.php?act=view&id=8', '/shouji/goods.php');
INSERT INTO `mall_stats` VALUES ('1245048514', '0.0.0.0', '480', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/flow.php?step=checkout', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245139613', '0.0.0.0', '488', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/admin/index.php?act=top', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245140082', '0.0.0.0', '490', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', '', '', '/shouji/article.php');
INSERT INTO `mall_stats` VALUES ('1245145064', '0.0.0.0', '493', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/admin/index.php?act=top', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245217308', '0.0.0.0', '498', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245219380', '0.0.0.0', '499', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/admin/index.php?act=top', '/shouji/index.php');
INSERT INTO `mall_stats` VALUES ('1245222219', '0.0.0.0', '500', 'FireFox 3.0.11', 'Windows XP', 'zh-cn', 'IANA', 'http://localhost:8080', '/shouji/admin/goods.php?act=list', '/shouji/goods.php');
INSERT INTO `mall_stats` VALUES ('1514448132', '127.0.0.1', '3', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'LAN', 'http://localhost', '/ecshop/install/index.php?lang=zh_cn&amp;step=done', '/ecshop/index.php');
INSERT INTO `mall_stats` VALUES ('1514449249', '127.0.0.1', '4', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'LAN', 'http://localhost', '/ecshop/install/index.php?lang=zh_cn&amp;step=done', '/ecshop/index.php');
INSERT INTO `mall_stats` VALUES ('1514449436', '127.0.0.1', '5', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'LAN', 'http://localhost', '/ecshop/install/index.php?lang=zh_cn&amp;step=done', '/ecshop/index.php');
INSERT INTO `mall_stats` VALUES ('1537497346', '127.0.0.1', '6', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/ecshop/index.php');

-- ----------------------------
-- Table structure for mall_suppliers
-- ----------------------------
DROP TABLE IF EXISTS `mall_suppliers`;
CREATE TABLE `mall_suppliers` (
  `suppliers_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `suppliers_name` varchar(255) DEFAULT NULL,
  `suppliers_desc` mediumtext,
  `is_check` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`suppliers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_suppliers
-- ----------------------------
INSERT INTO `mall_suppliers` VALUES ('1', '北京供货商', '北京供货商', '1');
INSERT INTO `mall_suppliers` VALUES ('2', '上海供货商', '上海供货商', '1');

-- ----------------------------
-- Table structure for mall_tag
-- ----------------------------
DROP TABLE IF EXISTS `mall_tag`;
CREATE TABLE `mall_tag` (
  `tag_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tag_words` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`tag_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `goods_id` (`goods_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_tag
-- ----------------------------
INSERT INTO `mall_tag` VALUES ('1', '0', '13', '音乐手机');
INSERT INTO `mall_tag` VALUES ('2', '0', '14', '音乐手机');
INSERT INTO `mall_tag` VALUES ('3', '0', '23', '音乐手机');
INSERT INTO `mall_tag` VALUES ('4', '0', '23', '智能手机');
INSERT INTO `mall_tag` VALUES ('5', '0', '14', '智能手机');
INSERT INTO `mall_tag` VALUES ('6', '0', '22', '智能手机');
INSERT INTO `mall_tag` VALUES ('7', '0', '31', '音乐手机');

-- ----------------------------
-- Table structure for mall_templet_key
-- ----------------------------
DROP TABLE IF EXISTS `mall_templet_key`;
CREATE TABLE `mall_templet_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tmp_key` varchar(255) NOT NULL COMMENT '模版名称',
  `sort` int(3) NOT NULL COMMENT '排序',
  `store_id` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1为正常 0为已经删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='商品展示模版表';

-- ----------------------------
-- Records of mall_templet_key
-- ----------------------------
INSERT INTO `mall_templet_key` VALUES ('1', '1', '厂商', '0', '0', '1');
INSERT INTO `mall_templet_key` VALUES ('2', '1', '操作系统', '1', '1', '1');
INSERT INTO `mall_templet_key` VALUES ('4', '1', '网络制式', '0', '0', '1');
INSERT INTO `mall_templet_key` VALUES ('5', '1', '屏幕分辨率', '0', '1', '1');
INSERT INTO `mall_templet_key` VALUES ('6', '1', '摄像头', '1', '1', '1');
INSERT INTO `mall_templet_key` VALUES ('7', '9', '品牌', '0', '1', '1');
INSERT INTO `mall_templet_key` VALUES ('8', '9', '分辨率', '0', '1', '1');
INSERT INTO `mall_templet_key` VALUES ('9', '9', '尺寸', '0', '1', '1');
INSERT INTO `mall_templet_key` VALUES ('10', '9', '屏幕材质', '0', '1', '1');
INSERT INTO `mall_templet_key` VALUES ('11', '1', '内存', '0', '1', '1');

-- ----------------------------
-- Table structure for mall_templet_value
-- ----------------------------
DROP TABLE IF EXISTS `mall_templet_value`;
CREATE TABLE `mall_templet_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(255) NOT NULL,
  `tmp_key_id` int(11) NOT NULL COMMENT 'templet_key表的主键id',
  `value` varchar(255) NOT NULL COMMENT '属性模版的值',
  `store_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1正常 0已经移除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_templet_value
-- ----------------------------
INSERT INTO `mall_templet_value` VALUES ('1', '36', '1', '诺基亚中国', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('2', '36', '4', '4G、3G', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('3', '36', '5', '1920*1080', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('4', '36', '11', '16G/32G', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('5', '36', '2', '塞班', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('6', '36', '6', '500万像素', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('7', '37', '1', '苹果厂商', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('8', '37', '4', '4G', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('9', '37', '5', '1366*768', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('10', '37', '11', '1G', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('11', '37', '2', 'ios8.0', '1', '1');
INSERT INTO `mall_templet_value` VALUES ('12', '37', '6', '800万像素', '1', '1');

-- ----------------------------
-- Table structure for mall_topic
-- ----------------------------
DROP TABLE IF EXISTS `mall_topic`;
CREATE TABLE `mall_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_topic
-- ----------------------------
INSERT INTO `mall_topic` VALUES ('1', '夏新优惠大酬宾', '<p>夏新产品优惠开始了</p>', '1241107200', '1246291200', 'O:8:\"stdClass\":1:{s:7:\"default\";a:1:{i:0;s:11:\"夏新N7|17\";}}', '', '', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for mall_unit
-- ----------------------------
DROP TABLE IF EXISTS `mall_unit`;
CREATE TABLE `mall_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(255) NOT NULL,
  `store_id` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_unit
-- ----------------------------
INSERT INTO `mall_unit` VALUES ('1', '件', '0', '1');
INSERT INTO `mall_unit` VALUES ('2', '部', '0', '1');
INSERT INTO `mall_unit` VALUES ('3', '双', '0', '0');

-- ----------------------------
-- Table structure for mall_user_account
-- ----------------------------
DROP TABLE IF EXISTS `mall_user_account`;
CREATE TABLE `mall_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `is_paid` (`is_paid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_user_account
-- ----------------------------

-- ----------------------------
-- Table structure for mall_user_address
-- ----------------------------
DROP TABLE IF EXISTS `mall_user_address`;
CREATE TABLE `mall_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_user_address
-- ----------------------------
INSERT INTO `mall_user_address` VALUES ('1', '', '1', '刘先生', 'ecshop@ecshop.com', '1', '2', '52', '502', '海兴大厦', '', '010-25851234', '13986765412', '', '');
INSERT INTO `mall_user_address` VALUES ('2', '', '3', '叶先生', 'text@ecshop.com', '1', '2', '52', '510', '通州区旗舰凯旋小区', '', '13588104710', '', '', '');

-- ----------------------------
-- Table structure for mall_user_bonus
-- ----------------------------
DROP TABLE IF EXISTS `mall_user_bonus`;
CREATE TABLE `mall_user_bonus` (
  `bonus_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `emailed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bonus_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_user_bonus
-- ----------------------------
INSERT INTO `mall_user_bonus` VALUES ('1', '3', '0', '1', '1242142681', '4', '0');
INSERT INTO `mall_user_bonus` VALUES ('2', '4', '1000003379', '1', '1242976699', '14', '0');
INSERT INTO `mall_user_bonus` VALUES ('3', '4', '1000018450', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('4', '4', '1000023774', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('5', '4', '1000039394', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('6', '4', '1000049305', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('7', '4', '1000052248', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('8', '4', '1000061542', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('9', '4', '1000070278', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('10', '4', '1000080588', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('11', '4', '1000091405', '0', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('24', '3', '0', '1', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('25', '3', '0', '1', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('26', '3', '0', '1', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('27', '3', '0', '1', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('28', '3', '0', '1', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('29', '3', '0', '1', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('30', '3', '0', '1', '0', '0', '0');
INSERT INTO `mall_user_bonus` VALUES ('31', '3', '0', '1', '0', '0', '0');

-- ----------------------------
-- Table structure for mall_user_feed
-- ----------------------------
DROP TABLE IF EXISTS `mall_user_feed`;
CREATE TABLE `mall_user_feed` (
  `feed_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `value_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `feed_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_feed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`feed_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_user_feed
-- ----------------------------

-- ----------------------------
-- Table structure for mall_users
-- ----------------------------
DROP TABLE IF EXISTS `mall_users`;
CREATE TABLE `mall_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`) USING BTREE,
  KEY `email` (`email`) USING BTREE,
  KEY `parent_id` (`parent_id`) USING BTREE,
  KEY `flag` (`flag`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_users
-- ----------------------------
INSERT INTO `mall_users` VALUES ('1', 'ecshop@ecshop.com', 'ecshop', '554fcae493e564ee0dc75bdf2ebf94ca', '', '', '0', '1960-03-03', '0.00', '0.00', '98388', '15390', '1', '0', '1245048540', '0000-00-00 00:00:00', '0.0.0.0', '11', '0', '0', null, '0', '0', '0', '', '', '', '', '', '', '0', '0.00', null, null);
INSERT INTO `mall_users` VALUES ('2', 'vip@ecshop.com', 'vip', '232059cb5361a9336ccf1b8c2ba7657a', '', '', '0', '1949-01-01', '0.00', '0.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '', '0', '0', '0', null, '0', '0', '0', '', '', '', '', '', '', '0', '0.00', null, null);
INSERT INTO `mall_users` VALUES ('3', 'text@ecshop.com', 'text', '1cb251ec0d568de6a929b520c4aed8d1', '', '', '0', '1949-01-01', '0.00', '0.00', '0', '0', '2', '0', '1242973574', '0000-00-00 00:00:00', '0.0.0.0', '2', '0', '0', null, '0', '0', '0', '', '', '', '', '', '', '0', '0.00', null, null);
INSERT INTO `mall_users` VALUES ('5', 'zuanshi@ecshop.com', 'zuanshi', '815a71fb334412e7ba4595741c5a111d', '', '', '0', '1949-01-01', '0.00', '10000.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '', '0', '3', '0', null, '0', '0', '0', '', '', '', '', '', '', '0', '0.00', null, null);
