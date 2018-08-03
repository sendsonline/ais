<?php
	session_start();

		unset ($_SESSION['user_id']);
		unset ($_SESSION['fullname']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['designation']);
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['fullname']);
		unset($_SESSION['designation']);
		unset($_SESSION['avatar']);
		header("location:../pages/index.php");
	
?>