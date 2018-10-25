<html>
<body>
<table border="2">

<?php
// '  OR ' ' = '
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "<tr><th>MCQ</th></tr>";		
	$query=$dbhandler->prepare("select * from mcq where Sub_Id=? and Exam_Type=? and Priority=? and Difficulty=? ");
		$query->execute(array($Sub_Id,$Exam_Type,$Priority,$Difficulty));
	$i=1;	
	while( ($r=$query->fetch()) and ($i < 3) ){
			
			if ($r['Priority']==10)			
			{
			echo "<tr><td>".$i."</td>";
			echo "<td>".$r['MCQ']."</td></tr>";
			$r['Priority']=5;
			$i=$i+1;
			}
	}
		
	echo "<tr><th>2_marks</th></tr>";		
	$query=$dbhandler->prepare("select * from 2_marks where Sub_Id=? and Exam_Type=? and Priority=? and Difficulty=? ");
		$query->execute(array($Sub_Id,$Exam_Type,$Priority,$Difficulty));
	$i=1;	
	while( ($r=$query->fetch()) and ($i < 3) ){
			
			if ($r['Priority']==10)			
			{
			echo "<tr><td>".$i."</td>";
			echo "<td>".$r['2_marks']."</td></tr>";
			$r['Priority']=5;
			$i=$i+1;
			}
	}

	echo "<tr><th>3_marks</th></tr>";		
	$query=$dbhandler->prepare("select * from 3_marks where Sub_Id=? and Exam_Type=? and Priority=? and Difficulty=? ");
		$query->execute(array($Sub_Id,$Exam_Type,$Priority,$Difficulty));
	$i=1;	
	while( ($r=$query->fetch()) and ($i < 3) ){
			
			if ($r['Priority']==10)			
			{
			echo "<tr><td>".$i."</td>";
			echo "<td>".$r['3_marks']."</td></tr>";
			$r['Priority']=5;
			$i=$i+1;
			}
	}

	echo "<tr><th>6_marks</th></tr>";		
	$query=$dbhandler->prepare("select * from 6_marks where Sub_Id=? and Exam_Type=? and Priority=? and Difficulty=? ");
		$query->execute(array($Sub_Id,$Exam_Type,$Priority,$Difficulty));
	$i=1;	
	while( ($r=$query->fetch()) and ($i < 3) ){
			
			if ($r['Priority']==10)			
			{
			$a=$r['Sub_Id'];
			$b=$r['Exam_Type'];
			$c=$r['Priority'];
			$d=$r['Difficulty'];
			$e=$r['6_marks'];
			echo "<tr><td>".$i."</td>";
			echo "<td>".$r['3_marks']."</td></tr>";
			$q1=$dbhandler->prepare("delete * from 6_marks where Priority=10");
			$q3=$dbhandler->prepare($ql);
			$q2="insert into 6_marks (Exam_Type,Sub_Id,6_marks,Priority,Difficulty) values (?,?,?,?,?)";
			$q4=$dbhandler->prepare($q3);
			$q4->execute(array($b,$a,$e,$c-1,$d));
			$i=$i+1;
			}
	}

}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>


</table>
</body>
</html>