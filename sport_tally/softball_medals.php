<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $softball = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 10 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($softball)>0){
            		while($row = mysqli_fetch_assoc($softball)){
            					$j1 = $row['SUM(place.points)'];
								$jhrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$jhrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $softba = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 10 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($softba)>0){
            		while($row = mysqli_fetch_assoc($softba)){
            					$j2 = $row['SUM(place.points)'];
								$jhrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$jhrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $soft = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 10 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($soft)>0){
            		while($row = mysqli_fetch_assoc($soft)){
            		$j3 = $row['SUM(place.points)'];
					$jhrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
           			$jhrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total9 = $j1+$j2+$j3;
	$total_medals9 = $jhrdata1+$jhrdata2+$jhrdata3;

?>