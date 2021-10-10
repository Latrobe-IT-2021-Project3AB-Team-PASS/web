<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="CSS/style1.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
	</head>
	
	<header>
		<nav>
			<a href="home.php"><label class="logo">THE WILD VET</label></a>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="ourServices.php">OUR SERVICES</a></li>
				<li><a href="aboutOurClinic.php">ABOUT OUR CLINIC</a></li>
				<li><a href="contactUs.php">CONTACT US</a></li>
				<li><a href="bookNow.php">BOOK NOW</a></li>
				<?php
					if (isset($_SESSION["username"])) {
						echo "<li><a href='myAccount.php'>MY ACCOUNT</a></li>";
						echo "<li><a href='logout.inc.php'>LOG OUT</a></li>";
					}
					else{
						echo "<li><a href='signUp.php'>JOIN US</a></li>";
						echo "<li><a href='logIn.php'>LOG IN</a></li>";
					}
				?> 
			</ul>
		</nav>
	</header>
