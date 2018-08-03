<?php 
ob_start();
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>

 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="../dist/img/logo.png" rel="shortcut icon">
  <title> Athletes' Information System with SMS Notification</title>
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

  <link rel="stylesheet" href="../dist/css/skins/skin-green-light.css">
  <script src="../js/jquery.stickytabs.js"></script>

  
     <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
  

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav" style="background-image:url(../images/.jpg); width:100%;">
<div class="wrapper" style="background-image:url(../images/.jpg); width:100%;">

  <!-- Full Width Column -->
  
        <div class="container-fluid">
        <br>
            <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-10">
            <table>
              <tr>
                <td rowspan="3" style="width:60px;"><img src="../images/lnu logo.png" width="50px" height="50px"></td>
                <td><span style="font-size:20px;">LNU Athlete's Information System</span></td>
              </tr>
            </table>
          </div>
          <div class="col-lg-2 pull-right noprint">
            <button class="btn btn-success " onclick="window.print('print')"><span class="glyphicon glyphicon-print"></span> Print</button>
            <a href="masterlist.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
          </div>          
        </div>
        </div>
        <br>
        <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:16px;font-family: Verdana;"><strong>Player Information</strong></span><br>        
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-lg-10">

        <dl class="dl-horizontal" style="text-align: center;">
                 
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
                  <dt style="font-family: 'Century Gothic';">Contact No:</dt> <dd style="font-family: 'Century Gothic';"><?php echo $row['pcontact'];?></dd><br><br>

                               

                                <?php


                                 }?>



                      </dl>   
        </div>
        </div>
           
      </div>
  </div>






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

</body>
</html>
<?php }else {
    header('location:login.php');
  }?>
