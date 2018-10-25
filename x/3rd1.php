$flag=0;

session_start();

try{
if($_POST['uname'] ==null && $_POST['pwd']==null)
{
	$flag=1;
	header('Location:1.php?flag=1');
}
else{

$loginusername=$_POST["uname"];
$loginpassword=$_POST["pwd"];
//$loginadmin=$_POST["admin"];
//echo"$loginadmin";
$counter=0;
$counter1=0;
$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
$x=0;
$query=$dbhandler->query("select * from login where Username='$loginusername' and Password='$loginpassword' and privilege='$x'");
$r=$query->fetch();
if ($r!=NULL)
{	echo '<pre>',print_r($r),'</pre>';
		header('Location:new.php?flag=0');
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

?><!--for ($i=0;;$i++)
{

	if($r=$query->fetch()){
		$user[$i]=$r['Username'];
		$pass[$i]=$r['Password'];
		$privilege[$i]=$r['privilege'];
		$counter++;

	}

	else{
		break;
	}

}

for($i=0;$i<=$counter;$i++){
echo '-----fetching username and password';
	if($user[$i]==$_POST["uname"] && $pass[$i]==$_POST["pwd"] && $privilege[$i]==$_POST["admin"]){
		$flag=1;
		header('Location:new.php');
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
	header('Location:1.php?message=invalid');

	}

	}
}-->

<?php


?>
