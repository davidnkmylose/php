<?php

	$conn = mysqli_connect('localhost','davidnk','','newknow');
	$sql = "select * from question limit 3";
	$rows = mysqli_query( $conn , $sql );
	$result = array();
	while( $row = mysqli_fetch_assoc($rows) ){
		array_push($result , $row);
	}
	print_r( $result );
?>
