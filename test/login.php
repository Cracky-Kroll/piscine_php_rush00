<?php
	include 'auth.php';
	session_start();
	function not_loggued() {
    	$_SESSION['loggued_on_user'] = "";
    	return ("ERROR\n");
	}
	function loggued() {
    	echo '';
	}
	if ($_POST['login'] != NULL && $_POST['passwd'] != NULL){
    	if (auth($_POST['login'], $_POST['passwd'])){
        	$_SESSION['loggued_on_user'] = $_POST['login'];
            	loggued();
    	}
    	else{
        	echo not_loggued();
    	}
	}
	else
    	echo not_loggued();
?>
