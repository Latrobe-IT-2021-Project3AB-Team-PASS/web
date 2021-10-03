<?php

if (isset($_POST["submit"])){
	
	$pname = $_POST["pname"];
	$ptype = $_POST["ptype"];
	$psex = $_POST["psex"];
	$pdob = $_POST["pdob"];
	$pimg = $_POST["pimg"];
	$pdesexed = $_POST['pdesexed'];
	$pnotes = $_POST['pnotes'];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';


	if (emptyInputPets($pname, $ptype, $psex, $pdob, $pdesexed) !== false) {
		header("location: myAccount.php?error=emptyinput");
		exit();
	}

	createPet($conn, $pname, $ptype, $psex, $pdob, $pdesexed, $pimg, $pnotes);
}

else{
	header("location: myAccount.php");
	exit();
}