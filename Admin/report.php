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
                    <div class="page-bar">
                           <div class="card text-white bg-dark mb-4 col-md-4" style="width: 378px; margin:0px  20px 20px 2px; display:inline-block;">
                            
                                 <div class="card-body">
                                   <h5 class="card-title">Donor report by Date</h5>
                                   <form action="donor_report.php" method="POST">
                                <p > Start-Date : <input type="date" name="startDate" >
                                </p>  
                                <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                                </p>   
                                <h5 class="card-title">Select donor by Id</h5> 
                                <p > &nbsp; Id :&nbsp; <input type="input" name="donor_id">
                                </p>                         
                               </div>
                               <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                           </div>

                           <div class="card text-white bg-dark mb-4 col-md-4" style="width: 378px; margin:0px  20px 20px 2px; display:inline-block;">
                            
                            <div class="card-body">
                              <h5 class="card-title">All lab report by Date</h5>
                              <form action="lab_report.php" method="POST">
                           <p > Start-Date : <input type="date" name="startDate" >
                           </p>  
                           <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                           </p>   
                           <h5 class="card-title">Select donor by Id</h5> 
                           <p > &nbsp; Id :&nbsp; <input type="input" name="donor_id">
                           </p>                         
                          </div>
                          <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                      </div>

                      <div class="card text-white bg-dark mb-4 col-md-4" style="width: 378px; margin:0px  20px 20px 2px; display:inline-block;">
                            
                            <div class="card-body">
                              <h5 class="card-title">Request blood report by Date</h5>
                              <form action="requestReport.php" method="POST">
                           <p > Start-Date : <input type="date" name="startDate" >
                           </p>  
                           <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                           </p>   
                           <h5 class="card-title">Select donor by Id</h5> 
                           <p > &nbsp; Id :&nbsp; <input type="input" name="request_id">
                           </p>                         
                          </div>
                          <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                      </div>


                     
                               </div>
                         </div>
                         
                        </div>


                                </div>
                                ....
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