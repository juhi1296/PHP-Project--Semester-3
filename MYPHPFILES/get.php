<?php
  if( $_GET["name"] || $_GET["age"] )
  {
     echo "Welcome ". $_GET['name']. "<br />";
     echo "You are ". $_GET['age']. " years old.". "<br/>";
     $input = $_SERVER['QUERY_STRING'];
	 var_dump($input);
	 exit();
  }
?>

