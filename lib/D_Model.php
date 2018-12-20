<?php
/**
 * D_Model.php.
 */
/**
 * 模型层基类.
 *
 * @author B.I.T.
 * @copyright Copyright (c) 2018-2019, B.I.T.
 * @license
 *
 * @see 新增left join 和 pagination分页方法（配合pagination插件使用）
 *
 * @version v.3.0
 */

//控制器调用pagination方法
// public function ajax_pagination_data()
// {
//     $user = new User($this->getDb());   //继承D_Model基类的子类对象
//     $name = $this->input->post('name'); //要搜索的字符串
//     if($this->input->post('p')){
//         $p=$this->input->post('p');// 当前页码数 默认第1页
//     }else{
//         $p=1;
//     }
//     $ppc=10;// 每页显示多少条
//     $arrRet=array(); //返回给前台ajax的数组

//     $data['select'] = array('student.id','name','class_id','student.status','class_name','sex');
//     $data['order'] = array('student.id'=>'ASC');
//     $data['where']['and'] = array('student.status'=>1,'class_id'=>array(1,2));
//     $data['where']['or'] = array('student.id','name');
//     // $data['where']['or2'] = array('mm'=>1,'nn'=>array(1,2));
//     $data['search'] = $name;
//     $data['page'] = $p;
//     $data['ppc'] = $ppc;
//     $data['join'] = array('class'=>array('student.class_id','class.id'),'sex'=>array('student.sex_id','sex.id'));

//     $data = $user->pagination($data);
//     $count = $data['data']['count'];
//     // var_dump($data);die;
//     $arrRet['data']=$data['data']['data'];//数据
//     $arrRet['p']=$p;//当前页
//     $arrRet['ppc']=$ppc;    //每页显示数
//     $arrRet['all']=$count;//总条数
//     $arrRet['entries']=ceil($count/$ppc);//总页数
//     echo json_encode($arrRet);
// }



class D_Model
{
    protected $table = '';
    protected $formData = array();
    public $key='';

    public function __construct($db)
    {
        $this->db = $db;
        $this->init();
    }

    public function _add($data)
    {
        $data = $this->_parseData($data);
        if ($data) {
            return $this->db->insert($this->table, $data);
        }
        return false;

    }

    public function _select($where=array(), $param=array())
    {
        $where = $this->_parseData($where);
        return $this->db->select($this->table, $where, $param);

    }

    public function _select_or($_sql)
    {
        $sql = "SELECT * FROM ". $this->table . " WHERE " . $_sql;
        return $this->db->GetAll($sql);
    }

    public function _delete($where, $param=array())
    {
        $where = $this->_parseData($where);
        if ($where) {
            return $this->db->delete($this->table, $where,$param);
        }
        return false;

    }
    public function _update($where,$data, $param=array())
    {
        $data = $this->_parseData($data);
        if ($where) {
            return $this->db->update($this->table, $where, $data,$param);
        }
        return false;
    }

    /**
     * 过滤一下字段.
     *
     * @param [type] $data
     */
    protected function _parseData($data)
    {
        $ret = array();
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                if (in_array($key, $this->formData)) {
                    $ret[$key] = $value;
                }
            }

