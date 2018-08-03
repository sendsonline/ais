<?php 
 session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){


	include('../includes/connect.php');

	$password = $_POST['password'];
	$id = $_SESSION['user_id'];

	$query = mysqli_query($db,"UPDATE players SET password = '$password' WHERE stud_id = '$id'");

	if($query){
		echo"Password changed!";
		$_SESSION['password'] = $_POST['password'];
	}
	else{
		echo"Password not changed!";
	}
}
else{
	header('Location:../index.php');
}
?>