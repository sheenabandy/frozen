<?php
session_start();

if(isset(
	$_POST['submit']
	)){
		$username = htmlentities($_POST['user']);
		$username = str_replace(array('\'', '"'),'',$username);
		$password = htmlentities($_POST['password']);
		$password = str_replace(array('\'', '"'),'',$password);
		$connect = mysql_connect("localhost","sheenaba","v120b0PtBw");
		$selectdb = mysql_select_db("sheenaba_frozen") or die();
		$userinfo = mysql_query("select * from frozen where username='$username'");
		if (mysql_num_rows($userinfo)!=0) {
			while($user = mysql_fetch_array($userinfo)){
				if($password == $user['password'])
				{

				$_SESSION['loggedin']="1";
				$_SESSION['admin']=$user['admin'];

				}
				else {
				echo "invalid username or password";
				}
			}
		}
		else {
				echo "Invalid username or password";
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