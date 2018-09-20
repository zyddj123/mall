<?php
/**
 * Class自动加载类
 *
 * CO框架核心
 *
 * 用于框架根据Class名称自动加载Class
 *
 * Class能够被CO框架自动扫描并加载必须满足以下条件:
 * 
 * 1.Class名称与Class文件名称必须一直，如Class A必须保存在A.php文件中。
 * 
 * 2.每个Class文件有且只有一个同名的Class。
 * 
 * 3.CO框架自动扫描公共脚本目录(LIB_PATH)和公共核心目录(CORE_PATH)。
 * 
 * 4.自动加载支持命名空间(namespace)。根空间指向公共脚本目录(LIB_PATH)。如Class \a\b\C必须保存在LIB_PATH/a/b/C.php文件下。
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_Autoloader{
	
	/**
	 * 自动加载类
	 * 
	 * @param	string $class_name 类名
	 * @return	void
	 */
	static function Load($class_name){
		$class_file_path = self::ReadCache($class_name);
		if($class_file_path === false){
			if(strpos($class_name, '\\') === false) self::_Load($class_name);
			else self::_LoadByNamespace($class_name);
		}else{
			require_once $class_file_path;
		}
	}
	
	/**
	 * 获取缓存文件
	 * 
	 * @return	string 缓存文件路径
	 */
	static function GetCache(){
		return CACHE_PATH.'/autoload_classes.json';
	}
	
	/**
	 * 读取缓存文件
	 * 
	 * @param	string $key 键值
	 * @return	mixed
	 */
	static function ReadCache($key){
		$cache_file = self::GetCache();
		if(file_exists($cache_file)){
			$cache = json_decode(file_get_contents($cache_file), true);
			if(!is_array($cache) || !isset($cache[$key])) return false;
			return $cache[$key];
		}else return false;
	}
	
	/**
	 * 写入缓存文件
	 * 
	 * @param	string $key 键值
	 * @param	mixed $value 数据
	 * @return	void
	 */
	static function WriteCache($key, $value){
		$cache_file = self::GetCache();
		if(!file_exists($cache_file)) $cache=array($key => $value);
		else{
			$cache = json_decode(file_get_contents($cache_file), true);
			if(!is_array($cache)) $cache=array($key => $value);
			else $cache[$key] = $value;
		}
		file_put_contents($cache_file, json_encode($cache));
	}
	
	/**
	 * 非命名空间加载
	 * 
	 * 有效作用范围在公共脚本目录(LIB_PATH)和公共核心目录(CORE_PATH)下
	 * 
	 * @param	string $class_name 类名
	 * @return	boolean
	 */
	protected static function _Load($class_name){
		$match = '/\/([A-Z]\w*)\.php$/';
		$lib_file_list = self::_ListFile($match, LIB_PATH) + self::_ListFile($match, CORE_PATH);
		foreach ($lib_file_list as $class => $class_file_path){
			self::WriteCache($class, $class_file_path);
			if($class_name == $class){
				require_once $class_file_path;
				
			}
		}
		return true;
	}
	
	/**
	 * 根据命名空间加载
	 * 
	 * 有效作用范围只有在公共脚本目录(LIB_PATH)下
	 * 
	 * @param	string $class_name 类名
	 * @return	boolean
	 */
	protected static function _LoadByNamespace($class_name){
		if(strpos($class_name, '\\') !== false){
			$class_path = str_replace('\\', DIRECTORY_SEPARATOR ,$class_name);
			$class_file_path = LIB_PATH.DIRECTORY_SEPARATOR.$class_path.'.php';
			if(!file_exists($class_file_path)) return false;
			require_once $class_file_path;
			self::WriteCache($class_name, $class_file_path);
			if(class_exists($class_name, false)) return true;
		}
		return false;
	}
	
	/**
	 * 遍历目录中符合条件的文件列表
	 * 
	 * @param	string $match 正则匹配条件（包括前后的'/'，必须带有至少一组括号以作为结果集索引）
	 * @param	string $path  路径（由于匹配时使用绝对路径，如果索引需要相对路径的话可以在$path后加'/'，然后匹配'//'后面的字符，参见@example）
	 * @return	array         {file_index:file_absolute_path, ...}
	 *
	 * @example _listfile( '/\/\/(.+\.(?:css|js))$/', '/static/' )    {'dir/a.js':'/static/dir/a.js', 'b.css':'/static/b.css'}
	 */
	protected static function _ListFile($match, $path){
		$list=array();
		foreach(glob($path.'/*')as $item){
			if(is_dir($item)){
				$list+=self::_ListFile($match,$item);
			}elseif(preg_match($match,$item,$matches)){
				$list[$matches[1]]=$item;
			}
		}
		return $list;
	}
}
?>