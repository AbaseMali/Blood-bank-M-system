<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('include/headerScript.php');
include('connection.php');
?>
<?php
$res = mysqli_query($conn, "SELECT * FROM `request` WHERE request_id =" . $_GET['id']);
$user = mysqli_fetch_array($res);
?>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
  <div class="page-wrapper">
    <!-- Top menu page -->
    <?php include("include/topmenu.php") ?>
    <!-- end top menu page -->
    <!-- start page container -->
    <div class="page-container">
      <!-- Sidebar menu page -->
      <?php include("include/sidemenu.php") ?>
      <!-- end sidebar menu page -->
      <!-- start page content -->
      <div class="page-content-wrapper">
        <div class="page-content">

          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Request Blood</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="updateReqCode.php" method="POST">

              <div class="modal-body">
                <div class="row">
                  <input type="hidden" name='request_id' value="<?php echo $user['request_id']; ?>">
                  <div class="form-group col-6">
                    <label>Name </label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $user['name']; ?>" required>
                  </div>

                  <div class="form-group col-6">
                    <label>Gender</label>
                    <select class="form-control" name="gender">
                      <option value='Male' <?php echo ($user['gender'] == 'Male') ? 'selected' : "" ?>>Male</option>
                      <option value='Female' <?php echo ($user['gender'] == 'Female') ? 'selected' : "" ?>>Female</option>
                    </select>
                  </div>

                  <div class="form-group col-6">
                    <label for="blood_type">Blood type</label>
                    <select id="blood_type" name="blood_type" class="form-control" required>
                      <option value='A+' <?php echo ($user['blood_group'] == 'A+') ? 'selected' : "" ?>>A+</option>
                      <option value='A-' <?php echo ($user['blood_group'] == 'A-') ? 'selected' : "" ?>>A-</option>
                      <option value='B+' <?php echo ($user['blood_group'] == 'B+') ? 'selected' : "" ?>>B+</option>
                      <option value='B-' <?php echo ($user['blood_group'] == 'B-') ? 'selected' : "" ?>>B-</option>
                      <option value='AB+' <?php echo ($user['blood_group'] == 'AB+') ? 'selected' : "" ?>>AB+</option>
                      <option value='AB-' <?php echo ($user['blood_group'] == 'AB-') ? 'selected' : "" ?>>AB-</option>
                      <option value='O+' <?php echo ($user['blood_group'] == 'O+') ? 'selected' : "" ?>>O+</option>
                      <option value='O-' <?php echo ($user['blood_group'] == 'O-') ? 'selected' : "" ?>>O-</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label>Contact </label>
                    <input type="datetime-local" id="contact" name="dateTime" class="form-control" value="<?php echo $user['date_time']; ?>" disabled>
                  </div>
                  <div class="form-group col-6">
                    <label>Contact </label>
                    <input type="number" id="contact" name="contact" class="form-control" value="<?php echo $user['phone']; ?>" required>
                  </div>
                  <div class="form-group col-6">
                    <label>Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
                  </div>

                  <div class="form-group col-6">
                    <label>Hospital </label>
                    <input type="text" id="hospital" name="hospital" class="form-control" value="<?php echo $user['hospital']; ?>" required>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="inputState">Unit</label>
                    <select id="inputState" name="unit" class="form-control" required>
                      <option value='1000ml' <?php echo ($user['unit'] == '1000ml') ? 'selected' : "" ?>>1000ml</option>
                      <option value='500ml' <?php echo ($user['unit'] == '500ml') ? 'selected' : "" ?>>500ml</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="Requpdate" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>

          </div>


        </div>
        ....
      </div>
    </div>
  </div>
  <!-- end new student list -->
  </div>
  </div>
  <!-- end page content -->

  </div>
  <!-- end page container -->
  < !-- start footer -->
    <?php include("include/footer.php") ?>
    <!-- end footer -->
    </div>
    <?php
    include('include/footerScript.php');
    ?>
</body>

</html>