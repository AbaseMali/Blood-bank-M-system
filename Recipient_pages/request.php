<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('rec_headerScript.php');
include('../Admin/connection.php');
?>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- Top menu page -->
		<?php include("rec_topmenu.php") ?>
		<!-- end top menu page -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- Sidebar menu page -->
			<?php include("rec_sidemenu.php") ?>
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
      <form action="saveReq.php" method="POST">

        <div class="modal-body">
            <div class="row">
          <div class="form-group col-6">
            <label>Name </label>
            <input type="text" name="name" id="name" class="form-control" pattern="[A-Z_ ][Aa-z_ ]{3,30}" placeholder="Enter first name" required>
          </div>         
         
          <div class="form-group col-6">
            <label>Gender</label>
            <select class="form-control" name="gender">
              <option selected>Male</option>
              <option >Female</option>
            </select>
          </div>

          <div class="form-group col-6">
              <label for="blood_type">Blood type</label>
              <select id="blood_type" name="blood_type" class="form-control" required>
                <option selected>A+</option>
                <option >A-</option>
                <option >B+</option>
                <option >B-</option>
                <option >AB+</option>
                <option >AB-</option>
                <option >O+</option>
                <option >O-</option>
              </select>
            </div>
            <div class="form-group col-6">
            <label>Date & Time </label> 
            <input type="datetime-local" id="contact" name="dateTime" class="form-control"  required>
          </div> 
          <div class="form-group col-6">
            <label>Contact </label>
            <input type="number" id="contact" name="contact" class="form-control" pattern="[0-9]{3,30}" placeholder="Enter contact" required>
          </div> 
            <div class="form-group col-6">
            <label>Email</label>
            <input type="email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email"  required>
          </div>

          <div class="form-group col-6">
            <label>Hospital </label>
            <input type="text" id="hospital" name="hospital" class="form-control" pattern="[A-Z_ ][Aa-z_ ]{3,30}" placeholder="Enter hospital" required>
          </div>  

               
          <div class="form-group col-md-6">
            <label for="inputState">Unit</label>
            <select id="inputState" name="unit" class="form-control" required>
              <option selected>1000ml</option>
              <option >500ml</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="Register" class="btn btn-primary">Save</button>
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
        <	!-- start footer -->
        <?php include("rec_footer.php")?>
        <!-- end footer -->
    </div>
<?php
include('rec_footerScript.php');
?>
  </body>
</html>