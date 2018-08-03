<?php 
ob_start();
session_start();
error_reporting(E_ALL & ~E_NOTICE);
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>




 <?php include('../includes/connect.php');

 if(isset($_POST['save'])){


        $sports = $_POST['sports'];
        $category = $_POST['category'];
        $place = $_POST['place'];
        $year = $_POST['year'];
        
       echo $sports, $category, $place, $year;
        if(empty($sports) || empty($category) || empty($place) || empty($year)){
            echo'<script>alert("Fields must not be empty!");
                       window.location.href="winner.php";</script>';
                   
      
}

      else {
        //$exist2 = mysqli_query($db,"SELECT * FROM winners WHERE cat_id = '$category' AND year_id = '$year'");
          //$exist1 = mysqli_query($db,"SELECT * FROM winners WHERE cat_id = '$category' AND place_id = '$place'");
           $exist = mysqli_query($db,"SELECT * FROM winners WHERE cat_id = '$category' AND place_id = '$place' AND year_id = '$year'");
                               if(mysqli_num_rows($exist)>0){
                                //we have items
                                echo'<script>alert("Already registered");
                              window.location.href="winner.php";</script>';
            }
            else{

        
          
            $sql =  mysqli_query($db,"INSERT INTO winners VALUES(NULL,'$sports','$category','$place','$year')");
            if($sql==true){
                echo '<script>alert("Save succussfully");
                        window.location.href="winner.php";</script>';
              }
              else {
                echo '<script>alert("Sorry unable process your request");
                        window.location.href="winner.php";</script>';
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
        "ajax2.php",
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
</script>


<style type="text/css">
  body{
    font-family: century gothic;
  }
  h3{
    font-family: century gothic;

  }

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
   
    text-align: center;    
    font-size: 15px;
    font-family: century gothic;
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
            <h3 class="box-title"><i class="fa fa-gears"></i> Sports & Category</h3>
          </div>
          <div class="box-body">
          <br><p></p>
          <div class="col-md-2"></div>
          <div class="col-md-8">
          <p>Please don't leave space.</p>
            <!-- form start --> 

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    


                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">

                 <div class="form-group">
                  <label class="col-xs-3 control-label">Sports</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="sports" id="sports" onchange="showData(this.value)" required>
                          <option value="">Select One...</option>
                          <option value="1">Basketball</option>
                          <option value="2">Track and Field</option>
                          <option value="3">Swimming</option>
                          <option value="4">Javelin Throw</option>
                          <option value="5">Discuss Throw</option>
                          <option value="6">Volleyball</option>
                          <option value="7">Table Tennis</option>
                          <option value="8">Tennis</option>
                          <option value="9">Badminton</option>
                          <option value="10">Softball</option>
                          <option value="11">Chess</option>
                          <option value="12">Sepak Takraw</option>
                          <option value="13">Taekwondo</option>  
                         
                        </select>
                  </div>
                </div>
                   <div class="form-group">
                  <label class="col-xs-3 control-label">Category</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="category" id="category" onchange="showData(this.value)" required>
                         <option value="">Select One...</option>
                          
                          
                         
                        </select>
                  </div>
                </div>

                   <div class="form-group">
                  <label class="col-sm-3 control-label">Place</label>

                  <div class="col-sm-5">
                 <select class="form-control" name="place" onchange="showData(this.value)" required>
                          <option value="1">1st Place</option>
                          <option value="2">2nd Place</option>
                          <option value="3">3rd Place</option>
                          
                          
                          
                         
                        </select>
                  </div>
                  </div>

                   <div class="form-group">
                  <label class="col-xs-3 control-label">Year</label>
                   
                  <div class="col-sm-3">
                        <select class="form-control" name="year" onchange="showData(this.value)" required>
                          <option value="1">2017</option>
                          <option value="2">2018</option>
                          <option value="3">2019</option>
                          <option value="4">2020</option>
                          
                          
                         
                        </select>
                  </div>
                </div>

                


             


          
              <div class="box-footer">
            
                <button type="submit" class="btn bg-black pull-right" name="set"><i class="glyphicon glyphicon-saved"></i>&nbsp; Set</button>
              </div>
              <!-- /.box-footer -->
            </form>
           
            </div>
            <p><strong>Note:</strong> The data showed in the table below determines that who are the player(s) participate on the said sports.</p>
            </div>
<?php

 if(isset($_POST['set'])){ 
                
               
               
             
              
                $category = $_POST['category'];
                $year = $_POST['year'];
                $_SESSION['year']=$year;
                $place = $_POST['place'];
                $_SESSION['place']=$place;
               
               

                 $sports = $_POST['sports'];
                $_SESSION['sports']=$sports;

                

                if(empty($sports)||empty($category)||empty($place)||empty($year)){
            echo'<script>alert("Fields must not be empty!");
                       window.location.href="winner_student.php";</script>';
                     }


            else{
             $sql = mysqli_query($db,"SELECT sports.*, category.* FROM category LEFT JOIN sports ON category.sport_id= sports.sport_id WHERE sports.sport_id = '$sports' AND category.category = '$category'");
             if (mysqli_num_rows($sql)>0) {
                  while ($row = mysqli_fetch_assoc($sql)) {
                   
                    $_SESSION['sports'] = $row['sports'];
                      $sports = $_SESSION['sports'];
                    $_SESSION['sport_id'] = $row['sport_id'];
                      $sport_id = $_SESSION['sport_id'];
                    $_SESSION['cat_id'] = $row['cat_id'];
                      $cat_id = $_SESSION['cat_id'];
                    $_SESSION['category'] = $row['category'];
                      $category = $_SESSION['category'];
                  }
                }
$sql1 = mysqli_query($db,"SELECT * from sy WHERE year_id = '$year'");
             if (mysqli_num_rows($sql1)>0) {
                  while ($row1 = mysqli_fetch_assoc($sql1)) {
                   
                    $_SESSION['year_id'] = $row1['year_id'];
                      $year_id = $_SESSION['year_id'];
                    $_SESSION['year'] = $row1['year'];
                      $year = $_SESSION['year'];
                 
                  }
                }

  $sql2 = mysqli_query($db,"SELECT * from place WHERE place_id = '$place'");
             if (mysqli_num_rows($sql2)>0) {
                  while ($row2 = mysqli_fetch_assoc($sql2)) {
                   
                    $_SESSION['place_id'] = $row2['place_id'];
                      $place_id = $_SESSION['place_id'];
                    $_SESSION['place'] = $row2['place'];
                      $place = $_SESSION['place'];
                 
                  }
                }

                 ?>

<?php            }


          }


  $sports = $_SESSION['sports'];
  $sport_id = $_SESSION['sport_id'];
  $year= $_SESSION['year'];
  $place= $_SESSION['place'];
 
  $category = $_SESSION['category'];
  $cat_id = $_SESSION['cat_id'];
?>

  <center>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
  <thead>
    <th>Sports</th>
    <th>Category</th>
    <th>Place</th>
    <th>Year</th>
    
  </thead>
  <tbody>
    <tr>
      <td><?php echo $sports;?></td>   
      <td><?php echo $category;?></td>
      <td><?php echo $place;?></td>
      <td><?php echo $year;?></td>
   

    </tr>


  </tbody>
          
</table>
<br>
</center>

<br><br>
<h4 class="box-title"><i class="fa fa-gears"></i> &nbsp; List of Student Winners</h4>
          <p align="center"><strong>Note:</strong> Winners can be added through a confirmation and be able to be listed as winners officially.</p>
          <div class="box-body">
   
          <div class="col-md-12">

              <table id="example1" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th style="width:auto;text-align: center;background-color: silver">Student No.</th>
                    <th style="width:auto;text-align: center;background-color: silver">Full name</th>
                    <th style="width:auto;text-align: center;background-color: silver">Course</th> 
                    <th style="width:auto;text-align: center;background-color: silver">Year Level</th>
                    <th style="width:auto;text-align: center;background-color: silver">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php include('../includes/connect.php');
         $cat_id = $_SESSION['cat_id'];
         $sport_id = $_SESSION['sport_id'];

            $query = mysqli_query($db,"SELECT players.*, course.*, sports.*, year.* from players LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN sports ON players.sports_id = sports.sport_id LEFT JOIN year ON players.level_id = year.level_id WHERE sports.sport_id = '$sport_id'") or die (mysql_error());
            while($row = mysqli_fetch_assoc($query)){
              $stud_id = $row['stud_id'];
              
          
              ?>

                        
                        <tr style="cursor:pointer;">
                    
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['student_no'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['fname'].' '.$row['lname'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['course'];?></td>   
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['year'];?></td>
                        <?php
                        $q = mysqli_query($db,"SELECT * FROM winstudent WHERE cat_id = '$cat_id' AND stud_id = '$stud_id'");
 
                        if (mysqli_num_rows($q)>0) { ?>
                          <td><center><a href="#deleteModal<?php echo $row['stud_id']?>" data-toggle="modal" data-target="#deleteModal<?php echo $row['stud_id'];?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-check" ></i> Remove from Winners Lists?</a></center></td>
                          <?php include('../modal/removeplayer_modal3.php');
    //include('viewresModal.php')?>
                       
                       <?php  } else { ?>
                          <td><center><a href="#deleteModal<?php echo $row['stud_id']?>" data-toggle="modal" data-target="#deleteModal<?php echo $row['stud_id'];?>" class="btn bg-olive btn-sm"><i class="glyphicon glyphicon-check" ></i> Add winner to the list ?</a></center></td>
                       



         
                        
                       
                      
                        </tr>
                 
<?php include('../modal/addmodal3.php');
    //include('viewresModal.php')?>
                        <?php  } }?>
                </tbody>
                <tfoot>
                  <tr>
            
                    <th style="width:auto;text-align: center;background-color: silver">Student No.</th>
                    <th style="width:auto;text-align: center;background-color: silver">Full name</th>
                    <th style="width:auto;text-align: center;background-color: silver">Course</th>
                    <th style="width:auto;text-align: center;background-color: silver">Year Level</th>
                    <th style="width:auto;text-align: center;background-color: silver">Action</th>
                  </tr>
                </tfoot>
            
            </table>

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
  <!--footer-->
  
  <?php include('../includes/footer.php');?>
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
