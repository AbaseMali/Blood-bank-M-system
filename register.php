<?php 
session_start();

//Calling Mysql Connection
include 'config.php';
//Calling Navbars
include 'navbar.php';

if (isset($_POST['submit'])) {
	
	$name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $picture = $_FILES['picture'] ['name'];
    $tmp_name = $_FILES['picture'] ['tmp_name'];
    $Username = mysqli_real_escape_string($con,$_POST['Username']);
    $pass = $_POST['password'];
    $repass = $_POST['confirmpassword'];

    //image location

    $location = "Images/";

     if (!empty($name) && !empty($address) && !empty($Username) && !empty($pass)) {
                                
                                if (move_uploaded_file($tmp_name, $location.$picture)) {

                                    if ($pass == $repass) {


                                    	$query = mysqli_query($con,"INSERT INTO register(FullName, Email, Phone, Address, Picture, UserName, Password) VALUES('$name','$email','$phone','$address','$picture','$Username','$pass')");

                                    	if ($query == 1) {
                                        
                                                                                     
                                            echo " <script>
                                                window.alert('Thanks for your Registration');
                                            </script>";

                                             header("location: index.php");
                                         }
                                    else {
                                       echo " <script>
                                        window.alert('Error Register Again Some of your infortion is Wrong');
                                        </script>";
                                    }
                                    }
                                }
                            }
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Beauty Salon Management System</title>
	<link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.js"></script>
    <style type="text/css">
        
    </style>
</head>
<body>
		
 		<div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="text-center text-primary panel-heading">
                    <h1><i class="fa fa-apple"></i> Signup&nbsp;</h1>
                     </div>
                     <div class="panel-body">
                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-2 label-control">FullName</label>
                                <div class="col-md-10">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 label-control">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                            </div> 
                            
                            <div class="form-group"> 
                            <label class="col-md-2 label-control">Phone</label>
                            <div class="col-md-10">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required="true">
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label class="col-md-2 label-control">Address</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 label-control">Picture</label>
                            <div class="col-md-10">
                                <input type="file" name="picture" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 label-control">userName</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="Username" placeholder="Username" required="true">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-md-2 label-control">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                                </div>
                            </div>
                            <div class="form-group">   
                            <label class="col-md-2 label-control">Re-Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="true" pattern=".{6,}">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-md" value="Sign Up" name="submit" style="border-radius: 10px; margin-left: 250px;">
                            </div>
                        </form>
                        </div>
                        
                    </div>
                </div>
</html>