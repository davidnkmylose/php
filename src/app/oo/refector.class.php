<?php

class Test{
	
	public function aa(){
		echo 'in aa';
	}
	
	public function bb(){
		
	}
}

$result = get_class_methods('Test');
$obj = new Test();
$obj->$result[0](); 
?>