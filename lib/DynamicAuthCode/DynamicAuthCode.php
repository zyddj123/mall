<?php
/**
 * mw动态验证码服务
 * 用于生成动态验证码图片
 *
 * @package
 * @author			B.I.T
 * @copyright		Copyright (c) 2016 - 2017.
 * @license
 * @link
 * @since				Version 1.17
 */

// ------------------------------------------------------------------------

class DynamicAuthCode{
 	private $default_code_len = 4;					//默认验证码长度
 	private $default_code_width = 160;			//默认验证码图片宽度
 	private $default_code_height = 40;			//默认验证码图片高度
 	
	public $code_width=0;								//验证码图片宽度
	public $code_height=0;							//验证码图片高度
	public $code;
	
	public $image_resource=null;					//验证图片resource对象
	
	/**
	 * 构造函数
	 * @param	code string 指定生成验证码图片中的字母
	 */
	public function __construct($code='',$code_width=0,$code_height=0){
		//如果没指定字符码,则使用随机
		if($code=="") $this->code=self::_getcode();
		else $this->code=$code;
		
		$this->code_len=strlen($this->code);
		
		if($code_width==0) $this->code_width=$this->default_code_width;
		else $this->code_width=$code_width;
		
		if($code_height==0) $this->code_height=$this->default_code_height;
		else $this->code_height=$code_height;
	}
	
	/**
	 * 析构函数
	 */
	public function __destruct(){
		if($this->image_resource!==null) ImageDestroy($this->image_resource);
	}
	
	/**
	 * 生成a~zA~Z0~9之间指定长度的随机码
	 * @param	len int 随机码长度
	 * @return	string 随机码
	 */
	function _getcode($len=0){
		if(!is_int($len) || $len<=0) $len=$this->default_code_len;
		$str="abcdefghkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789";
		$result="";
		for($i=0;$i<$len;$i++){
			$num[$i]=rand(0,52);
			$result.=$str[$num[$i]];
		}
		return $result;
	}
	
	/**
	 * 生成验证码图片
	 */
	function generate(){
		$im_x = $this->code_width;
		$im_y = $this->code_height;
		//创建image对象
		$im = imagecreatetruecolor($im_x,$im_y);
		$text_c = ImageColorAllocate($im, mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
		$tmpC0=mt_rand(100,255);
		$tmpC1=mt_rand(100,255);
		$tmpC2=mt_rand(100,255);
		$buttum_c = ImageColorAllocate($im,$tmpC0,$tmpC1,$tmpC2);
		//填充
		imagefill($im, 16, 13, $buttum_c);
		//指定文字字体
		$font =  realpath(dirname(__FILE__).'/').'/t1.ttf';
	
		for ($i=0;$i<strlen($this->code);$i++)
		{
			$tmp =substr($this->code,$i,1);
			$array = array(-1,1);
			$p = array_rand($array);
			$an = $array[$p]*mt_rand(1,10);//角度
			$size = 28;
			imagettftext($im, $size, $an, 15+$i*$size, 35, $text_c, $font, $tmp);
		}
		$this->image_resource = imagecreatetruecolor ($im_x, $im_y);
		imagefill($this->image_resource, 16, 13, $buttum_c);
		for ( $i=0; $i<$im_x; $i++) {
			for ( $j=0; $j<$im_y; $j++) {
				$rgb = imagecolorat($im, $i , $j);
				if( (int)($i+20+sin($j/$im_y*2*M_PI)*10) <= imagesx($this->image_resource)&& (int)($i+20+sin($j/$im_y*2*M_PI)*10) >=0 ) {
					imagesetpixel ($this->image_resource, (int)($i+10+sin($j/$im_y*2*M_PI-M_PI*0.1)*4) , $j , $rgb);
				}
			}
		}
		//加入干扰像素;
		$count = 160;//干扰像素的数量
		for($i=0; $i<$count; $i++){
			$randcolor = ImageColorallocate($this->image_resource,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			imagesetpixel($this->image_resource, mt_rand()%$im_x , mt_rand()%$im_y , $randcolor);
		}
		
		$rand = mt_rand(5,30);
		$rand1 = mt_rand(15,25);
		$rand2 = mt_rand(5,10);
		for ($yy=$rand; $yy<=+$rand+2; $yy++){
			for ($px=-80;$px<=80;$px=$px+0.1)
			{
				$x=$px/$rand1;
				if ($x!=0)
				{
					$y=sin($x);
				}
				$py=$y*$rand2;
		
				imagesetpixel($this->image_resource, $px+80, $py+$yy, $text_c);
			}
		}
		//销毁image相关资源
		ImageDestroy($im);
	}
}
?>