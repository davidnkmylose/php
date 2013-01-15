<?php
	$email = 'caopuwei@baidu.com';
	preg_match( '/[A-Za-z0-9_]*@[a-zA-Z0-9._]*/i' , $email , $matches );
	var_dump( $matches )
?>