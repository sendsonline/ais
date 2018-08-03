<?php
	include('../includes/connect.php');
	$id = $_GET['id'];

	$query = mysqli_query($db, "DELETE FROM winners WHERE win_id = '$id'");
	if(!$query){
		echo"<script>alert('Winner not deleted!');window.location.href='../pages/winner.php';</script>";
	}
	else{
		echo"<script>alert('Winner deleted!');window.location.href='../pages/winner.php';</script>";
	}


?>