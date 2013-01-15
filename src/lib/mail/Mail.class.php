<?php
/**
 *  Mail Utils
 *  mail(to,subject,message,headers,parameters)
 */

    class Mail{
        
        public function __construct(){
        
        }
        
        public function send(){
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=utf-8\r\n";
            $headers .= "Content-Transfer-Encoding: 8bit\r\n";
            $subject = "=?UTF-8?B?".base64_encode("主题邮件 ")."?=";
            mail("caopw84@gmail.com",$subject,"消息",$headers);
        
        }

        public function sendHtml(){
        
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .= "Content-Transfer-Encoding: 8bit\r\n";
            $subject = "=?UTF-8?B?".base64_encode("主题邮件 ")."?=";
            $html = file_get_contents("home.html");
            mail("caopw84@gmail.com",$subject,$html,$headers);
        
        }

    }

    $mail = new Mail();
    $mail->sendHtml();
?>
