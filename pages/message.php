<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);
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

  <link rel="stylesheet" href="../dist/css/skins/skin-black.css">
  <!--tables-->
  <link rel="stylesheet" href="../plugins/datatables/datatables.bootstrap.css">




  <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>




           <style>
           ul.list-unstyled{
                background-color:#eee;
                cursor:pointer;
           }
          #aa{
                padding:12px;
           }
           .txt{
            padding: 10px 30px;
           }
           </style>

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav" style="background-image:url(../images/.jpg); width:100%;">
<div class="wrapper" style="background-image:url(../images/.jpg); width:100%;">

 <?php include('../includes/adminHeader.php');

 ?>
  <!-- Full Width Column -->
  <div class="content-wrapper" style="background-image:url(../images/.jpg); width:100%;">
    <div class="container" >
      <section class="content">
        <div class="box box-default">
          <div class="box box-default" id="print">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-gears"></i> SMS</h3>


          </div>

          <div class="box-body">

          <div class="panel panel-default">
       <div class="panel-body">


  <div class="box-body">
  <div class="col-md-20">
  <h3 class="box-title" style="text-align: center;font-family: 'Century Gothic';font-size: 30px;"> Send Announcement(s)</h3><br>
  <hr>
  </div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->    <?php
      if (isset($_POST['ccode']) && isset($_POST['mobile'])) {
      }
      //Authorization Details
      $username = "edplanillo143@gmail.com";
      $hash = "0898db5224ee3e45ea827f17d20bd3e74345ea21afa76c907a9a90193468322";
      //Config Variables. Consult http://api.textlocal.in/ docs for more info.
      $test = "1";
      //Data for the message
      $sender = "Tech. Edgar";//This is who the message appears to be form,
      $numbers = $_POST['ccode'].$_POST['mobile'];//numbers
      $message = $_POST['msg'];
      //
      $message = urlencode($message);
      $data = "username".$username."&hash = ".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
      $ch = curl_init('http://api.textlocal.in/send/?');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch); //This is the result of the API
        if ($result == true) {
          # code...
          echo "<p style='color:green;font-size:16pt;background-color:lightgreen;border-radius:5px;'>Message Sent!</p>";
        }
      curl_close($ch);

    ?>
    <!--form start-->
    <form class="" action="send.php" method="post">
      <label class="col-sm-2 control-label">Select Country Code:</label>
      <p><select name="ccode" class="txt">
        <option value="63">Philippines + 63</option>
        <option value="3">Philippines + 3</option>
      </select></p><br><br>
      <label class="col-sm-2 control-label">Send to:</label>
      <p><select name="category" class="txt">
      <option value="0">All Active Players</option>
      <?php
        include('../includes/connect.php');

        $query = mysqli_query($db,"SELECT * FROM sports");
        while($row=mysqli_fetch_assoc($query)){ ?>
          <option value="<?= $row['sport_id'] ?>"><?= $row['sports'] ?></option>
        <?php }
      ?>
      </select></p><br>
      <!-- <label class="col-sm-2 control-label">Type your Number:</label>
        <p><input class="txt" type="text" name="mobileNumber" placeholder="e.g 639123456789"></p> -->
      <label class="col-sm-2 control-label">Type Message:</label>
      <p><textarea class="txt" name="message" placeholder="Message here.."></textarea></p>


      <p><button class="btn btn-primary btn-sm" type="submit" name="semdSMS">Send</button> </p>
    </form>





              <!-- /.tab-pane -->
               <!-- /.tab-pane -->


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->








              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
           </div><!---col-md-6-->
          </div>









</div>

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

  <?php  include('../includes/footer.php'); ?>
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

</body>
</html>
<?php }else {
    header('location:login.php');
  }?>
