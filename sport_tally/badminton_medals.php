<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $badm = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 9 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($badm)>0){
            		while($row = mysqli_fetch_assoc($badm)){
            					$i1 = $row['SUM(place.points)'];
								$ihrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ihrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $badmi = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 9 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($badmi)>0){
            		while($row = mysqli_fetch_assoc($badmi)){
            					$i2 = $row['SUM(place.points)'];
								$ihrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ihrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $badmin = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 9 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($badmin)>0){
            		while($row = mysqli_fetch_assoc($badmin)){
            					$i3 = $row['SUM(place.points)'];
								$ihrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ihrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total8 = $i1+$i2+$i3;
	$total_medals8 = $ihrdata1+$ihrdata2+$ihrdata3;

?>