<?php
/**
 * 应用公共函数文件
 * 
 * @package		comnide
 * @author			B.I.T
 * @copyright		Copyright (c) 2016 - 2017.
 * @license			
 * @link				
 * @since				Version 1.17
 */

// ------------------------------------------------------------------------

/**
 * 配合前台jquery datatable组件使用
 * @param	post_info string datatable组件post数据
 */
function getDataTable($post_info=array()){
	//每页显示条目数
	$countPerPage	= $post_info['iDisplayLength'];
	//数据起始条目数
	$startNum = $post_info['iDisplayStart'];
	//当前请求页码。$startNum从0开始，计算时候需要+1
	$startNum=intval($startNum)+1;
	if($startNum <= $countPerPage) $currentpage=1;
	else @$currentpage=($startNum-($startNum % $countPerPage))/$countPerPage+1;
	//列配置个数
	$colLen = $post_info['iColumns'];
	//将列依次放入$columns数组
	$colunms = array();
	for ($i = 0; $i < $colLen; $i++) {
		$colunms[$i]=$post_info['mDataProp_'.$i];
	}
	//去除空元素
	$colunms=array_filter($colunms);
	//搜索内容
	$search = $post_info['sSearch'];
	//-----获取搜索字段-----
	$col_search=array();
	foreach ($colunms as $key=>$val){
		if($post_info['bSearchable_'.$key]=='true'){
			array_push($col_search, $val);
		}
	}
	//排序方式
	$sortType = $post_info['sSortDir_0'];
	//-----获取排序字段-----
	$col_sort=array();
	foreach ($colunms as $key=>$val){
		if($post_info['bSortable_'.$key]=='true'){
			array_push($col_sort, $val);
		}
	}
	if(count($col_sort)>0) $sortField =$colunms[$post_info['iSortCol_0']];
	else $sortField="";
	//排序
	$where_sort="";
	if($sortField!="") $where_sort='`'.$sortField."` ".$sortType." ";

	return array(
			"cpp"=>$countPerPage,
			"start"=>$startNum,
			"current"=>$currentpage,
			"column"=>$colunms,
			"sortfield"=>$sortField,
			"sorttype"=>$sortType,
			"search"=>$search,
			"searchfield"=>$col_search,
			"order"=>$where_sort
	);
}

/**
 * upload_img() 图片上传
 * @param	string $path 上传路径
 * @param	string $file_name 上传图片原始名称
 * @param	string $file_size 上传图片大小
 * @param	string $file_tmp 上传图片临时路径
 * @param	string $post_id 上传图片原所属的ID
 * @param	string $post_name 上传图片原所属名称
 * @param	string $max_size 容量限制
 * @return	string $pics 图片名称 false上传失败
 */
function upload_img($path, $file_name, $file_size, $file_tmp, $post_id="", $post_name="", $max_size=""){
	$img_name='';
	if($max_size==''){
		$max=ini_get("post_max_size")*1024000;
	}else{
		$max=$max_size*1024000;
	}
	
	if($post_id!=''){
		$img_name=$post_name;
	}
	$suffix= strtolower(strstr($file_name, '.'));
	if($suffix != '.gif' && $suffix != '.jpg' && $suffix != '.jpeg' && $suffix != '.png' && $suffix != '.bmp'){
		return false;    //图片格式错误
	}
	if($file_size>$max){
		return false;    //图片超过上传最大值
	}
	$upload_path=ROOT_PATH.'/'.$path;		//布局图片上传路径
	if(!file_exists($upload_path)){
		CO_Utils::CreateDir($upload_path,0755);
	}
	$rand = rand(100, 999);	//随机数
	if($img_name!=''){
		$pics = $img_name;
	}else{
		$pics = date("YmdHis") . $rand .$suffix;
	}
	$pic_path = $upload_path.'/'.$pics;
	$upload = move_uploaded_file($file_tmp, $pic_path);
	if($upload){
		return $pics;
	}else{
		return false;  //上传失败
	}
}

/**
 * upload_model() 模型上传
 * @param  $path string 上传路径
 * @param  $model_name string 模型名称
 * @param  $model_size string 模型大小
 * @param  $model_tmp string 模型上传临时路径
 * @param  $max_size string 容量限制
 */
function upload_model($path,$model_name,$model_size,$model_tmp,$max_size=''){
	if($max_size==''){
		$max=ini_get("post_max_size")*1024000;
	}else{
		$max=$max_size*1024000;
	}
	//模型格式
	$suffix= strtolower(strstr($model_name, '.'));
	if($suffix != '.gltf' && $suffix != '.fbx' && $suffix !='.bin'){
		return false;    
	}
	if($model_size>$max){
		return false;    //模型超过上传最大值
	}
	$upload_path=ROOT_PATH.'/'.$path;		//模型上传路径
	if(!file_exists($upload_path)){
		CO_Utils::CreateDir($upload_path,0755);
	}

	$pics = $model_name;
	$pic_path = $upload_path.'/'.$pics;
	$upload = move_uploaded_file($model_tmp, $pic_path);
	if($upload){
		return $pics;
	}else{
		return false;  //上传失败
	}
}

/**
 * upload_map() 上传模型贴图
 * @param  $path string 上传路径
 * @param  $map_name string 贴图名称
 * @param  $map_size string 贴图大小
 * @param  $map_tmp string 贴图临时路径
 * @param  $max_size string 容量限制
 */
