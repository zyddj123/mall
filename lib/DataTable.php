<?php


/**
 * DataTable.php.
 */
/**
 * datatable后台处理程序.
 *
 * @author B.I.T.
 * @copyright Copyright (c) 2018-2019, B.I.T.
 * @license
 *
 * @see 新增left join
 *
 * @version v.2.1
 */
class DataTable
{
    /**
     * 数据库对象
     *
     * @var objectc
     */
    public $_db;
    /**
     * 表格重绘次数.
     *
     * @var int
     */
    protected $_draw;
    /**
     * 排序的是哪行.
     *
     * @var int
     */
    protected $_order_column; //排序的行
    /**
     * 排序方式
     * asc desc.
     *
     * @var string
     */
    protected $_order_dir; //排序方式 asc  desc
    /**
     * 查询的数据.
     *
     * @var string
     */
    protected $_search = ''; //查询的字符串
    /**
     * 查询开始的位置.
     *
     * @var int
     */
    protected $_start; //开始的位置
    /**
     * 每页显示的条目数.
     *
     * @var int
     */
    protected $_length; //查询的长度
    /**
     * 过滤后的条目数量.
     *
     * @var integer
     */
    protected $_recordsFiltered = 0; //过滤后的条目数量
    /**
     * 总的条目数量.
     *
     * @var integer
     */
    protected $_recordsTotal = 0; //总的条目数量
    /**
     * 返回的数据 没用到.
     *
     * @var [type]
     */
    protected $_return; //没用到
    /**
     * 存放构造函数的第二个参数.
     *
     * @var [type]
     */
    protected $_info; //存放构造函数的第二个参数
    /**
     * 总条目的where字段.
     *
     * @var string
     */
    protected $_andSql = ''; //用来存放总条目的where字段

    /**
     * 构造函数 处理datatables发送的数据，用户自定义条件，.
     *
     * @param array  $dataTableGet dataTable前台传递过来的数组
     * @param array  $info         构造好的数组结构如下
     *                             example array(   //表示 select ID AS sum,ID,USERNMAE   其中 sum用来统计数据的总条数
        *                             "select"=array(
        *                                  "ID"=>"sum",
        *                                  "0"=>'ID',
        *                                  "1"=>"USERNAME",
        *                             )，
        *                             "sum"=>"ID",       //必须 用来查询总的条数  值必须是唯一的
        *                             "table"=>"t_o2o_user",
        *                             "order"=>array(   //前台会发送过来根据哪一列排序  接收过来的值就是 键值，对应到数据表中的字段就是值，前台有几个列能够排序这里就需要有几个对应的键值队
        *                                  "0"=>"ID",
        *                                  "2"=>"USERNAME",
        *                             ),
        *                             "where"=>array(      //and和or可以同时调用  但是or是用来做查询的  and则是初始数据的查询条件
        *                                  "and"=>array(      //表示会查询state=1 and level=2 and (a=1 or a=2) 的数据
        *                                      "state"=>'1',
        *                                      "level"=>"2",
        *                                      "a"=>[1,2]
        *                                  ),
        *                                  "or"=>array("ID","USERNAME"),   //用户查询的时候回根据这里的参数作为查询的列  例如 当search=root时   就会查询 ID like %root% or USERNAME like %root%
        *                                  "or2"=>[ //这里面的会用or连接 几乎很少用 例如下面的数组会变成: a=1 or a=2 or b=2
        *                                          a=>[1,2],
        *                                          b=>[2]
        *                                  ]
        *                             ),
        *                             "join"=>array(
        *                                   'class'=>array('student.class_id','class.id'),
        *                                   'sex'=>array('student.class_id','sex.id')
        *                             )
     *                             )
     * @param string $databaseName 数据库的名字 默认是空 用来创建数据库对象
     *
     * @return object this
     */
    public function __construct($dataTableGet, $info = array(), $db = '')
    {
        self::_init($dataTableGet);
        $this->_db = $db;
        // self::_getDb($databaseName);
        $this->_info = $info;
    }

    /**
     * 初始化参数,检查数据格式.
     *
     * @param array $data datatables发送过来的数据
     */
    protected function _init($data)
    {
        if (isset($data)) {
            $this->_draw = isset($data['draw']) ? $data['draw'] : null;
            $this->_length = isset($data['length']) ? intval($data['length']) : null;
            $this->_start = isset($data['start']) ? intval($data['start']) : null;
            $this->_order_column = isset($data['order']['0']['column']) ? intval($data['order']['0']['column']) : null;
            $this->_order_dir = isset($data['order']['0']['dir']) ? $data['order']['0']['dir'] : null;
            $this->_search = isset($data['search']['value']) ? $data['search']['value'] : null;
        }
    }

