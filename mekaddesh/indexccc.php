<?php
$to = "ardaniramirez@gmail.com";
$subject = "freehostiamail";
$txt = "Hello world!";
$headers = "From: webmekaddesh@iglesiamekaddesh.org" . "\r\n";

mail($to,$subject,$txt,$headers);
echo "Welcome!";
?>





