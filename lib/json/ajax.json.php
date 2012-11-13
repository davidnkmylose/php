<?php
    header("Content-type: application/json");
    $data = array(
        'ww' => array(
            'ff'=>'fww' 
        ),
        'name' => 'davidnk',
        'address' => 123
    );
    $handle = fopen("json.data","r");
    $jsonString = "";
    while( !feof($handle) ){
        $jsonString .= fread( $handle , 1024 );
    }
    echo "jsonString : ".$jsonString."\n";
    $obj = json_decode($jsonString );
    var_dump( $obj );
    echo json_encode($data);
    fclose( $handle );
?>
