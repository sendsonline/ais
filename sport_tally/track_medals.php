<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $tb = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 2 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($tb)>0){
            		while($row = mysqli_fetch_assoc($tb)){
            					$b1 = $row['SUM(place.points)'];
								$bhrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$bhrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $ts = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 2 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($ts)>0){
            		while($row = mysqli_fetch_assoc($ts)){
            					$b2 = $row['SUM(place.points)'];
								$bhrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$bhrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $tg = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 2 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($tg)>0){
            		while($row = mysqli_fetch_assoc($tg)){
            					$b3 = $row['SUM(place.points)'];
								$bhrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$bhrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total1 = $b1+$b2+$b3;
	$total_medals1 = $bhrdata1+$bhrdata2+$bhrdata3;


?>