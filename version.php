<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

if($_SERVER['HTTP_ACCEPT'] == 'application/vnd.byu.cs462.v1+json'){
	$data = array("version" => "v1");
	header('Content-Type: application/json');
	echo json_encode($data);
}
else if($_SERVER['HTTP_ACCEPT'] == 'application/vnd.byu.cs462.v2+json'){
	$data = array("version" => "v2");
	header('Content-Type: application/json');
	echo json_encode($data);
}
else{
	echo "invalid accept header";
}

?>


