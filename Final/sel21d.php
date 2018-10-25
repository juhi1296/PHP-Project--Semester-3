<?php
session_start();
if($_SESSION['uname']==NULL)
		header('Location:a.php');

if (isset($_GET['msg']))
{
	echo "<h2>".$_GET['msg']."</h2>";
	if ($_GET['msg']!="invalid input")
		$x=$_GET['x']-1;
	else 
		$x=10;
	if (isset($_GET['total']))
		echo "<h2>".$_GET['total']."</h2>";
}

//if ( !isset($_SESSION['Subject']) && !isset($_SESSION['Exam_Type']) )
//{
//$_SESSION['Subject']=$_POST['Subject'];
//$_SESSION['Exam_Type']=$_POST['Exam_Type'];
//}
/*
echo $_SESSION['Subject'];
echo $_SESSION['Exam_Type'];
echo $_POST['Subject'];
echo $_POST['Exam_Type'];
//echo "<tr><td>Subject:</td><td>$sub</td></tr>";
//echo "<tr><td>Exam_Type:</td><td>$type</td></tr>";
*/
if ($_SESSION['Exam_Type']=="External")
	$total=30;
else
	$total=18;

?>



<html>
<head>
	<title>Select2</title>
</head>

<body>
<br><br>
<table border="3" align="right">
<?php 
echo "<tr><td><strong><h1>" . $total . "</h1></strong></td></tr>";
?>
</table>

<center>
<form action="tp2.php?x=<?php echo $x;?>" method="POST" bgcolor="blue">
	<table border="0" cellspacing="70" align="centre">
	<?php 
	//echo "<tr><td><b>" . $total . "</b></td></tr>";
	echo "<input type=\"hidden\" name=\"t\" value=\"$total\">";
	?>

<tr><td>
	<input type="hidden" name="sub" value="<?php echo $_GET['sub'];?>">
	</td><td><input type="hidden" name="typ" value="<?php echo $_GET['type'];?>">
	</td></tr>

	<tr><td>No. of MCQs</td>
	<td><input type="number" name="mcq" value="0"/></td>
	<td>Difficulty:</td>
	<td colspan="3"><select name="Difficulty_mcq">
						<option>Easy</option>
						<option>Medium</option>
						<option>Difficult</option>
						
					</select>
	</td>
	</tr>
	
	<tr><td>No. of 2_marks</td>
	<td><input type="number" name="2_marks" value="0"/></td>
	<td>Difficulty:</td>
	<td colspan="3"><select name="Difficulty_2">
						<option>Easy</option>
						<option>Medium</option>
						<option>Difficult</option>
						
					</select>
	</td>
	</tr>
	
	<tr><td>No. of 3_marks</td>
	<td><input type="number" name="3_marks" value="0"/></td>
	<td>Difficulty:</td>
	<td colspan="3"><select name="Difficulty_3">
						<option>Easy</option>
						<option>Medium</option>
						<option>Difficult</option>
						
					</select>
	</td>
	</tr>
	
	<tr><td>No. of 6_marks</td>
	<td><input type="number" name="6_marks" value="0"/></td>
	<td>Difficulty:</td>
	<td colspan="3"><select name="Difficulty_6">
						<option>Easy</option>
						<option>Medium</option>
						<option>Difficult</option>
						
					</select>
	</td>
	</tr>
	
	
<!--
	<tr><td>Next</td><td><input type="radio" name="abc" value="1" ></td>
		<td>Submit</td><td><input type="radio" name="abc" value="0"></td>
	</tr>-->
	<tr><td><input type="submit" name="next" value="next" ></td></tr>
	</table>
</form>
</center>
</body>
</html>	
