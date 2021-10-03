<?php

$serverName = "aws-thewildvet.ctgmk9otetzz.ap-southeast-2.rds.amazonaws.com";
$dBUsername = "root";
$dBPassword = "rootroot";
$dBName = "thewildvetdb";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
	die("Connerction failed: " . mysqli_connect_error());
}
