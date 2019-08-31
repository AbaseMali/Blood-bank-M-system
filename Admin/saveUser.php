<?php
include('connection.php');


session_start();

if (isset($_POST['Register'])) {

	$fname = $_POST['fname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact =  $_POST['contact'];
	$type_of_user = $_POST['type_of_user'];

	$q = "INSERT INTO `users`(`name`, `username`, `email`, `password`, `contact`, `type_of_user`) 
    VALUES  ('$fname','$username','$email','$password','$contact','$type_of_user')";

	if (!mysqli_query($conn, $q)) {
		die(" failed to insert row " . mysqli_error($conn));
	}
} else
	die();
?>
	   <?php echo '<script type="text/javascript"> alert(" Inserted successfully...")</script>'; ?> 
	   
<?php
header('location:users.php');

?>
