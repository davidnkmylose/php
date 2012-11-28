<?php
    function getZhidaoUrlByQid( $qid = 0 ){
        $qid = trim( $qid );    
        return "http://zhidao.baidu.com/question/$qid.html"; 
    }

    function getPageByBaidu( $title = "" ){
        $page = file_get_contents( $title );
        return $page;
    }

    $text = file_get_contents("data.json");
    $questions = explode("\n",$text);
    foreach( $questions as $question ){
        $data = json_decode( $question );
        $url = getZhidaoUrlByQid( $data->qid );
        file_put_contents( $data->qid.".html" , getPageByBaidu("http://www.baidu.com/s?wd=".$data->title));
    }
?>
