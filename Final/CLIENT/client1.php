<html>
<head></head>
<body bgcolor="gray" >
	<center>
	<table border="2" bgcolor="green" align="center">
	<form method="POST" action="client2.php">
	<?php
	session_start();

	if (isset($_GET['flag']))
	{
		if ($_GET['flag']==1)
		{
			echo "<br> USERNAME OR PASSWORD IS INCORRECT <br>";
		}
	}


	if(isset($_GET['value']))
	{
	$a=$_GET['value'];
	$_SESSION['a']=$a;
	}
 /* else
    {
    echo"<h3>either invalid username or password or you are not client</h3>";
    }*/
?>
    <br><br><br><br><br><br><br><br>
	<tr><td>Username:</td><td colspan='2'><input type='text' name='uname' placeholder="5-8 characters"required/></td>	</tr>
	<tr><td>Password:</td><td colspan='2'><input type='password' name='pwd' placeholder="5-8 characters" required/>	</tr>
	<tr>
<td rowspan="2">Enter Code: </td>
<td><center><img src="captchafont.php"></center></td>
</tr>
<tr>
<td><input type="text" name="vercode1"/></td>
</tr>

	<input type="hidden" name="a" value="<?php echo $_SESSION['a'];?>">;

<!--<tr><td>Admin</td><td><input type="radio" name="admin" value="0" ></td>
		<td>Client</td><td><input type="radio" name="admin" value="1"></td>
	--><tr><td><input type='submit' name="submit"/></td><td><input type='reset'/></td>	</tr>
<!--	<tr><td colspan='3'><a href='r.php'>Newuser</a></td>	</tr>
-->	</form>
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
	echo 'alert("Cannot Login .... TRY AGAIN")';
	echo '</script>';}?>

