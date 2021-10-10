<?php
	include_once 'header.php';
	include_once 'dbh.inc.php';
?>

<title>CHECK-UPS & PARASITE PREVENTION</title>
<h1>CHECK-UPS &
<br>PREVENTION</h1> 
	
<body>

	

		<style>
		th, td {
 		 border-bottom: 1px solid #ddd;
		}
	</style>

<section style="text-align:center">
	<h2>Check-ups Table</h2>
	
	<table style="width:50%" align="center">
	
		<tr>	
			<th>Pet ID</th>		
			<th>Vet Username</th>
			<th>Vet Fullname</th>
			<th>Check-ups</th>
			<th>Check-ups Notes</th>

		</tr>
					<?php
						if (isset($_SESSION["username"])) {
							$uid = $_SESSION['username'];
						$query = "SELECT * FROM `Checkups` where Account_username = '$uid'";
						$query_run = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_array($query_run)) {
						?>
						<tr style="text-align:center">
							<td><?php echo $row['Pet_id']; ?></td>
							<td><?php echo $row['Vet_username']; ?></td>
							<td><?php echo $row['Vet_fullname']; ?></td>
							<td><?php echo $row['Checkups_type']; ?></td>
							<td><?php echo $row['Checkups_notes']; ?></td>
						</tr>
						<?php
						}
						
						}
					?>
						
	</table>
</section></br>
	<section style="text-align:center">
		<h2>Parasite Prevention Table</h2>
	
	<table style="width:50%" align="center">
	
		<tr>	
			<th>Pet ID</th>		
			<th>Date</th>
			<th>Prevention Product</th>
			<th>Fuequency</th>
		</tr>
					<?php
						if (isset($_SESSION["username"])) {
							$uid = $_SESSION['username'];
						$query = "SELECT * FROM `ParasitePrevention` where Account_username = '$uid'";
						$query_run = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_array($query_run)) {
						?>
						<tr style="text-align:center">
							<td><?php echo $row['Pet_id']; ?></td>
							<td><?php echo $row['PP_date']; ?></td>
							<td><?php echo $row['PP_product']; ?></td>
							<td><?php echo $row['PP_fuequency']; ?></td>
						</tr>
						<?php
						}
						
						}
					?>
						
	</table>
</body>
