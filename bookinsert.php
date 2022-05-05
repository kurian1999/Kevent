<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
extract($_POST);

if (isset($_POST['bookbtn'])) {
    //While using extract, no need to define variable use $nameAttribute from the form
    $ins = "INSERT INTO `tbl_booking`(`todaydate`, `address`, `city`, `state`, `pincode`, `eventname`, `eventdate`, `eventtype`, `eventlocation`, `starttime`, `endtime`) VALUES ('$todate','$adname','$ctyname','$statename','$zip','$evname','$evdate','$evtype','$evloc','$stime','$etime')";
    $ins_res = mysqli_query($conn, $ins);
    if ($ins_res) {

        header("Location:./index.php");
    } else {
        echo '<script language="javascript" type="text/javascript">';
        echo 'alert("Error")';
        echo '</script>';
    }
}
