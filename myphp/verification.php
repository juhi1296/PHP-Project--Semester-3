<html>
<head>
	<title> Submit </title>
</head>
<body>

<?php
session_start();

	$username=$_POST["uname"];
	$password=$_POST["pwd"];
	if((strlen($username)==0)&&(strlen($password)==0))
		header("location:index1.php?Blank entry is not allowed");
	else
	{

	if (isset($_POST['admin']))
	{
		if ($_POST['admin']==1)
			header("location:new.php");
		else
			header("location:new.php");
	}	
	else
	{
		header("location:index1.php?Blank entry is not allowed");		
	}
	}
	
?>

</body>
</html>
