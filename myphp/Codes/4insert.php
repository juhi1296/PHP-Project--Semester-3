<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','test','');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into mcq (Exam_Type,Sub_Id,2_Marks,Priority,Difficulty) values (,'Good night')";
	$query=$dbhandler->query($sql);
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>
