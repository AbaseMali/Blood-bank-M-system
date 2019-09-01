
<?php
include('connection.php');

if (isset($_POST['btnupdate'])) {
   $id = $_POST['donor_id'];
   $fname = $_POST['fname'];
   $gender = $_POST['gender'];
   $job = $_POST['job'];
   $Mstatus = $_POST['Mstatus'];
   $blood_type = $_POST['blood_type'];
   $email = $_POST['email'];
   $contact =  $_POST['contact'];
   $unit = $_POST['unit'];


   $q = " UPDATE `donor` SET `full_name`=' $fname',`gender`= '$gender',`job`='$job',`martial_status`='$Mstatus',`blood_type`='$blood_type',`email`='$email',
      `contact_no`='$contact',`unit`='$unit' WHERE donor_id='$id'";


   if (!mysqli_query($conn, $q)) {
      die('failed to update' . mysqli_error($conn));
   }
   mysqli_close($conn);
   header('location:donor.php');
}

?>