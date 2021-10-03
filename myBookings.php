<?php
	include_once 'header.php';
?>

<title>MY BOOKINGS</title>

<body>
	<h1>MY BOOKINGS</h1>
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
			
			<h2>Account Infomation</h2>
			
			<p>//Image
			<br>//User Name</p>
			 
			<li><a align="left" href="myAccount.php">My Account</a></li> 
			<br><li><a align="left" href="myBookings.php">My Bookings</a></li>
		
		</section>
		
		<section class="child">
	
			<h2>Manage Your Bookings</h2>
			
			<p>View, change or cancel your booking and easy rebook
			<br>Time Zone: Australian Eastern Standard Time (GMT+10) 
			</p>
			
			<h2>Recently
				<p>You've got nothing booked at the moment.
					<li><a href="ourServices.php">>Check Out Our Services</a></li>
				</p>
			</h2>
			
			<h2>History
				<p>We’re looking forward to meeting you.
					<li><a href="ourServices.php">>Check Out Our Services</a></li>
				</p>
			</h2>
		
		</section>	
	</section>

</body>