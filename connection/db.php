<?php
$servername = "mysql:dbname=schoolcom";
$username = "root";
$password = "root";

 //Create connection
$conn = new PDO($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";