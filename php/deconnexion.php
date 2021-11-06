<?php
	session_start();
	session_destroy();

	
	if (isset($_COOKIE["email"]) AND isset($_COOKIE["motdepass"]))
    {
		setcookie("email", '', time() - 3600);
		setcookie("motdepass", '', time() - 3600);
	}
 
	header('location:../index.php');
 
?>