            return $ret;
        } else {
            return false;
        }
    }

    /**
     * 分页查询,可联合查询,也可以创建视图
     *
     * @param array $param['where']  包含and 和or 和 or2。 and用来作为查询条件，or作为搜索like关键字,or2用来作为不同多字段搜索（很少用到）
     * 
     *              如果有join 重复的字段要加上表名.字段名
     *              
     *              $param['where']['and'] = array( //表示会查询state=1 and level=2 and (a=1 or a=2) 的数据
     *                                         "state"=>'1',
     *                                         "level"=>"2",
     *                                         "a"=>[1,2]  
     *                                      )
     *                                      
     *              $param['where']['or'] = array("ID","USERNAME")//用户查询的时候根据参数$param['search']作为查询的列 例如 当$param['search']=root时 就会查询 ID like %root% or USERNAME like %root%
     *              
     *              $param['where']['or2'] = array( //这里面的会用or连接 用于补充$param['where']['and'] 几乎很少用 例如下面的数组会变成: (a=1 or a=2 or b=2)
     *                                          "a"=>[1,2],
     *                                          "b"=>2
     *                                       )              
     *
     * @param string $param['search'] 要模糊查询的字符串 "张三"
     * 
     * @param integer $param['page'] 要查询的页数
     *
     * @param integer $param['ppc']  每页显示的数据条数
     * 
     * @param array $param['order']  排序规则 array("title"=>"desc") 如果有join 重复的字段要加上表名.字段名
     * 
     * @param array $param['select'] 查询的字段 array("id","title") 
     *                               如果有join 重复的字段要加上表名.字段名
     *                               array('student.id','name','class_id','student.status','class_name','sex');
     *                               
     * @param array $param['join']   左连接 array('class'=>array('student.class_id','class.id'),'sex'=>array('student.sex_id','sex.id'))
     * 
     * @return array  里面有status msg data
     */
    public function pagination($param)
    {
        if ((int)$param['page']<=0) {
            $ret['status']="error";
            $ret['msg']="页数最小是1";
            return $ret;
        }
        $sql="";
        if($this->key){
            $cSql="SELECT count(".$this->key.") as count FROM ".$this->table;
        }else{
            $cSql="SELECT count(id) as count FROM ".$this->table;
        }
        if (is_array($param['select'])&&!empty($param['select'])) {
            $stmp=array();
            foreach ($param['select'] as $key => $value) {
                $stmp[]=$value;
            }
            $sql.="SELECT ".implode(",", $stmp)." FROM ".$this->table;
        } else {
            $sql.="SELECT * FROM ".$this->table;
        }

        if (is_array($param['join'])&&!empty($param['join'])) {
            $joinSql = array(); 
            foreach ($param['join'] as $key => $value) {
                array_push($joinSql, " LEFT JOIN {$key} ON {$value[0]} = {$value[1]} ");
            }
            $sql.=implode(" ", $joinSql);
            $cSql.=implode(" ", $joinSql);
        }
        
        if (is_array($param['where'])&&!empty($param['where'])) {
            $and = isset($param['where']['and']) && !empty($param['where']['and']) ? $param['where']['and'] : null;
            $or = isset($param['where']['or']) && !empty($param['where']['or']) ? $param['where']['or'] : null;
            $or2 = isset($param['where']['or2']) && !empty($param['where']['or2']) ? $param['where']['or2'] : null;
            $andSql = '';
            $orsql = '';
            $or2Sql = '';
            $whereSql = '';
            if (!is_null($and)) {
                $andSql = $this->_processWhereParams($and);
            }
            if (!is_null($or2)) {
                $field_list = [];
                $o2 = $param['where']['or2'];
                $or2Sql = $this->_processWhereParamsOr($o2);
            }
            if (!is_null($or) && !empty($param['search'])) {
                $orSql = $this->_processWhereParams($or, $param['search'],false);
            }
            $flag = 0;
            //四种情况
            if (empty($andSql) && empty($orSql)) {
                $whereSql = '';
                $flag = 1;
            } elseif (!empty($andSql) && empty($orSql)) {
                $whereSql = ' WHERE '.$andSql;
                $flag = 2;
            } elseif (empty($andSql) && !empty($orSql)) {
                $whereSql = ' WHERE '.$orSql;
                $flag = 2;
            } else {
                $whereSql = ' WHERE '.$andSql.' AND '.'('.$orSql.')';
                $flag = 2;
            }
            if (!empty($or2Sql)) {
                if (1 == $flag) {
                    $whereSql = ' WHERE '.$or2Sql;
                }
                if (2 == $flag) {
                    $whereSql .= ' AND '.$or2Sql;
                }
            }
            $sql.=$whereSql;
            $cSql.=$whereSql;
        }
        
        if (is_array($param['order'])&&!empty($param['order'])) {
            $sql.=" ORDER BY ";
            $tmp=array();
            foreach ($param['order'] as $key => $value)
            {
                if($value){
                    $tmp[]=$key." ".$value."";
                }
            }
            $sql.=implode(" , ", $tmp);
        }
        $countData=$this->db->query($cSql);
        $count=0;
        if (is_array($countData)&&count($countData)==1) {
            $count=(int)$countData[0]['count'];
        } else {
            $ret['status']="error";
            $ret['msg']="查询总数错误";
            return $ret;
        }
        $max=ceil($count/$param['ppc']);
        if ($param['page']>$max) {
            $param['page']=$max;
        }
        if($param['page']<1){
            $param['page']=1;
        }
        $start=($param['page']-1)*$param['ppc'];
        $sql.=" LIMIT ".$start.",".$param['ppc'];
        $data=$this->db->query($sql);
        if (is_array($data)) {
            $ret['status']="ok";
            $ret['msg']="成功";
            $ret['data']=array(
                "count"=>$count,
                "ppc"=>$param['ppc'],
                "page"=>$param['page'],
                "data"=>$data
            );
            return $ret;
        } else {
            $ret['status']="error";
            $ret['msg']="查询数据错误";
            return $ret;
        }
    }

    /**
     * 预处理where语句参数 ，将多条where语句用or或者and连接起来  配合上面pagination()方法使用
     *
     * @param data array 待处理的参数
     * @param is_or 查询条件是and还是or  默认是and
     * @param search 要查询的字符串，如果是is_or是and 则用不到该参数，如果是 or 则作为like的搜索内容
     * @return  string 处理完成的字符串
     */
    protected function _processWhereParams($data,$search = '', $is_or = true)
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
                array_push($field_list, $field_value . ' LIKE ' . "'" . '%' . $search . '%' . "'");
            }
            return implode(' OR ', $field_list);
        }
    }

    /**
     * 预处理where的or2语句参数 ，配合上面pagination()方法使用
     *
     * @param data array 待处理的参数
     * @return  string 处理完成的字符串
     */
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
