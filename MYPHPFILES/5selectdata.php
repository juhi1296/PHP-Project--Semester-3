<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('select * from CE_064');
		while($r=$query->fetch()){
			//echo specific attributes
			echo $r['message'], '<br/>';
			//echo all data in both format: numeric and associative
			echo '<pre>',print_r($r),'</pre>';
			//echo data in associative format
			
			//echo data in numeric format
		}
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
