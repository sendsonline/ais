<?php session_start();
include('../includes/connect.php');
$id = $_GET['id'];
$sql = mysqli_query($db,"DELETE FROM category WHERE cat_id = '$id'") or die (mysql_error());
if($sql==true){
	
					$_SESSION['success_msg'] ='<i class="glyphicon glyphicon-ok"></i> Deleted Successully!';
   					 header("Location:../pages/sports.php");
					$_SESSION['class'] = 'success';
				exit();
	
	}
?>