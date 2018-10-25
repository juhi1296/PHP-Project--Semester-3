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
//if( (strcmp($name,""))==0 ||(strcmp($username,""))==0 || (strcmp($email,""))==0 || strcmp($password,"")==0 || strcmp($repassword,"")==0 || strcmp($gender,"")==0 || strcmp($gender,"")==0)
//	echo "Cannot be Blank";
	
if (preg_match("/^[A-Za-z0-9_]{3,20}$/",$name))
{
$valid_name=$name;

}
else
{
	//echo "Enter Valid Name";
	header("location:register.php?msg=Enter valid Name.");
}

if (preg_match("/^[A-Za-z0-9_]{3,20}$/",$username))
{
$valid_username=$username;
}
else
{
	

	header("location:register.php?msg=Enter valid Username :min 3 Chars.");
	
	
}
	
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})/", $email))
{
$valid_email=$email;

}
else
{
	//$msg='Enter valid Email.';
	header("location:register.php?msg=Enter valid Email Id.");
}
// Usename min 2 char max 20 char

// Password min 6 char max 20 char
if (preg_match("/^[A-Za-z0-9!@#$%^&*()_]{6,20}/",$password))
{
	$valid_password=$password;
}
else
{
	//$msg='Enter valid Password min 6 Chars.';
	header("location:register.php?msg=Enter valid Password: min 3 Chars.");
}



if(strcmp($password,$repassword))
		 //$msg='Password and Repassword are not same';
		header("location:register.php?msg=Password and Repassword are not same");
// Gender
if (strcmp($gender,"")==0)
{
	//$msg='Select Gender';
	header("location:register.php?msg=Select Gender");
}
else
{
$valid_gender=$gender;
}

if (strcmp($privilege,"")==0)
{
	//$msg='Select Privilege';
	header("location:register.php?msg=Please select one");
}
else
{
$valid_privilege=$privilege;
}



//echo "$valid_name";

	//echo "24";
//if( (strlen($valid_username)>0) && (strlen($valid_email)>0) && (strlen($valid_password)>0) && $valid_privilege>0 && $valid_gender>0 )
//{
	//echo "242y3";
try
		{
			$dbhandler=new PDO('mysql:host=127.0.0.1;dbname=test','root','');
			echo "Connected...<br/>";
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql="insert into login (Username,Password,privilege) values(?,?,?)";
			$query=$dbhandler->prepare($sql);
			$query->execute(array($valid_username,$valid_password,$valid_privilege));
			echo "Record inserted successfully";
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			die();
		}
//}
//else{ }

//echo $msg;
//header("location:r.php?msg=".$msg);

}
?>