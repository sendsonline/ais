<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $sep = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 12 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($sep)>0){
            		while($row = mysqli_fetch_assoc($sep)){
            					$l1 = $row['SUM(place.points)'];
								$lhrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$lhrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $sepa = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 12 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($sepa)>0){
            		while($row = mysqli_fetch_assoc($sepa)){
            					$l2 = $row['SUM(place.points)'];
								$lhrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$lhrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $sepak = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 12 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($sepak)>0){
            		while($row = mysqli_fetch_assoc($sepak)){
            		$l3 = $row['SUM(place.points)'];
					$lhrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
           			$lhrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total11 = $l1+$l2+$l3;
	$total_medals11 = $lhrdata1+$lhrdata2+$lhrdata3;

?>