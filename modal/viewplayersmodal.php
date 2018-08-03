        <!-- Modal -->
<div class="modal fade" id="infoModal<?php echo $row['stud_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-list-alt"></i>&nbsp; Player Information</h4>
      </div>
      
      <div class="modal-body">
      <div id="div1">
       <dl class="dl-horizontal">
       	
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Student No:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['student_no'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Full name:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['fname']. ' ' .$row['mname'].' '.$row['lname'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Sports:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['category'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Year Level:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['year'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Course:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['course'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Address:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['address'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Contact No:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['contact_no'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Gender:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['gender'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Birthdate:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['birthdate'];?></dd><hr>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <h4><i class="fa fa-list-alt"></i>&nbsp; Additional Information</h4><br>

        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Blood Type:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['bloodtype'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Allergy(s):</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['allergy'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">In Case of <br>emergency, contact:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><br><?php echo $row['emergency'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Address:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['paddress'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Contact No:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['pcontact'];?></dd>
        <dt style="font-family: 'Century Gothic';font-size: 11.5pt;">Status:</dt> <dd style="font-family: 'Century Gothic';font-size: 11.5pt;"><?php echo $row['status'];?></dd>
        <br>

       
      <div class="row">
        <div class="col-lg-12">
          <center>
          <img class="img-circle" src="<?php echo $row['avatar'];?>" alt="Generic placeholder image" width="200" height="200">
       
        
       
        </div>
        </div>
       </dl>
       </div>
      </div>
      <div class="modal-footer">
       
     

            

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </form>

      </div>
      
    </div>
  </div>
</div>
        