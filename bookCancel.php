<?php
    include "./include/condb.php";
    session_start();
    extract($_POST);

    $id=$_GET['id'];
    $updateQuery="UPDATE `tbl_booking` SET `status`='0' WHERE `id`='$id'";
    $updateQueryRes=mysqli_query($conn,$updateQuery);
    header("Location:./userbookstatus.php");

?>