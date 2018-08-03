<?php 
ob_start();
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
  $id = $_GET['id'];
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="../dist/img/logo.png" rel="shortcut icon">
  <title> Athletes'Information System with SMS Notification</title>
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


  <script>

$(document).ready(function(){

  $('#sports').on('change',function(){

    var eventID=$(this).val();
    if (eventID) {
      $.post(
        "ajax1.php",
        {sports: eventID},
        function(data){
          $('#category').html(data);
        }

        );
    }else {
       $('#category').html('<option>Select a sport First</option>')
    }


  });

  });

  </script>

  

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
            <h3 class="box-title"><i class="fa fa-gears"></i> Student Participant(s) in Sports</h3>
          </div>
          <div class="box-body">
         
          <a href="../pages/winner.php" class="btn btn-success pull-left" style="margin-left: 2%;">Back</a>
          <div class="col-md-8">
         
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->           
</div>
         
          </div>

          <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-gears"></i> Player(s) Participated </h3>
          </div>
          <div class="box-header with-border">
            <a href="#" class="btn btn-warning pull-right" style="margin-right: 2%;">Print</a>
          </div>
          <div class="box-body">
          <br><p></p>
          
          <div class="col-md-12">

              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                  <tr>
                  
                    <th style="width:auto;background-color: silver;text-align: center;">Student Id</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Full Name</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Course</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Year</th>
             
                   
                  </tr>
                </thead>
                <tbody>
                  <?php include('../includes/connect.php');

                    $query = mysqli_query($db,"SELECT players.*,course.*,year.*,sports.* FROM players LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN year ON players.level_id = year.level_id LEFT JOIN sports ON players.sports_id = sports.sport_id WHERE players.sports_id = '$id'") or die (mysql_error());
                    while($row = mysqli_fetch_assoc($query)){
               
                  ?>
              
                        
              <tr style="cursor:pointer;">
                       
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['student_no'];?></td>
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['fname']. ' ' .$row['mname']. ' ' .$row['lname'];?></td>
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['course'];?></td>
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['year'];?></td>

              </tr>
                 
<?php include('../modal/deletesportmodal.php');
    ?>
                        <?php }?>
                </tbody>
                <tfoot>
                  <tr>
                  
                    <th style="width:auto;background-color: silver;text-align: center;">Student Id</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Full Name</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Course</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Year</th>
                    

                  </tr>
                </tfoot>
            
            </table>

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
  
  <?php include('../includes/footer.php')?>
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



   



    <script type="text/javascript" src="js/image_slide.js"></script>

</body>
</html>
<?php }else {
    header('location:login.php');
  }?>
