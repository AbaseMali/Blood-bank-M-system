<?php
include('connection.php');


session_start();

if (isset($_POST['Register'])) {

    $fname = $_POST['fname'];
    $dateTime=$_POST['dateTime'];
    $gender = $_POST['gender'];
    $job = $_POST['job'];
    $Mstatus = $_POST['Mstatus'];
    $blood_type = $_POST['blood_type'];
    $email = $_POST['email'];
    $contact =  $_POST['contact'];
    $unit = $_POST['unit'];

    $q = "INSERT INTO `donor`(`full_name`,`dateTime`, `gender`, `job`, `martial_status`, `blood_type`, `email`, `contact_no`,`unit`) 
    VALUES 
    ('$fname','$dateTime','$gender','$job','$Mstatus','$blood_type','$email','$contact','$unit')";


    if (!mysqli_query($conn, $q)) {
        die(" failed to insert row " . mysqli_error($conn));
    }
} else
    die();
?>
	   <?php echo '<script type="text/javascript"> alert(" Inserted successfully...")</script>'; ?> 
	   
<?php
header('location:donor.php');

?>



