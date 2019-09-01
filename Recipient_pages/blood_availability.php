<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('rec_headerScript.php');
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
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Blood Availability</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Blood Availability</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-blue">
                                <span class="info-box-icon "><i class="material-icons">A+</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">A Positive</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='A+'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-orange">
                                <span class="info-box-icon "><i class="material-icons">A-</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">A Negative</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='A-'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-purple">
                                <span class="info-box-icon "><i class="material-icons">B+</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">B Positive</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='B+'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon "><i class="material-icons">B-</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">B Negative</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='B-'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon "><i class="material-icons">O+</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">O Positive</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='O+'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon "><i class="material-icons">O-</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">O Negative</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='O-'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon "><i class="material-icons">AB+</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">AB Positive</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='AB+'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon "><i class="material-icons">AB-</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">AB Negative</span>
                                    <?php
                                    $query = "SELECT SUM(unit) FROM donor WHERE blood_type='AB-'";
                                    $query_run = mysqli_query($conn, $query);

									$row = mysqli_fetch_array($query_run);
									?>
									<h4> <?php echo $row['0']; ?> unit </h4>
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
    <?php include("rec_footer.php") ?>
    <!-- end footer -->
    </div>
    <?php
    include('rec_footerScript.php');
    ?>
</body>

</html>

<?php } ?>