<?php


//$flag=0;

session_start();
try{
if($_POST['uname'] ==null && $_POST['pwd']==null)
{
	//$flag=1;
	header('Location:client1.php');

}
else{

$loginusername=$_POST["uname"];
$loginpassword=$_POST["pwd"];
$counter=0;
$counter1=0;
$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');

$query=$dbhandler->query('select * from login');
for ($i=0;;$i++)
{

	if($r=$query->fetch()){
		$user[$i]=$r['Username'];
		$pass[$i]=$r['Password'];
        $pri[$i]=$r['privilege'];
		$counter++;

	}

	else{
		break;
	}

}

for($i=0;$i<=$counter;$i++){
echo '-----fetching username and password';
	if($user[$i]==$_POST["uname"] && $pass[$i]==$_POST["pwd"] && $pri[$i]==1){
		//$flag=1;
        header('Location:forclient.php');
		break;
	}
	else{
		$counter1++;
	}

}
if($counter1>=$counter){


	echo '---counter1 is greater than counter';
$counter1=0;
	//$flag=1;
	header('Location:1st.php?message1=something');

	}

	}
}
catch(PDOException $e){
	echo $e->getmessage();
	die();
}

?>
