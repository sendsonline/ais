<?php

  require 'vendor/autoload.php';

  use Coreproc\Chikka\ChikkaClient;
  use Coreproc\Chikka\Models\Sms;
  use Coreproc\Chikka\Transporters\SmsTransporter;
  $client_id = 'ce4899e3bef6d5ea212c992c414d4a26a8ed1247bc098c948d1711ab7bad52ba';
  $secret_key = '198dfccc55fa17b2a85100750c6f9fa16b348f5bd076b5531b51f4164318272b';
  $short_code = '29290656471';
  $message = $_POST['message'];
  $category = $_POST['category'];
  // $phoneNum = $_POST['mobileNumber'];
  $length = 32;
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $charactersLength = strlen($characters);
   $randomString = '';
   for ($i = 0; $i < $length; $i++) {
       $randomString .= $characters[rand(0, $charactersLength - 1)];
   }


  $chikkaClient = new ChikkaClient($client_id, $secret_key, $short_code);

  include('../includes/connect.php');
  $sent = "";
  if($category == 0 || $category == '0'){
     $query = mysqli_query($db, "SELECT * FROM players WHERE status = 'Active'");
  }
  else{
     $query = mysqli_query($db, "SELECT players.* FROM sports INNER JOIN category ON sports.sport_id = category.sport_id LEFT JOIN players ON players.sports_id = category.cat_id WHERE status = 'Active' AND sports.sport_id = '$category'");
  }
 
  if(!empty(mysqli_fetch_assoc($query))){
  while($row = mysqli_fetch_assoc($query)){
    $phoneNum = $row['pcontact'];
    $sms = new Sms($randomString, $phoneNum, $message);

    $smsTransporter = new SmsTransporter($chikkaClient, $sms);
    // $sampleSmsTransporterActions = new SampleSmsTransporterActions($chikkaClient, $sms);
    $response = $smsTransporter->send();
    if($response->status == 200){
      $sent .= $row['fname']." ".$row['mname']." ".$row['lname']."<br>";
      // echo "<script>alert('Message Sent!');window.location.href='message.php';</script>";
    }

  }
  echo "<div style='font-size: 1.3rem;' align='center'><b style='font-size: 1.3rem; text-align:center'>Message sent to:</b>";
  echo "<br><br><a href = 'message.php'>Go back</a>";
  if($sent != ''){
    echo" <br><br> ".$sent."</div>";
  }
  else{
    echo "<script>alert('Message not sent! Check numbers if already validated. If not, please validate numbers first before you send message and check your internet connection! Thank you!');window.location.href='message.php';</script>";
  }
  
}
else{
  echo "<script>alert('No active players for this sport!');window.location.href='message.php';</script>";
}
  

  
  // print_r($response);
  
?>
