<?php 
namespace Debug;
class Config{
    //列出所有的错误类型省的忘了
    public $alllevel = [
        E_ERROR, E_WARNING, E_PARSE, E_NOTICE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING, E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE, E_STRICT, E_RECOVERABLE_ERROR,
        E_DEPRECATED, E_USER_DEPRECATED, E_ALL,
    ];

    //应该显示的错误类型
    public $include = [E_ALL];
    //不需要的错误类型
    public $exclude = [E_NOTICE];
    public $pathMap=[
        'target'=>"/var/www/html/mall/",
        'source'=>'D:/phpStudy/phpstudy/WWW/mall/',
    ];
    public function __construct(){

    }          
}


