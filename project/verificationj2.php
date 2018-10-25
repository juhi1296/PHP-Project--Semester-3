<html>
<head>
	<title> Submit </title>
</head>
<body>

<?php
session_start();
	
	$msg=null;
	$username=$_POST["uname"];
	$password=$_POST["pwd"];
	if((strlen($username)==0)&&(strlen($password)==0))
		header("location:index1j.php?Blank entry is not allowed");
		
	else
	{
	if (isset($_POST['admin']))
	{
		if ($_POST['admin']==0)
			header("location:new.php");
		else
			header("location:client.php");
	}	
	else
	{	//$msg="Please select one";
	
		header("location:index1j.php?msq=Please select one");
	}
	}
	
?>

</body>
</html>
