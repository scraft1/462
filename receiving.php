<?php

// include 'sending.php';
var rumor_list;
var work_queue;


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	reset($_POST);
	$type = key($_POST);

	if($type == 'Rumor'){
		store($t);
	} else if ($type == 'Want'){
		addWorkToQueue($_POST); // global work queue?? 
		foreach ($work_queue as $w) {
			$s = prepareMsg($state, $w);
			$url = getUrl($w);
			send($url, $s);
			$state = update($state, $s); // global state ?? 
		}
	}
}

function getMessage() {
    // 
	$json = file_get_contents('php://input');
	$message = json_decode($json);
	return $message;
}

function isRumor($t) {
    // 
	$json = json_decode($t);
	$propertyName = key(get_object_vars($object));
	if($propertyName == "Rumor"){
		return true;
	}else{return false;}
}

function isWant($t) {
    // 
	$json = json_decode($t);
	$propertyName = key(get_object_vars($object));
	if($propertyName == "Want"){
		return true;
	}else{return false;}
}

function store($t) {
    // 
	$new = Rumor();
	array_push($work_queue, $new);
}

function addWorkToQueue($t) {
    // 
	
}

function getUrl($w) {
    // 
	
}

function update($state, $s) {
    // update state of who has been sent what
	
}

class Rumor {
    public $messageId;
    public $originator;
    public $text;
    public $endPoint;

    function Rumor($id, $or, $tx, $ep){
    	$this->messageId = $id;
    	$this->originator = $or;
    	$this->text = $tx;
    	$this->endPoint = $ep;
    }

    function get_text ( ) {
        return $this->text;
    }

    function set_name ($new_name) {
        $this->name = $new_name;
    }
}

?>
