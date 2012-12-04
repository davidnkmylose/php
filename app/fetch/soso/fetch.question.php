<?php
    $html = file_get_contents("http://wenwen.soso.com/z/q383900694.htm");
    preg_match('/<h4 id="questionTitle">(.*)<\/h4>/i' , $html , $title);
    preg_match('/<div class="question_con" id="questionContent">((.|\n)*?)<\/div>/i' , $html , $desc);
    var_dump(trim($title[1]));
    var_dump(trim($desc[1]));
?>
