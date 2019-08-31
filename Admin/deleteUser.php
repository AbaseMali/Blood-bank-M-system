<?php 

    include('connection.php');
 ?>
<?php
$q="DELETE FROM `users` WHERE user_id =".$_GET['id'];
if(mysqli_query($conn,$q))
    header('location:users.php');
else
    die("Unable to delete user");
?>