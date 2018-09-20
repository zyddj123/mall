<?php
/**
 * 工具类
 *
 * CO框架核心
 *
 * @package	comnide(CO)
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 * @link
 * @version v.1.19
 */
class CO_Utils {
	
	/**
	 * 将包含[]的字符串拆分成数组
	 * 
	 * @param	string $string 要拆分的字符串
	 * @param	string $delimiter 分隔符
	 * @return	array 返回数组
	 * @example 字符串[a],[b],[c],[d]拆分成数组array(a,b,c,d)
	 */
	static function MSplit($string, $delimiter=","){
		$retArray=array();
		if($string=="") return $retArray;
		foreach (explode($delimiter, $string) as $val){
			$val=str_replace('[', '', $val);
			$val=str_replace(']', '', $val);
			array_push($retArray, $val);
		}
		return $retArray;
	}
	
	/**
	 * 将数组合并成包含[]的字符串
	 * 
	 * @param	array $array 要合并的数组
	 * @param	string $glue 分隔符
	 * @return	string 返回字符串
	 * @example 数组array(a,b,c,d)合并成字符串[a],[b],[c],[d]
	 */
	static function MJoin($array, $glue=","){
		if($array==""|| !is_array($array) || count($array)==0) return "";
		$newArr=array();
		foreach ($array as $val){
			if($val!="") array_push($newArr, '['.$val.']');
		}
		return implode($glue, $newArr);
	}
	
	/**
	 * 依次创建文件夹
	 * 
	 * @param	string $dir 需要创建的文件夹名称
	 * @return	boolean 是否成功
	 */
	static function CreateDir($dir, $authority=0755){
		if(!file_exists($dir)){
			self::CreateDir(dirname($dir));
			mkdir($dir, $authority);
		}
		return true;
	}
	
	/**
	 * 依次删除文件夹下的所有文件夹
	 * 
	 * @param	string $dir 需要删除的文件夹名称
	 * @return	boolean 是否成功
	 */
	static function DelDir($dir){
		//先删除目录下的文件
		if(!is_dir($dir)) return false;
		$dh = opendir($dir);
		while ($file = readdir($dh)){
			//遍历目录下所有文件
			if($file!="." && $file!=".."){
				$fullpath=$dir."/".$file;
				if(!is_dir($fullpath))	unlink($fullpath);
				else self::DelDir($fullpath);
			}
		}
		closedir($dh);
		//删除当前文件夹：
		if(rmdir($dir))	return true;
		else return false;
	}
	
	/**
	 * 传入对象是否是控制器Controller类实例
	 * 
	 * @param	object $instance 对象实例
	 * @return	boolean
	 */
	static function IsController($instance){
		if(!is_object($instance)) return false;
		$super_class = array_values(class_parents($instance));
		if(strtolower($super_class[count($super_class)-1]) == 'co_controller') return true;
		else return false;
	}
}

?>