<?php session_start();
include('../includes/connect.php');
$id = $_GET['id'];
$sql = mysqli_query($db,"DELETE FROM winners WHERE win_id = '$id'") or die (mysql_error());
if($sql==true){
	
					$_SESSION['success_msg'] ='<i class="glyphicon glyphicon-ok"></i> Deleted Successully!';
   					 header("Location:../pages/winner.php");
					$_SESSION['class'] = 'success';
				exit();
	
	}
?>