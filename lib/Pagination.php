<?php
/**
 * 数据表分页类
 * 
 * CO框架核心
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class Pagination extends CO_Pagination_Base{
	
	/**
	 * 构造函数
	 * 
	 * @param	string $table 表名
	 * @param	array $where 查询条件
	 * @param	string $order 排序条件
	 * @param	array $settings 设置参数
	 * @param	string $join join表条件
	 */
	function __construct($table, $where=array(), $order='', $settings=array(), $join=''){
		$this->table($table);
		if(isset($where['sql'])) $this->where($where['sql'], isset($where['value'])?$where['value']:array());
		$this->order($order);
		$this->_join = $join;
		if(isset($settings['ppc']) && is_numeric($settings['ppc'])) $this->ppc = intval($settings['ppc']);
		if(count($settings['selectfields'])>0) $this->select($settings['selectfields']);
	}
}
?>