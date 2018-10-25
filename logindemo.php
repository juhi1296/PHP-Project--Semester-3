<?php
session_start();
if(isset($_SESSION['uname']))
{
	header("location:already_logged.php");
}

?>
<html>
<head>
<title>Login Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
div {
    background-color: light gray;
    width: 300px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	align: center;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	align: center;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	align: center;
}

input[type=submit]:hover {
    background-color: #45a049;
}

</style>

</head>

<body>
    <img src="header5.jpg" alt="Fjords" width="1100" height="80">
<table align="center"><tr><td>
<div align="center">
  <form action=" " method="post">
  <?php
  if(isset($_POST['reg']))
  {
  	header("location:registration.php") ;
  } 
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  try{
	$dbhandler = new PDO('mysql:host=localhost;dbname=online-aptitude','root','');
	$query=$dbhandler->query('select * from login');

	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
	while($r=$query->fetch(PDO::FETCH_OBJ)){
			
			//echo data as object
			if(($_POST['username']==$r->Username)&&($_POST['pass']==$r->Password))
			{
			session_start() ;
			$_SESSION['uname']=$_POST['username'] ;
			header("location:homedemo.php") ;
			}
		}

			echo "Invalid Username/Password" ;
    }
    catch(PDOException $e){
	echo $e->getMessage();
	die(); }
}
	?>
	<p align="center">Username</p>
    <input type="text" name="username">

	<p align="center">Password</p>
    <input type="password" name="pass">

 <!--   <label for="country">State</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  -->
    <input type="submit" name="submit" value="Submit">
	<input type="submit" name="reg" value="Register Now">
	
  </form>
</div>
</td></tr></table>

</body>
</html>
