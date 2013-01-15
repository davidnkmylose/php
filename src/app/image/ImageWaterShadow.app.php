<?php

/**
 * 	图片增加水印和数字
 */


class ImageWaterShadow{
	
	private $path = 'D:/www/php/src/app/image/test.png';
	
	public function __construct(){
	}
	
	public function addWaterShadow(){
		$image = imagecreatefrompng($this->path);
		$white = imagecolorallocate($image, 0 ,0 ,0);
		$font = 'C:/WINDOWS/Fonts/simhei.ttf';
		imagettftext($image, 20,0,160,460, $white, $font, "斯蒂芬斯蒂芬");
		//header('Content-Disposition: Attachment;filename=image.png');
		header('Content-Type: image/png');
		//ob_start();
		imagepng($image);
		$contents = ob_get_contents();
		ob_end_clean();
		//$fh = fopen("result.png","a+");
    	//fwrite( $fh, $contents );
		//fclose( $fh );
		echo $contents;
	}
	
}

/**
 * description
 * @var unknown_type
 */

$water = new ImageWaterShadow();
$water->addWaterShadow();
?>