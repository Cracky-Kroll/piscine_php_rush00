<?php
	header("Location: index.html");
	function validate($rep) {
    	$SUCCESS = "OK\n";
    	$ERROR = "ERROR\n";
    	if ($rep === 1)
        	echo $SUCCESS;
    	else
        	echo $ERROR;
	}
	$path = "../private/";
	$file = $path."passwd";
	if ($_POST['login'] != NULL && $_POST['passwd'] != NULL && $_POST['submit'] == "OK"){
    	if (!file_exists($path))
        	mkdir($path);
    	if (!file_exists($file))
        	file_put_contents($file, null);
    	$passwd = unserialize(file_get_contents($file));
    	if ($passwd)
        	foreach ($passwd as $elem)
            	if ($elem['login'] == $_POST['login'])
                	return (validate(0));
    	$tab["login"] = $_POST['login'];
    	$tab["passwd"] = hash('whirlpool', $_POST['passwd']);
    	$passwd[] = $tab;
    	file_put_contents($file, serialize($passwd));
    	return (validate(1));
	}
	else
    	return (validate(0));
?>