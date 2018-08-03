<?php 
ob_start();
session_start();
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
        $exist2 = mysqli_query($db,"SELECT * FROM winners WHERE cat_id = '$category' AND year_id = '$year'");
          $exist1 = mysqli_query($db,"SELECT * FROM winners WHERE cat_id = '$category' AND place_id = '$place'");
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
            <h3 class="box-title"><i class="fa fa-gears"></i> Sports &amp; Category</h3>
          </div>
          <div class="box-body">
          <br><p></p>
          <div class="col-md-2"></div>
          <div class="col-md-8">
          <p align="center" style="font-size: 13pt;font-family: 'Century Gothic';"><strong>Note:</strong> Please fill the corresponding fields for Sports &amp; Category Winner(s).</p>
            <!-- form start --> 

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    


                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">

                 <div class="form-group">
                  <label class="col-xs-3 control-label">Sports</label>
                   
                  <div class="col-sm-5">
                        <select class="form-control" name="sports" id="sports" onchange="showData(this.value)" required>
                          <option value="">---Select One---</option>
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
                         <option value="">---Select Category---</option>
                          
                          
                         
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
            
                <button type="submit" class="btn bg-black pull-right" name="save"><i class="glyphicon glyphicon-saved"></i> Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
           
            </div>
            </div>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->










            
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->           
</div>
         
          </div>

          <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-gears"></i> Sports Winners </h3>
          </div>
          <div class="box-body">
          <br><p align="center" style="font-family: 'Century Gothic';font-size: 13pt;"><strong>Note:</strong>&nbsp;All results in this table will be indicated in the <strong>"Performance"</strong>&nbsp;menu.</p>
          
          <div class="col-md-12">

              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                  <tr>
                  
                    <th style="width:auto;background-color: silver;text-align: center;">Sports</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Category</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Place</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Year</th>
                    

                    <th style="width:auto;background-color: silver;text-align: center;">Action</th>
             
                   
                   
                   
                   
                  </tr>
                </thead>
                <tbody>
                  <?php include('../includes/connect.php');
        
            $query = mysqli_query($db,"SELECT sy.*, sports.*, place.*, winners.*,category.* from winners LEFT JOIN sy ON winners.year_id = sy.year_id LEFT JOIN sports ON winners.sport_id = sports.sport_id LEFT JOIN place ON winners.place_id = place.place_id LEFT JOIN category ON winners.cat_id = category.cat_id") or die (mysql_error());
            while($row = mysqli_fetch_assoc($query)){
              
              
              
              ?>
                        
              <tr style="cursor:pointer;">
                       
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['sports'];?></td>
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['category'];?></td>
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['place'];?></td>
                <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['year'];?></td>
                        
                <td><center><a href="../pages/winsport_player_list.php" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-list-alt" ></i>&nbsp;&nbsp;View Players</a></center></td>


                <!--<td><center><a href="#deleteModal<?php echo $row['win_id']?>" data-toggle="modal" data-target="#deleteModal<?php echo $row['win_id'];?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Del</a></center></td>-->

              </tr>
                 
<?php include('../modal/deletesportmodal.php');
    ?>
                        <?php }?>
                </tbody>
                <tfoot>
                  <tr>
                  
                    <th style="width:auto;background-color: silver;text-align: center;">Sports</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Category</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Place</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Year</th>
                    

                    <th style="width:auto;background-color: silver;text-align: center;">Action</th>
             

                   
                   
                   
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
