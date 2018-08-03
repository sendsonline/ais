<?php 
ob_start();
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>

 <?php include('../includes/connect.php');

 if(isset($_POST['saved'])){

 $name = $_FILES['myfile']['name'];
              $tmp_name = $_FILES['myfile']['tmp_name'];

              if ($name) {
                $location = "../avatar/$name";
                move_uploaded_file($tmp_name, $location);
 
        $lastname=$_POST['lastname'];
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $student_no=$_POST['student_no'];
     

        $course_id = $_POST['course'];
        $gender = $_POST['gender'];
        $yearlevel = $_POST['yearlevel'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $sports = $_POST['sports'];
        $birthdate = $_POST['birthdate'];

        $bloodtype = $_POST['bloodtype'];
        $allergy = $_POST['allergy'];
        $emergency = $_POST['emergency'];
        $paddress = $_POST['paddress'];
        $pcontact = $_POST['pcontact'];
        $status = $_POST['status'];
        $avatar = $location;
        
       
        if(empty($student_no) || empty($lastname) || empty($firstname) || empty($middlename) || empty($course_id) || empty($gender) || empty($yearlevel) || empty($contact) || empty($address) || empty($sports) || empty($avatar) || empty($birthdate) || empty($bloodtype) || empty($allergy) || empty($emergency) || empty($paddress) || empty($pcontact) || empty($status)){
            echo'<script>alert("Fields must not be empty!");
                       window.location.href="registration.php";</script>';
                   
      
}

        else {

           $exist = mysqli_query($db,"SELECT * FROM players WHERE student_no = '$student_no'");
                               if(mysqli_num_rows($exist)>0){
                                //we have items
                                echo'<script>alert("Already registered");
                              window.location.href="registration.php";</script>';
            }else{
          
            $sql =  mysqli_query($db,"INSERT INTO players VALUES(NULL,'$student_no','$lastname','$firstname','$middlename','$sports','$yearlevel','$course_id','$gender','$birthdate','$contact','$address','$bloodtype','$allergy','$emergency','$paddress','$pcontact','$status','$avatar')");
            if($sql==true){
                echo '<script>alert("Save successfully");
                        window.location.href="registration.php";</script>';
              }
              else {
                echo '<script>alert("Sorry unable process your request");
                        window.location.href="registration.php";</script>';
                }
          
          }       
          }
        }
      }
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
  <!-- Ionicons -->
  <link rel="stylesheet" href="../dist/css/ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/skin-black.css">

  <style type="text/css">
    input{
      text-align:
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
        <div class="box box-default" >
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-gears"></i> Registration</h3>
          </div>
          <div class="box-body">
          <br><p></p>
          <div class="col-md-2"></div>
          <div class="col-md-8">
          <p style="font-size: 14pt;font-family: 'Century Gothic';"><strong>Note:</strong>&nbsp;Please fill up all the necessary fields. All fields are required!.</p><br><br>
            <!-- form start --> 

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    

    <p align="center" style="font-size: 13pt;font-family: 'Verdana';"><i class="fa fa-user"></i>&nbsp;<strong>Basic Information</strong></p>
    <hr style="border: 1px solid gray;">
          <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">

                 <div class="form-group">
                  <label class="col-sm-3 control-label">Student No:</label>

                  
                  <div class="col-xs-5 input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                     <input type="number"  class="form-control" value="" name="student_no" placeholder="" />

                  </div>

                </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Last name</label>

                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-font"></i></span>
                    <input type="text" class="form-control" name="lastname" placeholder="" >
                  </div>
                  </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">First name</label>

                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-font"></i></span>
                    <input type="text" class="form-control" name="firstname" placeholder="" >
                  </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Middle name</label>

                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-font"></i></span>
                    <input type="text" class="form-control" name="middlename" placeholder="" >
                  </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Address</label>

                  <div class="col-sm-8 input-group">
                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                    <input type="text" class="form-control" name="address" placeholder="" >
                  </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Birthdate</label>

                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input type="date" class="form-control" name="birthdate" placeholder="" >
                  </div>
                  </div>
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Contact</label>

                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="number" class="form-control" name="contact" placeholder="" >
                  </div>
                  </div>
                <div class="form-group">
                  <label class="col-xs-3 control-label">Gender</label>
                   
                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <select class="form-control" name="gender" onchange="showData(this.value)" required>
                          <option value="0">-- Select Gender --</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                         
                        </select>
                  </div>
                </div>
                

                 <div class="form-group">
                  <label class="col-xs-3 control-label">Year Level</label>
                   
                  <div class="col-sm-5 input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                        <select class="form-control" name="yearlevel" onchange="showData(this.value)" required>
                          <option value="0">-- Select Year --</option>
                          <option value="1">1st Year</option>
                          <option value="2">2nd Year</option>
                          <option value="3">3rd Year</option>
                          <option value="4">4th Year</option>
                          
                          
                         
                        </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-xs-3 control-label">Sports</label>
                   
                  <div class="col-sm-5 input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-knight"></i></span>
                        <select class="form-control" name="sports" onchange="showData(this.value)" required>
                      <option value="">-- Select Sports --</option>
                        <?php include('../includes/connect.php');
            
          
                  $g = mysqli_query($db,"SELECT * FROM sports") or die (mysql_error());
                  while($row = mysqli_fetch_assoc($g)){
               
                      ?>

                      <option value="<?php echo $row['sport_id'];?>"><?php echo $row['sports'];?></option>
                  <?php } ?>
                        </select>
                  </div>
                </div>
                




                 <div class="form-group">
                  <label class="col-xs-3 control-label">Course</label>
                   
                  <div class="col-sm-5 input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                        <select class="form-control" name="course" onchange="showData(this.value)" required>
                          <option value="0">-- Select Course --</option>
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


                  <label class="col-sm-3 control-label">Photo</label>
                  <div class="col-sm-8 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                      <input type="file" name="myfile" class="form-control">
                  </div>
                  
                </div>
                <br><br>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <p align="center" style="font-family: 'Verdana';font-size: 13pt;"><i class="fa fa-user"></i>&nbsp; <strong>Additional Information</strong></p>
            <hr style="border: 1px solid gray;"><br>
             

            <div class="form-group">
                  <label class="col-xs-3 control-label">Blood Type</label>
                   
                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                        <select class="form-control" name="bloodtype" onchange="showData(this.value)" required>
                          <option>-- Select Bloodtype --</option>
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
                  <label class="col-sm-3 control-label">Allergy(s)</label>

                  <div class="col-sm-8 input-group">
                    <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                    <textarea type="text" class="form-control" name="allergy" placeholder="e.g. (allergic to food: milk, shrimps and etc.)" ></textarea>
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">In case of emergency,<br> please contact</label>

                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" style="height: 55px;" class="form-control" name="emergency" placeholder="Complete Name" >
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Address</label>

                  <div class="col-sm-8 input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="paddress" placeholder="Complete Address" >
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-3 control-label">Contact</label>

                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="number" class="form-control" name="pcontact" placeholder="Contact #" >
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="col-xs-3 control-label">Status</label>
                   
                  <div class="col-sm-5 input-group">
                    <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                        <select class="form-control" name="status" onchange="showData(this.value)" required>
                          <option>-- Select Status --</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                        </select>
                  </div>
                </div>

              <div class="box-footer">
            
                <button type="submit" class="btn bg-black pull-right" name="saved"><i class="glyphicon glyphicon-saved"></i> Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
           
            </div>
            </div>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->










            
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->           
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
  <!--footer -->
  
  <?php include('../includes/footer.php');?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../js/bootstrap.min.js"></script>
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



   



    <script type="text/javascript" src="js/image_slide.js"></script>

</body>
</html>
<?php }else {
    header('location:login.php');
  }?>
