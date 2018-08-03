<?php
	session_start();

		
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['fullname']);
		unset($_SESSION['designation']);
		unset($_SESSION['avatar']);
		unset($_SESSION['password']);
		header("location:../index.php");
	
?>