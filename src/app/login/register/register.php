<?php
	
	function update( $name , $passwd , $age=0){
		$conn = mysqli_connect("127.0.0.1","davidnk","","newknow");
		$sql = "insert into user(name , passwd , age) value( '$name' , $passwd , $age)";
		echo $sql."\n";
		mysqli_query( $conn , $sql );
		mysqli_close( $conn );
	}

	$name = "";//$_POST["name"];
	$passwd = 111;//$_POST["passwd"];
	if(empty($name)  && empty($passwd)){
		update( $name , $passwd);
	
	} else {
		echo "empty check name : ".empty($name)."	passwd:".empty($passwd);
	}
?>
