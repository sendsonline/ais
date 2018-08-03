        <!-- Modal -->
<div class="modal fade" id="deleteModal<?php echo $row['stud_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-exclamation-sign"></i> Confirmation</h4>
      </div>
      
      <div class="modal-body">
       <h4>Are you sure you want to delete <strong style="color:red;"><?php echo $row['fname'].' '. $row['lname'];?></strong> from the winner(s) list?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="../process/deleteplayerprocess.php?id=<?php echo $row['stud_id'];?>"  class="btn btn-success"><i class="glyphicon glyphicon-trash"></i> Delete</a>
      </div>
      
    </div>
  </div>
</div>
        