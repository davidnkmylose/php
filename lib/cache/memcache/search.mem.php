<?php
	$mem = new Memcache();
	$mem->addServer("127.0.0.1" , 11211 , true , 1 , 1 , 5 , true);
	echo $mem->get("key1")."\n";
	echo $mem->get("key2")."\n";
	echo $mem->get("key3");
?>
