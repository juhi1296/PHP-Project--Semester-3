<html>
<head>
	<title> Submit </title>
</head>
<body>

<?php

$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$gender=$_POST['gender'];
$sub=$_POST['Sub'];
$privilege=$_POST['admin'];

	if((strcmp($username,""))==0 || strcmp($password,"")==0 || strcmp($repassword,"")==0 || strcmp($gender,"")==0 || strcmp($privilege,"")==0)
		echo "Cannot be Blank";
	else if(strlen($username)>11)
		echo "Username should be less than 11 characters";
	else if(strcmp($password,$repassword))
		echo "Password and Repassword are not same";
	
	else
	{
		try
		{
			$dbhandler=new PDO('mysql:host=127.0.0.1;dbname=test','test','');
			echo "Connected...<br/>";
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql="insert into login(username,password,privilege) values(?,?,?)";
			$query=$dbhandler->prepare($sql);
			$query->execute(array($username,$password,$privilege));
			echo "Record inserted successfully";
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			die();
		}
	
	
	}	
	
?>	