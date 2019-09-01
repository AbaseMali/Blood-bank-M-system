<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('include/headerScript.php');
session_start();
if(!isset($_SESSION['username'])){
echo "<script>window.open('../index.php','_self')</script>";
}
else{

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
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="info-box bg-blue">
								<span class="info-box-icon "><i class="material-icons">local_hospital</i></span>
								<div class="info-box-content">
									<h5>Donor</h5>
									<?php
									$query = "SELECT donor_id FROM `donor` ORDER BY donor_id ";
									$query_run = mysqli_query($conn, $query);

									$row = mysqli_num_rows($query_run);
									?>


									<?php echo '<h4>' . $row . '</h4>'; ?>

								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-xl-3 col-md-6 col-12">
							<div class="info-box bg-orange">
								<span class="info-box-icon "><i class="material-icons">local_hotel</i></span>
								<div class="info-box-content">
									<h5>Blood Requests</h5>

									<?php
									$query = "SELECT request_id FROM `request` ORDER BY request_id ";
									$query_run = mysqli_query($conn, $query);

									$row = mysqli_num_rows($query_run);
									?>

									<?php echo '<h4>' . $row . '</h4>'; ?>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-xl-3 col-md-6 col-12">
							<div class="info-box bg-purple">
								<span class="info-box-icon "><i class="material-icons">event_note</i></span>
								<div class="info-box-content">
									<h5>lab Results</h5>

									<?php
									$query = "SELECT * FROM `lab` WHERE status = 'positive' or status = 'negative'";
									$query_run = mysqli_query($conn, $query);

									$row = mysqli_num_rows($query_run);
									?>
									<?php echo '<h4>' . $row . '</h4>'; ?>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-xl-3 col-md-6 col-12">
							<div class="info-box bg-success">
								<span class="info-box-icon "><i class="material-icons">person</i></span>
								<div class="info-box-content">
									<h5> Users</h5>
									<?php
									$query = "SELECT * FROM `users` ORDER BY user_id ";
									$query_run = mysqli_query($conn, $query);

									$row = mysqli_num_rows($query_run);
									?>
									<?php echo '<h4>' . $row . '</h4>'; ?>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>

						<div class="col-xl-3 col-md-6 col-12">
							<div class="info-box bg-success">
								<span class="info-box-icon "><i class="material-icons">person</i></span>
								<div class="info-box-content">
									<h5> Total Units</h5>
									<?php
									$query = "SELECT SUM(unit) FROM donor";
									$query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<?php echo $row['0']; ?>
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
	<?php include("include/footer.php") ?>
	<!-- end footer -->
	</div>
	<?php
	include('include/footerScript.php');
	?>
</body>

</html>
<?php } ?>