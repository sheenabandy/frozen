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
					if($user['verified'] == "1"){
						$_SESSION['loggedin']="1";
						$_SESSION['admin']=$user['admin'];
						header('location:/frozen/members.php');
					} else {
						echo "Please wait for our verification email";
					}
				}
				else {
				echo "invalid username or password. <a href='/frozen/login.php'>Please try again.</a>";
				}
			}
		}
		else {
				echo "Invalid username or password.  <a href='/frozen/login.php'>Please try again.</a>";
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

		$connectreg = mysql_connect("localhost","sheenaba","v120b0PtBw");
		$selectdbreg = mysql_select_db("sheenaba_frozen") or die();

		$userexist = mysql_query("select * from frozen where username='$username'");
			if (mysql_num_rows($userexist)==0) {
		$userinsert = mysql_query("insert into frozen(username,email,password) values ('$username','$email','$password')");
		if($userinsert){
		echo "Thank you for your registration. Please wait for our Verification Email.";
		} else{ echo "Something went wrong.";}
			}
			else {
			echo "username already exists. <a href='/frozen/register.php'>Please try again.</a>";
			}
	}
else {
	header('location: /frozen/login.php');
}
?>