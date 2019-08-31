<?php
require_once('connection.php');

?> 
<?php
       $row= mysqli_query($conn,"SELECT * FROM `donor` WHERE donor_id =". $_GET['donor_id']);
       while ( $user=mysqli_fetch_array($row)){ ?>


<div class="modal fade" id="sendToLab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send To Lab</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="code.php" method="POST">

                <div class="modal-body">
                <input type="hidden" name='id' value="<?php echo $user['id'];?>">
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" name="name" class="form-control" value="<?php echo $user['full_name']?>">
                    </div>
 <?php } ?>
                    <div class="row" >
                    <div class="col-2">
                    </div>

                    <!-- Default inline 1-->
                    <div class="col-3 custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline1">
                        <label class="custom-control-label" for="defaultInline1">hp</label>
                    </div>

                    <!-- Default inline 2-->
                    <div class="col-3 custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline2">
                        <label class="custom-control-label" for="defaultInline2">hptt</label>
                    </div>

                    <!-- Default inline 3-->
                    <div class="col-2 custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline3">
                        <label class="custom-control-label" for="defaultInline3">CA</label>
                    </div>

                    </div>

                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>