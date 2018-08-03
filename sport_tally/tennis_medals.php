<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $tenn = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 8 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($tenn)>0){
            		while($row = mysqli_fetch_assoc($tenn)){
            					$h1 = $row['SUM(place.points)'];
								$hhrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$hhrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $tenni = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 8 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($tenni)>0){
            		while($row = mysqli_fetch_assoc($tenni)){
            					$h2 = $row['SUM(place.points)'];
								$hhrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$hhrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $tennis = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 8 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($tennis)>0){
            		while($row = mysqli_fetch_assoc($tennis)){
            					$h3 = $row['SUM(place.points)'];
								$hhrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$hhrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total7 = $h1+$h2+$h3;
	$total_medals7 = $hhrdata1+$hhrdata2+$hhrdata3;

?>