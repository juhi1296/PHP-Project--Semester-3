<?php
session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<marquee behavior=alternate bgcolor="7e7777"><font color=black><b><i><h1>Dharmsinh Desai University</h1></i></b></font></marquee>

<title>Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background: url(hi.jpeg);">
<div id="header">
	<div id="left">
    <label>Paper Generator</label>
   </div>
</div>
<center>
<div id="login-form">
</head>
<body>
<form action="" method="POST">
<table>
<tr>
<td>
	<input type="hidden" name="a" value="0"/>
	<input type="submit" name="admin" value="admin"/>
</td>
</tr>
<tr>
<td>
	<input type="hidden" name="c" value="1"/>
	<input type="submit" name="client" value="client"/>
</td>
</tr>
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
	
	header("location:client1.php?value=1");
}	

?>