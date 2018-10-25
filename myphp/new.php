
<?php
session_start();

//echo "<form method=\"POST\">";

		$q=$_POST['Q_type'];
		$d=$_POST['Difficulty_Level'];
		$ques=$_POST['ques'];
		$sub=$_POST['s'];
		$type=$_POST['t'];
		$button=$_POST['button'];
		echo "$q  $d  $sub $type  $ques  ";	
		echo "$button";
		
		

		
try{
	
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','test','');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$sql2="select Sub_Id from sub where Subject='$sub'";
	$query=$dbhandler->query($sql2);
	$r=$query->fetch();
	
	echo $r['Sub_Id'], '<br/>';
	$id=$r['Sub_Id'];
	echo "$id";
	
	$sql="insert into $q (Exam_Type,Sub_Id,$q,Priority,Difficulty) values (?,?,?,10,?) ";
	$query=$dbhandler->prepare($sql);
	$query->execute(array($type,$id,$ques,$d));
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

echo "<input type=\"hidden\" name=\"s1\" value=\"$sub\">";
echo "<input type=\"hidden\" name=\"t1\" value=\"$type\">";

if ($button=='Next Question')
	header("location:add2d.php");

else if($button=='Change Subject')
	header("location:add1.php");

else if($button=='End')
	header("location:temp.php");


	
?>