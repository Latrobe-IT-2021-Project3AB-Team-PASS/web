<?php
	include_once 'header.php';
	include_once 'dbh.inc.php';
?>

<title>MY ACCOUNT</title>

	<h1>MY ACCOUNT</h1>
	<h2>Personal Detail</h2>
	<style>
		*{
			box-sizing: border-box;
		}
			.child{
				border: 1px sold black;
				float: left;
				width: 50%;
			}
			.parent{
				display: flex;
			}
	</style>
	<section>
		<section class="child">
			<img src="img/user.png" alt="" width="300" height="300">
					<?php
						if (isset($_SESSION["username"])) {
							$uid = $_SESSION['username'];
						$query = "SELECT * FROM `Account` where Account_username = '$uid'";
						$query_run = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_array($query_run)) {
						
						echo "<h2>User name: " . $row['Account_username']; 
						echo "<h2>Title: " . $row['Account_nameTitle'];
						echo "<h2>Full name: " . $row['Account_fullname'];	
						echo "<h2>Email: " . $row['Account_email'];
						}
						
						}
					?>
					
				</h2>
			 
			 <li><a align="left" href="checkups.php">Check-Ups & Prevention</a></li>
			 <br><li><a align="left" href="petsVaccination.php">Vaccination & Medication</a></li>
		
</section>


<section>
	<h2>My Pets</h2>
		<style>
		th, td {
 		 border-bottom: 1px solid #ddd;
		}
	</style>
	<table style="width:50%">
	
		<tr>	
			<th>Pet ID</th>		
			<th>Pet Name</th>
			<th>Pet Sex</th>
			<th>Pet Type</th>
			<th>Pet DOB</th>
			<th>Pet Desexed</th>
			<th>Pet Notes</th>
		</tr>
					<?php
						if (isset($_SESSION["username"])) {
							$uid = $_SESSION['username'];
						$query = "SELECT * FROM `Pet` where Account_username = '$uid'";
						$query_run = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_array($query_run)) {
						?>
						<tr style="text-align:center">
							<td><?php echo $row['Pet_id']; ?></td>
							<td><?php echo $row['Pet_name']; ?></td>
							<td><?php echo $row['Pet_type'];?></td>
							<td><?php echo $row['Pet_sex'];	?></td>
							<td><?php echo $row['Pet_dob']; ?></td>
							<td><?php echo $row['Pet_desexed']; ?></td>
							<td><?php echo $row['Pet_notes']; ?></td>
						</tr>
						<?php
						}
						
						}
					?>
						
	</table>
</section>
