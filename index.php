<?php  ?>
<?php 
session_start();
//Calling Mysql Connection
include 'config.php';
//Calling Navbars


						if (isset($_POST['submit'])) {

							$username = mysqli_real_escape_string($con,$_POST['username']);
                            $pass = mysqli_real_escape_string($con,$_POST['password']);
                            $usertype = mysqli_real_escape_string($con,$_POST['usertype']);


                            	if (empty($usernae) && empty($pass)) {
                            		echo "<script>alert('fill the empty');</script>";
                            	}
                            	else{



                            
                            
                            	$query = "SELECT * FROM `users` WHERE username='$username' AND password='$pass' and type_of_user='$usertype'";

                                    $result = mysqli_query($con,$query);

                                    $row = mysqli_num_rows($result);



                                    if ($row == 1 ) {

                                    		
                                    		switch ($usertype) {
                                    			case 'Admin':
                                    				$_SESSION['username'] = $username;
                                        
                                             		header("location:Admin/index.php");
                                    				break;
                                    			case 'Lab':
                                    				$_SESSION['username'] = $username;
                                        
                                             		header("location:Lab_user/index.php");
                                    				break;
                                    			case 'Recipient':
                                    				$_SESSION['username'] = $username;
                                        
                                             		header("location:Recipient_Pages/index.php");
                                    				break;
                                    			
                                    			default:
                                    				echo "<script>alert('Select Value');</script>";
                                    				break;
                                    		}
                                             
                                         
                                    }
                                    else {

                                    
                                        echo "<script>alert('Enter correct details');</script>";
                                       
                                    }

                            

                                    
                                    

                                    
}


                                }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>BBMS</title>
	<link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.js"></script>
    
</head>
<?php include 'navbar.php'; ?>
<body>
	  <div class="container">
      <div style="height: 20px;"></div>
                <div class="row">
                    <div class="col-md-7 col-md-offset-3" style="border: 2px solid #2780e3;">
                        <div class="panel">
                                
                            <div class="text-center text-primary panel-heading">
                                <h1><img src="hush.png" width="120rm" height="120rm" alt=""></h1>
                            </div>

                            <div class="panel-body">
                              
                                <form method="post" action="" class="form-horizontal">
                                    <div class="form-group">
                                    <label class="col-md-3 label-control">UserName</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="username" placeholder="UserName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-3 label-control">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-3 label-control">User Type</label>
                                    <div class="col-md-8">
                                    	<select class="form-control" name="usertype">
                                    		<option value="Admin">Admin</option>
                                    		<option value="Lab">Lab</option>
                                    		<option value="Recipient">Recipient</option>

                                    	</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <input type="submit" value="Login" class="btn btn-primary" name="submit" style="border-radius: 10px;">
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
</body>
</html>