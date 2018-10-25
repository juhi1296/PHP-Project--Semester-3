<?php 	
echo"	<html>
	<body>
	<b><h1 align=center></h1></b>
	<hr>
	<form action=\"welcome.php\" method=\"POST\">
	<table border=\"1\" align=\"center\">
	<tr align=\"center\"><td colspan=\"2\">";
	
	if(isset($_GET['msg']))
	{
		echo $_GET['msg'] ,"";
	}
	
echo"</td>	</tr>
	<th>UserName:</th>
	<td><input type=\"text\" name = \"name\" placeholder = \"Enter Your Name\"></td>
	</tr>
	<tr>
	<th>Password</th>
	<td><input type=\"password\" name = \"pwd\" placeholder = \"Enter Your Password\"></td>
	</tr>
	<tr>
	<td align=\"center\"><input type = \"submit\" value = \"Login\"></td>
	<td align=\"center\"><input type = \"reset\" value = \"Reset\"></td>
	</tr>
	<tr>
	<th colspan = \"2\"> <a href=\"registration.php\">New User?</a> </th>
	</tr>
	</table>
	</body>
	</html>";
?>
