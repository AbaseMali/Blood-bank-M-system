<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php

include('lab_headerScript.php');
session_start();
if(!isset($_SESSION['username'])){
echo "<script>window.open('../index.php','_self')</script>";
}
else{
include('../Admin/connection.php');
?>



<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- Top menu page -->
		<?php include("lab_topmenu.php") ?>
		<!-- end top menu page -->
		<!-- start page container -->
		<div class="page-container">
			<!-- Sidebar menu page -->
			<?php include("lab_sidemenu.php") ?>
			<!-- end sidebar menu page -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-xl-6 col-md-6 col-12">
							<div class="info-box bg-orange">
								<span class="info-box-icon "><i class="material-icons">person</i></span>
								<div class="info-box-content">
									<span class="info-box-text">Donors</span>

									<?php
									$query = "SELECT donor_id FROM `donor` ORDER BY donor_id  ";
									$query_run = mysqli_query($conn, $query);

									$row = mysqli_num_rows($query_run);
									?>
									<h4><?php echo '<h4>' . $row . '</h4>'; ?></h4>

								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->

						<!-- /.col -->
						<div class="col-xl-6 col-md-6 col-12">
							<div class="info-box bg-success">
								<span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
								<div class="info-box-content">
									<span class="info-box-text">Lab Request</span>
									<?php
									$query = "SELECT labid FROM `lab` ORDER BY labid ";
									$query_run = mysqli_query($conn, $query);

									$row = mysqli_num_rows($query_run);
									?>
									<h4><?php echo '<h4>' . $row . '</h4>'; ?></h4>

									
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
					</div>


				</div>
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
	<?php include("lab_footer.php") ?>
	<!-- end footer -->
	</div>
	<?php
	include('lab_footerScript.php');
	?>
</body>

</html>

<?php  }  ?>	