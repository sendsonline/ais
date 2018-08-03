<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
  include('../includes/connect.php');

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
            <h3 class="box-title"><i class="fa fa-gears"></i> Performance (Sports Tallies)</h3>


          </div>

          <div class="box-body">

          <div class="panel panel-default">
       <div class="panel-body">



  <div class="box-body">
  <div class="col-md-20">
  <h3 class="box-title" style="text-align: center;font-family: 'Century Gothic';font-size: 30px;"> Yearly Evaluation</h3><br>
    <p align="center" style="font-size: 13pt;font-family: 'Century Gothic';"><strong>Note:</strong>&nbsp;Sport Tallies will be indicated in this table as it shows the total medals earned each from the winner sports.</p>
    <br><br>
      <div style="height: 40px;padding-top: ">
      <form class="form-horizontal" method="get" action="performance.php" enctype="multipart/form-data">
        <button type="submit" class="btn bg-black pull-right" name="search"><i class="glyphicon glyphicon-search"></i> Search</button>
            <div class="col-sm-2 pull-right">

                <select class="form-control" name="year" onchange="showData(this.value)" required>
                  
                  <?php
                  if(isset($_GET['year'])){
                    $y = $_GET['year'];
                    $q = mysqli_query($db, "SELECT * FROM sy WHERE year_id = '$y'");
                      while($rowss = mysqli_fetch_assoc($q)){
                          $r = $rowss['year'];
                          $rid = $rowss['year_id'];
                      } ?>
                      <option value="<?= $rows['year_id'] ?>"><?= $r ?></option>
                      <?php

                  }
                    $q = mysqli_query($db, "SELECT * FROM sy");
                      while($rows = mysqli_fetch_assoc($q)){
                  
                  ?>
                    <option class="<?= $rid == $rows['year_id'] ? 'hidden' : '' ?>" value="<?= $rows['year_id'] ?>"><?= $rows['year'] ?></option>

                  <?php } ?>
                </select>

            </div>
      </form>
        <div class="col-lg-2 pull-left noprint">
            <button class="btn btn-warning " onclick="printContent('print')"><i class="fa fa-print"></i> Print PDF</button>
          </div>
      </div><br>


        <table id="example3" class="table table-bordered table-hover table-striped">

            <thead>
              <tr>

                <th style="width:auto;text-align: center;background-color: silver;"><font size="+1" face="">Sports</th>
                <th style="width:auto;text-align: center;background-color: silver;"><font size="+1" face="">Bronze Medal</th>
                <th style="width:auto;text-align: center;background-color: silver;"><font size="+1" face="">Silver Medal</th>
                <th style="width:auto;text-align: center;background-color: silver;"><font size="+1" face="">Gold Medal</th>
                <th style="width:auto;text-align: center;background-color: silver;"><font size="+1" face="">Total Medals</th>
                <th style="width:auto;text-align: center;background-color: silver;"><font size="+1" face="">Total Points</th>
                    </font>


              </tr>
            </thead>
<tbody>
         <!--BASKETBALL-->
         <?php

              $query = mysqli_query($db, "SELECT * FROM sports");
              while($row = mysqli_fetch_assoc($query)){
                $sport_id = $row['sport_id'];
                if(isset($_GET['year'])){
                  $yr = $_GET['year'];
                  $bronze = mysqli_query($db, "SELECT * FROM winners as A INNER JOIN category as B ON A.cat_id = B.cat_id WHERE B.sport_id = '$sport_id' AND A.place_id = '3' AND A.year_id = '$yr'");
                  $silver = mysqli_query($db, "SELECT * FROM winners as A INNER JOIN category as B ON A.cat_id = B.cat_id WHERE B.sport_id = '$sport_id' AND A.place_id = '2' AND A.year_id = '$yr'");
                  $gold = mysqli_query($db, "SELECT * FROM winners as A INNER JOIN category as B ON A.cat_id = B.cat_id WHERE B.sport_id = '$sport_id' AND A.place_id = '1' AND A.year_id = '$yr'");
                }
                else{
                  $bronze = mysqli_query($db, "SELECT * FROM winners as A INNER JOIN category as B ON A.cat_id = B.cat_id WHERE B.sport_id = '$sport_id' AND A.place_id = '3'");
                  $silver = mysqli_query($db, "SELECT * FROM winners as A INNER JOIN category as B ON A.cat_id = B.cat_id WHERE B.sport_id = '$sport_id' AND A.place_id = '2'");
                  $gold = mysqli_query($db, "SELECT * FROM winners as A INNER JOIN category as B ON A.cat_id = B.cat_id WHERE B.sport_id = '$sport_id' AND A.place_id = '1'");
                }

                $br = count(mysqli_fetch_assoc($bronze)['win_id']);
                // $br_pt = mysqli_fetch_assoc($bronze)['total_points'];
                $sil = count(mysqli_fetch_assoc($silver)['win_id']);
                $gl = count(mysqli_fetch_assoc($gold)['win_id']);
                // print_r(mysqli_fetch_assoc($gold));
                $total = $br + $sil + $gl;
                $total_points = $br * 3 + $sil * 5 + $gl * 7;

         ?>
        <tr style="cursor:pointer; color: blue">


            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1"><?= $row['sports'] ?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $br;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $sil;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $gl;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_points;?></td>

            </tr>
          <?php } ?>
<!--//////////////////////////////////////////////////////////////////////////////////////-->
        <!--TRACK & FIELD-->

<!--//////////////////////////////////////////////////////////////////////////////////////-->
</table>


<p align="center" style="font-size: 14pt;font-family: 'Century Gothic';"><strong>Indicators:</strong></p>
<b><p align="center" style="font-family: 'Century Gothic';font-size: 12pt;">  Bronze = 3 points &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Silver = 5 points &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Gold = 7 points</p></b>




<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->









              <!-- /.tab-pane -->
               <!-- /.tab-pane -->


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->








              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
           </div><!---col-md-6---->
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
  <!--footer----->

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
