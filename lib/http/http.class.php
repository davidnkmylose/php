<?php
    
    class Httphelper{
        
        private $ch = null;

        public function __construct(){
            
            
        }

        public function get( $url="" ){
            $this->ch = curl_init();
            curl_setopt($this->ch, CURLOPT_URL, $url);
            curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($this->ch, CURLOPT_HEADER, 0);
            $output = curl_exec( $this->ch );
            curl_close( $this->ch );
            return $output;
        }

        public function post( $url = "" , $params ){
            $this->ch = curl_init();
            curl_setopt( $this->ch , CURLOPT_POST , 1);
            curl_setopt( $this->ch , CURLOPT_URL , $url);
            curl_setopt( $this->ch , CURLOPT_POSTFIELDS , $params );
            ob_start();
            curl_exec( $this->ch );
            $result = ob_get_contents();
            ob_end_clean();
            echo $result;
        }
    
    }
    
?>
