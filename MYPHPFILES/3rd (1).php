<?php

$flag=0;

session_start();

try{
if($_POST['username'] ==null && $_POST['password']==null)
{
	$flag=1;
	header('Location:2nd.php');

}
else{

$loginusername=$_POST["username"];
$loginpassword=$_POST["password"];

$counter=0;
$counter1=0;
$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test1','root','');

$query=$dbhandler->query('select * from login');
for ($i=0;;$i++)
{

	if($r=$query->fetch()){
		$user[$i]=$r['Username'];
		$pass[$i]=$r['Password'];

		$counter++;

	}

	else{
		break;
	}

}

for($i=0;$i<=$counter;$i++){
echo '-----fetching username and password';
	if($user[$i]==$_POST["username"] && $pass[$i]==$_POST["password"]){
		$flag=1;
		header('Location:1st.php');
		break;
	}
	else{
		$counter1++;
	}

}
if($counter1>=$counter){


	$counter1=0;
	$flag=1;
	echo 'h3';
	header('Location:1st.php?message=invalid');

	}

	}
}
catch(PDOException $e){
	echo $e->getmessage();
	die();
}

?>
