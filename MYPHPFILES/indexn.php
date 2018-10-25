<form action="welcome1.php" method="post">
<table>
<tr><td><?php
if(isset($_GET['msg']))
echo $_GET['msg'];
?>
</td></tr>
<tr>
<td>
UserName:<input type="text" name="name"/></td></tr>
<tr><td>
Password:<input type="password" name="pwd"/></td></tr>
<tr><td>
<input type="submit" value="login"/>

<input type="reset" value="reset"/></td></tr>
<tr><td>
<a href="registration1.php">New User</a></td></tr>
</table>
</form>


