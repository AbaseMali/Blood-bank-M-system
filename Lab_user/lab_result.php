<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
include('lab_headerScript.php');
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>window.open('../index.php','_self')</script>";
} else {
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



                        <?php

                            include('../Admin/connection.php');


                            $donor = mysqli_query($conn, "SELECT * FROM lab where status='Negative' or status='Positive'");
                            ?>
                        <div class="row  mb-2 mr-5 ml-5 mt-2">
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Lab ID</th>
                                        <th>Donor ID</th>
                                        <th>FullName</th>
                                        <th>Date </th>
                                        <th>Gender</th>
                                        <th>Blood Type</th>
                                        
                                        <th>Unit</th>
                                        <th>Result</th>
                                    </tr>
                                    <?php while ($row = mysqli_fetch_array($donor)) {  ?>
                                        <tr>
                                            <td><?php echo $row['labid']; ?> </td>
                                            <td><?php echo $row['donor_id']; ?> </td>
                                            <td><?php echo $row['fullname']; ?> </td>
                                            <td><?php echo $row['dateTime']; ?></td>
                                            <td><?php echo $row['gender']; ?> </td>
                                            <td><?php echo $row['blood_type']; ?> </td>
                                            <td><?php echo $row['unit']; ?> </td>
                                            <td><?php echo $row['status']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </table>
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
        <?php include("lab_footer.php") ?>
        <!-- end footer -->
        </div>
        <?php
            include('lab_footerScript.php');
            ?>
    </body>

</html>

<?php  } ?>