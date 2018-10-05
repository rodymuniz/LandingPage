	<?php
$host = "https://databases.000webhost.com";
$userName = "id73263051_admin";
$password = "admin";
$dbName = "id73263051_site";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>