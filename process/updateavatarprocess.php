<?php 
session_start();
include('../includes/connect.php');
		if(isset($_POST['avatar'])){
			$id = $_POST['id'];
			//image


                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                if (empty($image) || empty($image_name) || empty($image_size)) {
                                	echo'<script>window.alert("Select a picture");
													 window.location.href="../pages/profiles.php";</script>';
                                }
//
 								 move_uploaded_file($_FILES["image"]["tmp_name"], "../avatar/" . $_FILES["image"]["name"]);
                                $location = "../avatar/" . $_FILES["image"]["name"];
			
											$updatesql = mysqli_query($db,"UPDATE players set avatar = '$location' WHERE stud_id = '$id'") or die (mysql_error());
											if($updatesql==true){
										echo'<script>window.alert("Avatar Updated successfully!");
													 window.location.href="../pages/profiles.php";</script>';}
													 else {
														 echo'<script>window.alert("Sorry unable to process your request.");
													window.location.href="../pages/profiles.php";</script>';
														 }
											}
			
			
			mysqli_close($db);

?>