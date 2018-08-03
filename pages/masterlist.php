<?php 
ob_start();
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>


<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>

 


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
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/skin-black.css">
  <script src="../js/jquery.stickytabs.js"></script>

  <link href="css/dataTables.checkboxes.css" rel="stylesheet"/>
  
     <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
  

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
            <h3 class="box-title"><i class="fa fa-gears"></i> MasterList</h3>
          </div>

          <div class="box-header with-border">
            <span class="pull-right">
            <a href="print_masterlist.php?<?= isset($_GET['search']) ? 'search='.$_GET['search'] : '' ?>" class="btn btn-warning btn-md" style="margin-right: 48px;"><span class="glyphicon glyphicon-print"></span> Print PDF</a>
            </span>
          </div>
          <div class="box-body">
          <br><p></p>
          
          <div class="col-md-12">
            <div class="row" align="center">
            <form method="get" action="masterlist.php">
              <label>Search:</label>
              <input type="text" value = "<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" name="search" style="width: 200px; padding: 10px;">
              <button type="submit"class="btn btn-primary btn-sm">Search</button>
            </form>
            </div>
            <!-- form start --> 

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="form-group">
            
              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th style="width:auto;text-align: center;background-color: silver">Student No.</th>
                  <th style="width:auto;text-align: center;background-color: silver">Full name</th>
                  <th style="width:auto;text-align: center;background-color: silver">Sports</th>
                  <th style="width:auto;text-align: center;background-color: silver">Category</th>
                  <th style="width:auto;text-align: center;background-color: silver">Year Level</th>
                  <th style="width:auto;text-align: center;background-color: silver">Course</th>
                  <th style="width:auto;text-align: center;background-color: silver">Status</th>
                  <th style="text-align:center; width:auto;text-align: center;background-color: silver">Action</th>

                </tr>
                </thead>
                <tbody>
        		<?php include('../includes/connect.php');
              if(isset($_GET['search'])){
                $search = $_GET['search'];
                $query = mysqli_query($db,"SELECT players.*, course.*, category.*,sports.*, year.* from players LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN category ON players.sports_id = category.cat_id LEFT JOIN sports ON sports.sport_id = category.sport_id LEFT JOIN year ON players.level_id = year.level_id WHERE players.lname LIKE '%".$search."%' OR players.fname LIKE '%".$search."%' OR players.mname LIKE '%".$search."%' OR sports.sports LIKE '%".$search."%' OR category.category LIKE '%".$search."%' OR year.year LIKE '%".$search."%' OR course.course LIKE '%".$search."%' OR players.status LIKE '%".$search."%' ") or die (mysql_error());

              }
              else{
                $query = mysqli_query($db,"SELECT players.*, course.*, category.*,sports.*, year.* from players LEFT JOIN course ON players.course_id = course.course_id LEFT JOIN category ON players.sports_id = category.cat_id LEFT JOIN sports ON sports.sport_id = category.sport_id LEFT JOIN year ON players.level_id = year.level_id") or die (mysqli_error());
              }
        
            		while($row = mysqli_fetch_assoc($query)){
              
              		?>
                        
                <tr style="cursor:pointer;">
                       
                  <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['student_no'];?></td>
                  <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['fname']. ' ' .$row['mname']. ' ' .$row['lname'];?></td>     
                  <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['sports'];?></td>
                  <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['category'];?></td>
                  <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['year'];?></td>
                  <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['course'];?></td>
                  <td style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['status'];?></td>
                        

                  <td><center><a href="#infoModal<?php echo $row['stud_id']?>" data-toggle="modal" data-target="#infoModal<?php echo $row['stud_id'];?>" class="btn bg-olive"><i class="glyphicon glyphicon-search" ></i> View</a> | <a href="edit_player.php?id=<?php echo $row['stud_id']?>" class="btn btn-success"><i class="glyphicon glyphicon-edit" ></i> Edit</a> 
                        <!--|<a href="#deleteModal<?php echo $row['stud_id']?>" data-toggle="modal" data-target="#deleteModal<?php echo $row['stud_id'];?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash" ></i> Del</a></center></td>-->
                        


                    
                        
                </tr>
                 
				<?php include('../modal/viewplayersmodal.php');?>
                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th style="width:auto;text-align: center;background-color: silver;">Student No.</th>
                  <th style="width:auto;text-align: center;background-color: silver;">Full name</th>
                  <th style="width:auto;text-align: center;background-color: silver;">Sports</th>
                  <th style="width:auto;text-align: center;background-color: silver;">Category</th>
                  <th style="width:auto;text-align: center;background-color: silver;">Year Level</th>
                  <th style="width:auto;: center;background-color: silver;">Course</th>
                  <th style="width:auto;text-align: center;background-color: silver">Status</th>
                  <th style="text-align:center;text-align: center;background-color: silver;">Action</th>
                    
                </tr>
                </tfoot>
            
            </table>

              </div><br><br>
    
                <!--Print Document-->
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            
        </div>
        </div>

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
  
  <?php include('../includes/footer.php')?>
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
