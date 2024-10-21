<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);
 $from="mail@ethioptec.com";
 $to="ethiomisgie@gmail.com";
 $subject="The first email";
 $message="This is the first email from my websute";
 $header="From: ".$from;
 mail($to,$subject,$message,$header);
 echo "the email is send tosuccessfully";
 ?>