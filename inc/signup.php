<?php

	// Configuration 
    $to = "scott@electionalerts.org"; // Your email address. 
    $subject = "New signup"; // Email subject line 
    
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name']; 
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email"; 

    $body = "Details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
