<?php
/**
 * 模型层基类
 *
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 *
 * @see
 * @since				Version 1.19
 */
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

        // if ($where) {
            
        // }
        // return false;

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
     * 分页查询,没有联合查询,联合查询可以创建视图
     *
     * @param array $where array("id"=>"12");
     * @param integer $page 要查询的页数
     * @param array $order  排序规则 array("title"=>"desc")
     * @param array $search 要模糊查询的字段 array("title"=>"adsf")
     * @param integer $ppc  每页显示的数据条数
     * @param array $select 查询的字段 array("id","title")
     * @return array  里面有status msg data
     */
    public function pagination($where=array(), $page=1, $order=array(), $search=array(), $ppc=10, $select=array())
    {
        if ((int)$page<=0) {
            $ret['status']="error";
            $ret['msg']="页数最小是1";
            return $ret;
        }
        $sql="";
        if($this->key){
            $cSql="SELECT count(`".$this->key."`) as count FROM `".$this->table."`";
        }else{
            $cSql="SELECT count(`id`) as count FROM `".$this->table."`";
        }
        if (is_array($select)&&count($select)>0) {
            $stmp=array();
            foreach ($select as $key => $value) {
                $stmp[]="`".$value."`";
            }
            $sql.="SELECT ".implode(",", $stmp)." FROM `".$this->table."`";
        } else {
            $sql.="SELECT * FROM `".$this->table."`";
        }
        $tmp=array();

        if (is_array($where)&&count($where)>0) {
            $sql.=" WHERE ";
            $cSql.=" WHERE ";
            foreach ($where as $key => $value) {
                if ($value) {
                    $tmp[]="`".$key."` = '".$value."'";
                }
            }
        }
        if (is_array($search)&&count($search)>0) {
            foreach ($search as $key => $value) {
                if ($value) {
                    $tmp[]="`".$key."` LIKE '%".$value."%'";
                }
            }
        }
        $sql.=implode(" AND ", $tmp);
        $cSql.=implode(" AND ", $tmp);
        if (is_array($order)&&count($order)>0) {
            $sql.=" ORDER BY ";
            $tmp=array();
            foreach ($order as $key => $value)
            {
                if($value){
                    $tmp[]="`".$key."` ".$value."";
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
        $max=ceil($count/$ppc);
        if ($page>$max) {
            $page=$max;
        }
        if($page<1){
            $page=1;
        }
        $start=($page-1)*$ppc;
        $sql.=" LIMIT ".$start.",".$ppc;
        $data=$this->db->query($sql);
        if (is_array($data)) {
            $ret['status']="ok";
            $ret['msg']="成功";
            $ret['data']=array(
                "count"=>$count,
                "ppc"=>$ppc,
                "page"=>$page,
                "data"=>$data
            );
            return $ret;
        } else {
            $ret['status']="error";
            $ret['msg']="查询数据错误";
            return $ret;
        }
    }
}
