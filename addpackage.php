<?php
include "./include/condb.php";
session_start();
extract($_POST);

if (isset($_POST['add-hm'])) {
    //While using extract, no need to define variable use $nameAttribute from the form
    $ins = "INSERT INTO `tbl_product_view`(`event_package`, `category`, `price`, `capacity`, `about`, `event_photo_1`, `event_photo_2`, `event_photo_3`, `event_photo_4`, `event_photo_5`) VALUES ('$hfname','$hemail','$hphno','$hcapa','$habout','$hphoto_1','$hphoto_2','$hphoto_3','$hphoto_4','$hphoto_5')";

    $ins_res = mysqli_query($conn, $ins);
    if ($ins_res) {
        header("Location:./package.php");
    } else {
        echo '<script language="javascript" type="text/javascript">';
        echo 'alert("Error")';
        header("Location:./vendorprofile.php");
        echo '</script>';
    }
}
