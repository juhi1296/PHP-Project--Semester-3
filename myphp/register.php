<html>
<head>
	<title> Register User </title>
</head>
<body>
<center>
<form method="post" action="notification.php">
<table border="0" cellspacing="10" >
<tr><td colspan="3" align="center"> * Required field *
</td></tr>
<tr>
<td>* User Name:</td>
<td colspan="2"><input type="text" name="username"></td>
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
<td>* Subject: </td>
<td><input type="text" name="Sub"></td>
</tr>





<td align="center"><input type="submit" name="submit" value="submit"></td>
<td align="center"><input type="reset" name="reset" value="reset"></td>
<td><a href="http://localhost/myphp/1st.php">Home</a></td>
</tr>

</table>
</form>
</center>
</body>
</html>