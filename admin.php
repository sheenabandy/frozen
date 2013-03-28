<?php include('include.php');

if(isset($_SESSION['admin'])){

$users = mysql_query("select * from frozen");

		echo "<form name='adminform' action='' method='post'><table><tr><td>Username</td><td>Email</td><td>Member</td><td>Admin</td></tr>";
			while($user = mysql_fetch_array($users)){
			$member = "";
			$admin = "";
			if($user['verified'] == "1"){$member = "checked";}
			if($user['admin'] == "1"){$admin = "checked";}
			echo "<tr><td>".$user['username']."</td><td>".$user['email']."</td><td><input type='checkbox' name='verified".$user['id']."' value='1' $member ></td><td><input type='checkbox' name='admin".$user['id']."' value='1' $admin ></td></tr>";

			}
		echo "<tr><td colspan='4' align='right'><input type='submit' name='submit' value='Change'></td></tr></table></form>";


} else {echo "access denied";}

?>