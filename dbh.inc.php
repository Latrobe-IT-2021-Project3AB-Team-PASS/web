<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "thewildvetdb";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
	die("Connerction failed: " . mysqli_connect_error());
}
