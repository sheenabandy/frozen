<?php include('include.php');



if(isset($_SESSION['admin'])){

if(isset(
	$_GET['user']
	))
	{
		$id=$_GET['user'];
		$mem=$_GET['member'];

		mysql_query("update frozen set verified='$mem' where id='$id'");
		if($mem=="1"){
			$user = mysql_query("select * from frozen where id='$id'");
			while($u = mysql_fetch_array($user)){
			mail($u['email'],"Welcome to Frozen Plains","Congratulations! You've been verified as a member of Frozen Plains./r http://sheenabandy.com/frozen/");
		}
	}
}
$users = mysql_query("select * from frozen");


		echo "<table><tr><td>Username</td><td>Email</td><td>Member</td></tr>";
			while($user = mysql_fetch_array($users)){
			$member = "";
			if($user['verified'] == "1"){$member = "0"; $linktext="unverify";} else {$member = '1'; $linktext="verify";}
			echo "<tr><td>".$user['username']."</td><td>".$user['email']."</td><td><a href='?user=".$user['id']."&member=$member'>$linktext</a></td></tr>";

			}
		echo "</table>";


} else {echo "access denied";}

?>