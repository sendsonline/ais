  <?php 
  ob_start();
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){

    
  ?>

  <!DOCTYPE html>
  <html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../dist/img/logo.png" rel="shortcut icon">
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
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="../dist/css/skins/skin-black.css">


   <style type="text/css">
     p {
      font-family: "Century Gothic", Times, serif;
      font-size: 15px;
  }

     h2 {
      font-family: "Game of Thrones", Times, serif;
      font-size: 23px;
  }
     p >a{
      font-family: "Times New Roman", Times, serif;
      font-size: 5px;
  }

  body {
    padding: 0;
    margin: 0;
  }


  .col-half-offset{
      margin-left:2.8%
  }



   </style>


  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-black layout-top-nav" style="background-image:url(../images/.jpg); width:100%;">
  <div class="wrapper" style="background-image:url(../images/.jpg); width:100%;">

 <?php include('../includes/adminHeader.php');?>
  <!-- Full Width Column -->
  <div class="content-wrapper" style="background-image:url(../images/.jpg); width:100%;">
    <!-- Full Width Column -->
   

    <!-- Full Width Column -->
   
          <br><p></p>
             
            
             <center>
             <img src="../images/logo.jpg" width="70%" height="%;" class="img-responsive" style="margin-top:1px;">
    </center> 
    </br>
    </br>

    <div class="col-md-11"> 
    <div style="float: right; margin-top: -70px;"> <font face="Century Gothic" size="+1" color="white"> Fight for Glory | Brawl for Victory | Win your School Pride &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font> 
  </div>





    </div>



    <br><p></p>  <br><p></p>



           </font>

           
    </div><br>

    
    <?php include('../includes/footer.php')?>
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
  <?php }else {
     header('location:login.php');
    }?>
