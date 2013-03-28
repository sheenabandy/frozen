<?php

if(isset(
	$_POST['submit']
	)){
		$username = htmlentities($_POST['user']);
		$username = str_replace(array('\'', '"'),'',$username);
		$password = htmlentities($_POST['password']);
		$password = str_replace(array('\'', '"'),'',$password);
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