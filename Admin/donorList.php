<?php
ob_start();
include('connection.php');

?>


<div class="row  mb-2 mr-5 ml-5 mt-2">
    <div class="col-12">
        <table class="table table-bordered">
            <tr>
                <th>Donor ID</th>
                <th>FullName</th>
                <th>Gender</th>
                <th>Job</th>
                <th>Martial Status</th>
                <th>Blood Type</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Unit</th>
                <th>Send To Lab</th>
                <th>Delete</th>
                <th> Update </th>
            </tr>
            <?php 
            
        $res = mysqli_query($conn, "SELECT * FROM donor");
        $i=1;
            while ($row = mysqli_fetch_array($res)) { 
                echo "
                ?>
                <tr>
                    <td>$i</td>
                    <td>{$row ['full_name']}</td>
                    <td> {$row ['gender']}</td>
                    <td> {$row ['job']} </td>
                    <td>{$row ['martial_status']}</td>
                    <td> {$row ['blood_type']} </td>
                    <td> {$row ['email']}</td>
                    <td> {$row ['contact_no']} </td>
                    <td> {$row ['unit']}</td>
                    <!-- send to lab -->
                    <td><a  name=\"send\" href='donor.php?did={$row['donor_id']}' class=\"btn btn-success btn-xs\" onclick='return confirm(\"Are you You sure to send a lab\")'><i class=\"material-icons\">
                                send
                            </i></a></td>

                    <!-- delete -->
                    <td><a class=\"btn btn-danger btn-xs\" name=\"delete\" href='donordelete.php?did= {$row['donor_id']}>' onclick='return confirm(\"Are you You sure to delete\")'><i class=\"material-icons\">
                                delete
                            </i></a></td>

                    <!-- update -->
                    <td> <a class=\"btn btn-warning btn-xs\" data-toggle=\"modal\" data-target=\"#donorUpdate\" 

                    name=\"update\" href='donorUpdate.php?did= {$row['donor_id']}'>

                    <i class=\"material-icons\">
                                brush
                            </i></a>
                    </td>
                </tr>


            <?php ";
            $i++;
            } ?>
            <?php
         include('donorUpdate.php');
            ?>
        </table>
        <?php
        if (isset($_GET['did'])) {

            $did = $_GET['did'];

            $sql = mysqli_query($conn, "SELECT * FROM `donor` WHERE donor_id='$did'");

            $row1 = mysqli_fetch_assoc($sql);

            $donor_id = $row1['donor_id'];
            $full_name = $row1['full_name'];
            $gender = $row1['gender'];
            $blood_type = $row1['blood_type'];
            $unit = $row1['unit'];

            $query = mysqli_query($conn, "INSERT INTO `lab`(`labid`, `donor_id`, `fullname`, `gender`, `blood_type`, `unit`, `status`) VALUES(null,'$donor_id','$full_name','$gender','$blood_type','$unit','Sended')");

            if ($query) {
                header("location:donor.php");
            }
        }



        ?>
    </div>
</div>