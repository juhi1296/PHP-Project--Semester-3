<?php
session_start();
if($_SESSION['uname']==NULL)
		header('Location:a.php');
?>

<html>
<body>
<tr>
<td>
<a href="logout.php">Logout</a></td>
<td>
<a href="select1.php">Generate Paper</a></td>
</tr>
</body>
</html>