<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('select * from guestbook');
	$r=$query->fetchAll(PDO::FETCH_ASSOC);
	echo '<pre>', print_r($r),'</br>';
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>
