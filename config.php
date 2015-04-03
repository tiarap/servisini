<?php
// This is an example of config.php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'servicemotor';
// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} else {
//	echo "Connected successfully";
//}
?>
