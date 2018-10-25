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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body style="background: url(cFw6IUW.jpg);">
<div id="header">
	<div id="left">
    <label>Admin Login</label>
   </div>
</div>
<center>
</head>
<img src="Captchgenerate.php"  > <br>

<form action="CaptchIndex.php" method="POST">
	Type the value see:<input type="text" size="6" name="secure">
	
	<input type="Submit" value="submit">
	</form>

	
	







