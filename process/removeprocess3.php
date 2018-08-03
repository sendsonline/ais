<?php session_start();
include('../includes/connect.php');
$id = $_GET['id'];
$cat_id = $_SESSION['cat_id'];
$sql = mysqli_query($db,"DELETE FROM winstudent WHERE stud_id = '$id' AND cat_id = '$cat_id'") or die (mysql_error());
if($sql==true){
	
					$_SESSION['success_msg'] ='<i class="glyphicon glyphicon-ok"></i> Deleted Successully!';
   					 header("Location:../pages/winner_student.php");
					$_SESSION['class'] = 'success';
				exit();
	
	}
?>