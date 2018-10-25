<html>
<head></head>
<body bgcolor="blue" fgcolor="red">
	<center>
	<table border="2" bgcolor="yellow" >
	<form method="POST" action="3rd.php">
	<?php
	session_start();
	
	
	if(isset($_GET['a']))
	{	
	$a=$_GET['a'];
	$_SESSION['a']=$a;
	}
	
	
if(isset($_GET['msg']))
{
	echo " <h3> " . $_GET['msg'] . "</h3>";
}
?>
	<tr><td>Username:</td><td colspan='2'><input type='text' name='uname' required/></td>	</tr>
	<tr><td>Password:</td><td colspan='2'><input type='password' name='pwd' required/>	</tr>
	<input type="hidden" name="a" value="<?php echo $_SESSION['a'];?>">;
	
	<!--<tr><td>Admin</td><td><input type="radio" name="admin" value="0" ></td>
		<td>Client</td><td><input type="radio" name="admin" value="1"></td>-->
	<tr><td><input type='submit' name="submit"/></td><td><input type='reset'/></td>	</tr>	
	<!--<tr><td colspan='3'><a href='register.php'>Newuser</a></td>	</tr>-->
	</form>
	</table>
	</center>
</body>
</html>

<?php
echo $_SESSION["a"];
?>
<?php
if(!empty($_GET['message'])){
	echo '<script language="javascript">';
	echo 'alert("user name or password is invalid")';
	echo '</script>';}?>

