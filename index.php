<?php session_start();

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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/font-awesome-4.6.3/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/skin-black.css">

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav" style="background-image:url(../images/black31.jpg); width:100%;">
<div class="wrapper" style="background-image:url(../images/black31.jpg); width:100%;">


  <!-- Full Width Column -->
  <div class="content-wrapper" style="background-image:url(../images/black31.jpg); width:100%;">
    
<br><br><br><br><br>
    <div class="container" >

      <!-- Main content -->
      <div class="col-lg-3"></div>
           <div class="col-lg-6">
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <center><h1 class="box-title" style="font-family: 'Century Gothic';font-size: 18px;"><i class="fa fa-"></i><img src="images/lnu logo.png" style="width: 40px;height: 40px;"> Athlete's Information System with SMS Notification</h1></center>
          </div>
          <div class="box-body">



            <!--- Alert message -->
               <?php 
                if(!empty($_SESSION['success_msg'])) {
              ?>
      <div class="alert alert-<?php echo $_SESSION['class'];?> alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" data-toggle="tooltip" title="Close"><span aria-hidden="true">&times;</span></button>
      <div class="row"><div class="col-md-9"><strong><?php echo $_SESSION['success_msg'];?></strong></div></div>
</div>
<?php unset($_SESSION['success_msg']);
    unset($_SESSION['class']); } ?>
      <!-- end of alert -->
               <!-- form start -->
            <form class="form-horizontal" method="post" action="process/loginprocess.php">
              <div class="box-body">
             
                <div class="form-group">
                
                  <label class="col-sm-2 control-label">Student Number</label>

                  <div class="col-sm-10 input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="number" class="form-control" name="username" placeholder="Student Number" required autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10 input-group">
                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               
                <button type="submit" class="btn bg-black pull-right" name="userLogin"><i class="glyphicon glyphicon-open"></i>&nbsp; LOGIN
                 
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
         
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      </div>
         <div class="col-lg-3"></div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
 <?php 
// include('footer.php');
 ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
