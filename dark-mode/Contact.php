<?php
         $to = "fromtome99@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>Name : $_POST["name"];<br/>E-Mail : $_POST["email"];<br/>Message : $_POST["message"]</h1>";
         
         $header = "From:fromtome99@gmail.com \r\n";
         $header .= "Cc:fromtome99@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>