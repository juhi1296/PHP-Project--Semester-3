<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
<body>
	<table border="1">
	<form method="POST" action="3rd.php">
	<tr><td>Username:</td><td colspan='2'><input type='text' name='uname'/></td>	</tr>
	<tr><td>Password:</td><td colspan='2'><input type='password' name='pwd'/>	</tr>
	</form>
	</table>
	<?php
session_start();
if(!isset($_POST['secure']))
{
	$_SESSION['secure']=rand(1000,9999);
	
}

else
{	
	if($_SESSION['secure']==$_POST['secure'])
	{
		echo'A match';
	}
    else
	{
		
		echo'Incorrect again';
		$_SESSION['secure']=rand(1000,9999);
		
	}
}
?>
<br>
<br>
<table>
 <img src="captchafont.php">
<tr>
<td>
<form action="foradmin.php" method="POST">
	Type the value see:<input type="text" size="6" name="secure">
</td>
	</tr>
<tr>
<td>
	<input type="submit" name="Submit" value="Submit" />
</td>
	</tr>	
	</form>
</body>
</html>