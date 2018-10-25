<?php
$msg=null;
  if( $_POST["name"] )
  {
     if(strlen($_POST['name'])>11)
     {
        header("location:indexn.php?msg=username must be less than 11 characters");
     }
     if($_POST["pwd"])
     {
        if(strlen($_POST['pwd']) < 6 || strlen($_POST['pwd']) > 10)
        {
                header("location:indexn.php?msg=password should between 6 to 10 characters");
        }
     
        echo "Welcome ". $_POST['name']. "<br />";
     
    }
    else
         header("location:indexn.php?msg=password can not be empty");
	 
  }
  else
   header("location:indexn.php?msg=username can not be empty");
 
echo"<a href=\"indexn.php\"><input type=\"button\" value=\"Home\"></a>";  
?>

