<?php include('include.php');
if(isset($_SESSION['loggedin'])){
?>
<h2>Coming Soon</h2>
<?php } else {
header("location:/frozen/login.php");
}
?>