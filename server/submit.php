<?php
	
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$platform=$_REQUEST['platform'];
$idea =$_REQUEST['idea'];

if (($name=="") || ($email=="") || ($platform=="") || ($idea=="")) {
    //page with error
    include 'blank.php';
}
else {        
    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject="Project HM App Idea";
    $message = "Person: " . $name . "\nPlatform: " . $platform . "\nIdea: " . $idea;
    mail("guptasa@horacemann.org", $subject, $message, $from);
    //page with success
    include 'submitted.php';
}  

?>