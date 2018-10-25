<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table naimish (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        username VARCHAR(30) NOT NULL,
        password text(50),
        
		)";
	$query=$dbhandler->query($sql);
	echo "Table is created successfully";
		
		
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
