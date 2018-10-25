<html>
<head>
	<title> Submit </title>
</head>
<body>

<?php

	
	
	
	$msg=null;
	$username=$_POST["uname"];
	$password=$_POST["pwd"];
	$privilege=$_POST['admin'];
	
session_start();
if(isset($_POST['submit']))
{
	
	try{
	 $dbhandler=new PDO('mysql:host=127.0.0.1;dbname=test','test','');
		echo "Connected...<br/>";
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	if((strlen($username)==0)&&(strlen($password)==0))
		header("location:index1j.php?Blank entry is not allowed");
	{
	if ($privilege='')
	{
		header("location:index1j.php?msq=Please select one");
		
	}	
	
	}
	else 
	{
   $query=$dbhandler->prepare("select * from login where username='".$username."' and password='".$password."' and privilege='".$privilege."'");
   $r=$query->fetchAll(PDO::FETCH_ASSOC);
	echo '<pre>', print_r($r),'</br>';
  
   
	if($r)
	{	
		 if ($_POST['admin']==0)
			header("location:new.php");
		else
			header("location:client.php");
		
	
	}
   else
   {
    echo'You entered username or password is incorrect';
   }
 
 } 
	
		
		
		
	}
	
	catch(PDOException $e)
	{
		
		echo $e->getMessage();
			die();
	}
}

?>