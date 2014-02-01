<?php
	
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$qualif=$_REQUEST['sospecial'];

if (($name=="") || ($email=="") || ($qualif=="")) {
    //page with error
    echo "
    
    <html>
	<head>
		<title>
		Submit Error: Blank
		</title>
	<link rel='stylesheet' href='../css/postsub.css'>
	<script>
		function clicky() {
			window.location = '../';
		}
	</script>
	</head>

	<body ontouchend='clicky()'>
		<div id='container'><div id='center'>
		<h1>There was an issue with your form.</h1>
		<p>Please make sure you fill out all of the fields next time.  Tap anywhere to return to the homescreen.</p>
		</div></div>
	</body>
	</html>
    
    ";
}
else {        
    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject="Project HM Join Request";
    $message = "Person: " . $name . "\nQualifications: " . $qualif;
    mail("guptasa@horacemann.org", $subject, $message, $from);
    //page with success
    echo "
    
    <html>
	<head>
		<title>
		Thank You
		</title>
	<link rel='stylesheet' href='../css/postsub.css'>
	<script>
		function clicky() {
			window.location = '../';
		}
	</script>
	</head>

	<body ontouchend='clicky()'>
		<div id='container'><div id='center'>
		<h1>Thank you for your application.</h1>
		<p>We will review your message and contact you soon.  Tap anywhere to return to the homescreen.</p>
		</div></div>
	</body>
	</html>
    
    ";
}  

?>