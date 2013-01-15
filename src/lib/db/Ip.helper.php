<?php

$ip = "255.255.255.255";

//echo bindec(decbin(ip2long($ip)));
//echo long2ip(3232235521);
//2147483647
//echo decbin(3232235521).'\n';
//echo decbin(-3232235521);

class IPHelper {
	
	public function __construct(){
	}
	
	public static function ip2long( $ip ){
		return bindec(decbin(ip2long($ip)));
	}
	
}

echo IPHelper::ip2long($ip);

?>