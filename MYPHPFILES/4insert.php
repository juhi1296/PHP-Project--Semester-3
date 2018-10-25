<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into CE_064 (name,message,posted) values ('Vivek','Good night',now())";
	$query=$dbhandler->query($sql);
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>
