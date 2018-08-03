<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $softball = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 11 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($softball)>0){
            		while($row = mysqli_fetch_assoc($softball)){
            					$k1 = $row['SUM(place.points)'];
								$khrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$khrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $softba = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 11 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($softba)>0){
            		while($row = mysqli_fetch_assoc($softba)){
            					$k2 = $row['SUM(place.points)'];
								$khrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$khrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $ch = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 11 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($ch)>0){
            		while($row = mysqli_fetch_assoc($ch)){
            		$k3 = $row['SUM(place.points)'];
					$khrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
           			$khrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total10 = $k1+$k2+$k3;
	$total_medals10 = $khrdata1+$khrdata2+$khrdata3;

?>