<?php

if (isset($_POST["submit"])) {
	
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputLogin($username, $pwd) !== false) {
		header("location: login.php?error=emptyinput");
		exit();
	}
	
	if(loginUser($conn, $username, $pwd) !== true){
		session_start();
		$_SESSION["username"] = $username;
        header("location: myAccount.php");
	}
	
}
else{
	header("location: logIn.php");
	exit();
}
