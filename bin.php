 <div class="tab-pane" id="appearance">
             <div class="form-group">

              <table id="example1" class="table table-bordered table-hover">
              <thead>
                  <tr>
                  
                    <th style="width:auto;">Event</th>
                    <th style="width:auto;">School Year</th>

                                   
                    <th style="text-align:center; width:auto;">Semester</th>
                    <th style="text-align:center; width:auto;">Designation</th> 
                    <th style="text-align:center; width:auto;">Points</th>   
                    
                  </tr>
                </thead>
                <tbody>
                  <?php include('includes/connect.php');
        
            $query = mysqli_query($db,"SELECT students.*,participants.*,add_category.*,events.*,designation.*,house_recognition.*,sy.*,semester.* FROM participants LEFT JOIN students ON participants.sid = students.sid LEFT JOIN add_category ON add_category.cat_id = participants.cat_id LEFT JOIN events ON add_category.eid = events.eid LEFT JOIN house_recognition ON events.recog_id = house_recognition.recog_id LEFT JOIN sy ON events.sy_id = sy.sy_id LEFT JOIN semester ON events.sem_id = semester.sem_id LEFT JOIN designation ON participants.desig_id = designation.desig_id WHERE students.sid = '$sid'") or die (mysql_error());
            while($row = mysqli_fetch_assoc($query)){
              
              
              
              ?>
                        
                        <tr style="cursor:pointer;">
                       
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['e_name'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['sy'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['semester'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['designation'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['desig_points'];?></td>

                        


                    
                        
                        </tr>
                 
<?php include('../modal/viewstudenttitlemodal.php');
    //include('viewresModal.php')?>
                        <?php }?>
                </tbody>
                <tfoot>
                  <tr>
                  
                    <th style="width:auto;">Event</th>
                    <th style="width:auto;">School Year</th>

                                   
                    <th style="text-align:center; width:auto;">Semester</th>
                    <th style="text-align:center; width:auto;">Designation</th> 
                    <th style="text-align:center; width:auto;">Points</th> 
                    
                  </tr>
                </tfoot>
            
            </table>

              </div>
              </div>




                <div class="tab-pane" id="ewon">
             <div class="form-group">

              <table id="example3" class="table table-bordered table-hover">
              <thead>
                  <tr>
                   <th style="width:auto;">Event</th>
                    <th style="width:auto;">Category</th>
                    <th style="width:auto;">School Year</th>
                    
                   
                    <th style="text-align: width:auto;">Semester</th>
                    <th style="width:auto;">Designation</th>
                    <th style="width:auto;">Points</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php include('../includes/connect.php');
        
            $query = mysqli_query($db,"SELECT events.*,stud_winners.*,students.*, sy.*,semester.*,stud_title.*,add_category.* from stud_winners LEFT JOIN add_category ON add_category.cat_id = stud_winners.cat_id LEFT JOIN events ON add_category.eid = events.eid LEFT JOIN sy ON events.sy_id = sy.sy_id LEFT JOIN students ON stud_winners.sid = students.sid LEFT JOIN semester ON events.sem_id = semester.sem_id LEFT JOIN stud_title ON stud_winners.stitle_id = stud_title.stitle_id WHERE stud_winners.sid = '$sid'
") or die (mysql_error());
            while($row = mysqli_fetch_assoc($query)){
              
              
              
              ?>
                        
                        <tr style="cursor:pointer;">
                       
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['e_name'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['category'];?></td>
                        
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['sy'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['semester'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['title'];?></td>
                        <td style=" width:auto; font-size:16px;"> <?php echo $row['points'];?></td>
                        


                    
                        
                        </tr>
                 
<?php include('../modal/viewstudenttitlemodal.php');
    //include('viewresModal.php')?>
                        <?php }?>
                </tbody>
                <tfoot>
                  <tr>
                  
                    <th style="width:auto;">Event</th>
                    <th style="width:auto;">Category</th>
                    <th style="width:auto;">School Year</th>
                    
                   
                    <th style="text-align: width:auto;">Semester</th>
                    <th style="width:auto;">Designation</th>
                    <th style="width:auto;">Points</th>
                    


                  </tr>
                </tfoot>
            
            </table>

              </div>
              </div>
                