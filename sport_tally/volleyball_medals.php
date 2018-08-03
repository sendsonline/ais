<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
           $voll = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 6 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($voll)>0){
            		while($row = mysqli_fetch_assoc($voll)){
            					$f1 = $row['SUM(place.points)'];
								$fhrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$fhrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $volle = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 6 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($volle)>0){
            		while($row = mysqli_fetch_assoc($volle)){
            					$f2 = $row['SUM(place.points)'];
								$fhrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$fhrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              $volley = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 6 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($volley)>0){
            		while($row = mysqli_fetch_assoc($volley)){
            					$f3 = $row['SUM(place.points)'];
								$fhrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$fhrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total5 = $f1+$f2+$f3;
	$total_medals5 = $fhrdata1+$fhrdata2+$fhrdata3;

?>