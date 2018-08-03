<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $bb = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 1 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($bb)>0){
            		while($row = mysqli_fetch_assoc($bb)){
            					$a1 = $row['SUM(place.points)'];
								$ahrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ahrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $bs = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 1 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($bs)>0){
            		while($row = mysqli_fetch_assoc($bs)){
            					$a2 = $row['SUM(place.points)'];
								$ahrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ahrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $year = $_POST['year'];
            
            $bg = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 1 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($bg)>0){
            		while($row = mysqli_fetch_assoc($bg)){
            					$a3 = $row['SUM(place.points)'];
								$ahrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ahrdata1 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total = $a1+$a2+$a3;
	$total_medals = $ahrdata1+$ahrdata2+$ahrdata3;


?>