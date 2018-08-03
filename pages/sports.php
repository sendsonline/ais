<?php 
ob_start();
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>




 <?php include('../includes/connect.php');

 if(isset($_POST['save_category'])){


        $sports = $_POST['sports_cat'];
        $category_a = $_POST['category_a'];
        $category = $_POST['category'];
        
       
        if(empty($sports) || empty($category)){
            echo'<script>alert("Fields must not be empty!");
                       window.location.href="sports.php";</script>';
                   
      
}

        else {

           $exist = mysqli_query($db,"SELECT * FROM category WHERE sport_id = '$sports' AND category_id = '$category_a' AND category = '$category'");
                               if(mysqli_num_rows($exist)>0){
                                //we have items
                                echo'<script>alert("Already registered");
                              window.location.href="sports.php";</script>';
            }else{

        
          
            $sql =  mysqli_query($db,"INSERT INTO category VALUES(NULL,'$sports','$category_a','$category')");
            if($sql==true){
                echo '<script>alert("Save successfully");
                        window.location.href="sports.php";</script>';
              }
              else {
                echo '<script>alert("Sorry unable process your request");
                        window.location.href="sports.php";</script>';
                }
          
          }       
          }
        }
        if(isset($_POST['save'])){


        $sports1 = $_POST['sports'];
        // alert($sports);
       // echo $sports1;
        if(empty($sports1)){
            echo'<script>alert("Fields must not be empty!");
                       window.location.href="sports.php";</script>';
                   
      
}

        else {

           $exist = mysqli_query($db,"SELECT * FROM sports WHERE sports = '$sports1'");
                               if(mysqli_num_rows($exist)>0){
                                //we have items
                                echo'<script>alert("Already registered");
                              window.location.href="sports.php";</script>';
            }else{

        
          
            $sql =  mysqli_query($db,"INSERT INTO sports VALUES(NULL,'$sports1')");
            $sql2 =  mysqli_query($db,"INSERT INTO category VALUES(NULL,'$sports1','0','sports1')");

            if($sql==true){
              $q = mysqli_query($db,"SELECT sport_id FROM sports ORDER BY sport_id DESC LIMIT 0,1");
              while ($r = mysqli_fetch_assoc($q)) {
                $id = $r['sport_id'];
              }
              $sql2 =  mysqli_query($db,"INSERT INTO category VALUES(NULL,'$id','0','$sports1')");
              // echo $sports1;
               echo '<script>alert("Save successfully");
                       window.location.href="sports.php";</script>';
              }
              else {
                echo '<script>alert("Sorry unable process your request");
                        window.location.href="sports.php";</script>';
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
            <h3 class="box-title"><i class="fa fa-gears"></i> Add Sports &amp; Categories</h3>
          </div>
          <div class="box-body">
          <br><p></p>
          <p align="center" style="font-family: 'Century Gothic';font-size: 13pt;"><strong>Note:</strong>&nbsp;Please fill up the necessary fields for adding Sports &amp; Categories</p>

          <div class="col-md-6">
          <h4 class="text-center">Add Sports</h4>
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-3 control-label">Sports</label>
                   
                  <div class="col-sm-5">
                        <input type="text" class="form-control" name="sports" placeholder="Add new sport" >
                  </div>
                </div>
                
                  <div class="box-footer">
            
                <button type="submit" class="btn bg-black pull-right" name="save" title="Save data!"><i class="glyphicon glyphicon-saved"></i>&nbsp; Save</button>
              </div>
                </div>
              
            </form>
          </div>
          <div class="col-md-6">
          <h4 class="text-center">Add Category</h4>
            <!-- form start --> 

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    


                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">

               <div class="form-group">
                  <label class="col-xs-3 control-label">Sports</label>
                   
                  <div class="col-sm-5 input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-knight"></i></span>
                        <select class="form-control" id="sports" name="sports_cat" onchange="showData(this.value)" required>
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
                  <label class="col-xs-3 control-label">Sports Category</label>
                   
                  <div class="col-sm-5 input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-knight"></i></span>
                        <select class="form-control" name="category_a" id="sports-cat" onchange="showData(this.value)" required>
                      <option value="">-- Select Category --</option>
                      <option value="0">-- Main Category --</option>
                      

                      
                        </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Category</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="category" placeholder="Add new category" >
                  </div>
                </div>

             


          
              <div class="box-footer">
            
                <button type="submit" class="btn bg-black pull-right" name="save_category" title="Save data!"><i class="glyphicon glyphicon-saved"></i>&nbsp; Save</button>
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
            <h3 class="box-title"><i class="fa fa-gears"></i> All Sports &amp; Categories </h3>
          </div>
          <div class="box-body">
          <br><p align="center" style="font-size: 13pt;font-family: 'Century Gothic';"><strong>Note:</strong>&nbsp;All Sports including the categories will be recorded in this table.  </p>
          
          <div class="col-md-12">

              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                  <tr>
                  
                    <th style="width:auto;background-color: silver;text-align: center;">Sports</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Category</th>
                    <th style="width:auto;background-color: silver;text-align: center;">Action</th>
             
                   
                   
                   
                   
                  </tr>
                </thead>
                <tbody>
                  <?php include('../includes/connect.php');
        
            $query = mysqli_query($db,"SELECT sports.*, category.* from category INNER JOIN sports ON category.sport_id= sports.sport_id WHERE category.category <> sports.sports") or die (mysql_error());
            while($row = mysqli_fetch_assoc($query)){
                  
              
              
              ?>
                        
                <tr style="cursor:pointer;">
                       
                  <td rowspan="" style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['sports'];?></td>
                  <td  style=" width:auto; font-size:16px;text-align: center;"> <?php echo $row['category'];?></td>
                        
                  <td><center><a href="#deleteModal<?php echo $row['cat_id']?>" data-toggle="modal" data-target="#deleteModal<?php echo $row['cat_id'];?>" class="btn btn-warning btn-sm" title="Delete this data!"><i class="glyphicon glyphicon-check" ></i> Remove from the lists ?</a></center></td>

                </tr>
                 
<?php include('../modal/deletesportmodal1.php');
    ?>
                        <?php }?>
                </tbody>
                <tfoot>
                  <tr>
                  
                    <th style="width:auto;background-color: silver;">Sports</th>

                    <th style="width:auto;background-color: silver;">Category</th>
                    

                    <th style="width:auto;background-color: silver;">Action</th>

                   
                   
                   
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
  <!--footer-->
  
  <?php include('../includes/footer.php')?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

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
<script type="text/javascript">
  $('#sports').change(function(){
    // alert($(this).val());
    var id = $(this).val();

    $.post('../process/categories.php' , { 'id' : id })
            .done(function(result){
              res = $.parseJSON(result);
                // alert(result);
                if(res.length > 0) {
                    
                    
                    // alert(res);

                    classroomStudents = "<option value=''>-- Select Category --</option>";

                    for (var i = 0; i < res.length; i++) {
                        
                        classroomStudents +=
                            
                            "<option value='"+res[i][0]+"'>" + res[i][1] + "</option>";
                    }

                    $("#sports-cat").html(classroomStudents);

                  }
                  

            });
  });
</script>