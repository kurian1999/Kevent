<?php
include "./include/condb.php";
session_start();
extract($_POST);

$id = $_GET['id'];
$insert = "INSERT INTO `tbl_approve_custom` SELECT * FROM `tbl_custom` WHERE `id`='$id'";
$updateQuery = "UPDATE `tbl_custom` SET `status`='Approve' WHERE `id`='$id'";
$QueryRes = mysqli_query($conn, $insert);
$QueryRes = mysqli_query($conn, $updateQuery);
header("Location:./custombookingview.php");
