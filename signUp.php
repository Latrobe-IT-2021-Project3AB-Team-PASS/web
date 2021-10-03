<?php
	include_once 'header.php';
?>
<title>SIGN UP</title>
<link rel="stylesheet" href="CSS/formstyle.css">
<h1>SIGN UP</h1>

<section class="signup-form">

<h2 style="text-align:center;">Sign up with us now!</h2>

	<div class="signup-form-form">
		
		<form action="signup.inc.php" method="post" style="text-align:center;">
			<input type="text" name="title" placeholder="Title">
			<br><input type="text" name="name" placeholder="Full name">
			<br><input type="text" name="address" placeholder="Address">
			<br><input type="text" name="email" placeholder="Email...">
			<br><input type="text" name="uid" placeholder="Username">
			<br><input type="password" name="pwd" placeholder="Password">
			<br><input type="password" name="pwdrepeat" placeholder="Confirm password">
			<br><button type="submit" name="submit" >Sign Up</button>
		</form>
		
	</div>
	
	<section style="text-align:center;">
	<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
			echo "<p>!!PLEASE FILL IN ALL FIELDS!!</p>";

		}
		else if ($_GET["error"] == "invaliduid") {
			echo "<p>!!PLEASE CHOOSE ANOTHER USERNAME!!</p>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<p>!!PLEASE CHOOSE ANOTHER E-MAIL!!</p>";
		}	
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<p>!!PASSWORD NOT SAME, PLEASE ENTER THE SAME PASSWORD!!</p>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<p>!!ERROR, PLEASE TRY AGAIN!!</p>";
		}
		else if ($_GET["error"] == "usernametaken") {
			echo "<p>!!USENAME TAKEN!!</p>";
		}
		else if ($_GET["error"] == "none") {
			echo "<p>!!YOU HAVE SIGNED UP!!</p>";
			header("location:logIn.php");
		}
	}

	?>
	</section>

</section>
	




