<?php 

    include('connection.php');
 ?>
<?php
$q="DELETE FROM `lab` WHERE labid =".$_GET['labidp'];
if(mysqli_query($conn,$q))
    header('location:labResult.php');
else
    die("Unable to delete user");
?>