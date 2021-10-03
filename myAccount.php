<?php
	include_once 'header.php';
	include_once 'dbh.inc.php';
?>

<title>MY ACCOUNT</title>

	<h1>MY ACCOUNT</h1>
	<p>Update & Edit the information you share with the community</p>
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
			
				
				<h2>USER ID：
					<?php
						echo $_SESSION['username'];
					?>
				</h2>
			 
			 <li><a align="left" href="myAccount.php">My Account</a></li>
			 <br><li><a align="left" href="myPets.php">My Pets</a></li>
		
</section>

<h2>Add Pets</h2>
<section>
	<div class="addPets-form-form">
		
		<form action="addPets.inc.php" method="post">
			
			<input type="text" name="pname" placeholder="Pet name">
			<input type="text" name="ptype" placeholder="Pet breeds">
			<br><input type="text" name="psex" placeholder="Pet sex">
			<input type="text" name="pdesexed" placeholder="Pet desexed Yes/No"></br><textarea type="text" name="pnotes" placeholder="Pet notes"></textarea>
			<h2>Pet BOD:
  			<input type="date" name="pdob" rows="4" cols="50" placeholder="Pet DOB">
			<input type="file" name="pimg">
			<button type="submit" name="submit">ADD PETS</button>
			</h2>
		</form>
	</div>
</section>

