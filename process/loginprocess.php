<?php 
session_start();
include('../includes/connect.php');
		if(isset($_POST['login'])){
			$uname = $_POST['username'];
			$pword = $_POST['password'];
			
			$query = "SELECT * FROM users WHERE username = '$uname' AND password = '$pword'";
			$result = mysqli_query($db,$query);
			
				if(mysqli_num_rows($result)==0){
					
					$_SESSION['success_msg'] ='<i class="fa fa-info-circle"></i> Invalid username and/or password!';
   					 header("Location:../pages/login.php");
					$_SESSION['class'] = 'danger';
				exit();
					}
				else {
						while($row = mysqli_fetch_assoc($result)){
								$_SESSION['user_id'] = $row['user_id'];
								$_SESSION['username'] = $row['username'];
								$_SESSION['password'] = $row['password'];
								$_SESSION['fullname'] = $row['fullname'];
								$_SESSION['designation'] = $row['designation'];
								$_SESSION['avatar'] = $row['avatar'];
								header('location:../pages/index.php');
							
							}
					}
			
			}

			if(isset($_POST['userLogin'])){
			$uname = $_POST['username'];
			$pword = $_POST['password'];
			
			$query = "SELECT * FROM players WHERE student_no = '$uname' AND password = '$pword'";
			$result = mysqli_query($db,$query);
			
				if(mysqli_num_rows($result)==0){
					
					$_SESSION['success_msg'] ='<i class="fa fa-info-circle"></i> Invalid username and/or password!';
   					 header("Location:../pages/login.php");
					$_SESSION['class'] = 'danger';
				exit();
					}
				else {
						while($row = mysqli_fetch_assoc($result)){
								$_SESSION['user_id'] = $row['stud_id'];
								$_SESSION['username'] = $row['student_no'];
								$_SESSION['password'] = $row['password'];
								$_SESSION['fullname'] = $row['fname'].' '.$row['mname'].' '.$row['lname'];
								$_SESSION['designation'] = 'Student';
								$_SESSION['avatar'] = $row['avatar'];
								$_SESSION['password'] = $row['password'];
								header('location:../user/index.php');
							
							}
					}
			
			}
			mysqli_close($db)


			

?>
