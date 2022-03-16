
<?php
include "./include/condb.php";
session_start();
extract($_POST);



if (isset($_POST['lvbtn'])) {
    //While using extract, no need to define variable use $nameAttribute from the form
    $ins = "INSERT INTO `tbl_event`( `event_name`, `event_type`, `description`, `capacity`, `Price`, `duration`, `date`) VALUES ('$ename','$etype','$edes','$ecap','$eprice','$edura','$edate')";
    $ins_res = mysqli_query($conn, $ins);
    if ($ins_res) {
        header("Location:./vendorprofile.php");
    } else {
        echo '<script language="javascript" type="text/javascript">';
        echo 'alert("Error")';
        header("Location:./vendorprofile.php");
        echo '</script>';
    }
}




?>
