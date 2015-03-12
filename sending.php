<?php
// always running 

$state; // global ?? 

while(true) {
  	$q = getPeer($state);                 
  	$s = prepareMsg($state, $q);       
  	$url = lookup($q);
  	send ($url, $s);

	  $n = 5; // seconds               
  	sleep($n); 
}

function getPeer($state) {
    // selects a neighbor from a list of peers
	
}

function prepareMsg($state, $q) {
    // return a message to propagate to a specific neighbor; randomly choose message type (rumor or want) and which message
	
}

function lookup($q) {
    // 
	
}

function send($url, $s) {
    // make HTTP POST to send message
	
}

?>
