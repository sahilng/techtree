<?php
	
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$platform=$_REQUEST['platform'];
$idea =$_REQUEST['idea'];

if (($name=="") || ($email=="") || ($platform=="") || ($idea=="")) {
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
    $subject="Project HM App Idea";
    $message = "Person: " . $name . "\nPlatform: " . $platform . "\nIdea: " . $idea;
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
		<h1>Thank you for your app idea.</h1>
		<p>We will review your app and contact you if we decide to develop it.  Tap anywhere to return to the homescreen.</p>
		</div></div>
	</body>
	</html>
    
    ";
}  

?>