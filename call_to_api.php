<?php
	$url="http://localhost/api_data/api.php";
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_URL,$url);
	echo curl_exec($ch);
	curl_close($ch);
?>