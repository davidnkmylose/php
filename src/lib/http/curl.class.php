<?php

	$ch = curl_init();
	curl_setopt( $ch , CURLOPT_URL , "http://www.baidu.com");
	curl_setopt( $ch , CURLOPT_RETURNTRANSFER , 1);
	curl_setopt( $ch ,CURLOPT_HEADER , 0);
	$output = curl_exec( $ch );
	var_dump(curl_getinfo( $ch ));
	curl_close( $ch );
	//echo $output;
?>
