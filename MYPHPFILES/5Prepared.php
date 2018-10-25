<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into CE_064 (name,message,posted) values (?,?,now())";
	$query=$dbhandler->prepare($sql);
	//bind and execute directly
	$query->execute(array('Nimmi','Hello World!'));
	$query->execute(array('Dhara','Hello Class!'));
	//bind and execute through variables
	$name='Mansi';
	$message='Happy Uttarayan';
	$query->execute(array($name,$message));
	echo $dbhandler->lastinsertid();
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>
