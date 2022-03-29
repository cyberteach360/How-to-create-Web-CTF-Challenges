<?php
 
if ($_SERVER["HTTP_USER_AGENT"] === base64_decode("Q3liZXJfQmFuZ2xhX0Jyb3dzZXI=")){
   include('flag.php');
        print $flag;
}else{show_source(__FILE__);}

?>
