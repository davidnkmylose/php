<?php

    class Mail{

        public $url;
        private $subject;
        private $content;

        public function __construct( $url='' , $subject='' , $content='' ){
            $this->url = $url;
            $this->subject = $subject;
            $this->content = $content;
            $this->fw = "jing";
        }
        
        function __set( $prop , $value ){
            if( isset($this->$prop ) ){
                echo $prop."  isset";
            } else {
                $this->$prop = "wwww";
                echo $prop."  is no set ";
            }    
        }

        function __get( $prop ){
            return 1;
        }

        public function pt(){
            $this->url = "dw@gmail.com";
        }
    }
    
    $mail = new Mail("davidnk@gmail.com" , "zhuti" , "neirong");
?>
