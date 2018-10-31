<?php

namespace Debug\Contracts;
use Debug\Config;
class UserException
{
    //错误编号
    public $errno;
    //错误信息
    public $errstr;
    //发生错误的文件
    public $file;
    //发生错误的行号
    public $line;
    //堆栈信息
    public $trace;
    //读取多少行的内容
    public $count = 50;

    /**
     * 构造函数.
     *
     * @param int    $errno
     * @param string $errstr
     * @param string $file
     * @param int    $line
     * @param array  $trace
     */
    public function __construct($errno, $errstr, $file, $line, $trace)
    {
        $this->config=new Config();
        $this->pathMap=$this->config->pathMap;

        $this->class = __CLASS__;
        $this->errno = $errno;
        $this->errstr = $errstr;
        $this->file = $this->parseFilePath($file);
        $this->realfile = $file;
        $this->line = $line;
        $this->trace = $this->formateTrace($trace);
    }

    public function parseFilePath($file){
        if(count($this->pathMap)==2){
            $s=$this->pathMap['source'];
            $t=$this->pathMap['target'];
            return str_replace($t,$s,$file);
        }else{
            return $file;
        }
    }
    /**
     * 将错误和异常抛出的堆栈信息格式化.
     *
     * @param [type] $trace
     */
    public function formateTrace($trace)
    {
        $ret = [];
        if (isset($trace) && is_array($trace)) {
            foreach ($trace as $key => $value) {
                if (isset($value['file'])) {
                    $tmp = [];
                    $tmp['file'] = $this->parseFilePath(isset($value['file']) ? $value['file'] : '');
                    $tmp['realfile'] = isset($value['file']) ? $value['file'] : '';
                    $tmp['line'] = isset($value['line']) ? $value['line'] : '';
                    $tmp['function'] = isset($value['function']) ? $value['function'] : '';
                    $tmp['class'] = isset($value['class']) ? $value['class'] : '';
                    $tmp['type'] = isset($value['type']) ? $value['type'] : '';
                    $tmp['args'] = isset($value['args']) ? $value['args'] : '';
                    $ret[] = $tmp;
                }
            }
        }
        //堆栈里面没有发生错误的文件,所以先添加上
        $tarr = [];
        $tarr['file'] = $this->file;
        $tarr['realfile'] = $this->realfile;
        $tarr['line'] = $this->line;
        $tarr['function'] = '';
        $tarr['class'] = '';
        $tarr['type'] = '';
        $tarr['args'] = '';
        array_unshift($ret, $tarr);

        return $ret;
    }

    /**
     * 根据int的错误代码返回字符的代码
     */
    public function getErrortype()
    {
        $no = $this->errno;
        $arr = array_flip(array_slice(get_defined_constants(true)['Core'], 0, 16, true));

        return isset($arr[$no]) ? $arr[$no] : $no;
        // return array_flip(array_slice(get_defined_constants(true)['Core'],0,16,true))[$no];
    }

    /**
     * 根据文件和行号对去指定的内容.
     *
     * @param string $file
     * @param int    $line
     */
    public function getFileContents($file, $line)
    {
        $ret = [];
        if (!isset($file) || !file_exists($file)) {
            return $ret;
        }
        $min = $line - $this->count / 2;
        $min = $min >= 0 ? $min : 0;
        $max = $min + $this->count;
        $fs = fopen($file, 'r');
        if ($fs) {
            for ($i = 1; $i < $max; ++$i) {
                $data = fgets($fs);
                if ($i >= $min) {
                    if (!$data) {
                        break;
                    }
                    $tmp = [];
                    $tmp['line'] = $i;
                    $tmp['content'] = $data;
                    $ret[] = $tmp;
                }
            }
        }

        return $ret;
    }

    /**
     * 将堆栈信息格式化成json字符串.
     */
    public function parse()
    {
        $ret = [];
        foreach ($this->trace as $key => $value) {
            $tmp = [];
            $tmp['id'] = $key;
            $tmp['file'] = $value['file'];
            $tmp['line'] = $value['line'];
            $tmp['function'] = $value['function'];
            $tmp['class'] = $value['class'];
            $tmp['type'] = $value['type'];
            $tmp['args'] = $value['args'];
            $tmp['contents'] = $this->getFileContents($value['realfile'], $value['line']);
            $ret[] = $tmp;
        }

        return json_encode($ret);
    }
}
