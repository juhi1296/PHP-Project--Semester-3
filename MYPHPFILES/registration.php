<?php 	
echo"	<html>
	<body>
	<b><h1 align=center></h1></b>
	<hr>
	<form action=\"notification.php\" method=\"POST\">
	<table border=\"1\" align=\"center\">
	<tr>
	
	</tr>
	<th colspan=\"2\" align=\"left\">*Required Field</th>
	</tr>
	<tr>
	<th align=\"left\">*User Name</th>
	<td><input type=\"text\" name = \"unm\"></td>
	</tr>
	<tr>
	<th align=\"left\">*New Password</th>
	<td><input type=\"password\" name =\"pwd\"></td>
	</tr>
	<tr>
	<th align=\"left\">*Reenter New Password</th>
	<td><input type=\"password\" name =\"npwd\"></td>
	</tr>
	
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
