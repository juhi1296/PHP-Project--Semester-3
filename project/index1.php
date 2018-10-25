<html>
<head></head>
<body>
	<table border="1">
	<form method="POST" action="verification.php">
	<tr><td>Username:</td><td colspan='2'><input type='text' name='uname' required/></td>	</tr>
	<tr><td>Password:</td><td colspan='2'><input type='password' name='pwd' required/>	</tr>
	
	<tr><td>Admin</td><td><input type="radio" name="admin" value="0" ></td>
		<td>Client</td><td><input type="radio" name="admin" value="1"></td>
	<tr><td><input type='submit'/></td><td><input type='reset'/></td>	</tr>	
	<tr><td colspan='3'><a href='register.php'>Newuser</a></td>	</tr>
	</form>
	</table>
</body>
</html>

<?php
session_start();
if (isset($msg))
{
	
	
		echo"$msg";
	
}	
?>