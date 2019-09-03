<?php
include('../Admin/connection.php');


session_start();

                $uname = $_SESSION['username'];

                $sql = mysqli_query($conn,"SELECT * FROM `users` WHERE username='$uname'");

                while ($row1 = mysqli_fetch_assoc($sql)) {


                    $un = $row1['username'];
                    }

if (isset($_POST['Register'])) {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $blood_type = $_POST['blood_type'];
    $dateTime=$_POST['dateTime'];
    $contact = $_POST['contact'];
    $email = $_POST['email']; 
    $hospital = $_POST['hospital'];
    $unit = $_POST['unit'];
    
   

    $q = "INSERT INTO `request`(`name`, `gender`, `blood_group`,`date_time`,`phone`, `email`, `hospital`, `unit`)
     VALUES
    ('$name','$gender','$blood_type','$dateTime','$contact','$email','$hospital','$unit')";


    if (!mysqli_query($conn, $q)) {
        die(" failed to insert row " . mysqli_error($conn));
    }
} else
    die();
?>
	   <?php echo '<script type="text/javascript"> alert(" Inserted successfully...")</script>'; ?> 
	   
<?php
header('location:requestsBlood.php');

?>
