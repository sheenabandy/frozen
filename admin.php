<?php include('include.php');

if(isset($_SESSION['admin'])){

$users = mysql_query("select * from frozen");

		echo "<table><tr><td>Username</td><td>Email</td><td>Member</td><td>Admin</td></tr>";
			while($user = mysql_fetch_array($users)){
			if($user['verified']){$member = "checked";}
			if($user['admin']){$admin = "checked";}
			echo "<tr><td>".$user['username']."</td><td>".$user['email']."</td><td><input type='checkbox' name='verified".$user['id']."' value='1' $member ></td><td><input type='checkbox' name='admin".$user['id']."' value='1' $admin ></td></tr>";

			}
		echo "</table>";


} else {echo "access denied";}

?>