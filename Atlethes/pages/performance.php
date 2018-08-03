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

  <?php 
      include('../sport_tally/basket_medals.php');
      include('../sport_tally/track_medals.php');
      include('../sport_tally/swim_medals.php');
      include('../sport_tally/javelin_medals.php');
      include('../sport_tally/discuss_medals.php');
      include('../sport_tally/volleyball_medals.php');
      include('../sport_tally/tabletennis_medals.php');
      include('../sport_tally/tennis_medals.php');
      include('../sport_tally/badminton_medals.php');
      include('../sport_tally/softball_medals.php');
      include('../sport_tally/chess_medals.php');
      include('../sport_tally/sepak_medals.php');
      include('../sport_tally/taekwondo_medals.php');

    ?>


  <div class="box-body">
  <div class="col-md-20">
  <h3 class="box-title" style="text-align: center;font-family: 'Century Gothic';font-size: 30px;"> Yearly Evaluation</h3><br>
    <p align="center" style="font-size: 13pt;font-family: 'Century Gothic';"><strong>Note:</strong>&nbsp;Sport Tallies will be indicated in this table as it shows the total medals earned each from the winner sports.</p>
    <br><br>
      <div style="height: 40px;padding-top: ">
      <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        <button type="submit" class="btn bg-black pull-right" name="search"><i class="glyphicon glyphicon-search"></i> Search</button>
            <div class="col-sm-2 pull-right">

                <select class="form-control" name="year" onchange="showData(this.value)" required>

                    <option value="1">2017</option>
                    <option value="2">2018</option>
                    <option value="3">2019</option>
                    <option value="4">2020</option>
                         
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
        <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Basketball</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ahrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ahrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ahrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total;?></td>

            </tr>

<!--//////////////////////////////////////////////////////////////////////////////////////-->
        <!--TRACK & FIELD-->
        <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center; font-family: Verdana;"><font size="+.1">Track and Field</td>
            <td style=" width:auto; font-size:16px;text-align: center; font-family: Verdana;"><font size="+2"><?php echo $bhrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center; font-family: Verdana;"><font size="+2"><?php echo $bhrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center; font-family: Verdana;"><font size="+2"><?php echo $bhrdata3;?></td>
            <td style=" width:auto; font-size:16px;text-align: center; font-family: Verdana;"><font size="+2"><?php echo $total_medals1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center; font-family: Verdana;"><font size="+2"><?php echo $total_total1;?></td>
         </tr>
 <!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--SWIMMING-->    
         <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Swimming</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $chrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $chrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $chrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals2;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total2;?></td>
          </tr>
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--JAVELIN THROW-->
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Javelin Throw</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $dhrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $dhrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $dhrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total3;?></td>
          </tr> 
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--DISCUSS THROW-->
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Discuss Throw</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ehrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ehrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ehrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals4;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total4;?></td>
          </tr>
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--VOLLEYBALL-->
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Volleyball</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $fhrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $fhrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $fhrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals5;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total5;?></td>
          </tr> 
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--TABLE TENNIS--> 
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Table Tennis</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ghrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ghrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ghrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals6;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total6;?></td>
          </tr> 
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--TENNIS--> 
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Tennis</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $hhrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $hhrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $hhrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals7;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total7;?></td>
          </tr>  
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--BADMINTON--> 
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Badminton</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ihrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ihrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $ihrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals8;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total8;?></td>
          </tr> 
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--SOFTBALL--> 
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Softball</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $jhrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $jhrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $jhrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals9;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total9;?></td>
          </tr> 
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--CHESS--> 
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Chess</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $khrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $khrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $khrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals10;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total10;?></td>
          </tr> 
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--SEPAK TAKRAW--> 
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Sepak Takraw</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $lhrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $lhrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $lhrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals11;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total11;?></td>
          </tr> 
<!--//////////////////////////////////////////////////////////////////////////////////////-->
          <!--TAEKWONDO--> 
          <tr style="cursor:pointer; color: blue">
                        

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+.1">Taekwondo</td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $mhrdata1;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $mhrdata2;?></td>
            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $mhrdata3;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_medals12;?></td>

            <td style=" width:auto; font-size:16px;text-align: center;font-family: Verdana;"><font size="+2"><?php echo $total_total12;?></td>
          </tr> 
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