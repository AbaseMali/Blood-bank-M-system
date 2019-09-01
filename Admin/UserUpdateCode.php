
<?php
include('connection.php');
if (isset($_POST['bUpdate'])) {

    $id=$_POST['user_id'];
	$fname = $_POST['fname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact =  $_POST['contact'];
	$type_of_user = $_POST['type_of_user'];

$q = "UPDATE `users` SET `name`='$fname',`username`='$username',`email`='$email',
`password`='$password',`contact`='$contact',`type_of_user`='$type_of_user' WHERE user_id = '$id'";

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