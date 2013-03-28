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
			Confirm Email:
		</td>
		<td>
			<input type="text" name="emailconfirm" id="emailconfirm">
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
		<td>
			Confirm Password:
		</td>
		<td>
			<input type="password" name="passwordconfirm" id="passwordconfirm">
		</td>
	</tr>
	</table>
</form>