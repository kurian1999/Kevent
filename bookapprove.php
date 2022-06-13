<?php
include "./include/condb.php";
session_start();
extract($_POST);

$id = $_GET['id'];
$insert = "INSERT INTO `tbl_approve` SELECT * FROM `tbl_booking` WHERE `id`='$id'";
$updateQuery = "UPDATE `tbl_booking` SET `status`='0' WHERE `id`='$id'";
$QueryRes = mysqli_query($conn, $insert);
$QueryRes = mysqli_query($conn, $updateQuery);
header("Location:./bookview.php");
