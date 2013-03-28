<?php include('include.php');
if(isset($_SESSION['loggedin'])){
?>
<h2>Coming Soon</h2>
<?php
if(isset($_SESSION['admin'])){
?>
<a href="/frozen/admin.php">Edit Members</a>
<?php
}
} else {
header("location:/frozen/login.php");
}
?>