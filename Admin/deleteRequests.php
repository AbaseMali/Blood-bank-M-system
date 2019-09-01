<?php 

    include('connection.php');
 ?>
<?php
$q="DELETE FROM `request` WHERE request_id =".$_GET['id'];
if(mysqli_query($conn,$q))
    header('location:requestsBlood.php');
else
    die("Unable to delete user");
?>