<?php
global $userInfos;
$userInfos = array(
	'davidnk' => '123',
	'd1' => '333'
);

class LoginHelper{
	
	public function __construct(){
		
	}
	
	public function login( $username = '' , $passwd = ''){
		$username = strval( $username );
		$passwd  = strval( $passwd );
		global $userInfos;
		if ($userInfos[$username] == $passwd ){
			return true;
		} else {
			return false;
		}
	}
	
	public function register(){
		echo 123;
	}
}


$log = new LoginHelper();
print_r( $log->login( 'davidnk' , '123'));
?>