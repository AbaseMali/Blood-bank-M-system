<?php 

    include('../Admin/connection.php');
 ?>
<?php
$q="DELETE FROM `lab` WHERE labid =".$_GET['labidp'];
if(mysqli_query($conn,$q))
    header('location:lab_request.php');
else
    die("Unable to delete user");
?>