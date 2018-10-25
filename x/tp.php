<html>
<body>
<table border="2">

<?php
session_start();

$q=$_POST['type'];
$d=$_POST['Difficulty'];
$sub=$_POST['sub'];
$type=$_POST['typ'];	
$total=$_POST['t'];
// '  OR ' ' = '
echo $q ;
echo $d;
echo $sub;
echo $type;
echo $total;

if ($q=="MCQ")
{$y=1;}
else if ($q=="2_Marks")
	$y=2;
else if ($q=="3_Marks")
	$y=3;
else
	$y=6;


if ($_POST['abc']==1)
	$total=$total-$y;
else
	header("location:hhh.php");

echo "New total".$total;
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test1','root','');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql2="select Sub_Id from sub where Subject='$sub'";
	$query=$dbhandler->query($sql2);
	$r=$query->fetch();
	echo $r['Sub_Id'], '<br/>';
	$id=$r['Sub_Id'];
	echo "$id";
	
	//echo $id ." <br>".  $r['Subject'] ."<br>". $sub;
	$x=10;
	echo "p=".$x;
	echo "<tr><th>".$q."</th></tr>";		
	echo "Connected...<br/>";
//	$sql="select $q from $q where Exam_Type='$type' and Sub_Id='$id' and Difficulty='$d' and Priority='$x'";
	$sql="select * from $q where Exam_Type='$type' and Sub_Id='$id' and Difficulty='$d' and Priority='$x'";
	//$sql="SELECT Exam_Type='$type', Sub_Id='$id', $q, `Difficulty`, `Priority` FROM `2_marks` WHERE 1
	//echo"hi1";
	$query=$dbhandler->query($sql);	
	$r=$query->fetch();
	if ($r==NULL)
	{
		$z=$x-1;
		$sql="select * from $q where Exam_Type='$type' and Sub_Id='$id' and Difficulty='$d' and Priority='$z'";
		$query=$dbhandler->query($sql);	
		$r=$query->fetch();
		$x=$z;
	}
	
	echo '<pre>',print_r($r[$q]),'</pre>';
	echo"hi3";
	echo "question=".$r[$q];
	
	$a=$r[$q];
	
	$z=$x-1;
	$q1="UPDATE $q SET Priority=$z WHERE $q='$a'";
	$query=$dbhandler->prepare($q1);
	$query->execute();
	echo "updated successfully";


	//echo"hi2";
	$qq="insert into result (ques,type) values(?,?)";
	$query=$dbhandler->prepare($qq);
	$query->execute(array($r[$q],$q));
	echo "inserted successfully";
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}	
	session_destroy();

if ($total==0)
	header("location:hhh.php");
else
	header("location:select2d.php?total=".$total."&sub=".$sub."&type=".$type);

?>

</table>
</body>
</html>