function upload_map($path,$map_name,$map_size,$map_tmp,$max_size=''){
	if($max_size==''){
		$max=ini_get("post_max_size")*1024000;
	}else{
		$max=$max_size*1024000;
	}
	$suffix= strtolower(strstr($map_name, '.'));
	if($suffix != '.jpg' && $suffix != '.jpeg' && $suffix != '.png' && $suffix != '.bmp'){
		return false;    //图片格式错误
	}
	if($map_size>$max){
		return false;    //图片超过上传最大值
	}
	$upload_path=ROOT_PATH.'/'.$path;		//上传路径
	if(!file_exists($upload_path)){
		CO_Utils::CreateDir($upload_path,0755);
	}
	$pics = $map_name;
	$pic_path = $upload_path.'/'.$pics;
	$upload = move_uploaded_file($map_tmp, $pic_path);
	if($upload){
		return $pics;
	}else{
		return false;  //上传失败
	}
}

/**
 * upload_zip()  上传zip模型压缩包
 * @param  $path string 上传路径
 * @param  $zip_name string zip包名称
 * @param  $zip_size string zip包大小
 * @param  $zip_tmp string zip包临时目录
 * @param  $max_size string 上传大小限制
 */
function upload_zip($path,$zip_name,$zip_size,$zip_tmp,$max_size=''){
	if($max_size==''){
		$max=ini_get("post_max_size")*1024000;
	}else{
		$max=$max_size*1024000;
	}
	
	$suffix= strtolower(strstr($zip_name, '.'));

	if($suffix != '.zip' && $suffix !='.ZIP'){
		return false;    //图片格式错误
	}
	$upload_path=ROOT_PATH.$path;		//上传路径

	if(!file_exists($upload_path)){
		CO_Utils::CreateDir($upload_path,0755);
	}
	$rand = rand(100, 999);	//随机数
	$pics = date("YmdHis") . $rand .$suffix;
	$pic_path = $upload_path.'/'.$pics;
	$upload = move_uploaded_file($zip_tmp, $pic_path);
	if($upload){
		return $pics;
	}else{
		return false;  //上传失败
	}
}


//获取目录下的GLTF文件
function getModelGltf($path){
	$filesnames = scandir($path);
	$model = '';
	foreach ($filesnames as $file){
		$suffix= strtolower(strstr($file, '.'));
		if($suffix=='.gltf' || $suffix =='.GLTF'){
			$model = $file;
			break;
		}
	}
	return $model;
}



/**
 * delDir()依次删除文件夹下的所有文件
 * @param unknown_type $dir
 */
function delDir($dir){
	//先删除目录下的文件：
	if(!is_dir($dir)){
		return true;exit();
	}
	$dh=opendir($dir);
	while ($file=readdir($dh)) {
		if($file!="." && $file!="..") {
			$fullpath=$dir."/".$file;
			if(!is_dir($fullpath)) {
				unlink($fullpath);
			} else {
				deldir($fullpath);
			}
		}
	}
	closedir($dh);
	//删除当前文件夹：
	if(rmdir($dir)) {
		return true;
	} else {
		return false;
	}
}


function delUpdateModel($dir,$zip){
	if(!is_dir($dir)){
		return false;exit;
	}
	$dh = opendir($dir);
	while($file = readdir($dh)){
		$fullpath=$dir."/".$file;
		if($file!=$zip&&$file!='custom'){
			unlink($fullpath);
		}
	}
	closedir($dh);
	return true;
}


//根据材质类型获取材质信息
function getMaterialType($id){
	if($id=='') return false;
	$type = array('type'=>'','table'=>'','id'=>'','name'=>'');
	switch ($id){
		case MeshBasicMaterial :
			$type=array(
			'type'=>HOUSEConfig::$MeshBasicMaterial,
			'table'=>HOUSEConfig::_table_house_material_mbm,
			'id'=>$id,
			'name'=>'基础材质'
			);
			break;
		case MeshLambertMaterial:
			$type=array(
			'type'=>HOUSEConfig::$MeshLambertMaterial,
			'table'=>HOUSEConfig::_table_house_material_mlm,
			'id'=>$id,
			'name'=>'朗伯材质'
			);
			break;
		case MeshPhongMaterial:
			$type=array(
			'type'=>HOUSEConfig::$MeshPhongMaterial,
			'table'=>HOUSEConfig::_table_house_material_mpm,
			'id'=>$id,
			'name'=>'Phong材质'
			);
			break;
		case MeshStandardMaterial:
			$type=array(
			'type'=>HOUSEConfig::$MeshStandardMaterial,
			'table'=>HOUSEConfig::_table_house_material_msm,
			'id'=>$id,
			'name'=>'金属材质'
			);
			break;
		default:
			$type = array('type'=>'','table'=>'','id'=>'','name'=>'');
	}
	return $type;
}
//获取IP
function getIP() {
	if (getenv('HTTP_CLIENT_IP')) {
		$ip = getenv('HTTP_CLIENT_IP');
	}
	elseif (getenv('HTTP_X_FORWARDED_FOR')) {
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif (getenv('HTTP_X_FORWARDED')) {
		$ip = getenv('HTTP_X_FORWARDED');
	}
	elseif (getenv('HTTP_FORWARDED_FOR')) {
		$ip = getenv('HTTP_FORWARDED_FOR');

	}
	elseif (getenv('HTTP_FORWARDED')) {
		$ip = getenv('HTTP_FORWARDED');
	}
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
/**
 * checkonline 判断用户是否登录
 */
if (!function_exists('checkonline'))
{
	function checkonline($uid)
	{
		if($uid==''){
			show_msg('请先登录！','/Login');
		}
	}
}
?>
