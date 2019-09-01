<?php
ob_start();
include('connection.php');


$donor = mysqli_query($conn, "SELECT * FROM donor")
?>


<div class="row  ">
	<div class="col-12">
		<table class="table table-bordered">
			<tr>
				<th>Donor ID</th>
				<th>FullName</th>
				<th>Gender</th>
				<th>Job</th>
				<th>Marital Status</th>
				<th>Blood Type</th>
				<th>Email</th>
				<th>Contact No</th>
				<th>Unit</th>
				<th>Send To Lab</th>
				<th>Delete</th>
				<th> Update </th>
			</tr>
			<?php while ($row = mysqli_fetch_array($donor)) {  ?>
				<tr>
					<td><?php echo $row['donor_id']; ?></td>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['job']; ?></td>
					<td><?php echo $row['martial_status']; ?></td>
					<td><?php echo $row['blood_type']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact_no']; ?></td>
					<td><?php echo $row['unit']; ?></td>
					<!-- send to lab -->
					<td><a class="btn btn-success " name="send" href="donor.php?did=<?php echo $row['donor_id']; ?>" onclick='return confirm("Are you You sure to send a lab")'><i class="fa fa-send"></i></a></td>

					<!-- delete -->
					<td><a class="btn btn-danger " name="delete" href="donordelete.php?did=<?php echo $row['donor_id']; ?>" onclick='return confirm("Are you You sure to delete")'><i class="fa fa-trash"></i></a></td>

					<!-- update -->
					<td> <a class="btn btn-warning " name="update" href="donorUpdate.php?did=<?php echo $row['donor_id'];?>"> <i class="fa fa-edit"></i></a>
					</td>
				</tr>


			<?php } ?>

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

				// header("location:donor.php");
			}
		}



		?>
	</div>
</div>