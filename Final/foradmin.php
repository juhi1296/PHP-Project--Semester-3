<?php
session_start();
if($_SESSION['uname']==NULL)
		header('Location:a.php');

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background: url(grafitti.jpg);">
<div id="header">
	<div id="left">
    <label>ADMIN SITE</label>
   </div>
</div>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="40%" border="0">
<tr>
<td><a href="add1.php">Insert Questions</a></td></tr>
</td>
</tr>
<tr>
<td><a href="select1.php">Generate Paper</a></td>
</td>
</tr>
<tr>
<td><a href="logout.php">Logout</a></td>
</td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
