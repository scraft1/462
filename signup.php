<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>

<h1>Sign up!</h1>

<form method="post" action="">
Name: <input name="name" type="text">
<input type="submit" name='signup' value="Register">
</form>

</body>
</html>

<?php
include 'php/logic.php';
ini_set('display_errors', 'On');

if(isset($_GET['code'])){ // user accepted authorization

	if(!empty($_POST['name'])){
		ini_set('display_errors', 'On');
		$myfile = fopen("../secret.txt", "r") or die("Unable to open file!");
		$secret = fread($myfile,filesize("../secret.txt"));
		fclose($myfile);
		$secret = rtrim($secret);

		$url = 'https://foursquare.com/oauth2/access_token?client_id='.$clientId
		.'&client_secret='.$secret.'&grant_type=authorization_code&redirect_uri=http://'.$host.'&code='.$_GET['code'];		
		$res = file_get_contents_curl($url);
		$obj = json_decode($res);
		
		addUser($_POST['name'], $obj->access_token);
		
		$string = '<script type="text/javascript">';
		$string .= 'window.location = "http://' . $host . '"';
		$string .= '</script>';

		echo $string;
	}
}
else{ // denied authorization
	$string = '<script type="text/javascript">';
	$string .= 'window.location = "http://' . $host . '"';
	$string .= '</script>';

	echo $string;
}
?>
