## 将程序的异常和错误可视化,并且能快速定位错误位置,增加工作效率.

## 安装
----------
在程序开始的位置调用 `Debug\Handler::register()`,需要关闭其他的异常处理和错误处理如`set_exception_handler` `set_error_handler` `register_shutdown_function`

对于co框架,需要在core/co.php做如下修改,而且co必须在1.19以上
```php
//类自动加载机制
spl_autoload_register(array('CO_Autoloader', 'Load'), true);
if (class_exists(Debug\Handler::class) && Debug\Handler::$debug) {
    Debug\Handler::register();
} else {
    set_exception_handler(array(CO::GetInstance(), 'exception_handler'));
}
```
为了能够在浏览器快速打开错误文件需要先运行`p.reg`文件,根据自己编辑器还需要修改`code -g`这个参数,如`sublime`就需要修改成 `subl`.在修改之前请确认编辑器在环境变量里,要不然就填绝对路径.
## 错误类型过滤

在`Debug\Handler.php`中有下面两个参数,暂时可以直接修改源码,达到过滤的目的.
```php
    //应该显示的错误类型
    public $include=[E_ALL];
    //不需要的错误类型
    public $exclude=[E_NOTICE];
```