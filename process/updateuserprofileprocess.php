<?php 
session_start();
include('../includes/connect.php');
		if(isset($_POST['updateprofile'])){
			$lastname = $_POST['lastname'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$course = $_POST['course'];
			$contact = $_POST['contact'];
			$gender = $_POST['gender'];
			$birthdate = $_POST['birthdate'];
        	$yearlevel = $_POST['yearlevel'];
        	$address = $_POST['address'];
        	$sports = $_POST['category'];

        	$bloodtype = $_POST['bloodtype'];
        	$allergy = $_POST['allergy'];
        	$emergency = $_POST['emergency'];
        	$paddress = $_POST['paddress'];
        	$pcontact = $_POST['pcontact'];
        	$status = $_POST['status'];
        	$password = $_POST['password'];
        	
			$sid = $_POST['sid'];

		

			if(empty($lastname) || empty($firstname) || empty($course) || empty($middlename) || empty($contact) || empty($gender) || empty($birthdate) || empty($yearlevel) || empty($address) || empty($bloodtype) || empty($allergy) || empty($emergency) || empty($paddress) || empty($pcontact) || empty($status)){
					echo '<script>alert("Fields must not be empty!.");
							      window.location.href="../user/profile.php";</script>';
				}
				else{
					if ($password != $_SESSION['password']){
						echo '<script>alert("Incorrect password!");
							      window.location.href="../user/profile.php";</script>';
					}
				else{

		
			
			$query = "UPDATE players SET lname = '$lastname', fname = '$firstname', mname='$middlename', course_id = '$course', contact_no = '$contact', gender = '$gender', level_id = '$yearlevel', birthdate = '$birthdate', address='$address', sports_id = '$sports', bloodtype = '$bloodtype', allergy = '$allergy', emergency = '$emergency', paddress = '$paddress', pcontact = '$pcontact', status = '$status' WHERE stud_id = $sid";

			$result = mysqli_query($db,$query) or die (mysql_error());
				if($result==true){
								$_SESSION['fullname'] = $firstname.' '.$middlename.' '.$lastname;
				echo '<script>alert("Data Updated Successfully.");
							      window.location.href="../user/profile.php";</script>';
				exit();
					}
				else {
						echo '<script>alert("Sorry unable to process your request.");
							      window.location.href="../user/profile.php";</script>';
				exit();
							
							}
					}
				}
			
			
			}

			mysqli_close($db);

?>