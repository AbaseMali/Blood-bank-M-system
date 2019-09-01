<?php
require_once('connection.php');

?>
<?php
$row = mysqli_query($conn, "SELECT * FROM `donor` WHERE donor_id =" . $_GET['donor_id']);
while ($user = mysqli_fetch_array($row)) { ?>


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
                        <input type="hidden" name='id' value="<?php echo $user['id']; ?>">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" class="form-control" value="<?php echo $user['full_name'] ?>">
                        </div>

                        
                        <div class="form-group col-">
                            <label>Date & Time </label>
                            <input type="datetime-local" id="contact" name="dateTime" class="form-control" value="<?php echo $user['dateTime'] ?>" required>
                        </div>
                    <?php } ?>


                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>