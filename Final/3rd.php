<?php

$flag=0;

session_start();



$_SESSION['uname']=$_POST['uname'];
echo $_SESSION['uname'];


try{
if($_POST['uname'] ==null && $_POST['pwd']==null)
{
	$flag=1;
	if($_SESSION['uname']==NULL)
		header('Location:a.php');
	
	header('Location:1.php?flag=1');
}
else{

$loginusername=$_POST["uname"];
$loginpassword=$_POST["pwd"];
//$loginadmin=$_POST["admin"];
//echo"$loginadmin";
//$counter=0;
//$counter1=0;
$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
$x=0;
$query=$dbhandler->query("select * from login where Username='$loginusername' and Password='$loginpassword' and privilege='$x'");
$r=$query->fetch();
if ($r!=NULL)
{	echo '<pre>',print_r($r),'</pre>';
		header('Location:foradmin.php?flag=0');
}
else{
	header('Location:1.php?flag=1');	
}
}
}
catch(PDOException $e){
	echo $e->getmessage();
	die();
}

?>






