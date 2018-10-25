<html>
<head>
	<title> Submit </title>
</head>
<body>

<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$sex=$_POST['gender'];
	
	
	$achievements=$_POST['achievements'];
	if(isset($_POST['choice1']))$choice1=$_POST['choice1'];
	if(isset($_POST['choice2']))$choice2=$_POST['choice2'];
	
	if((strcmp($username,"")==0)||(strcmp($password,"")==0)||(strcmp($repassword,"")==0)||(strcmp($sex,"")==0))
		echo "Blank entry is not allowed"."</br>";
	else if(strlen($username)>11)
		echo "Username must be less than 11"."</br>";
	else if(strcmp($password,$repassword))
		echo "Password and repassword must be same"."</br>";
	
	else
		{
		echo "
		<table align=\"center\" border=\"1\" width=50%>
		<tr><td>Name:</td><td> $username</td></tr>
		<tr><td>Sex:</td><td> $sex</td></tr>
		<tr><td>Birthdate:</td><td> $bdate/$bmonth/$byear</td></tr>
		<tr><td>Interested In:</td><td>"; if(!empty($choice1)) echo $choice1 . "&nbsp;&nbsp;"; if(!empty($choice2)) echo $choice2; echo "</td></tr>
		<tr><td>Achievements:</td><td colspan=\"2\"><pre> $achievements</pre></td></tr>
		</table>"; 
		
		}
 


?>

</body>
</html>
