<?php
	$path = "../private/";
	$filechat = $path."chat";
	flock($filechat, LOCK_EX);
	$chat = unserialize(file_get_contents($filechat));
	flock($filechat, LOCK_UN);
	date_default_timezone_set("Europe/Paris");
	foreach ($chat as $key => $elem){
    	echo '['.date("H:i",$elem["time"]).'] <b>'.$elem["login"].'</b>: '.$elem["chat"].'<br />';
    }
?>