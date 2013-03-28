<?php

if(isset(
	$_POST['submit']
	)){
		$username = $_POST['user'];
		$password = $_POST['password'];
	}
else if(isset(
	$_POST['register']
	))
	{
		$username = $_POST['user'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	}
else {
	header('location: /frozen/login.php');
}
?>