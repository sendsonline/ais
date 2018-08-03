<?php session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="../../dist/img/logo.png" rel="shortcut icon">
  
  <title>Athletes' Event and Information System</title>
  <!-- Tell the browser to be responsive to screen width -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/style2.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../dist/css/font-awesome-4.6.3/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../dist/css/ionicons-2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/skin-black.css">
  <script src="../js/jquery.stickytabs.js"></script>

  <link href="css/dataTables.checkboxes.css" rel="stylesheet"/>
  
     <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav" style="background-image:url(dist/img/.jpg); width:100%;">
<div class="wrapper" style="background-image:url(dist/img/.jpg); width:100%;">

 <?php include('../includes/userHeader.php');?>
  <!-- Full Width Column -->
  <div class="content-wrapper" style="background-image:url(../../dist/img/.jpg); width:100%;">
    <div class="container" >
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-gears"></i> Update User's Info</h3>
          </div>
          <div class="box-body">
          <br><p></p>
          <div class="col-md-2"></div>
          <div class="col-md-8">
          <p>Fields with (*) are required</p>
         
            <!-- form start -->
            <form class="form-horizontal" method="post" action="../process/updateuserprofileprocess.php">
            
                  

                <?php  include('../includes/connect.php');
                $getid = intval($_SESSION['user_id']);
                $query = mysqli_query($db,"SELECT players.*, course.*, sports.*, year.*, category.* from players LEFT JOIN category ON players.sports_id = category.cat_id LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN sports ON category.sport_id = sports.sport_id LEFT JOIN year ON players.level_id = year.level_id WHERE players.stud_id = '$getid'") or die (mysql_error());
                while($row = mysqli_fetch_assoc($query)){?>

      
      

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">*First Name</label>

                    <div class="col-sm-6">
                    <input type="hidden" name="sid" value="<?php echo $row['stud_id'];?>">
                      <input type="text" class="form-control" name="firstname" value="<?php echo $row['fname']; ?>" required>
                    </div>
                  </div>
              <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Middle name</label>
                 <div class="col-sm-6">
                      
                      <input type="text" class="form-control" name="middlename" value="<?php echo $row['mname']; ?>" required>
                    </div>
             </div>  

             <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Last name</label>
                 <div class="col-sm-6">
                      
                      <input type="text" class="form-control" name="lastname" value="<?php echo $row['lname']; ?>" required>
                    </div>
                  </div>


                      <div class="form-group">
                  <label class="col-sm-2 control-label">*Gender</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="gender" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['gender'];?>"><?php echo $row['gender']; ?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                         
                        </select>
                  </div>
                </div>

                <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Birthdate</label>
                 <div class="col-sm-6">
                      
                      <input type="date" class="form-control" name="birthdate" value="<?php echo $row['birthdate']; ?>" required>
                    </div>
             </div> 
              <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Contact No</label>
                 <div class="col-sm-6">
                      
                      <input type="number" class="form-control" name="contact" value="<?php echo $row['contact_no']; ?>" required>
                    </div>
             </div> 
                

                 <div class="form-group">
                  <label class="col-xs-2 control-label">*Year Level</label>
                   
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
                  <label class="col-xs-2 control-label">*Course</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="course" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['course_id'];?>"><?php echo $row['course']; ?></option>
                          <option value="1">BSIT</option>
                          <option value="2">BSED</option>
                          <option value="3">BEED</option>
                          <option value="4">BSHRM</option>
                          <option value="5">BSTHRM</option>
                          <option value="6">BACOM</option>
                          <option value="7">AB-English</option>
                          <option value="8">BLIS</option>
                          <option value="9">BSSW</option>
                          <option value="10">AB-PolSci</option>
              
                          
                        </select>
                  </div>
                </div>

                 <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Address</label>
                 <div class="col-sm-8">
                      
                      <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" required>
                    </div>
             </div> 

                 <div class="form-group">
                  <label class="col-sm-2 control-label">*Sports</label>
                   
                  <div class="col-sm-5">
                      
                        <select class="form-control" id="sports" name="sports" onchange="showData(this.value)" required>
                      <option value="<?= $row['sport_id'] ?>"><?= $row['sports'] ?></option>
                        <?php include('../includes/connect.php');
            
          
                  $g = mysqli_query($db,"SELECT * FROM sports") or die (mysql_error());
                  while($row1 = mysqli_fetch_assoc($g)){
               
                      ?>

                      <option class="<?= $row1['sport_id'] == $row['sport_id'] ? 'hidden' : '' ?>" value="<?php echo $row1['sport_id'];?>"><?= $row1['sports'] ?></option>
                  <?php } ?>
                        </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">*Sports Category</label>
                   
                  <div class="col-sm-5">
                      
                        <select class="form-control"  name="category" id="sports-cat" onchange="showData(this.value)" required>
                      <option value="<?= $row['cat_id'] ?>"><?= $row['category'] ?></option>
                      

                      
                        </select>
                  </div>
                </div>
                
                
                <br><br><br><br>
            <p align="center" style="font-family: 'Verdana';font-size: 13pt;"><i class="fa fa-user"></i>&nbsp; Edit Additional Information</p>
            <hr style="border: 1px solid gray;"><br>
             

            <div class="form-group">
                  <label class="col-xs-2 control-label">*Blood Type</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="bloodtype" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['bloodtype'];?>"><?php echo $row['bloodtype']; ?></option>
                         <option value="Type A">Type A</option>
                         <option value="Type B">Type B</option>
                         <option value="Type O">Type O</option>
                         <option value="Type AB">Type AB</option>
                         <option value="Positive">Positive</option>
                         <option value="Negative">Negative</option>
              
                          
                        </select>
                  </div>
                </div>


                <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Allergy(s)</label>
                 <div class="col-sm-6">
                      
                      <input type="text" class="form-control" name="allergy" value="<?= $row['allergy']; ?>" required>
                    </div>
                  </div><br><br>

                  <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*In case of emergency, please contact</label>
                 <div class="col-sm-6">
                      <br>
                      <input type="text" class="form-control" name="emergency" value="<?php echo $row['emergency']; ?>" required>
                    </div>
             </div>  


                  <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Address</label>
                 <div class="col-sm-6">
                      
                      <input type="text" class="form-control" name="paddress" value="<?php echo $row['paddress']; ?>" required>
                    </div>
             </div>  

                  <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Contact No</label>
                 <div class="col-sm-6">
                      
                      <input type="number" class="form-control" name="pcontact" value="<?php echo $row['pcontact']; ?>" required>
                    </div>
             </div>  

             <div class="form-group">
                  <label class="col-xs-2 control-label">*Status</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="status" onchange="showData(this.value)" required>
                         <option value="<?php echo $row['status'];?>"><?php echo $row['status']; ?></option>
                         <option value="Active">Active</option>
                         <option value="Incative">Inactive</option>
              
                          
                        </select>
                  </div>
                </div>
                <div class="form-group">

                    <label for="inputName" class="col-sm-2 control-label">*Password</label>
                 <div class="col-sm-6">
                      
                      <input type="password" class="form-control" name="password" required>
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
              <!-- /.box-footer -->
 
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
  <!--footer-->
  
  <?php include('../includes/footer.php');?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../js/bootstrap.min.js"></script>

<script src="../plugins/checkbox/jquery.dataTables.checkboxes.min.js"></script>
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

<script type="text/javascript" src="../js/custom.js"></script>

</body>
</html>
<?php }else {
		header('location:../index.php');
	}?>

  <script type="text/javascript">
  $('#sports').change(function(){
    // alert($(this).val());
    var id = $(this).val();

    $.post('../process/categories.php' , { 'id' : id })
            .done(function(result){
              res = $.parseJSON(result);
                // alert(result);
                if(res.length > 0) {
                    $("#sports-cat").prop('disabled', false);
                    
                    // alert(res);

                    classroomStudents = "";

                    for (var i = 0; i < res.length; i++) {
                        
                        classroomStudents +=
                            
                            "<option value='"+res[i][0]+"'>" + res[i][1] + "</option>";
                    }

                    $("#sports-cat").html(classroomStudents);

                  }
                  

            });
  });
</script>