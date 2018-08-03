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
            <h3 class="box-title"><i class="fa fa-gears"></i> Change Password</h3>
          </div>
          <div class="box-body">
          <br><p></p>
          <div class="col-md-2"></div>
          <div class="col-md-8">
         
            <!-- form start -->
            <form class="form-horizontal">
            
                <input type="hidden" value="<?= $_SESSION['password'] ?>" id="password">
                <div class="form-group">

                    <label for="inputName" class="col-sm-4 control-label">Old Password</label>
                 <div class="col-sm-6">
                      
                      <input type="password" class="form-control" id='old' name="oldpassword" required>
                    </div>
                  </div>
                  <div class="form-group">

                    <label for="inputName" class="col-sm-4 control-label">New Password</label>
                 <div class="col-sm-6">
                      
                      <input type="password" class="form-control" id='new' name="newpassword" required>
                    </div>
                  </div>
                  <div class="form-group">

                    <label for="inputName" class="col-sm-4 control-label">Confirm Password</label>
                 <div class="col-sm-6">
                      
                      <input type="password" class="form-control" id='conf' name="confpassword" required>
                    </div>
                  </div>
                
                 <p class="err-msg" style="color:red;font-size: 1.5rem"></p>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" id='submit' class="btn bg-black pull-right" name="updateprofile">Save Changes</button>
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
    $('#submit').click(function(){
      var old = $('#old').val();
      var newP = $('#new').val();
      var conf = $('#conf').val();
      var pass = $('#password').val();
      if(old === '' || newP === '' || conf === ''){
        $('.err-msg').text('Fields are required!');
        
      }
      else{
      if(old == pass){
        if(newP == conf){
          $.post('change.php' , { 'password' : newP })
            .done(function(result){
              res = $.trim(result);
                // alert(result);
                alert(res);
                location.reload();

            });
                
        }
        else{
          $('.err-msg').text('Password did not match!');
        }
      }
      else{
        $('.err-msg').text('Password is incorrect!');
      }
    }
    });
</script>