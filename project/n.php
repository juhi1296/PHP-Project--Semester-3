<?php
if($_POST)
{
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword=$_POST['repassword'];
$gender=$_POST['gender'];
$sub=$_POST['Sub'];
$privilege=$_POST['admin'];
$msg=null;
// Full Name
//echo "$name";
// Email
$valid_name=null;
	$valid_password=null;
	$valid_privilege=null;
//if( (strcmp($name,""))==0 ||(strcmp($username,""))==0 || (strcmp($email,""))==0 || strcmp($password,"")==0 || strcmp($repassword,"")==0 || strcmp($gender,"")==0 || strcmp($gender,"")==0)
//{echo "Cannot be Blank";
		
if (preg_match("/^[A-Za-z0-9 ]{3,20}/",$name))
{
$valid_name=$name;

}
else
{
	echo"Enter valid name";
}

if (preg_match("/^[A-Za-z0-9_]{3,20}$/",$username))
{
$valid_username=$username;
}
else
{
echo'Enter valid Username min 3 Chars.';
}
	
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})/", $email))
{
$valid_email=$email;

}
else
{
echo 'Enter valid Email.';
}
// Usename min 2 char max 20 char

// Password min 6 char max 20 char
if (preg_match("/^[A-Za-z0-9!@#$%^&*()_]{6,20}/",$password))
{
	
$valid_password=$password;
}
else
{

$error_password='Enter valid Password min 6 Chars.';
}



if(strcmp($password,$repassword))
		 echo'Password and Repassword are not same';

// Gender
if (strcmp($gender,"")==0)
{
echo'Select Gender';
}
else
{
$valid_gender=$gender;
}

if (strcmp($privilege,"")==0)
{
echo'Select Privilege';
}
else
{
$valid_privilege=$privilege;

}



//echo "$valid_name";
	
if((strlen($valid_username)>0)&&(strlen($valid_password)>0) && $valid_privilege>0 )
{
try
		{
			$dbhandler=new PDO('mysql:host=127.0.0.1;dbname=test','test','');
			echo "Connected...<br/>";
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql="insert into login(username,password,privilege) values(?,?,?)";
			$query=$dbhandler->prepare($sql);
			$query->execute(array($valid_username,$valid_password,$valid_privilege));
			echo "Record inserted successfully";
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			die();
		}
}
else{ }

}
?>