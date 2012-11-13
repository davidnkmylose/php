<?php

	$mem = new Memcache();
	$is_add = $mem->addServer('127.0.0.1', 11211, true, 1, 1, 15, true);
	$is_set = $mem->set("key1","991");
	$is_set = $mem->set("key2","992");
	$is_set = $mem->set("key3","993");
?>
