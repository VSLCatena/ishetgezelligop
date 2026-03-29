<?php
//initiation
$filename = '../message_kader.txt';
if (file_exists($filename)) {
    $last_mod_message= date ("H:i", filemtime($filename));
	$conf['text']=file_get_contents($filename, true);
}

$filename = './counter.txt';
if (file_exists($filename)) {
    $last_mod_counter= date ("H:i", filemtime($filename));
	$conf['count']=file_get_contents($filename, true);
}


//
$conf['pin']=1234;

//to get from JS
$json_pin=filter_input(INPUT_POST,'pin');
$json_text=filter_input(INPUT_POST,'text');
$json_count=filter_input(INPUT_POST,'count');
$pin = json_decode($json_pin);
$count = json_decode($json_count);
	$json_text = stripslashes($json_text);
    $json_text = strip_tags($json_text);
    $json_text = htmlentities($json_text);
$text = filter_var($json_text, FILTER_SANITIZE_STRING);
#var_dump($_POST,$json_text, $text,$json_pin,$pin,$json_count, $count);



if ($conf['pin'] != $pin) {
	//fail okedoei
}



if ($conf['pin'] == $pin) {
	//success
	$myfile = fopen("../message_kader.txt", "w");
	$conf_write = $text;
	fwrite($myfile, $conf_write);
	fclose($myfile);

	$myfile = fopen("./counter.txt", "w");
	$conf_write = $count;
	fwrite($myfile, $conf_write);
	fclose($myfile);

}


$filename = '../message_kader.txt';
if (file_exists($filename)) {
    $last_mod_message= date ("H:i", filemtime($filename));
	$text=file_get_contents($filename, true);
}

$filename = './counter.txt';
if (file_exists($filename)) {
    $last_mod_counter= date ("H:i", filemtime($filename));
	$count=file_get_contents($filename, true);
}

//to be posted to JS
$responseArray = array();
$responseArray[0] = $pin;
$responseArray[1] = $text;
$responseArray[2] = $count;

echo json_encode($responseArray);


?>
      
      
      
      
     