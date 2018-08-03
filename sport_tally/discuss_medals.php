<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $dis = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 5 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($dis)>0){
            		while($row = mysqli_fetch_assoc($dis)){
            					$e1 = $row['SUM(place.points)'];
								$ehrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ehrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $disc = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 5 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($disc)>0){
            		while($row = mysqli_fetch_assoc($disc)){
            					$e2 = $row['SUM(place.points)'];
								$ehrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ehrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $discu = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 5 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($discu)>0){
            		while($row = mysqli_fetch_assoc($discu)){
            					$e3 = $row['SUM(place.points)'];
								$ehrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ehrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total4 = $e1+$e2+$e3;
	$total_medals4 = $ehrdata1+$ehrdata2+$ehrdata3;

?>