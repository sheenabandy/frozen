<?php

if(isset(
	$_POST['submit']
	)){
		$username = htmlentities($_POST['user']);
		$password = htmlentities($_POST['password']);
	}
else if(isset(
	$_POST['register']
	))
	{
		$username = htmlentities($_POST['user']);
		$email = htmlentities($_POST['email']);
		$password = htmlentities($_POST['password']);
	}
else {
	header('location: /frozen/login.php');
}
?>