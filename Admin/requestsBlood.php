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
                        <div class="container-fluid">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                            <div class="card-header">
                            <a href='request.php'  class="btn btn-success">Request</a></td>  
                            </div>
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="data" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Blood group</th>
                                                    <th>Date and time</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Hospital</th>
                                                    <th>Unit</th>
                                                    <th> Update</th>
                                                    <th> Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                    include('connection.php');
                                                    $res = mysqli_query($conn, "SELECT * FROM request");
                                                    $i = 1;
                                                    while ($user = mysqli_fetch_array($res)) {

                                                        echo "

                            <tr>

                            <td> {$user['request_id']}</td>
                            <td> {$user['name']}</td>
                            <td> {$user['gender']}</td>
                            <td> {$user['blood_group']}</td>
                            <td> {$user['date_time']} </td>
                            <td> {$user['phone']}</td>
                            <td> {$user['email']}</td>
                            <td> {$user['hospital']}</td>
                            <td> {$user['unit']}</td>
                            <td> <a href='updateRequests.php?id={$user['request_id']}'  class=\"btn btn-success\">Update</a></td>  
                            <td> <a href='deleteRequests.php?id={$user['request_id']}'  class=\"btn btn-danger\" onclick = 'return confirm(\"Are you You sure\")' >Delete</a></td>
                            
                            </tr>

                            ";
                                                        $i++;
                                                    }
                                                    ?>

                                            </tbody>
                                        </table>
                                        <?php



                                            ?>
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
        <?php include("include/footer.php") ?>
        <!-- end footer -->
        </div>
        <?php
            include('include/footerScript.php');
            ?>
    </body>

</html>

<?php } ?>