<?php 

    include('connection.php');
 ?>
<?php
$q="SELECT * FROM `request` WHERE request_id =".$_GET['id'];
if(mysqli_query($conn,$q))
    header('location:users.php');
else
    die("Unable to delete user");
?>