<?php
$servername = "db";
$username = "testuser";
$password = "testpassword";
$dbname = "shoe_shop_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



