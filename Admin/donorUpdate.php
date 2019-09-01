<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('include/headerScript.php');
include('connection.php');


?>
<?php
$res = mysqli_query($conn, "SELECT * FROM `donor` WHERE donor_id =" . $_GET['did']);
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

          <div class="container">

            <div class="card text-white bg-light  col-md-12">

              <div class="card-body">

                <form action="donorList.php" method="POST">
                  <div class="row text-dark">
                    <input type="hidden" name='id' value="<?php echo $user['id']; ?>">

                    <div class="form-group col-6">
                      <label>First Name </label>
                      <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $user['full_name']; ?>" required>
                    </div>
                    <!-- Gender -->
                    <div class="form-group col-6">
                      <label>Gender</label>
                      <select class="form-control" name="gender">
                        <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : "" ?>>Male</option>
                        <option value='Female' <?php echo ($user['gender'] == 'Female') ? 'selected' : "" ?>>Female</option>
                      </select>
                    </div>
                    <!-- Gender end -->

                    <div class="form-group col-6">
                      <label>Job </label>
                      <input type="text" name="job" id="username" class="form-control" placeholder="Enter job" value="<?php echo $user['job']; ?>" required>
                    </div>

                    <div class="form-group col-6">
                      <label for="inputState">Martial status</label>
                      <select id="inputState" name="Mstatus" class="form-control" required>
                        <option value="Married">Married</option>
                        <option value="Single">Single</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label for="inputState">Blood type</label>
                      <select id="inputState" name="blood_type" class="form-control" required>
                        <option value='A+' <?php echo ($user['blood_type'] == 'A+') ? 'selected' : "" ?>>A+</option>
                        <option value='A-' <?php echo ($user['blood_type'] == 'A-') ? 'selected' : "" ?>>A-</option>
                        <option value='B+' <?php echo ($user['blood_type'] == 'B+') ? 'selected' : "" ?>>B+</option>
                        <option value='B-' <?php echo ($user['blood_type'] == 'B-') ? 'selected' : "" ?>>B-</option>
                        <option value='AB+' <?php echo ($user['blood_type'] == 'AB+') ? 'selected' : "" ?>>AB+</option>
                        <option value='AB-' <?php echo ($user['blood_type'] == 'AB-') ? 'selected' : "" ?>>AB-</option>
                        <option value='O+' <?php echo ($user['blood_type'] == 'O+') ? 'selected' : "" ?>>O+</option>
                        <option value='O-' <?php echo ($user['blood_type'] == 'O-') ? 'selected' : "" ?>>O-</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?php echo $user['email']; ?>" required>
                    </div>
                    <div class="form-group col-6">
                      <label>Contact </label>
                      <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter contact" value="<?php echo $user['contact_no']; ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Unit</label>
                      <select id="inputState" name="unit" class="form-control" required>
                        <option value='1000ml' <?php echo ($user['unit'] == '100ml') ? 'selected' : "" ?>>1000ml</option>
                        <option value='500ml' <?php echo ($user['unit'] == '500ml') ? 'selected' : "" ?>>500ml</option>
                      </select>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="btn" value="update" class="btn btn-primary">Save</button>
                  </div>
                </form>


              </div>
            </div>
          </div>


          <!-- end new student list -->
        </div>
      </div>
      <!-- end page content -->

    </div>
    <!-- end page container -->
    <!-- start footer -->
    <?php include("include/footer.php") ?>
    <!-- end footer -->
  </div>
  <?php
  include('include/footerScript.php');
  ?>

</body>


</html>



<?php

if ($_POST['btn'] =='update');
?>