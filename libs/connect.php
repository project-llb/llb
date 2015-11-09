<?php
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "llb";

// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>