<?php
	if(!$_POST['username'] && !$_POST['password']){
	header("Location: notloggedin.php");
	}
	else{
	header("Location: loggedin.php");
    setcookie('user', $_POST['username'], time() + 3600 , '/');
	}
?>