    /**
     * 初始化数据库对象
     *
     * @param string $name 数据库名称
     *
     * @return void||bool 失败返回false 成功返回true
     */
    protected function _getDb($name)
    {
        try {
            $db = GetDB($name);
            if ($db) {
                $this->_db = $db;

                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * 执行sql语句.
     *
     * @param string $sql sql语句
     *
     * @return array 执行的结果
     */
    protected function _getAll($sql)
    {
        return $this->_db->GetAll($sql);
    }

    /**
     * 输出datatables需要的数据格式，还需要打成json的格式才行.
     *
     * @param bool $debug true 会输出一些调试信息 默认false
     *
     * @return array atatables需要的数据格式
     */
    public function output($debug = false)
    {
        $data = $this->_info;
        $selectSql = '';
        $joinSql = '';
        $orderSql = '';
        $whereSql = '';
        $limitSql = '';
        $sumSql = '';
        if (isset($data['select']) && !empty($data['select'])) {
            $selectSql = self::_getSelectSql($data['select']);
        } else {
            $selectSql = '*';
        }
        if (isset($data['join']) && !empty($data['join'])) {
            $joinSql = self::_getJoinSql($data['join']);
        }
        if (isset($data['order']) && !empty($data['order'])) {
            $orderSql = self::_getOrderSql($data['order']);
        }
        if (isset($data['where']) && !empty($data['where'])) {
            $whereSql = self::_getWhereSql($data['where']);
        }
        if (isset($this->_start) && isset($this->_length)) {
            $limitSql = self::_getLimitSql();
        }
        if (isset($data['sum']) && !empty($data['sum'])) {
            $sumSql = self::_getRecordsTotal($data['sum']);
        }
        if (!empty($this->_search)) {
        }
        

        $sql = 'SELECT '.$selectSql." FROM `{$data['table']}` ". $joinSql .$whereSql.' '.$orderSql.' '.$limitSql;
        // var_dump($sql);die;
        $info = $this->_getAll($sql);
        $sql1 = 'SELECT '.$sumSql." FROM {$data['table']} ".$whereSql;
        @$this->_recordsTotal = $this->_getAll($sql1)['0']['sum'];
        $sql2 = 'SELECT '.$sumSql." FROM {$data['table']} ".$whereSql;
        @$this->_recordsFiltered = $this->_getAll($sql2)['0']['sum'];
        if ($debug) {
            echo $sql."\r\n";
            echo $sql1."\r\n";
        }

        return array(
            'draw' => intval($this->_draw),
            'recordsTotal' => intval($this->_recordsTotal),
            'recordsFiltered' => intval($this->_recordsFiltered),
            'data' => $info,
        );
    }

    /**
     * 将一个自定义的数据数组打包成datatables需要的数据结构.
     *
     * @param array $data 自己定义的数组需要包含多条数据
     *
     * @return array 包装上其他的条件
     */
    public function outputArray($data)
    {
        if (!is_array($data)) {
            return false;
        }
        $data = array_slice($data, $this->_start, $this->_length);

        return array(
            'draw' => intval($this->_draw),
            'recordsTotal' => intval($this->_recordsTotal),
            'recordsFiltered' => intval($this->_recordsFiltered),
            'data' => $data,
        );
    }

    /**
     * 当前台需要排序的时候会根据需要排序的列对应的表中的值排序
     * 构建排序的sql.
     *
     * @param array $data 构造函数第二个参数order部分
     *
     * @return string 排序部分的sql语句
     */
    protected function _getOrderSql($data)
    {
        $sql = '';
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                if ($key == $this->_order_column) {
                    $sql = "order by {$value} ".$this->_order_dir;
                    break;
                }
            }
        }

        return $sql;
    }

    /**
     * 构建join部分的sql语句.
     *
     * @param array $data 构造函数第二个参数join部分
     *
     * @return string join的sql语句
     */
    //$data = array(
    //          'class'=>array($this->table.'class_id','class.id'),
    //          'sex'=>array($this->table.'sex_id','sex.id'));
    //      );
    protected function _getJoinSql($data)
    {
        $tmp = array();
        foreach ($data as $key => $value) {
            array_push($tmp, " LEFT JOIN {$key} ON {$value[0]} = {$value[1]} ");
        }
        return implode(' ', $tmp);
    }

    /**
     * 构建where部分的sql语句.
     *
     * @param array $data 构造函数第二个参数where部分
     *
     * @return string where的sql语句
     */
    protected function _getWhereSql($data)
    {
        $and = isset($data['and']) && !empty($data['and']) ? $data['and'] : null;
        $or = isset($data['or']) && !empty($data['or']) ? $data['or'] : null;
        $or2 = isset($data['or2']) && !empty($data['or2']) ? $data['or2'] : null;

        $andSql = '';
        $orsql = '';
        $or2Sql = '';
        $whereSql = '';
        if (!is_null($and)) {
            $andSql = self::_processWhereParams($and);
            $this->_andSql = $andSql;
        }
        if (!is_null($or2)) {
            $field_list = [];
            $o2 = $data['or2'];
            $or2Sql = $this->_processWhereParamsOr($o2);
        }
        if (!is_null($or) && !empty($this->_search)) {
            $orSql = self::_processWhereParams($or, false);
        }
        $flag = 0;
        //四种情况
        if (empty($andSql) && empty($orSql)) {
            $whereSql = '';
            $flag = 1;
        } elseif (!empty($andSql) && empty($orSql)) {
            $whereSql = 'WHERE '.$andSql;
            $flag = 2;
        } elseif (empty($andSql) && !empty($orSql)) {
            $whereSql = 'WHERE '.$orSql;
            $flag = 2;
        } else {
            $whereSql = 'WHERE '.$andSql.' AND '.'('.$orSql.')';
            $flag = 2;
        }
        if (!empty($or2Sql)) {
            if (1 == $flag) {
                $whereSql = 'WHERE '.$or2Sql;
            }
            if (2 == $flag) {
                $whereSql .= ' AND '.$or2Sql;
            }
        }

        return $whereSql;
    }

    /**
     * 构建select部分的sql语句.
     *
     * @param array $data 构造函数第二个参数select部分
     *
     * @return string select部分的语句
     */
    protected function _getSelectSql($data)
    {
        $list = array();
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                array_push($list, $value);
            } else {
                array_push($list, $key.' AS '.$value);
            }
        }
        if (!empty($list)) {
            $selectSql = implode(',', $list);
        } else {
            $selectSql = '*';
        }

