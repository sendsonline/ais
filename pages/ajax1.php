<?php

	if (isset($_POST['sports']) && !empty($_POST['sports'])) {
		include('../includes/connect.php');

		$id = $_POST['sports'];


		$query = "SELECT sports.*, category.* FROM category left join sports ON category.sport_id = sports.sport_id WHERE sports.sport_id = '$id'";

		$do = mysqli_query($db,$query);
		$count = mysqli_num_rows($do);

			if ($count>0) {
				while ($row = mysqli_fetch_array($do)) {
					echo '<option value="'.$row['cat_id'].'">'.$row['category'].'</option>';
				}
			}else{

				echo '<option value=""><font color = "RED">No available category</font></option>';
			}

	}else{

		echo "<h2>ERROR</h2>";
	}


	

?>