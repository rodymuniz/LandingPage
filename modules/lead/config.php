	<?php
$host = "localhost";
$userName = "chris";
$password = "123456";
$dbName = "citroen";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>