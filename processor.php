<?php

if(isset(
	$_POST['submit']
	)){
		$username = htmlentities($_POST['user']);
		$username = str_replace(array('\'', '"'),'',$username);
		$password = htmlentities($_POST['password']);
		$password = str_replace(array('\'', '"'),'',$password);

		$userinfo = mysql_query("select * from sheenaba_frozen where username='$username'")
		or die(echo "user does not exist";);

	}
else if(isset(
	$_POST['register']
	))
	{
		$username = htmlentities($_POST['user']);
		$username = str_replace(array('\'', '"'),'',$username);
		$email = htmlentities($_POST['email']);
		$email = str_replace(array('\'', '"'),'',$email);
		$password = htmlentities($_POST['password']);
		$password = str_replace(array('\'', '"'),'',$password);


	}
else {
	header('location: /frozen/login.php');
}
?>