<?php 
/**
* 处理datatables传递的数据
*/
class DataTable 
{
  protected $_db;
  protected $_draw ;
  protected $_order_column ; //排序的行
  protected $_order_dir ;    //排序方式 asc  desc
  protected $_search='' ;       //查询的字符串
  protected $_start ;        //开始的位置
  protected $_length ;       //查询的长度
  protected $_recordsFiltered=0 ;  //过滤后的条目数量
  protected $_recordsTotal=0 ;     //总的条目数量
  protected $_return;           //没用到
  protected $_info;             //存放构造函数的第二个参数
  protected $_andSql='';      //用来存放总条目的where字段
  /**
   * 构造函数
   * @param [type] $dataTableGet [dataTable前台传递过来的数组]
   * @param [type] $info         [构造好的数组]
   * example array(   //表示 select ID AS sum,ID,USERNMAE   其中 sum用来统计数据的总条数
   *   "select"=array(
   *     "ID"=>"sum",
   *     "0"=>'ID',
   *     "1"=>"USERNAME",
   *   )，
   *   "sum"=>"ID",       //必须 用来查询总的条数  值必须是唯一的 
   *   "table"=>"t_o2o_user",
   *   "order"=>array(   //前台会发送过来根据哪一列排序  接收过来的值就是 键值，对应到数据表中的字段就是值，前台有几个列能够排序这里就需要有几个对应的键值队 
   *     "0"=>"ID",
   *     "2"=>"USERNAME",
   *   ),
   *   "where"=>array(      //and和or可以同时调用  但是or是用来做查询的  and则是初始数据的查询条件
   *     "and"=>array(      //表示会查询state=1 and level=2 的数据
   *       "state"=>'1',
   *       "level"=>"2",
   *     ),
   *     "or"=>array("ID","USERNAME"),   //用户查询的时候回根据这里的参数作为查询的列  例如 当search=root时   就会查询 ID like %root% or USERNAME like %root%
   *   )
   * )
   * @param string $[name] [数据库的名字] 默认是
   */
  function __construct($dataTableGet,$info,$databaseName=""){
    self::_init($dataTableGet);
    self::_getDb($databaseName);
    $this->_info=$info;
    // var_dump("111");
  }
  /**
   * 初始化参数
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  protected function _init($data){
    if(isset($data)){
      $this->_draw=isset($data['draw'])?$data['draw']:null;
      $this->_length=isset($data['length'])?intval($data['length']):null;
      $this->_start=isset($data['start'])?intval($data['start']):null;
      $this->_order_column=isset($data['order']['0']['column'])?intval($data['order']['0']['column']):null;
      $this->_order_dir=isset($data['order']['0']['dir'])?$data['order']['0']['dir']:null;
      $this->_search=isset($data['search']['value'])?$data['search']['value']:null;
    }
  }

  /**
   * 获取数据库连接
   * 失败的处理方式先保留
   */
  protected function _getDb($name){
    try {
      $db=GetDB($name);
      if($db){
        $this->_db=$db;
      }else{
        return false;
      }
    } catch (Exception $e) {
      return false;
    }
  }
  /**
   * 查询数据库
   * 所有的查询都通过这个函数以后该只需要更改这一个函数就能更改所有的数据库操作
   */
  protected function _getAll($sql){
    return $this->_db->GetAll($sql);
  }
  
