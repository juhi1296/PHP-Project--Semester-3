<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table adhkja_3 (
        Subject-Id VARCHAR(30) PRIMARY KEY,
        Internal INT PRIMARY KEY,
	2-Mark VARCHAR(500) ,
	Priority-Level INT ,
	Difficulty-Level VARCHAR(10)  	
	,Sr.No INT
		)";
	$query=$dbhandler->query($sql);
	echo "Table is created successfully";
		
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
