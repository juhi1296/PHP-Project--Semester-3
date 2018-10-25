<html>
<body>

    <h1 align="center"><b>Add Question</b></h1>
<form  method="POST" action="new.php">
<table  align="center" border="1">

<?php
session_start();
if($_SESSION['uname']==NULL)
		header('Location:a.php');
//$_SESSION['sub']=$sub;
//$_SESSION['type']=$type;


//$_SESSION['sub']=$_POST['Subject'];
//$_SESSION['type']=$_POST['Exam_Type'];

//echo "<tr><td>Subject:</td><td>$sub</td></tr>";
//echo "<tr><td>Exam_Type:</td><td>$type</td></tr>";
?>

<tr>
		<td>Q Type:<select name="Q_type">
		<option>MCQ</option>
		<option>2_marks</option>
		<option>3_marks</option>
		<option>6_marks</option>
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
        <textarea name="ques" rows="20" cols="50"></textarea>
		</td>
</tr>

<tr>
<input type="hidden" name="s" value="<?php echo $_SESSION['sub'];?>">;
<input type="hidden" name="t" value="<?php echo $_SESSION['type'];?>">;
</tr>

<tr>
			<td align="center" colspan="2">
			
			<input type="submit" name="button" value="Next Question">
			<input type="reset" value="Reset">
			<input type="submit" name="button" value="Change Subject">
			<input type="submit" name="button" value="End">
			</td>
</tr>
</form>			
</table>			
</body>
			
			
</html>

<?php

echo $_SESSION["sub"];

echo $_SESSION["type"];

?>
	