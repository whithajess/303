<?
	setcookie('user', '', time() - 3600);
	header("Location: notloggedin.php");
?>


