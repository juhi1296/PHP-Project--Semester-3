
<html>
<head>
	<title> Register User </title>
</head>
<body>
<center>

<form method="post" action="n.php">
<table border="0" cellspacing="10" >
<tr>

<?php
if (isset($_GET['msg']))
{
	$a=$_GET['msg'];
	echo " <h3> " . $a . "</h3>";
	
}
?>

</tr>

<tr><td colspan="3" align="center"> * Required field 
</td></tr>

<tr>
<td>* Full Name:</td>
<td colspan="2"><input type="text" name="name"></td>
</tr>

<tr>
<td>* User Name:</td>
<td colspan="2"><input type="text" name="username"></td>
</tr>

<tr>
<td>* Email Address:</td>
<td colspan="2"><input type="text" name="email"></td>
</tr>

<tr>
<td>* New Password:</td>
<td colspan="2"><input type="password" name="password"></td>
</tr>

<tr>
<td>* Reenter New Password:</td>
<td colspan="2"><input type="password" name="repassword"></td>
</tr>

<tr>
<td colspan="3">* Male<input type="radio" name="gender" value="male"> 
				Female<input type="radio" name="gender" value="female">
</td></tr>

<tr>
<td colspan="3">* Admin<input type="radio" name="admin" value="0"> 
				Client<input type="radio" name="admin" value="1">
</td></tr>

<tr>
<td>Subject: </td>
<td><input type="text" name="Sub"></td>
</tr>


<td align="center"><input type="submit" name="submit" value="submit"></td>
<td align="center"><input type="reset" name="reset" value="reset"></td>
<td><a href="http://localhost/x/1st.php">Home</a></td>
</tr>

</table>
</form>
</center>
</body>
</html>
<?php
//if(!empty($_GET['msg'])){
//	echo '<script language="javascript">';
	//echo 'alert("$msg")';
//	echo '</script>';}?>