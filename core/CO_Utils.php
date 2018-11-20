<?php
/**
 * 工具类.
 *
 * CO框架核心
 *
 * @author B.I.T.
 * @copyright Copyright (c) 2016-2017, B.I.T.
 * @license
 *
 * @see
 *
 * @version v.1.19
 */
class CO_Utils
{
    /**
     * 将包含[]的字符串拆分成数组.
     *
     * @param string $string    要拆分的字符串
     * @param string $delimiter 分隔符
     *
     * @return array 返回数组
     *
     * @example 字符串[a],[b],[c],[d]拆分成数组array(a,b,c,d)
     */
    public static function MSplit($string, $delimiter = ',')
    {
        $retArray = array();
        if ('' == $string) {
            return $retArray;
        }
        foreach (explode($delimiter, $string) as $val) {
            $val = str_replace('[', '', $val);
            $val = str_replace(']', '', $val);
            array_push($retArray, $val);
        }

        return $retArray;
    }

    /**
     * 将数组合并成包含[]的字符串.
     *
     * @param array  $array 要合并的数组
     * @param string $glue  分隔符
     *
     * @return string 返回字符串
     *
     * @example 数组array(a,b,c,d)合并成字符串[a],[b],[c],[d]
     */
    public static function MJoin($array, $glue = ',')
    {
        if ('' == $array || !is_array($array) || 0 == count($array)) {
            return '';
        }
        $newArr = array();
        foreach ($array as $val) {
            if ('' != $val) {
                array_push($newArr, '['.$val.']');
            }
        }

        return implode($glue, $newArr);
    }

    /**
     * 依次创建文件夹.
     *
     * @param string $dir 需要创建的文件夹名称
     *
     * @return bool 是否成功
     */
    public static function CreateDir($dir, $authority = 0755)
    {
        if (!file_exists($dir)) {
            self::CreateDir(dirname($dir));
            mkdir($dir, $authority);
        }

        return true;
    }

    /**
     * 依次删除文件夹下的所有文件夹.
     *
     * @param string $dir 需要删除的文件夹名称
     *
     * @return bool 是否成功
     */
    public static function DelDir($dir)
    {
        //先删除目录下的文件
        if (!is_dir($dir)) {
            return false;
        }
        $dh = opendir($dir);
        while ($file = readdir($dh)) {
            //遍历目录下所有文件
            if ('.' != $file && '..' != $file) {
                $fullpath = $dir.'/'.$file;
                if (!is_dir($fullpath)) {
                    unlink($fullpath);
                } else {
                    self::DelDir($fullpath);
                }
            }
        }
        closedir($dh);
        //删除当前文件夹：
        if (rmdir($dir)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 传入对象是否是控制器Controller类实例.
     *
     * @param object $instance 对象实例
     *
     * @return boolean
     */
    public static function IsController($instance)
    {
        if (!is_object($instance)) {
            return false;
        }
        $super_class = array_values(class_parents($instance));
        if ('co_controller' == strtolower($super_class[count($super_class) - 1])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * [将Base64图片转换为本地图片并保存].
     *
     * @param [Base64] $base64 [要保存的Base64]
     * @param [目录] $path   [要保存的路径]
     */
    public static function base64_to_image_save($base64, $path)
    {
        //匹配出图片的格式
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64, $result)) {
            $type = $result[2];
            $upload_path=ROOT_PATH.'/'.$path;		//布局图片上传路径
            if (!file_exists($upload_path)) {
                CO_Utils::CreateDir($upload_path, 0755);
            }
			$rand = rand(100, 999);	//随机数
            $pics = date('YmdHis').$rand.".{$type}";
            $pic_path = $upload_path.'/'.$pics;
            $upload = file_put_contents($pic_path, base64_decode(str_replace($result[1], '', $base64)));
            if ($upload) {
                return $pics;
            } else {
                return false;  //上传失败
            }
        } else {
            return false;  //上传失败
        }
    }
}
