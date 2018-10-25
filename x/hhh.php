<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test1','root','');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$query=$dbhandler->query ('select * from result');
$r=$query->fetchAll(PDO::FETCH_ASSOC);
	
	echo '<pre>', print_r($r),'</br>';
	$x=0;
//	$query=$dbhandler->query ("DELETE * from result where Id='$x'");
	$query=$dbhandler->query ("DELETE FROM `result` WHERE 1");
	$query->execute();

}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}	
?>