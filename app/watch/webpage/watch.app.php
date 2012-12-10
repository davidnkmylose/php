<?php
	$url = "http://zhidao.baidu.com/c/lenovo/mis/answer_system/answer_list/";
	//$url = "http://localhost:8080/php/app/watch/webpage/test.php";
	//$url = "http://zhidao.baidu.com/";
	$ch = curl_init();	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch , CURLOPT_URL  , $url );
	$cookieString = file_get_contents("cookie_zhidao");
	
	curl_setopt( $ch , CURLOPT_COOKIE , $cookieString );
	$html = curl_exec( $ch );
	
	//echo curl_getinfo( $ch , CURLINFO_HTTP_CODE );	
	curl_close( $ch );
	unset( $cookies );
	unset( $cookieString );
	echo $html;
?>
