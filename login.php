<?php include('include.php');?>

<form id="login" name="login" action="processor.php" method="post">
	<table>
		<tr>
			<td>
				Username:
			</td>
			<td>
				<input name="user" id="user" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input name="password" id="password" value="" type="password">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
</form>