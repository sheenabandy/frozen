<?php include('include.php');?>

<form id="register" name="register" action="processor.php" method="post">
	<table>
	<tr>
		<td>
			Username:
		</td>
		<td>
			<input type="text" name="user" id="user">
		</td>
	</tr>
	<tr>
		<td>
			Email:
		</td>
		<td>
			<input type="text" name="email" id="email">
		</td>
	</tr>
	<tr>
		<td>
			Password:
		</td>
		<td>
			<input type="password" name="password" id="password">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			<input type="submit" name="register" id="register" value="Register">
		<td>
	</tr>
	</table>
</form>