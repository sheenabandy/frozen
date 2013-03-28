<?php

if(isset(
	$_POST['submit']
	)){
		$username = htmlentities($_POST['user']);
		$username = str_replace(array('\'', '"'),'',$username);
		$password = htmlentities($_POST['password']);
		$password = str_replace(array('\'', '"'),'',$password);
		$connect = mysql_connect("localhost","sheenaba","v120b0PtBw","sheenaba_frozen");
		$userinfo = mysql_query("select * from sheenaba_frozen where username='$username'")
		or die();
		while($user = mysql_fetch_array($userinfo)){
			if($password == $user['password']){echo "success!";}
			else {
			echo "invalid username or password";
			}
		}
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