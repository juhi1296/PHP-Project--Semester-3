<html>
<body>
<form method="POST">
    <h1 align="center"><b>Add Question</b></h1>

<table  align="center" border="1">




<tr>
		<td>Q Type:<select name="Q_type">
		<option>MCQ</option>
		<option>2_MARK</option>
		<option>3_MARK</option>
		<option>6_MARK</option>
		</select>
		</td>
			<td>Difficulty Level:
			<select name="Difficulty_Level">
			<option>Easy</option>
			<option>Medium</option>
			<option>Difficult</option>
			</select>
			</td>
</tr>
<tr>
    <td colspan="2">Question:</td>
</tr>
<tr>

            <td colspan="2">
            <textarea rows="20" cols="50"></textarea>
		</td>
</tr>

<tr>
			<td align="center" colspan="2">
			<input type="submit" name="submit" value="Submit">
			<input type="submit" name="End" value="End">
			<input type="Reset" value="Reset">
			<input type="submit" name="ChangeSubject" value="Change Subject">
			</td>
</tr>
</table>
</form>
</body>
</html>

<?php
session_start();
if(isset($_POST['submit']))
   { header("location:add2.php");}
else if(isset($_POST['End']))
  {  header("location:add1.php");}

    else if(isset($_POST['ChangeSubject']))
   { header("location:add1.php");}
?>
