<?php
$msg=null;
  if( $_POST["unm"] || $_POST["pwd"] || $_POST["cpwd"])
  {
	 if($_POST["pwd"])
     {
        if(strlen($_POST['pwd']) < 6 || strlen($_POST['pwd']) > 10)
        {
                header("location:registration1.php?msg=password should between 6 to 10 characters");
        }
	 }
	else
         header("location:registration1.php?msg=password field can not be empty");

     if(strlen($_POST['unm'])>11)
     {
        header("location:registration1.php?msg=username must be less than 11 characters");
     }
     	 
	
	if($_POST["cpwd"])
     {
		 if($_POST["pwd"]!=$_POST["cpwd"])
			 header("location:registration1.php?msg=Both password must be match");
			 
        if(strlen($_POST['cpwd']) < 6 || strlen($_POST['cpwd']) > 10)
        {
                header("location:registration1.php?msg=password should between 6 to 10 characters");
        }
     
        
     
    }
    else
         header("location:registration1.php?msg=re enter password field can not be empty");
	 
  }
  else
   header("location:registration1.php?msg=username can not be empty");
 
 
 echo"UserName=".$_POST['unm']."<br>";
 echo"Gender=".$_POST['sex']."<br>";
 echo"Birthdate=".$_POST['day']."/".$_POST['mm']."/".$_POST['year']."<br>";
 echo"Intersted Field:".$_POST['interest']."<br>";
 echo"Your Achievements:".$_POST['achieve']."<br>";
 
 
 
  echo"<a href=\"indexn.php\"><input type=\"button\" value=\"Home\"></a>";
?>

