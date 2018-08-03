<?php

 include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
            $sb = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 3 AND place.place_id = 3") or die (mysql_error());

	          		 if(mysqli_num_rows($sb)>0){
            		while($row = mysqli_fetch_assoc($sb)){
            					$c1 = $row['SUM(place.points)'];
								$chrdata1=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$chrdata1 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <?php
include('../includes/connect.php');
 if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
              
            $ss = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 3 AND place.place_id = 2") or die (mysql_error());

	          		 if(mysqli_num_rows($ss)>0){
            		while($row = mysqli_fetch_assoc($ss)){
            					$c2 = $row['SUM(place.points)'];
								$chrdata2=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$chrdata2 = 0;		
					}
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
include('../includes/connect.php');
if(isset($_POST['search'])){

	 $year = $_POST['year'];
            
                 
            $sg = mysqli_query($db,"SELECT winners.*, sy.*, place.*,sports.*, COUNT(winners.win_id),SUM(place.points) From winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN place ON winners.place_id= place.place_id LEFT JOIN sports ON winners.sport_id = sports.sport_id WHERE sy.year_id = '$year' AND sports.sport_id = 3 AND place.place_id = 1") or die (mysql_error());

	          		 if(mysqli_num_rows($sg)>0){
            		while($row = mysqli_fetch_assoc($sg)){
            					$c3 = $row['SUM(place.points)'];
								$chrdata3=$row['COUNT(winners.win_id)'];
            }   }
					else {
            		$chrdata3 = 0;		
					}
}
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<?php
	$total_total2 = $c1+$c2+$c3;
	$total_medals2 = $chrdata1+$chrdata2+$chrdata3;


?>