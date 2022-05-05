<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "keventdb";

// Sanitization
$dbServerNameClean = filter_var($dbServerName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$dbUserNameClean = filter_var($dbUserName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$dbPasswordClean = filter_var($dbPassword, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$dbNameClean = filter_var($dbName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);


$conn = mysqli_connect($dbServerNameClean, $dbUserNameClean, $dbPasswordClean, $dbNameClean);
// Create connection
// $conn = new mysqli("localhost", "root","","keventdb");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>