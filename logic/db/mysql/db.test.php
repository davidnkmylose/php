<?php
	require_once("DB.class.php");
	$db = new DBHelper();
	//$db->insert("insert into question(title ,author) value( '下雪如何防止滑倒','大为' )");
	$question = $db->query("select qid , title , author from question");
	//echo json_encode($question);
	$data = json_decode(file_get_contents("result.data"));
	$sql = array();
	foreach( $data as $key => $value){
		array_push( $sql , "('".$key."',".$value.")");
	}
	$sql = "insert into pv( url , pv ) values ".join( "," , $sql );
	$db->insert( $sql );
?>
