<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('include/headerScript.php');
include('connection.php');
?>
<?php
$res = mysqli_query($conn, "SELECT * FROM `users` WHERE user_id =" . $_GET['id']);
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

            <div class="modal-content">
              <form action="UserUpdateCode.php" method="POST">

                <div class="modal-body">
                  <div class="row">
                  <input type="hidden" name='user_id' value="<?php echo $user['user_id']; ?>">
                    <div class="form-group col-6">
                      <label>First Name </label>
                      <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $user['name']; ?>" required>
                    </div>
                    <div class="form-group col-6">
                      <label>Username </label>
                      <input type="text" name="username" id="username" class="form-control" value="<?php echo $user['username']; ?>" required>
                    </div>

                    <div class="form-group col-6">
                      <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email']; ?>" required>
                    </div>

                    <div class="form-group col-6">
                      <label>Password</label>
                      <input type="password" name="password" id="password" value="<?php echo $user['password']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group col-6">
                      <label>Contact </label>
                      <input type="number" name="contact" id="contact" class="form-control" value="<?php echo $user['contact']; ?>" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="inputState">Type of user</label>
                      <select id="type_of_user" class="form-control" name="type_of_user" required>
                        <option value='Admin' <?php echo ($user['type_of_user'] == 'Admin') ? 'selected' : "" ?>>Admin</option>
                        <option value='Lab' <?php echo ($user['type_of_user'] == 'Lab') ? 'selected' : "" ?>>Lab</option>
                        <option value='Recipient' <?php echo ($user['type_of_user'] == 'Recipient') ? 'selected' : "" ?> >Recipient</option>
                      </select>
                    </div>


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                    <button type="submit" name="bUpdate" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>

            </div>

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