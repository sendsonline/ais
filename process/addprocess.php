


  <?php 
 session_start();
         include('../includes/connect.php');

        


$id = $_GET['id'];
            
                $cat_id = $_SESSION['cat_id'];
                $place_id = $_SESSION['place_id'];
                $sy_id = $_SESSION['year_id'];

              
               


        
       

                



  
     if (empty($id) || empty($cat_id) || empty($place_id) || empty($sy_id)) {
                   echo'<script>alert("Please select one of the options");
                              window.location.href="../pages/winner_student.php";</script>';
             
                    
       } else {

       

         $exist = mysqli_query($db,"SELECT * FROM winstudent WHERE stud_id= '$id' AND cat_id = '$cat_id'") or die (mysql_error());
                              if(mysqli_num_rows($exist)>0){
                                //we have items
                                echo'<script>alert("Already counted.");
                              window.location.href="../pages/winner_student.php";</script>';
                    

                             } else{ 

                                $sql =  mysqli_query($db,"INSERT INTO winstudent VALUES(NULL,'$id','$cat_id','$place_id','$sy_id')");
                                  if($sql==true){
                                    
         
                                echo '<script>alert("Succussfully Listed");
                                        window.location.href="../pages/winner_student.php";</script>';
                              }

                               else {  
                                echo '<script>alert("Sorry unable process your request");
                                        window.location.href="../pages/winner_student.php";</script>';
                                }
        }
    } 





mysqli_close($db);
     ?> 

