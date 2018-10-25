<?php
session_start();


//if ( !isset($_SESSION['Subject']) && !isset($_SESSION['Exam_Type']) )
//{
$_SESSION['Subject']=$_POST['Subject'];
$_SESSION['Exam_Type']=$_POST['Exam_Type'];
//}
echo $_SESSION['Subject'];
echo $_SESSION['Exam_Type'];
echo $_POST['Subject'];
echo $_POST['Exam_Type'];
//echo "<tr><td>Subject:</td><td>$sub</td></tr>";
//echo "<tr><td>Exam_Type:</td><td>$type</td></tr>";

if ($_SESSION['Exam_Type']=="External")
	$total=60;
else
	$total=36;

?>



<html>
<head>
	<title>Select2</title>
</head>

<body>
<br><br>
<table border="3">
<?php 
echo "<tr><td><b>" . $total . "</b></td></tr>";
?>
</table>

<center>
<form action="tp.php" method="POST" bgcolor="blue">
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
	<?php 
echo "<tr><td><b>" . $total . "</b></td></tr>";
echo "<input type=\"hidden\" name=\"t\" value=\"$total\">";
?>

							

	<tr>
	 <td>Difficulty:</td>
	 <td colspan="3"><select name="Difficulty">
						<option>Easy</option>
						<option>Medium</option>
						<option>Difficult</option>
						
					</select>
	</td>
	</tr>
	<tr><td>
	<input type="hidden" name="sub" value="<?php echo $_SESSION['Subject'];?>">
	</td><td><input type="hidden" name="typ" value="<?php echo $_SESSION['Exam_Type'];?>">
	</td></tr>

	<tr><td>Next</td><td><input type="radio" name="abc" value="1" ></td>
		<td>Submit</td><td><input type="radio" name="abc" value="0"></td>
	</tr>
	<tr><td><input type="submit" name="next" value="next" ></td></tr>
	</table>
</form>
</center>
</body>
</html>	

<?php
//$a=$_SESSION['Subject'];
//$b=$_SESSION['Exam_Type'];
//echo $a;
//echo $b;

?>