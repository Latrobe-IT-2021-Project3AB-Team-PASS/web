<?php

if (isset($_POST["submit"])){
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];
	$title = $_POST['title'];
	$address = $_POST['address'];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';


	if (emptyInputSignup($username, $pwd, $title, $name, $email, $address) !== false) {
		header("location: signUp.php?error=emptyinput");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location: signUp.php?error=invalidUid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: signUp.php?error=invalidEmail");
		exit();
	}
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: signUp.php?error=passwordsdontmatch");
		exit();
	}
	if (uidExists($conn, $username, $email) !== false) {
		header("location: signUp.php?error=usernametaken");
		exit();
	}

	createUser($conn, $username, $pwd, $title, $name, $email, $address);
}

else{
	header("location: signUp.php");
	exit();
}