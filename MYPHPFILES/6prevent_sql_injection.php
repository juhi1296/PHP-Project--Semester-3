<?php
// '  OR ' ' = '
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	echo "Connected...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(!empty($username) && !empty($password))
			{
			$query=$dbhandler->prepare("select id from Juhi1 where username=? and password=? ");
			$query->execute(array($username,$password));
			while($r=$query->fetch(PDO::FETCH_ASSOC)){
			
			//echo data in associative format
			echo '<pre>',print_r($r),'</pre>';
				}
			}
		else
			{
				echo "Something went wrong...";
			}
	}

}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>



<form action='6prevent_sql_injection.php' method='post'>
Name::<input type='text' name='username'>
Password::<input type='text' name='password'>
<input type='Submit' Value='Login'>
</form>
