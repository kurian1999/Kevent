<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
extract($_POST);

if (isset($_POST['msbtn'])) {
    //While using extract, no need to define variable use $nameAttribute from the form
    $ins = "INSERT INTO `tbl_enquiry`(`sid`,`rid`, `message`) VALUES ('$uname','$reid','$mssid')";
    $ins_res = mysqli_query($conn, $ins);
    if ($ins_res) {

        header("Location:./vendorprofile.php?get_id=$getId");
    } else {
        echo '<script language="javascript" type="text/javascript">';
        echo 'alert("Error")';
        echo '</script>';
    }
}
