<?php
session_start();
$uname = $_SESSION['login_user'];
$eventprice = $_SESSION['price'];
include "./include/condb.php";
$email = $_SESSION['email'];
echo $query1 = "SELECT rid FROM `tbl_registration` WHERE email= '$uname'";
$res1 = mysqli_query($conn, $query1);
$r = mysqli_fetch_array($res1);
$name = $r['name'];
$id = $r['rid'];
$payment_status = "Completed";
$amt = $eventprice;
$added_on = date('Y-m-d h:i:s');
mysqli_query($conn, "insert into tbl_payments(rid,amount,payment_status,added_on) values('$id','$amt','$payment_status','$added_on')");
