<!DOCTYPE html>
<html>
<head>
		<title>HTML form</title>
</head>
<body>
	
	<?php
	if(isset($_GET['uname']) && isset($_GET['pw']))
	{
    echo "Invalid Username and Password";
	}
  ?>
	<form action="nandy.php" method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="username" id="username"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" id="pass"/></td>
			</tr>

			<tr>
				<td><input type="submit" value="Resister"/></td>
			</tr>
		</table>
	</form>
	
</body>

</html>

