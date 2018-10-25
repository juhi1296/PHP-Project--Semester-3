<php include("n.php"); ?>
<form method="post" action="" name="form">
<table>
Full name : <input type="text" name="name" value="<?php echo$valid_name; ?>" /> 
<?php echo $error_name; ?> 
Username : <input type="text" name="name" value="<?php echo$valid_username; ?>" /> 
<?php echo $error_username; ?>
Email : <input type="text" name="name" value="<?php echo$valid_email; ?>" /> 
<?php echo $error_email; ?> 
Password : <input type="password" name="name" value="<?php echo$valid_password; ?>" /> 
<?php echo $error_password; ?> 
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
<td><a href="http://localhost/myphp/1st.php">Home</a></td>
</tr>
</table>
</form>