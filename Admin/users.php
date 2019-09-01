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
                     include('adduser.php');
                    ?>

                    <div class="container-fluid">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add user
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser">
                                        Add User
                                    </button>
                                </h6>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> ID </th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Contact</th>
                                                <th>Type of user</th>
                                                <th>Action</th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- Where data comes or the table cells -->


                                        </tbody>
                                        <?php
                                        include('connection.php');
                                        $res = mysqli_query($conn, "SELECT * FROM users ");
                                        $i = 1;
                                        while ($user = mysqli_fetch_array($res)) {
                                            echo "

<tr>

<td> {$user['user_id']}</td>
<td> {$user['name']}</td>
<td> {$user['username']}</td>
<td> {$user['email']}</td>
<td> {$user['password']}</td>
<td> {$user['contact']}</td>
<td> {$user['type_of_user']}</td>
<td> <a class=\"btn btn-success btn-xs \" name=\"send\"  href='updateUser.php?id={$user['user_id']}'  data-toggle=\"modal\" data-target=\"#UpdateUser\" name=\"update\"><i class=\"material-icons\">
brush
</i></a></td>  
<td> <a href='deleteUser.php?id={$user['user_id']}' class=\"btn btn-danger  btn-xs \" onclick = 'return confirm(\"Are you You sure\")' ><i class=\"material-icons\">
delete
</i></a></td>



</tr>

";
                                            $i++;
                                        }
                                        ?>





                                    </table>

                                </div>
                            </div>
                        </div>

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