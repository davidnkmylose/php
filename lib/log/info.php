<?php
	$filepath = "access.log";
	$handler = fopen( $filepath , "r");
	$fsize = filesize( $filepath );
	$index = 1;
	if( !file_exists ("rs") ){
		mkdir( "rs" );
	}
	while(!feof( $handler )){
		$log = fread( $handler , ceil($fsize/10) );
		file_put_contents( "rs/".$index."-log.rs" , $log );
		$index++;
	}
	fclose( $handler );
?>
