<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);
if(isset($_SESSION['username']) && isset($_SESSION['password'])){


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="../dist/img/logo.png" rel="shortcut icon">
  <title> Athletes' Event and Information System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/style2.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../dist/css/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../dist/css/ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/skin-black.css">
    <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>


   


           <style>  
           ul.list-unstyled{  
                background-color:#eee;  
                cursor:pointer;  
           }  
          #aa{  
                padding:12px;  
           }  
           </style>  

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav" style="background-image:url(../images/.jpg); width:100%;">
<div class="wrapper" style="background-image:url(../images/.jpg); width:100%;">

 <?php include('../includes/adminHeader.php');?>
  <!-- Full Width Column -->
  <div class="content-wrapper" style="background-image:url(../images/.jpg); width:100%;">
    <div class="container" >
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-gears"></i> Show Records</h3>


          </div>

          <div class="box-body">
         
          <div class="panel panel-default">
       <div class="panel-body">


          <div class="box-body">



 <form class="form-horizontal" method="post" action="">
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Student No.*</label>
                    <button type="submit" id="auto" class="btn bg-black"  name="search"><i class="glyphicon glyphicon-search"></i> Search
                   </button>

                 
                  <div class="col-xs-6">
                      <input type="number" class="form-control" name="student_no" placeholder="Student no.">
                       

                  </div>

               

                </div>
                


          


              </form>
              <br>
              



 <?php include('../includes/connect.php');
      if(isset($_POST['search'])){ 

        $student_no=$_POST['student_no'];
          $stud_id = $_SESSION['stud_id'];
      
  
        if(empty($student_no)){
            echo'<script>alert("Fields must not be empty!");
                       window.location.href="profiles.php";</script>';
                   
          }
        else {
          
            $sql = "SELECT * FROM players WHERE student_no='$student_no'";

            $result = mysqli_query($db,$sql);
      
        if(mysqli_num_rows($result)==0){

             echo'<script>alert("Student not found");
                       window.location.href="profiles.php";</script>';
          }       
          else {

              while($row = mysqli_fetch_assoc($result)){

                $_SESSION['stud_id'] = $row['stud_id'];
                   
        ?>      
        <p></p>
        <h2> <center> <font face="Papyrus" size="+3"> <?php echo $row['fname']. ' ' .$row['mname']. ' ' .$row['lname']; ?> </font></center> </h2>
        <br>             
      

          <?php }

          ?>
        
         
                  
          <?php }   }  }
          
          
         
          ?>

              </div>
    

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

            


             


          
           <div class="col-md-4">

            

            <?php include('../includes/connect.php');
      
      
        $id = $_SESSION['stud_id'];
        $sql = mysqli_query($db,"SELECT * FROM players WHERE stud_id = '$id'") or die (mysql_error());
        if(mysqli_num_rows($sql)==0){
          echo '<center><img src="../dist/img/admin.png" width="150px;" class="img-responsive img-circle></center>"';}
          else{ 
          while($row = mysqli_fetch_assoc($sql)){
        ?>
               <center> <img src="<?php echo $row['avatar'];?>" width="250px;" class="img-responsive img-circle"></center>
                <?php }}?>
                <br><p></p>
                <form method="post" action="../process/updateavatarprocess.php" enctype="multipart/form-data">
                	<center><input type="file" name="image" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['stud_id'];?>"><br>
                    <button class="btn bg-black" type="submit" name="avatar">Update Avatar</button></center>
                </form>
           </div>
           <div class="col-md-8">
           		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#studentinfo" data-toggle="tab">Student Info</a></li>
              <li><a href="#updateprofile" data-toggle="tab">Update Profile</a></li>
              <li><a href="#appearance" data-toggle="tab">Appearance</a></li>
              <li><a href="#history" data-toggle="tab">Player History</a></li>

               	 
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="studentinfo">
               
                
               
                <!-- Post -->
                <div class="post">


                  <div class="user-block">
                   	 <div class="box-body">
              			<dl class="dl-horizontal">

         

              	<?php include('../includes/connect.php');
								$stud_id = $_SESSION['stud_id'];
								$query = mysqli_query($db,"SELECT players.*, course.*, sports.*, year.* from players LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN sports ON players.sports_id = sports.sport_id LEFT JOIN year ON players.level_id = year.level_id WHERE players.stud_id ='$stud_id' ") or die (mysql_error());
								
                  while($row = mysqli_fetch_assoc($query)){

                  ?>

                  

                  <p align="center" style="font-size: 12pt;font-family: 'Century Gothic';"><i class="fa fa-list-alt"></i> <strong>Basic Information</strong></p>
                 

                	<dt style="font-family: 'Century Gothic';">Student No:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['student_no'];?></dd>
                	<dt style="font-family: 'Century Gothic';">Full Name:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['fname']. ' ' . $row['mname']. ' ' .$row['lname'];?></dd>
                                
                  <dt style="font-family: 'Century Gothic';">Sports:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['sports'];?></dd>

                               
                  <dt style="font-family: 'Century Gothic';">Year Level:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['year'];?></dd>
                  <dt style="font-family: 'Century Gothic';">Course:</dt>  <dd style="font-family: 'Century Gothic';"><?php echo $row['course'];?></dd>
                  <dt style="font-family: 'Century Gothic';">Contact No:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['contact_no'];?></dd>
                  <dt style="font-family: 'Century Gothic';">Gender:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['gender'];?></dd>
                                
                  <dt style="font-family: 'Century Gothic';">Birthdate:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['birthdate'];?></dd>
                  <dt style="font-family: 'Century Gothic';">Address:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['address'];?></dd><br><br>
                          
                  <p align="center" style="font-size: 12pt;font-family: 'Century Gothic';"><i class="fa fa-list-alt"></i> <strong>Additional Information</strong></p>

                  <dt style="font-family: 'Century Gothic';">Blood Type:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['bloodtype'];?></dd>
                  <dt style="font-family: 'Century Gothic';">Allergy(s):</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['allergy'];?></dd>
                  <dt style="font-family: 'Century Gothic';">In case of emergency,<br>please contact:</dt> <dd style="font-family: 'Century Gothic';"><br><?php echo $row['emergency'];?></dd>

                  <dt style="font-family: 'Century Gothic';">Address:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['paddress'];?></dd>
                  <dt style="font-family: 'Century Gothic';">Contact No:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['pcontact'];?></dd>
                  <dt style="font-family: 'Century Gothic';">Status:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['status'];?></dd><br><br>



                   <center> <a href="print_profiles.php" class="btn bg-black btn-md" style="margin-right: 48px;"><span class="glyphicon glyphicon-print"></span>&nbsp; Print Data</a> </center>
                               

                                <?php


                                 }?>



              				</dl>
              			</div>
                  	</div>
                  </div>
             

              

               

                <!-- /.post -->
              </div>


            
              <!-- /.tab-pane -->

              <div class="tab-pane" id="updateprofile">
                <form class="form-horizontal" method="post" action="../process/updateprofileprocess.php">
                  

                   <?php  include('../includes/connect.php');
                $stud_id = $_SESSION['stud_id'];
                $query = mysqli_query($db,"SELECT players.*, course.*, sports.*, year.* from players LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN sports ON players.sports_id = sports.sport_id LEFT JOIN year ON players.level_id = year.level_id WHERE players.stud_id = '$stud_id'") or die (mysql_error());
                while($row = mysqli_fetch_assoc($query)){?>

 			
			

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">First Name</label>

                    <div class="col-sm-6">
                    <input type="hidden" name="sid" value="<?php echo $row['stud_id'];?>">
                      <input type="text" class="form-control" name="firstname" value="<?php echo $row['fname']; ?>" required>
                    </div>
                  </div>
              <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Middle name</label>
                 <div class="col-sm-6">
                      
                      <input type="text" class="form-control" name="middlename" value="<?php echo $row['mname']; ?>" required>
                    </div>
             </div>  

             <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Last name</label>
                 <div class="col-sm-6">
                      
                      <input type="text" class="form-control" name="lastname" value="<?php echo $row['lname']; ?>" required>
                    </div>
                  </div>


                      <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="gender" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['gender'];?>"><?php echo $row['gender']; ?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                         
                        </select>
                  </div>
                </div>

                <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Birthdate</label>
                 <div class="col-sm-6">
                      
                      <input type="date" class="form-control" name="birthdate" value="<?php echo $row['birthdate']; ?>" required>
                    </div>
             </div> 
              <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Contact No</label>
                 <div class="col-sm-6">
                      
                      <input type="number" class="form-control" name="contact" value="<?php echo $row['contact_no']; ?>" required>
                    </div>
             </div> 
                

                 <div class="form-group">
                  <label class="col-xs-2 control-label">Year Level</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="yearlevel" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['level_id'];?>"><?php echo $row['year']; ?></option>
                            
                          <option value="1">1st Year</option>
                          <option value="2">2nd Year</option>
                          <option value="3">3rd Year</option>
                          <option value="4">4th Year</option>
                        
                         
                        </select>
                  </div>
                </div>



                 <div class="form-group">
                  <label class="col-xs-2 control-label">Course</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="course" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['course_id'];?>"><?php echo $row['course']; ?></option>
                          <option value="1">BSIT</option>
                          <option value="2">BSA</option>
                          <option value="3">BSBA</option>
                          <option value="4">BOAS</option>
                          <option value="5">CSNT</option>
                          <option value="6">HRS</option>
                          <option value="7">ACT</option>
                          <option value="8">BSCS</option>
                           <option value="9">BSHRM</option>
                          <option value="10">BSTM</option>
                          <option value="11">BSAccT</option>
              
                          
                        </select>
                  </div>
                </div>

                 <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Address</label>
                 <div class="col-sm-8">
                      
                      <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" required>
                    </div>
             </div> 

                 <div class="form-group">
                  <label class="col-xs-2 control-label">Sports</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="sports" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['sports_id'];?>"><?php echo $row['sports']; ?></option>
                            
                          <?php include('../includes/connect.php');
            
          
            $g = mysqli_query($db,"SELECT * FROM sports") or die (mysql_error());
              while($row = mysqli_fetch_assoc($g)){
               
                
                      
                      ?>

                        <option value="<?php echo $row['sport_id'];?>"><?php echo $row['sports'];?></option>
                  <?php }

                  ?>
                         
                        </select>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-xs-2 control-label">Blood Type</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="bloodtype" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['bloodtype'];?>"><?php echo $row['bloodtype']; ?></option>
                            
                          <option value="Type A">Type A</option>
                          <option value="Type B">Type B</option>
                          <option value="Type AB">Type AB</option>
                          <option value="Type O">Type O</option>
                          <option value="Negative">Negative</option>
                          <option value="Positive">Positive</option>
                         
                        </select>
                  </div>
                </div>

                <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Allergy(s)</label>
                 <div class="col-sm-8">
                      
                      <textarea type="text" class="form-control" name="allergy" value="<?php echo $row['allergy']; ?>" required></textarea>
                    </div>
             </div>
                
             <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">In case of emergency, <br>please contact</label>
                 <div class="col-sm-8">
                      <br>
                      <input type="text" class="form-control" name="emergency" value="<?php echo $row['emergency']; ?>" required>
                    </div>
             </div>

                <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Address</label>
                 <div class="col-sm-8">
                      
                      <input type="text" class="form-control" name="paddress" value="<?php echo $row['paddress']; ?>" required>
                    </div>
             </div>

             <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Contact No</label>
                 <div class="col-sm-8">
                      
                      <input type="text" class="form-control" name="pcontact" value="<?php echo $row['pcontact']; ?>" required>
                    </div>
             </div>

             <div class="form-group">
                  <label class="col-xs-2 control-label">Status</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="status" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['status'];?>"><?php echo $row['status']; ?></option>
                         <option value="Active">Active</option>
                         <option value="Incative">Inactive</option>
              
                          
                        </select>
                  </div>
                </div>

                 
                      <?php }?>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn bg-black pull-right" name="updateprofile">Save Changes</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
               <!-- /.tab-pane -->

               <div class="tab-pane" id="appearance">
 <div class="form-group">

              <table id="example3" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th style="width:auto;background-color: silver;text-align: center;">Sports</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Category</th>
                    <th style="width:auto;background-color: silver;text-align: center;">School Year</th>
                    
                   
                   
                   
                    <th style="width:auto;background-color: silver;text-align: center;">Place</th>

                    
                  </tr>
                </thead>
                <tbody>
                  <?php include('../includes/connect.php');
            $id = $_SESSION['stud_id'];
            $query = mysqli_query($db,"SELECT players.*, sy.*, place.*, sports.*, winstudent.*,category.* FROM winstudent LEFT JOIN players ON winstudent.stud_id = players.stud_id LEFT JOIN sy ON winstudent.sy_id = sy.year_id LEFT JOIN place ON winstudent.place_id = place.place_id LEFT JOIN category ON winstudent.cat_id = category.cat_id LEFT JOIN sports ON category.sport_id = sports.sport_id WHERE players.stud_id = '$id'") or die (mysql_error());
            while($row = mysqli_fetch_assoc($query)){
              
              
              
              ?>
                        
                        <tr style="cursor:pointer;">
                       
                        <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['sports'];?></td>
                        <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['category'];?></td>
                        
                        <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['year'];?></td>
                        
                        <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['place'];?></td>
                        


                    
                        
                        </tr>
                 
<?php //include('../modal/viewstudenttitlemodal.php');
    //include('viewresModal.php')?>
                        <?php }?>
                </tbody>
                <tfoot>
                  <tr>
                  
                    <th style="width:auto;background-color: silver;text-align: center;">Sports</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Category</th>
                    <th style="width:auto;background-color: silver;text-align: center;">School Year</th>
                    
                   
                   
                   
                    <th style="width:auto;background-color: silver;text-align: center;">Place</th>
                    


                  </tr>
                </tfoot>
            
            </table>

              </div>
              </div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                
                <div class="tab-pane" id="history">
                <form class="form-horizontal" method="post" action="../process/updateprofileprocess.php">
                  

                   <?php  include('../includes/connect.php');
                $stud_id = $_SESSION['stud_id'];
                $query = mysqli_query($db,"SELECT players.*, course.*, sports.*, year.* from players LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN sports ON players.sports_id = sports.sport_id LEFT JOIN year ON players.level_id = year.level_id WHERE players.stud_id = '$stud_id'") or die (mysql_error());
                while($row = mysqli_fetch_assoc($query)){?>

      
      

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Name of School last attended:</label>

                    <div class="col-sm-6">
                    
                    </div>
                  </div>
              <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Sports Participated:</label>
                 <div class="col-sm-6">
                      
                    </div>
             </div>  

             <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">First Year:</label>
                 <div class="col-sm-6">
                    
                  </div>
                  </div>

                  <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Second Year:</label>
                 <div class="col-sm-6">
                    
                  </div>
                  </div>

                  <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Third Year:</label>
                 <div class="col-sm-6">
                    
                  </div>
                  </div>

                  <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">Fourth Year:</label>
                 <div class="col-sm-6">
                    
                  </div>
                  </div>


                

                 
                


                
                 
                      <?php }?>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn bg-black pull-right" name="updateprofile">Save Changes</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
               <!-- /.tab-pane -->









            









              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
           </div><!---col-md-6---->
          </div>
          </div>
         </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->   
  <!--footer----->
  
  <?php  include('../includes/footer.php'); ?>
</div>
<!-- ./wrapper -->


<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../js/bootstrap.min.js"></script>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script>
  $(function () {
    $("#example3").DataTable();
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


</body>
</html>
<?php }else {
		header('location:login.php');
	}?>