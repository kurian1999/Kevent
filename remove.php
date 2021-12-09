<?php
    include "./include/condb.php";
    $id=$_GET['id'];
    $remo="DELETE FROM `tbl_registration` WHERE `rid`='$id'";
    $result=mysqli_query($conn,$remo);
    header("location: ./admin.php");

?>