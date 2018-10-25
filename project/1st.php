<?php
session_start();
?>

<html>
<head></head>
<body>
<form action="" method="POST">
<table>
<tr>
<td>
	<input type="hidden" name="a" value="0"/>
	<input type="submit" name="admin" value="admin"/>
</td>

<td>
	<input type="hidden" name="c" value="1"/>
	<input type="submit" name="client" value="client"/>
</td>

<td><a href="register.php">New User</a>
</td>
</tr>	
	
</form>
</body>
</html>
<?php
if(isset($_POST['admin']))
{
	
	header("location:1.php?value=0");
}
else if(isset($_POST['client']))
{
	
	header("location:client.php?value=1");
}	

?>