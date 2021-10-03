<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) aws-thewildvet.ctgmk9otetzz.ap-southeast-2.rds.amazonaws.com*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'thewildvetdb');

/*$host = 'aws-thewildvet.ctgmk9otetzz.ap-southeast-2.rds.amazonaws.com';
$uesr = 'root';
$pass = 'rootroot';
$dbname = 'TheWildVetDB';*/
 
/* Attempt to connect to MySQL database*/
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/*$conn = new mysqli_connect($host,$user,$pass,$dbname);*/
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
