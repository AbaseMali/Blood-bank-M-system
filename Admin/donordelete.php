<?php 

    include('connection.php');
 ?>
<?php
$q="DELETE FROM `donor` WHERE donor_id =".$_GET['did'];
if(mysqli_query($conn,$q))
    header('location:donor.php');
else
    die("Unable to delete user");
?>