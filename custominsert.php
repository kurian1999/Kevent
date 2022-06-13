<!-- 
// include "./include/condb.php";
// session_start();
// $userid = $_SESSION['u_id'];
// extract($_POST); //exactsame variable as in form
// $qury = "SELECT `name` FROM `tbl_registration` WHERE `rid`='$venId'";
// $vendorname = mysqli_query($conn, $qury);
// echo $myDate = date('m/d/Y');
// echo $userid;
// echo $venId;
// echo $vendorname;
// echo $typeevent;
// echo $time;
// echo $gender;
// echo $perhead;
// echo $stage;
// echo $evloc;
// echo $edate;
// echo $myDate;
// echo $totalamount;
// if (isset($_POST['cusbtn'])) {
//     //While using extract, no need to define variable use $nameAttribute from the form
//     $ins = "INSERT INTO `tbl_custom`(`userid`, `vendorid`, `vendor`, `type`, `time`, `catering_type`, `catering_head`, `stage_type`, `location`, `eventdate`, `bookdate`, `total_amount`) VALUES ('$userid','$venId','$vendorname','$typeevent','$time','$gender','$perhead','$stage','$evloc','$edate','$myDate','$totalamount')";

//     $ins_res = mysqli_query($conn, $ins);
//     if ($ins_res) {

//         // header("Location:./home.php");
//     } else {
//         // echo '<script language="javascript" type="text/javascript">';
//         // echo 'alert("Error")';
//         // echo '</script>';
    // }
// } -->
<?php
include "./include/condb.php";
session_start();
$userid = $_SESSION['u_id'];
// $eventprice = $_SESSION['price'];
extract($_POST);
$qury = "SELECT `name` FROM `tbl_registration` WHERE `rid`='$venId'";
$vendorData = mysqli_fetch_assoc(mysqli_query($conn, $qury));
$vendorname = $vendorData['name'];

$myDate = date('m/d/Y');
if (isset($_POST['cusbtn'])) {
    //While using extract, no need to define variable use $nameAttribute from the form
    $ins = "INSERT INTO `tbl_custom`(`userid`, `vendorid`, `vendor`, `type`, `time`, `catering_type`, `catering_head`, `stage_type`, `location`, `eventdate`, `bookdate`, `total_amount`) VALUES ('$userid','$venId','$vendorname','$typeevent','$time','$gender','$perhead','$stage','$evloc','$edate','$myDate','$totalamount')";
    $ins_res = mysqli_query($conn, $ins);
    if ($ins_res) {

        header("Location:./home.php");
    } else {
        echo '<script language="javascript" type="text/javascript">';
        echo 'alert("Error")';
        echo '</script>';
    }
}
