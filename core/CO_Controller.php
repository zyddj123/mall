<?php
/**
 * CO框架控制器基类
 * 
 * CO框架核心
 * 
 * 控制器基类。系统中所有控制器对象均需要继承于此类。
 * 
 * 作为MVC模式的重要一部分，控制器发挥着连接视图(view)和模型(model)的重要作用。本框架的MVC模式中，视图和模型是不能够直接交互的。数据的交互和操作均是使用控制器调度。
 * 
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_Controller{
	
	/**
	 * 应用app名称
	 * 
	 * @var string
	 */
	public $app_name = '';
	
    /**
     * 控制器内置变量，传入视图时使用
     * 
     * @var array
     */
    private $_variables = array();
    
    /**
     * 视图输出类对象
     * 
     * @var object
     */
    private $_output;
    
    /**
     * 视图文件路径
     * 
     * @var string
     */
    private $_view_file_path = '';
    
    /**
     * 模型对象数组
     * 
     * @var array
     */
    protected $_models = array();
    
    /**
     * 输入类对象
     * 
     * @var object
     */
    public $input = null;
    
    /**
     * 插件类对象
     * 
     * @var object
     */
    public $plugins = null;
    
    /**
     * 配置类对象
     * 
     * @var object
     */
    public $config = null;
    
    /**
     * 会话类对象
     * 
     * @var object
     */
    public $session = null;
    
    /**
     * 是否引用视图展示
     * 
     * @var boolean
     */
    protected $_rendered = false;
    
    /**
     * 视图主题名称
     * 
     * @var string
     */
    private $_themes_name = '';
        
    /**
     * 语言包
     * 
     * @var array
     */
    public $language = array();
    
    /**
     * 构造函数
     * 
     * @param	string $app_name 应用app名称
     * @return	void
     */
    function __construct($app_name){
    	
    	//应用名称
    	$this->app_name = $app_name;
    
    	//初始化input对象
    	$this->input = new CO_Input();
    
    	//加载配置
    	$this->config = CO_AppLoader::GetInstance($app_name);
    	
    	//加载插件
    	$this->plugins = new CO_Plugins();
    	$this->plugins->app_name = $this->app_name;
    	
    	/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------
    	 * 设置session
    	 * 应用(application)目录中的custom_config.php设置
    	* ------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    	if($this->config->Get('session_start')=='1'){
    		//开启session
    		$custom_session=$this->config->Get('session_custom');
    		if($custom_session!=''){
    			//采用指定的session定制类
    			$handler = new $custom_session(array(
    					'lifetime'=>$this->config->Get('session_lifetime')
    					));
    			
    			$handler->setDb($this->getDb());
    			session_set_save_handler($handler, true);
    		}
    		
    		session_start();
    		
    	}
    	$this->session = new CO_Session();
    	
    	//设置主题
    	$this->setThemes($this->config->Get('themes'));
    	
    	//初始化
    	$this->_init();
    }   
    
    /**
     * 获取output对象
     * 
	 * @return	object 页面输出对象
	 */
	public function getOutput() {
		return $this->_output;
	}
	
	/**
	 * 设置output对象
	 * 
	 * @param	object $output 页面输出对象
	 * @return	boolean
	 */
	public function setOutput($output) {
		$this->_output = $output;
		return true;
	}

	/**
	 * 设置当前主题
	 * 
	 * @param	string $themes 主题id
	 * @return	boolean
	 */
	public function setThemes($themes="default"){
		$this->_themes_name=$themes;
		return true;
	}
	
	/**
	 * 获取当前主题
	 * 
	 * return	string 主题id
	 */
	public function getThemes(){
		return $this->_themes_name;
	}
	
	/**
	 * 获取当前主题http根路径
	 * 
	 * @return	string
	 */
	public function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.$this->app_name.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
	/**
	 * 获取当前主题文件系统根路径
	 * 
	 * @return	string
	 */
	public function getThemesPath(){
		return ROOT_PATH.'/'.$this->app_name.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
	
    /**
     * 析构函数
     */
    function _destruct(){
    	
    }
    
    /**
     * 初始化函数
     * 
     * @return	boolean
     */
    protected function _init(){
    	return true;
    }
    
    /**
     * 输出页面。echo出页面代码
     * 
     * @return	void
     */
    function display(){
    	$this->_output->display();
    }

    /**
     * 渲染View页面
     * 
     * @param	string $view_name 模板名，如"index", "part/header"
     * @param	array $variables 变量关联数组
     * @param	boolean $return 是否返回为变量（取消页面输出）
     * @return	mixed
     */
    function render($view_name, array $variables = array(), $return = false ){
    	/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------
    	 * 定位视图文件
    	* ------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    	$_exp = explode('.', $view_name);
        $count=count($_exp);
        if($count==1) $_ext='.php';
        else $_ext='.'.$_exp[$count-1];
        //根据视图主题(themes)决定使用那个视图(view)
        $this->_view_file_path = $this->getThemesPath() . '/view/' . $view_name . $_ext;
        //如果指定模板目录下找不到该模板文件，则使用默认主题视图
        if(!file_exists($this->_view_file_path)){
        	$this->_view_file_path = $this->getThemesPath() .'/'. VIEW_DEFAULT_THEMES . '/view/' . $view_name . $_ext;
        	$this->_themes_name = VIEW_DEFAULT_THEMES;
        }
        if ( !file_exists( $this->_view_file_path ) ) {
            return false;
        }        
        /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------
         * 设置传入视图的变量
        * ------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        $this->assign($variables);
        //将传入的data数组导入到当前变量中
        extract($this->_variables);
        //引入视图文件
        include($this->_view_file_path);
        /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------
         * 读取视图内容至输出对象
        * ------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        ob_start();
        $buffer = ob_get_contents ();
        @ob_end_clean ();
        //输出
        if ($return === true) {
        	return $buffer;
        }else{
        	$this->_output->AppendOutputStream($buffer);
        	$this->_rendered = true;
        	return true;
        }
    }
    
    /**
     * 预设页面渲染变量
     *
     * @param	array variables 变量数组
     * @param	boolean $clear 是否先清空
     * @return	boolean
     */
    function assign($variables, $clear = false) {
    	static $count = 1;
    	if ($clear) {
    		$this->_variables = array ();
    	}
    	if (is_array($variables) && !empty($variables)) {
    		$this->_variables = array_merge($this->_variables, $variables);
    	}
    	return true;
    }

    /**
     * 加载语言包
     * @param	string $mod 功能模块id
     * @return	$this
     */
    function getLang($mod){
    	if($mod !='' && !isset($this->language[$mod])){
    		$lang=array();
    		if($mod=="") return $this;
    		@include_once ROOT_PATH.'/'.$this->app_name.'/'.LANG_PATH_NAME.'/'.$this->config->Get("language").'/'.$mod.'_lang.php';
    		$lang_filter = $this->_iterator_lang($lang);
    		$this->language=array_merge($this->language, $lang_filter);
    		unset($lang_filter);
    		unset($lang);
    	}    	
    	return $this;
    }
    
    /**
     * 迭代语言包。对html代码进行处理
     * 
     * @param	array $data 语言包数据
     * @return	array 处理后的语言包数据
     */
    protected function _iterator_lang($data){
    	$arrRet = array();
    	foreach($data as $key => $val){
    		if(is_array($val)){
    			$arrRet[$key] = $this->_iterator_lang($val);
    		}else $arrRet[$key] = htmlspecialchars($val);
    	}
    	return $arrRet; 
    }
    
    /**
     * 加载模型对象  
     * 
     * @param	string $model_name 模型id
     * @param	array $param 参数
     * @return	object|null 加载的模型对象
     */
    function getModel($model_name, $param=array()){
    	
    	//转化成匹配的模型文件
    	$class_name = CO::StrCamelize($model_name).'Model';
    	$class_file = ROOT_PATH.'/'.$this->app_name.'/'.MODEL_PATH_NAME."/".$class_name.'.php';
    	if(is_object($this->_models[$model_name])) return $this->_models[$model_name];
    	elseif(file_exists($class_file)){	
    		//引入model文件，并生成对象
    		include_once $class_file;
    		$model_object = $class_name::CreateFromController($this, $param);  
    		$this->_models[$model_name] = $model_object;
    		unset($model_object);
    		return $this->_models[$model_name];
    	}else return null;
    }
    
    /**
     * 获取数据库连接，并且设置上下文。
     * 
     * @param	string $db_name 数据库实例名称
     * @return	object
     * @throws	CO_DB_Exception 数据库连接异常
     */
    function getDb($db_name = 'default'){
    	$context.= PHP_EOL.'---------- trace stack start ---------'.PHP_EOL;
    	$context.= 'app_name:['.$this->app_name.']'.PHP_EOL;
    	foreach(CO::Debug() as $debug){
    		$context.= $debug.PHP_EOL;
    	}
    	$context.= '---------- trace stack over ---------'.PHP_EOL;    	
    	return CO::GetDb($this->app_name.'\\'.$db_name)->setContext($context);
    }
    
    /**
     * 引入当前应用路径下的文件
     * 
     * @param	string $relative_file_path_in_app 文件相对路径
     * @param	boolean $bln_include_once 是否引入一次
     * @return	void
     * @example	/core/a.php指向当前应用目录下/core/a.php
     */
    function includeFile($relative_file_path_in_app, $bln_include_once = true){
    	$file_path = ROOT_PATH.'/'.$this->app_name.'/'.$relative_file_path_in_app;
    	if(file_exists($file_path)){
    		if($bln_include_once) @include_once $file_path;
    		else @include $file_path;
    	}
    }
}
?>