
<?php
//error_reporting(0);
//$a=$_POST['admin'];
//$c=$_POST['client'];
//echo $a;
//echo $c;
if(isset($_POST['admin']))
{
	if ($_POST['admin'])
	header("location:1.php");
}
else
{
	if ($_POST['client'])
	header("location:register.php");
}	
?>	