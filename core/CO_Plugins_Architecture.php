<?php
/**
 * CO插件结构接口
 * 
 * CO框架核心
 * 
 * 开发基于CO框架的插件Plugins都必须实现此接口
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.0
 */
interface CO_Plugins_Architecture{
		
	/**
	 * 创建插件实例对象，并加载
	 * 
	 * @param	array $params 参数
	 * @param	string $app_name 应用名称
	 * @return	object
	 */
	static function LoadByCO($params, $app_name);
	
	/**
	 * 通过CO_Plugins加载类
	 *
	 * @param	string $app_name 应用名称
	 * @return	Class 当前的类
	 */
	static function LoadClassByCO($app_name);
}
?>