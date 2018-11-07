<?php

namespace Debug;

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;
use Debug\Contracts\ExceptionHandler;
use Debug\Contracts\UserException;
use Debug\Contracts\Render;

class Handler implements ExceptionHandler
{
    public static $debug = true;
    //标记是否已经处理过问题
    public $flag = false;
    public static $instance;
    public $msg='';
    private function __construct()
    {
        $this->config=new Config();
        $this->include=$this->config->include;
        $this->exclude=$this->config->exclude;
    }

    private function __clone()
    {
    }

    public function report(UserException $e)
    {
    }

    public function render(Render $request, UserException $e)
    {
        $contents = $e->parse();
        $request->render(__DIR__.'/views/debug/debug.php', ['data' => $e, 'msg' => $this->msg, 'contents' => $contents]);
    }

    public function exceptionHandler($e)
    {
        if ($this->flag) {
            return true;
        }
        $this->msg="异常处理函数";
        $no = $e->getCode();
        $str = $e->getMessage();
        $file = $e->getFile();
        $line = $e->getLine();
        $trace = $e->getTrace();
        $e = new UserException($no, $str, $file, $line, $trace);
        $r = new Render();
        // $contents = $e->parse();
        // $r->render(__DIR__.'/views/debug/debug.php', ['data' => $e, 'msg' => $this->msg, 'contents' => $contents]);
        $this->render($r, $e);
        $this->flag = true;
        exit(0);
    }

    public function errorHandler($no, $str, $file, $line)
    {
        if (in_array(E_ALL, $this->include)) {
            if (in_array($no, $this->exclude)) {
                return false;
            }
        } elseif (!in_array($no, $this->include)) {
            return false;
        } elseif (in_array($no, $this->exclude)) {
            return false;
        }
        if ($this->flag) {
            return false;
        }

        $trace = debug_backtrace();
        array_shift($trace);
        $this->msg="错误处理函数";
        $e = new UserException($no, $str, $file, $line, $trace);
        $r = new Render();
        // $contents = $e->parse();
        // $r->render(__DIR__.'/views/debug/debug.php', ['data' => $e, 'msg' => $this->msg, 'contents' => $contents]);
        $this->render($r, $e);
        $this->flag = true;
        exit(0);
    }

    public function shutdownHandler()
    {
        if ($this->flag) {
            return true;
        }
        $err = error_get_last();
        if (!isset($err)||!is_array($err)||count($err) <= 0) {
            return true;
        }
        $no=$err['type'];
        if (in_array(E_ALL, $this->include)) {
            if (in_array($no, $this->exclude)) {
                return false;
            }
        } elseif (!in_array($no, $this->include)) {
            return false;
        } elseif (in_array($no, $this->exclude)) {
            return false;
        }
        $trace = debug_backtrace();
        $this->msg="shutdown处理";
        $e = new UserException($err['type'], $err['message'], $err['file'], $err['line'], []);
        $r = new Render();
        $this->render($r, $e);
        $this->flag = true;
        exit();
    }

    public static function register()
    {
        error_reporting(0);
        ini_set('display_errors', 'Off');
        $instance = self::GetInstance();
        set_exception_handler([$instance, 'exceptionHandler']);
        set_error_handler([$instance, 'errorHandler']);
        register_shutdown_function([$instance, 'shutdownHandler']);
    }

    public static function GetInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();

            return self::$instance;
        } else {
            self::$instance;
        }
    }

    /**
     * 根据错误编号返回错误类型.
     *
     * @param int $errno
     *
     * @return 错误类型 如 E_ERROR,E_NOTICE
     */
    public static function getErrLevel($errno)
    {
        $arr = array_flip(get_defined_constants(true)['Core']);

        return isset($arr[$errno]) ? $arr[$errno] : $errno;
        // return array_flip(array_slice(get_defined_constants(true)['Core'],0,16,true))[$errno];
    }
}
