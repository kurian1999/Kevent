<?php


// Create connection
$conn = new mysqli("localhost", "root","","keventdb");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>