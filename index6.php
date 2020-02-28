<?php


$file = fopen('ips.json');

if( file_exists($file)){

	$jsonData = file_get_contents($file);
	$data = json_decode($jsonData, true);
	$ip = $_SERVER['REMOTE_ADDR'] ;

	if(array_key_exists($ip, $data)){

		$data[$ip]++;

	} 

	else {
		$data[$ip] =1;
	}
	

}

else $data[$ip] = 1;


$jsonData = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents($file, $jsonData);

?>
