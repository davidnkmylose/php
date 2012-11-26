<?php
    
    require_once("http.class.php");

    $hp = new HttpHelper();
    $data = array(
        'name=caopuwei',
        'passwd=1234567'
    );
    $postData = implode('&',$data);
    $hp->post("http://fe.baidu.com/~caopuwei/php/lib/http/post.test.php" , $postData);
    //echo $hp->get( "http://www.baidu.com" );
?>