  /**
   * 输出datatables需要的数据格式
   * @param  [type] $data []
   * @return [type]       [description]
   */
  public function output($debug=false){
    $data=$this->_info;
    $selectSql='';
    $orderSql='';
    $whereSql="";
    $limitSql='';
    $sumSql='';
    if(isset($data['select'])&&!empty($data['select'])){
      $selectSql=self::_getSelectSql($data['select']);
    }else{
      $selectSql="*";
    }
    if(isset($data['order'])&&!empty($data['order'])){
      $orderSql=self::_getOrderSql($data['order']);
    }
    if(isset($data['where'])&&!empty($data['where'])){
      $whereSql=self::_getWhereSql($data['where']);
    }
    if(isset($this->_start)&&isset($this->_length)){
      $limitSql=self::_getLimitSql();
    }
    if(isset($data['sum'])&&!empty($data['sum'])){
      $sumSql=self::_getRecordsTotal($data['sum']);
    }
    if(!empty($this->_search)){

    }

    $sql="SELECT ".$selectSql." FROM `{$data['table']}` ".$whereSql." ".$orderSql." ".$limitSql;
    // $log=new Log('datatables');
    // $log->write($sql);
    $info=$this->_getAll($sql);
    $sql1="SELECT ".$sumSql." FROM {$data['table']} ".$whereSql;
    @$this->_recordsTotal=$this->_getAll($sql1)['0']['sum'];
    $sql2="SELECT ".$sumSql." FROM {$data['table']} ".$whereSql;
    @$this->_recordsFiltered=$this->_getAll($sql2)['0']['sum'];
    if($debug){
      echo $sql."\r\n";
      echo $sql1."\r\n";

    }
    return array(
      "draw"=>intval($this->_draw),
      "recordsTotal"=>intval($this->_recordsTotal),
      "recordsFiltered"=>intval($this->_recordsFiltered),
      "data"=>$info,
      );
  }
  /**
   * 将处理好的数组打包层datatables需要的数据结构
   * @param  [type] $data [数组,]
   * @return [type]       [datatables需要的数据结构]
   */
  public function outputArray($data){
    if(!is_array($data)){
      return false;
    }
    $data=array_slice($data, $this->_start,$this->_length);
    return array(
      "draw"=>intval($this->_draw),
      "recordsTotal"=>intval($this->_recordsTotal),
      "recordsFiltered"=>intval($this->_recordsFiltered),
      "data"=>$data,
      );
  }

  /**
   * 当前台需要排序的时候会根据需要排序的列对应的表中的值排序
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  protected function _getOrderSql($data){
    $sql="";
    if(is_array($data)){
      foreach ($data as $key => $value) {
        if($key==$this->_order_column){
          $sql="order by `{$value}` ".$this->_order_dir;
          break;
        }
      }
    }
    return $sql;
  }
  /**
   * [_getWhereSql description]
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  protected function _getWhereSql($data){
    $and=isset($data['and'])&&!empty($data['and'])?$data['and']:null;
    $or=isset($data['or'])&&!empty($data['or'])?$data['or']:null;
    $andSql='';
    $orsql='';
    $whereSql='';
    if(!is_null($and)){
      $andSql=self::_processWhereParams($and);
      $this->_andSql=$andSql;
    }
    if(!is_null($or)&&!empty($this->_search)){
      $orSql=self::_processWhereParams($or,false);
    }

    //四种情况
    if(empty($andSql)&&empty($orSql)){
      $whereSql='';
    }else if(!empty($andSql)&&empty($orSql)){
      $whereSql='WHERE '.$andSql;
    }else if(empty($andSql)&&!empty($orSql)){
      $whereSql='WHERE '.$orSql;
    }else{
      $whereSql='WHERE '.$andSql." AND ".'('.$orSql.')';
    }
    return $whereSql;
  }
  /**
   * 获取需要查询的数据内容
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  protected function _getSelectSql($data){
    $list=array();
    foreach ($data as $key => $value) {
      if(is_numeric($key)){
        array_push($list,'`'.$value.'`');
      }else{
        array_push($list,$key.' AS '.$value);
      }
    }
    if(!empty($list)){
      $selectSql=implode(',',$list);
    }else{
      $selectSql="*";
    }
    return $selectSql;
  }
  /**
   * 查询记录条数的语句
   * @param  [type] $data [sum的值]
   * @return [type]       [语句]
   */
  protected function _getSumSql($data){
    return $data.' AS sum ';
  }
  /**
   *查询条目数量
   * @param  [type] $where [description]
   * @return [type]        [description]
   */
  protected function _getRecordsTotal($sum){
    return $sql="count($sum) AS sum";
  }

  /**
   * 根据分页情况查询数据
   * @return [type] [limit限制语句]
   */
  protected function _getLimitSql(){
    $limitSql='';
    $limitSql="LIMIT ".$this->_start.', '.$this->_length;
    return $limitSql;
  }

  /**
   * 预处理where语句参数
   * @param data array 待处理的参数
   * @param is_or 查询条件是and还是or  默认是and
   * @return  string 处理完成的字符串
   */
  protected function _processWhereParams($data,$is_or=true){
    $field_list = array();
    $data_list = array();
    if($is_or){
      foreach($data as $field_name => $field_value){
        array_push($field_list, '`'.$field_name.'`='."'{$field_value}'");
      }
      return implode(' AND ', $field_list);
    }else{
      foreach($data as $field_name => $field_value){
        array_push($field_list, '`'.$field_value.'` LIKE '."'".'%'.$this->_search.'%'."'");
      }
      return implode(' OR ', $field_list);
    }
  }


}
 ?>