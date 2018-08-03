<?php 
  include('../includes/connect.php');
	$id = $_POST['id'];
	$result = array();
	 $g = mysqli_query($db,"SELECT * FROM category WHERE sport_id = '$id'") or die (mysql_error());
        while($row = mysqli_fetch_assoc($g)){
        	$result[] = array($row['cat_id'], $row['category']);
        }
        echo json_encode($result);

?>