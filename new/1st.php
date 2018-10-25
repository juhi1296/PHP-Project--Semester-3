<?php
session_start();
?>

<html>
<head></head>
<body>
<form action="2nd.php" method="POST">
<table>
<tr>
<td>
	<input type="hidden" name="a" value="1"/>
	<input type="submit" name="admin" value="admin"/>
</td>

<td>
	<input type="hidden" name="c" value="0"/>
	<input type="submit" name="client" value="client"/>
</td>

<td><a href="register.php">New User</a>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(!empty($_GET['message1'])){
	echo '<script language="javascript">';
	echo 'alert("user name or password is invalid")';
	echo '</script>';}?>

