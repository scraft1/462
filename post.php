<html>
<body>

<form action="" method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

</body>
</html>

<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// POST: print request headers, query string, body value  

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo "QUERY STRING: ".$_SERVER['QUERY_STRING']."<br/>\n";
	
	$headers = apache_request_headers();

	foreach ($headers as $header => $value) {
		echo "$header: $value <br />\n";
	}
	
	$entityBody = file_get_contents('php://input');
	
	echo "BODY: ".$entityBody;
}

?>
