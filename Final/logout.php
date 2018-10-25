<?php
session_start();

		//unset($_SESSION['uname']);
		session_destroy();
		echo "You are signed out";
		echo " Click <a href='1st.php'>Here</a> to login again";
	
?>