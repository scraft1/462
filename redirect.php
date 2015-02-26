<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// hard code redirect based on query string 

if($_SERVER['QUERY_STRING'] == "google"){
	$newURL = "https://www.google.com";
	header('Location: '.$newURL);
}

if($_SERVER['QUERY_STRING'] == "byu"){
	$newURL = "http://www.byu.edu";
	header('Location: '.$newURL);
}

?>
