<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $tab = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 7 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($tab)>0){
            		while($row = mysqli_fetch_assoc($tab)){
            					$g1 = $row['SUM(place.points)'];
								$ghrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ghrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $tabl = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 7 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($tabl)>0){
            		while($row = mysqli_fetch_assoc($tabl)){
            					$g2 = $row['SUM(place.points)'];
								$ghrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ghrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $table = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 7 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($table)>0){
            		while($row = mysqli_fetch_assoc($table)){
            					$g3 = $row['SUM(place.points)'];
								$ghrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$ghrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total6 = $g1+$g2+$g3;
	$total_medals6 = $ghrdata1+$ghrdata2+$ghrdata3;

?>