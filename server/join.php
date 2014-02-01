<?php
	
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$qualif=$_REQUEST['sospecial'];

if (($name=="") || ($email=="")) {
    //page with error
    include 'blank.php';
}
else {        
    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject="Project HM Join Request";
    $message = "Person: " . $name . "\nQualifications: " . $qualif;
    mail("guptasa@horacemann.org", $subject, $message, $from);
    //page with success
    include 'joined.php';
}  

?>