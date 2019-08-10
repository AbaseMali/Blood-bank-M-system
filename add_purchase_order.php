
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    
    <title>SIOS | Admin Panel</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />	
    <link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" /> 
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
		<?php include("topmenu.php") ?>
        <!-- end header -->
       
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<?php include("sidemenu.php")?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Order</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-Order" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-Order" href="#">Order</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Order</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                                          						
                                <div class="card-body" id="bar-parent">
								<?php 
   if( isset($_SESSION['adminmessage']) AND !empty($_SESSION['adminmessage']) ){
        echo $_SESSION['adminmessage'];  
unset( $_SESSION['adminmessage'] );		
	}

?>  
                                    <form action="" method=POST id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Order_name" placeholder="enter order name" class="form-control input-height" required/> </div>
                                           
										   </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Creation Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Order_code" placeholder="enter order date" class="form-control input-height" /> </div>
                                         
											</div>
											</div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="Order_description" placeholder="order details" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            
											</div>
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" name="submit" class="btn btn-info">
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            	</div>
                                       		 </div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            
          <?php
if(isset($_POST['submit'])){
	
	if( empty($_POST['Order_name']) || empty($_POST['Order_code']) || empty($_POST['Order_description'])) {
		$_SESSION['adminmessage']= " <div class='alert alert-danger'>
        <strong>Woah!</strong> Fill out all the information please.
                    </div>";
		 header("location:add_Order.php");
	}else{
		
		$result = $mysqli->query("SELECT * FROM tb_Order WHERE Order_code='$_POST[Order_code]'");
		   
			if ( $result->num_rows > 0  ){ // User doesn't exist

	 $_SESSION['adminmessage']= " <div class='alert alert-danger'>
        <strong>Woah!</strong> This Order code has already been used.
                    </div>";
	header("location: add_Order.php");
}
else{
$Order_name = $mysqli->escape_string($_POST['Order_name']);
$Order_code = $mysqli->escape_string($_POST['Order_code']);
$Order_description = $mysqli->escape_string($_POST['Order_description']);

 $date=  date("Y-m-d"); 
 
 if ($_FILES['image']['tmp_name'] == "")
	{
			$filepath="images/user.png";
	}
	else
	{
		$filetemp=$_FILES['image']['tmp_name'];
		$filename=$_FILES['image']['name'];
		$filetype=$_FILES['image']['type'];
		$filepath="images/".$filename;
	    move_uploaded_file($filetemp,$filepath);
	}
	
	$code = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
// active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO tb_Order (Order_name,Order_code,Order_description,image,date) " 
            . "VALUES ('$Order_name','$Order_code','$Order_description','$filepath','$date')";
echo $sql;
    // Add user to the database
    if ( $mysqli->query($sql) ){
		$_SESSION['adminmessage']= " <div class='alert alert-success'>
        <strong>Well done!</strong> You successfully updated the Order, it will be appear on the website.
                    </div>";
		 header("location:all_Orders.php");
	}
else {
   $_SESSION['adminmessage']= " <div class='alert alert-danger'>
        <strong>Warning!</strong> You weren't successful in updating the Order.
                    </div>";
header("location:all_Orders.php");
    }
}}}
?>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php")?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" ></script>
    <script src="assets/plugins/jquery-validation/js/additional-methods.min.js" ></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
    <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/pages/validation/form-validation.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
     <!-- end js include path -->
</body>
</html>