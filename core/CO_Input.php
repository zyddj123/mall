<?php
/**
 * 数据输入类.
 *
 * CO框架核心
 *
 * 用于获取浏览器请求的输入。如POST, GET, COOKIE等，并且过滤XSS
 *
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 *
 * @see
 *
 * @version v.1.19
 */
class CO_Input
{
    /**
     * GET数据.
     *
     * @var array
     */
    protected $_get = null;

    /**
     * POST数据.
     *
     * @var array
     */
    protected $_post = null;

    /**
     * COOKIE数据.
     *
     * @var array
     */
    protected $_cookie = null;
	/**
	 * header值
	 *
	 * @var [type]
	 */
	public $_header=null;
    /**
     * 构造函数.
     */
    public function __construct()
    {
        $this->_init();
    }
    public function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
    public function url(){
        // /获取访问url中?后面的地址
        $path = $_SERVER['QUERY_STRING'];
        // //使用正则表达式获取controller和function
        // $pattern = '/\/(\w*)\/?(\w*)/';
        // // $pattern = '/([a-zA-Z0-9]{1,})/';
        // $pattern = '/(\w{1,})/';
        // $matches = array();
        // $arrMatches = preg_match($pattern, $path, $matches);

        return $path;   
    }
    /**
     * 初始化
     * 针对$_GET,$_POST,$_COOKIE中的字符进行过滤.
     *
     * @return bool 是否成功
     */
    protected function _init()
    {
        //将GET数据依次放入数组中
        foreach ($_GET as $key => $val) {
            $this->_get[$key] = $val;
        }

        //将POST数据依次放入数组中
        foreach ($_POST as $key => $val) {
            $this->_post[$key] = $val;
        }

        //将COOKIE数据依次放入数组中
        foreach ($_COOKIE as $key => $val) {
            $this->_cookie[$key] = $val;
        }

		$this->_header=$this->getHeader();
        return true;
    }
	public function header($key){
		return (!isset($key)||!isset($this->_header[$key]))?false:$this->_header[$key];
		// if(!isset($key)||!isset($this->_header[$key])){
		// 	return false;
		// }
		if(isset($key)){
			if(is_array($this->_header)&&isset($this->_header[$key])){
				return $this->_header[$key];
			}else{
				return false;
			}
		}else {
			return false;
		}
	}
    /**
     * 获取$_GET中的值
     *
     * @param string $key     键值
     * @param bool   $blnAnti 是否过滤
     *
     * @return string|null 不存在返回null,存在返回string
     */
    public function get($key = null, $blnAnti = true)
    {
        if (null === $this->_get) {
            return null;
        }
        if (null === $key) {
            $arrRet = array();
            foreach ($this->_get as $_key => $_val) {
                $arrRet[self::Anti_XSS($_key)] = self::Anti_XSS($_val);
            }

            return $arrRet;
        }
        if ('' == $key) {
            return '';
        }
        if (!is_array($this->_get) || !isset($this->_get[$key])) {
            return null;
        }

        return $blnAnti ? self::Anti_XSS($this->_get[$key]) : $this->_get[$key];
    }

    /**
     * 获取$_POST中的值
     *
     * @param string $key     键值
     * @param bool   $blnAnti 是否过滤
     *
     * @return string|null 不存在返回null,存在返回string
     */
    public function post($key = null, $blnAnti = true)
    {
        if (null === $this->_post) {
            return null;
        }
        if (null === $key) {
            $arrRet = array();
            foreach ($this->_post as $_key => $_val) {
                $arrRet[self::Anti_XSS($_key)] = self::Anti_XSS($_val);
            }

            return $arrRet;
        }
        if ('' == $key) {
            return '';
        }
        if (!is_array($this->_post) || !isset($this->_post[$key])) {
            return null;
        }

        return $blnAnti ? self::Anti_XSS($this->_post[$key]) : $this->_post[$key];
    }

    /**
     * 获取$_COOKIE中的值
     *
     * @param string $key     键值
     * @param bool   $blnAnti 是否过滤
     *
     * @return string|null 不存在返回null,存在返回string
     */
    public function cookie($key = null, $blnAnti = true)
    {
        if (null === $this->_cookie) {
            return null;
        }
        if (null === $key) {
            $arrRet = array();
            foreach ($this->_cookie as $_key => $_val) {
                $arrRet[self::Anti_XSS($_key)] = self::Anti_XSS($_val);
            }

            return $arrRet;
        }
        if ('' == $key) {
            return '';
        }
        if (!is_array($this->_cookie) || !isset($this->_cookie[$key])) {
            return null;
        }

        return $blnAnti ? self::Anti_XSS($this->_cookie[$key]) : $this->_cookie[$key];
    }

    /**
     * 过滤提交内容.
     *
     * @param string $str        待过滤的字符
     * @param string $allowedtag 不需要过滤的字符
     *
     * @return string 过滤后的字符
     */
    public static function Anti_XSS($str, $allowedtags = '')
    {
        $disabledattributes = array(
                'onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate',
                'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange',
                'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavaible', 'ondatasetchanged', 'ondatasetcomplete',
                'ondblclick', 'ondeactivate', 'ondrag', 'ondragdrop', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop',
                'onerror', 'onerrorupdate', 'onfilterupdate', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress',
                'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove',
                'onmoveout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange',
                'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect',
                'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload', );
        if (is_array($str)) {
            foreach ($str as $key => $val) {
                $str[$key] = self::anti_XSS($val, $allowedtags);
            }
        } else {
            $str = preg_replace(
                '/\s('.implode('|', $disabledattributes).').*?([\s\>])/',
                '\\2',
                preg_replace_callback(
                    '/<(.*?)>/i',
                    function () {return ''; },
                    strip_tags($str, $allowedtags)
                )
            );
        }

        return $str;
    }
	/**
	 * 获取header的值
	 *
	 * @return void
	 */
    public function getHeader()
    {
        $headers = array();
        foreach ($_SERVER as $key => $value) {
            if ('HTTP_' == substr($key, 0, 5)) {
                $headers[str_replace('_', '-', substr($key, 5))] = $value;
            }
            if (isset($_SERVER['PHP_AUTH_DIGEST'])) {
                $header['AUTHORIZATION'] = $_SERVER['PHP_AUTH_DIGEST'];
            } elseif (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
                $header['AUTHORIZATION'] = base64_encode($_SERVER['PHP_AUTH_USER'].':'.$_SERVER['PHP_AUTH_PW']);
            }
            if (isset($_SERVER['CONTENT_LENGTH'])) {
                $header['CONTENT-LENGTH'] = $_SERVER['CONTENT_LENGTH'];
            }
            if (isset($_SERVER['CONTENT_TYPE'])) {
                $header['CONTENT-TYPE'] = $_SERVER['CONTENT_TYPE'];
            }
        }

        return $headers;
    }
}
