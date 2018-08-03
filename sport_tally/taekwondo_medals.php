<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $won = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 13 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($won)>0){
            		while($row = mysqli_fetch_assoc($won)){
            					$m1 = $row['SUM(place.points)'];
								$mhrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$mhrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $wond = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 13 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($wond)>0){
            		while($row = mysqli_fetch_assoc($wond)){
            					$m2 = $row['SUM(place.points)'];
								$mhrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$mhrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $wondo = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 13 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($wondo)>0){
            		while($row = mysqli_fetch_assoc($wondo)){
            		$m3 = $row['SUM(place.points)'];
					$mhrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
           			$mhrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total12 = $m1+$m2+$m3;
	$total_medals12 = $mhrdata1+$mhrdata2+$mhrdata3;

?>