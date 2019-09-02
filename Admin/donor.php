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


                        <div class="card shadow mb-4">
                            <div class="card-header py-3">

                                <button type="button" class="btn btn-warning px-md-5  " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Donor</button>

                                <input type="submit" style="float:right" name="btnsearch" value="Search" id="" title="Search Student" class="btn btn-xm" />

                                            <input type="text" style="float:right" name="searchtxt" title="Enter name for search " class="search" autocomplete="off" />
                                            <div id="myDIV"> 
                  <fieldset class="field">
       <form action="delete.php" method="post">
        <input class="txt"  type="text" name="del" placeholder="ID Number"  />
    <input class="new" type="submit" name="dell" value="Delete" />
    </form>  
    </div>
                                  

                            <?php
                                include('donorRegistrationForm.php');
                                ?>
                            <?php
                                include('donorList.php');
                                ?>
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