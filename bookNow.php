<?php
	include_once 'header.php';
?>
	<title>BOOK NOW</title>
	
	<body>
		<h1>BOOK NOW</h1>
	<style>
		th, td {
 		 border-bottom: 1px solid #ddd;
		}
	</style>
	
		<table align="center">

			<tr>
				<td><h2>HEALTH CHECK</h2></td>
				<td><p style="text-align:right;">30 min<br>Pricing FROM:$75</p></td>
			</tr>
			<tr>
				<td><h2>VACCINATIONS</h2></td>
				<td><p style="text-align:right;">20 min<br>Pricing FROM:$85</p></td>
			</tr>
			<tr>
				<td><h2>SURGERY</h2></td>
				<td><p style="text-align:right;">1 hr 30 min<br>Pricing FROM:$200</p></td>
			</tr>
			<tr>
				<td><h2>MICROCHIPPING</h2></td>
				<td><p style="text-align:right;">50 min<br>Pricing FROM:$150</p></td>
			</tr>
			<tr>
				<td><h2>HOSPITALIZATION</h2></td>
				<td><p style="text-align:right;">60 min<br>Pricing FROM:$50</p></td>
			</tr>
			<tr>
				<td><h2>PARASITE PREVENTION</h2></td>
				<td><p style="text-align:right;">60 min<br>Pricing FROM:$30</p></td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_SESSION["username"])) {
						echo "<p></p>";
					}
					else{
						echo "<p>*Before you make an appointment you must sign up/log in!</p>";
					}
					?>
				</td>
				<td style="text-align:right;">
					<?php
						if (isset($_SESSION["username"])) {
							echo "<p></p>";
						}
						else{
							echo "<li><a href='signUp.php'>SIGN UP</a></li>"; 
							echo "<li><a href='logIn.php'>LOG IN</a></li>";
						}
					?>
					<?php
						if (isset($_SESSION["username"])) {
							echo "<li><a href='myAccount.php'>BOOK NOW</a></li>";
						}
						else{
							echo "<li><a href='logIn.php'>BOOK NOW</a></li>";
						}
					?>
				</td>
			</tr>
		</table>
	</body>