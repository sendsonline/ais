  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand" title="Athletes' Information System with SMS Notification"><b><i class="fa fa-building" ></i> Athletes' Information System with SMS Notification</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <nav id="primary_nav_wrap">
<ul class="nav navbar-nav">
  <li class=""><a href="index.php"> <i class="fa fa-home"></i> Home</a></li>
  <li><a href="#"> <i class="fa fa-user"></i> Players <span
           class="caret"></a>
    <ul>
         <li><a href="registration.php"> Registration </a>
         <li><a href="masterlist.php"> Players Masterlist </a>
         <li><a href="profiles.php"> Player Appearance </a>
      </li>



    </ul>
  </li>


  <li><a href="#"> <i class="fa fa-list-alt"></i> Module <span
           class="caret"></span></a>
    <ul>
         <li><a href="sports.php"> Sports </a> </li>
         <li><a href="performance.php"> Performance </a> </li>
         <li><a href="winner.php"> Winners </a> </li>
         <!-- <li><a href="winner_student.php"> Student Winners </a> -->

      </li>



    </ul>
  </li>


   <li><a href="#"> <i class="fa fa-envelope"></i> SMS <span
           class="caret"></a>
    <ul>
         <li><a href="message.php"> Send Announcements </a>

      </li>



    </ul>
  </li>








</ul>
  </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Admin">
                <!-- The user image in the navbar-->
                <?php


                include('connect.php');
        $user_id = $_SESSION['user_id'];
        $fullname = $_SESSION['fullname'];
        $designation = $_SESSION['designation'];



        $sql = mysqli_query($db,"SELECT * FROM users WHERE user_id = '$user_id'") or die (mysql_error());
        while($row = mysqli_fetch_assoc($sql)){?>
                <img src="<?php echo $row['avatar'];?>" class="user-image" alt="User Image">
                <?php }?>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo 'Welcome, '.$fullname;?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                 <?php

                 include('connect.php');
        $user_id = $_SESSION['user_id'];
        $fullname = $_SESSION['fullname'];
        $designation = $_SESSION['designation'];

        $sql = mysqli_query($db,"SELECT * FROM users WHERE user_id = '$user_id'") or die (mysql_error());
        while($row = mysqli_fetch_assoc($sql)){?>
                <img src="<?php echo $row['avatar'];?>" class="user-circle" alt="User Image">
                <?php }?>

                  <p> <font color="white">
                  <center>
                    <?php echo $fullname;?>

                    <small><br> System <?php echo $designation;?></small>
                  </center>
                  </font>
                  </p>

                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">

                  </div>
                  <div class="pull-right">
                    <a href="../process/logoutprocess.php" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                   </div>
                </li>
              </ul>
            </li>
          </ul>
 </div>



</nav>











      <!-- /.container-fluid -->

  </header>
