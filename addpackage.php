<?php
include "./include/condb.php";
session_start();
extract($_POST);

$img_name1 = $_FILES['hphoto_1']['name'];
$img_name2 = $_FILES['hphoto_2']['name'];
$img_name3 = $_FILES['hphoto_3']['name'];
$img_name4 = $_FILES['hphoto_4']['name'];
$img_name5 = $_FILES['hphoto_5']['name'];
move_uploaded_file($_FILES['hphoto_1']['tmp_name'], 'uploadimage/' . $_FILES['hphoto_1']['name']);
move_uploaded_file($_FILES['hphoto_2']['tmp_name'], 'uploadimage/' . $_FILES['hphoto_2']['name']);
move_uploaded_file($_FILES['hphoto_3']['tmp_name'], 'uploadimage/' . $_FILES['hphoto_3']['name']);
move_uploaded_file($_FILES['hphoto_4']['tmp_name'], 'uploadimage/' . $_FILES['hphoto_4']['name']);
move_uploaded_file($_FILES['hphoto_5']['tmp_name'], 'uploadimage/' . $_FILES['hphoto_5']['name']);
if (isset($_POST['add-hm'])) {
    //While using extract, no need to define variable use $nameAttribute from the form
    $ins = "INSERT INTO `tbl_product_view`(`event_package`, `category`, `price`, `capacity`, `about`, `event_photo_1`, `event_photo_2`, `event_photo_3`, `event_photo_4`, `event_photo_5`) VALUES ('$hfname','$hemail','$hphno','$hcapa','$habout','$img_name1','$img_name2','$img_name3','$img_name4','$img_name5')";

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
