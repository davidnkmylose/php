<?php
    
    require_once("http.class.php");

    $hp = new HttpHelper();
    echo $hp->get( "http://www.baidu.com" );
?>
