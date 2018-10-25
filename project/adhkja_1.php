<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table adhkja_1 (
        Subject-Id VARCHAR(30) PRIMARY KEY,
        Subject VARCHAR(50)	
		)";
	$query=$dbhandler->query($sql);
	echo "Table is created successfully";
		
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
