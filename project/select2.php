<html>
<head>
	<title>Select2</title>
</head>

<body>
<center>
<form action="" method="POST" bgcolor="blue">
	<table border="0" cellspacing="70" align="centre">
	<tr>
	 <td>Question Type:</td>
	 <td colspan="3"><select name="type">
						<option>MCQ</option>
						<option>2_Marks</option>
						<option>3_Marks</option>
						<option>6_Marks</option>
					</select>
	</td>
	</tr>
							

	<tr>
	 <td>Difficulty:</td>
	 <td colspan="3"><select name="Difficulty">
						<option>Easy</option>
						<option>Medium</option>
						<option>Difficult</option>
						
					</select>
	</td>
	</tr>
	<tr>
		<td><input type="submit" name="next" value="Next"></td>
		<td><input type="submit" name="submit" value="Submit"></td>
	</tr>

		
	</table>
</form>
</center>
</body>
</html>	

<?php
session_start();
if (isset($_POST['next']))
{
	header("location:select2.php");
}
else if (isset($_POST['submit']))
{
	header("location:new.php");
}


?>