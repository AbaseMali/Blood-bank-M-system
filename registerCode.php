<?php

session_start();

//Calling Mysql Connection
include 'config.php';
//Calling Navbars
include 'navbar.php';

if (isset($_POST['Register'])) {

    $fname = $_POST['fname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact =  $_POST['contact'];
	$type_of_user = $_POST['type_of_user'];


    //image location


    if (!empty($name) && !empty($username) && !empty($email) && !empty($pass) && !empty($contact)) {
       


            $query = mysqli_query($con, "INSERT INTO `users`(`name`, `username`, `email`, `password`, `contact`, `type_of_user`) 
            VALUES  ('$fname','$username','$email','$password','$contact','$type_of_user')");
            if ($query == 1) {


                echo " <script>
                                                window.alert('Thanks for your Registration');
                                            </script>";

                header("location: index.php");
            } else {
                echo " <script>
                                        window.alert('Error Register Again Some of your information is Wrong');
                                        </script>";
            }
        }
    }


?>