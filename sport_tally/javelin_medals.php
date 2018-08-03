<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $javel = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 4 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($javel)>0){
            		while($row = mysqli_fetch_assoc($javel)){
            					$d1 = $row['SUM(place.points)'];
								$dhrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$dhrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $jave = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 4 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($jave)>0){
            		while($row = mysqli_fetch_assoc($jave)){
            					$d2 = $row['SUM(place.points)'];
								$dhrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$dhrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $jav = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 4 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($jav)>0){
            		while($row = mysqli_fetch_assoc($jav)){
            					$d3 = $row['SUM(place.points)'];
								$dhrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$dhrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total3 = $d1+$d2+$d3;
	$total_medals3 = $dhrdata1+$dhrdata2+$dhrdata3;

?>