        return $selectSql;
    }

    /**
     * 查询记录条数的语句.
     *
     * @param string $data 查询总数根据的列名  一般是id
     *
     * @return string select内容语句
     */
    protected function _getSumSql($data)
    {
        return $data.' AS sum ';
    }

    /**
     * 查询条目的总数量.
     *
     * @param string $sum 列名，将根据这列去查询总数
     *
     * @return string select部分的sql语句
     */
    protected function _getRecordsTotal($sum)
    {
        return $sql = "count($sum) AS sum";
    }

    /**
     * 构建limit部分的语句.
     *
     * @return string limit部分的语句
     */
    protected function _getLimitSql()
    {
        $limitSql = '';
        $limitSql = 'LIMIT '.$this->_start.', '.$this->_length;

        return $limitSql;
    }

    /**
     * 预处理where语句参数 ，将多条where语句用or或者and连接起来
     *
     * @param data array 待处理的参数
     * @param is_or 查询条件是and还是or  默认是and
     * @return  string 处理完成的字符串
     */
    protected function _processWhereParams($data, $is_or = true)
    {
        $field_list = array();
        if ($is_or) {
            foreach ($data as $field_name => $field_value) {
                if(is_array($field_value)){
                    $data_list  = array();
                    foreach ($field_value as $key => $value) {
                        array_push($data_list, $field_name . '=' . "'{$value}'");
                    }
                    array_push($field_list, "(".implode(' OR ', $data_list).")");
                }else{
                    array_push($field_list, $field_name . '=' . "'{$field_value}'");
                }
            }
            return implode(' AND ', $field_list);
        } else {
            foreach ($data as $field_name => $field_value) {
                array_push($field_list, $field_value . ' LIKE ' . "'" . '%' . $this->_search . '%' . "'");
            }
            return implode(' OR ', $field_list);
        }
    }

    protected function _processWhereParamsOr($data)
    {
        $field_list=[];
        foreach ($data as $field_name => $field_value) {
            if (is_array($field_value)) {
                foreach ($field_value as $v) {
                    array_push($field_list, $field_name.'='."'{$v}'");
                }
            } else {
                array_push($field_list, $field_name.'='."'{$field_value}'");
            }
        }

        return "(".implode(' OR ', $field_list).")";
    }
}
