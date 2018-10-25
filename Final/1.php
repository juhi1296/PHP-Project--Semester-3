<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background: url(cFw6IUW.jpg);">
<div id="header">
	<div id="left">
    <label>ADMIN LOGIN</label>
   </div>
</div>
<center>
<div id="login-form">
</head>
<body bgcolor="blue" fgcolor="red">
	<center>
	<table border="2" bgcolor="white" fgcolor="white" >
	<form method="POST" action="3rd.php">
	<?php
	$_SESSION['cnt']=0;
	session_start();
	
	if (isset($_GET['flag']))
	{
		if ($_GET['flag']==1)
		{
			echo "<br> USERNAME OR PASSWORD IS INCORRECT OR NULL <br>";
						$_SESSION['cnt']++;
			if($_SESSION['cnt'] >= 1)
				{
					header('location:menu.php');
				}

		}
	}
	
	
	if(isset($_GET['value']))
	{	
	$a=$_GET['value'];
	$_SESSION['a']=$a;
	}
	
?>
	<tr><td>Username:</td><td colspan='2'><input type='text' name='uname' required/></td>	</tr>
	<tr><td>Password:</td><td colspan='2'><input type='password' name='pwd' required/>	</tr>
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
//echo $_SESSION["a"];
?>
<?php
if(!empty($_GET['message'])){
	echo '<script language="javascript">';
	echo 'alert("Cannot Login .... TRY AGAIN")';
	echo '</script>';}?>

