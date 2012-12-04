<?php
    $url = "http://wenwen.soso.com/z/q415702180.htm?w=%C1%AA%CF%EB&spi=1&sr=2&w8=%E8%81%94%E6%83%B3&qf=20&rn=250669&qs=4&sid=ac1b180b0001716850bdab49c8a28d1c&uid=9724194404&ch=w.search.2";
    try{
        $dom = new DOMDocument();
        $dom->loadHTMLFile($url);
        $dom->preserveWhiteSpace = false;
        $title = $dom->getElementById('questionTitle');
        $desc = $dom->getElementById('questionContent');
        echo trim($title->textContent)."\n"; 
        echo trim($desc->textContent); 
    }catch(Exception $e){
    }
?>
