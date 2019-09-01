<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('include/headerScript.php');
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>window.open('../index.php','_self')</script>";
} else {

    include('connection.php');

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
                   
                
                <?php

include('connection.php');


$donor = mysqli_query($conn, "SELECT * FROM lab where status='Negative' or status='Positive'");
?>

<div class="container-fluid">
    <h2>Lab Result</h2>
    
    <div class="card shadow mb-4">
    <div class="card-body">

<div class="table-responsive">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Result</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($donor)) {  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['labid']; ?></th>
      <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['status']; ?></td>
     
    </tr>
   
  </tbody>
  <?php } ?>
</table>


</div>
    </div>
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
        <!-- start footer -->
        <?php include("include/footer.php")?>
        <!-- end footer -->
    </div>
<?php
include('include/footerScript.php');
?>
  </body>
</html>

  <?php } ?>