<?php

session_start();




if(!isset($_POST['secure']))
{
	$_SESSION['secure']=rand(1000,9999);
	
}

else
{	
	if($_SESSION['secure']==$_POST['secure'])
	{
		echo'A match';
	}
    else
	{
		
		echo'Incorrect again';
		$_SESSION['secure']=rand(1000,9999);
		
	}
}
?>
 <img src="captchafont.php">

<form action="captchafont.php" method="POST">
	Type the value see:<input type="text" size="6" name="secure">


	<input type="submit" name="Submit" value="Submit" />
	</form>

	
	







