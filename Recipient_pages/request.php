<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('rec_headerScript.php');
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
                   

                

<?php
include('needBlood.php')
?>
<div class="container-fluid">
    <h2>Request blood</h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Request Blood
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#needBlood">
                    Request
                </button>
            </h6>
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
        <?php include("rec_footer.php")?>
        <!-- end footer -->
    </div>
<?php
include('rec_footerScript.php');
?>
  </body>
</html>