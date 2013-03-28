<?php include('include.php');



if(isset($_SESSION['admin'])){

if(isset(
	$_GET['user']
	))
	{
		$id=$_GET['user'];
		$member=$_get['member'];
			mysql_query("update frozen set verified='1' where id='$id'");
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