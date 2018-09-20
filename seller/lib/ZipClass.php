<?php
if (!defined('CO_BASE_CHECK')){
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit;
}
/**
*PHP压缩文件夹类
*/
class ZipClass
{
	/**
	 * 添加文件和子目录的文件到zip文件
	 * @param $folder string  
	 * @param  $zipFile ZipArchive
	 * @param $exclusiveLength int  将专用的文件路径的文本数.
	 */
	private static function folderToZip($folder, &$zipFile, $exclusiveLength) {
		$handle = opendir($folder);
		while (false !== $f = readdir($handle)) {
			if ($f != '.' && $f != '..') {
				$filePath = "$folder/$f";
				// 删除从文件路径前缀之前添加到ZIP.
				$localPath = substr($filePath, $exclusiveLength);
				if (is_file($filePath)) {
					$zipFile->addFile($filePath, $localPath);
				} elseif (is_dir($filePath)) {
					// 添加子文件夹
					$zipFile->addEmptyDir($localPath);
					self::folderToZip($filePath, $zipFile, $exclusiveLength);
				}
			}
		}
		closedir($handle);
	}
	
	/**
	 * 
	 *zipDir()
	 * @param string $sourcePath 目录是压缩路径.
	 * @param string $outZipPath 输出文件的路径.
	 */
	public static function zipDir($sourcePath, $outZipPath)
	{
		$pathInfo = pathInfo($sourcePath);
		$parentPath = $pathInfo['dirname'];
		$dirName = $pathInfo['basename'];
		$sourcePath=$parentPath.'/'.$dirName;//防止传递'folder' 文件夹产生bug
		$z = new ZipArchive();
		$z->open($outZipPath, ZIPARCHIVE::CREATE);//建立zip文件
		$z->addEmptyDir($dirName);//建立文件夹
		self::folderToZip($sourcePath, $z, strlen("$parentPath/"));
		$z->close();
	}
}
?>