<?php
/**
 * 分页虚类
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
abstract class CO_Pagination_Base extends CO_DB_Adapter{

	/**
	 * 每页显示条目
	 *
	 * @var int
	 */
	public $ppc = 20;

	/**
	 * 总条目数
	 *
	 * @var int
	 */
	public $count = 0;

	/**
	 * 总页码数
	 *
	 * @var int
	 */
	public $page = 0;

	/**
	 * 当前页码数
	 * @var int
	 */
	public $current= 0;

	/**
	 * 请求结果
	 *
	 * @var mixed
	 */
	protected $_query = false;

	/**
	 * 数据库表名称
	 *
	 * @var string
	 */
	protected $_table = '';

	/**
	 * 查询条件
	 *
	 * @var string
	 */
	protected $_where = '';

	/**
	 * 查询条件数值
	 *
	 * @var array
	 */
	protected $_where_value = array();

	/**
	 * 选择字段
	 *
	 * @var array
	 */
	protected $_select_field = array();

	/**
	 * join条件
	 *
	 * @var string
	 */
	protected $_join = '';

	/**
	 * order
	 *
	 * @var string
	 */
	protected $_order = '';

	/**
	 * 设置table
	 *
	 * @param	string $table 表名
	 * @return	$this
	 */
	public function table($table){
		$this->_table = $table;
		return $this;
	}

	/**
	 * 设置查询条件
	 *
	 * @param	string $where 查询条件
	 * @param	array $value 查询数据
	 * @return	$this
	 */
	public function where($where, $value){
		$this->_where = $where;
		$this->_where_value = $value;
		return $this;
	}

	/**
	 * 设置join
	 *
	 * @param	array $tables join表列表
	 * @param	array $on_fields_a join表字段
	 * @param	array $on_fields_b 主表字段
	 * @return	$this
	 */
	public function join($tables, $on_fields_a, $on_fields_b){
		if($this->_table != ''){
			if(is_string($tables) && is_string($on_fields_a) && is_string($on_fields_b) && $tables != '' && $on_fields_a != '' && $on_fields_b != ''){
				$this->_join = ' JOIN `'.$tables.'` ON `'.$this->_table.'`.`'.$on_fields_b.'` = `'.$tables.'`.`'.$on_fields_a.'`';
			}elseif(is_array($tables) && is_array($on_fields_a) && is_array($on_fields_b) && count($tables) == count($on_fields_a) && count($tables) == count($on_fields_b) && count($tables) != 0){
				foreach($tables as $k => $t){
					$this->_join .= ' JOIN `'.$t.'` ON `'.$this->_table.'`.`'.$on_fields_b[$k].'` = `'.$t.'`.`'.$on_fields_a[$k].'`';
				}
			}
		}
		return $this;
	}

	/**
	 * 设置筛选字段
	 *
	 * @param	array $fields 字段列表
	 * @return	$this
	 */
	public function select($fields){
		$this->_select_field = $fields;
		return $this;
	}

	/**
	 * 设置排序
	 *
	 * @param	string $order 排序
	 * @return	$this
	 */
	public function order($order){
		$this->_order = $order;
		return $this;
	}

	/**
	 * 获取总条目数
	 *
	 * @return	int
	 */
	public function count(){
		if(is_null($db = static::GetDb())) return 0;
		$query = $db->query('SELECT COUNT(*) AS `COUNT` '.$this->_processPartOfSql(), $this->_where_value);
		if($query === false){
			$this->count = 0;
			$this->page = 0;
		}else{
			$this->count = intval($query[0]['COUNT']);
			if($this->count % $this->ppc >0){
				$this->page=(int)($this->count/$this->ppc)+1;
			}else{
				$this->page=(int)($this->count/$this->ppc);
			}
		}
		return $this->count;
	}

	/**
	 * 指定访问页码数
	 *
	 * @param	int $index 页码数
	 * @return	$this
	 */
	public function goPage($index){
		if(is_null($db = static::GetDb())) return $this;
		if($index <=　0) return $this;
		//不得超过最大页码
		if($index > $this->page) return $this;
		//计算起始和结束页码
		$start = ($index - 1) * $this->ppc;

		$sql_base = $this->_processPartOfSql();
		$sql = 'SELECT ';
		if(is_array($this->_select_field) && count($this->_select_field)>0){
			$sql .= implode(',', $this->_select_field);
		}else{
			$sql .= '*';
		}
		$sql .= ' '.$sql_base;
		if(is_array($this->_order) && count($this->_order)){
			$sql .= ' ORDER BY '.implode(',', $this->_order);
		}elseif(is_string($this->_order) && $this->_order != ''){
			$sql .= ' ORDER BY '.$this->_order;
		}
		$sql .= ' LIMIT '.$start.','.$this->ppc;
		$this->_query = $db->query($sql, $this->_where_value);
		if($this->_query !== false){
			$this->current = $index;
		}
		return $this;
	}

	/**
	 * 获取请求结果
	 *
	 * @return	mixed 请求query结果
	 */
	public function getInfo(){
		return $this->_query;
	}

	/**
	 * 下一页
	 *
	 * @return	$this
	 */
	public function next(){
		return $this->goPage($this->current + 1);
	}

	/**
	 * 上一页
	 *
	 * @return	$this
	 */
	public function prev(){
		return $this->goPage($this->current - 1);
	}

	/**
	 * 尾页
	 *
	 * @return	$this
	 */
	public function last(){
		return $this->goPage($this->page);
	}

	/**
	 * 首页
	 *
	 * @return	$this
	 */
	public function first(){
		return $this->goPage(1);
	}
	
	/**
	 * 生成部分sql语句
	 * 除去select、order、limit部分的sql
	 *
	 * @return	string
	 */
	protected function _processPartOfSql(){
		$sql = 'FROM `'.$this->_table.'`';
		if($this->_join != '') $sql .= ' '.$this->_join;
		if($this->_where != '') $sql .= ' WHERE '.$this->_where;
		return $sql;
	}
}

class PaginationException extends Exception{

}
?>