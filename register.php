
<?php
include "./include/condb.php";
session_start();
extract($_POST);



if (isset($_POST['regbtn'])) {
    //While using extract, no need to define variable use $nameAttribute from the form
    $ins = "INSERT INTO `tbl_registration`( `email`, `User_type_id`,`name`, `password`) VALUES ('$email','$gender','$Na_me','$pass')";
    $ins_res = mysqli_query($conn, $ins);
    if ($ins_res) {
        $_SESSION['login_user'] = "Register Success";
        header("Location:./login.php");
    } else {
        echo '<script language="javascript" type="text/javascript">';
        echo 'alert("Error")';
        echo '</script>';
    }
}

// login
if (isset($_POST['lgbtn'])) {
    // username and password sent from form 

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM `tbl_registration` WHERE `email`='$username' and `password`='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];

    $count = mysqli_num_rows($result);

    $sqla = "SELECT * FROM `tbl_admin` WHERE `username`='$username' and `password`='$pass'";
    // if(mysqli_query($conn, $sqla))
    // {
    //      $_SESSION['sessionID'] =  session_id();
    //     $_SESSION['login_user'] =  $username;
    //     header("location:./admin.php");
    // }
    $result = mysqli_query($conn, $sqla);
    $rowa = mysqli_fetch_array($resulta, MYSQLI_ASSOC);
    //$active = $row['active'];

    $counta = mysqli_num_rows($resulta);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        // session_register("myusername");
        $_SESSION['sessionID'] =  session_id();
        $_SESSION['login_user'] =  $username;

        header("location:./index.php");
    } else if ($counta == 1) {
        $_SESSION['sessionID'] =  session_id();
        $_SESSION['login_user'] =  $username;
        header("location:./admin.php");
    } else {
        echo "<script>alert('invalid'); window.location='./login.php';</script>";
    }
}
if (isset($_POST['lgbtn'])) {
    // username and password sent from form 

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM `tbl_registration` WHERE `email`='$username' and `password`='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];

    $count = mysqli_num_rows($result);

    $sqla = "SELECT * FROM `tbl_admin` WHERE `username`='$username' and `password`='$pass'";
    // if(mysqli_query($conn, $sqla))
    // {
    //      $_SESSION['sessionID'] =  session_id();
    //     $_SESSION['login_user'] =  $username;
    //     header("location:./admin.php");
    // }
    $resulta = mysqli_query($conn, $sqla);
    $rowa = mysqli_fetch_array($resulta, MYSQLI_ASSOC);
    //$active = $row['active'];

    $counta = mysqli_num_rows($resulta);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        // session_register("myusername");
        $_SESSION['sessionID'] =  session_id();
        $_SESSION['login_user'] =  $username;

        header("location:./index.php");
    } else if ($counta == 1) {
        $_SESSION['sessionID'] =  session_id();
        $_SESSION['login_user'] =  $username;
        header("location:./admin.php");
    } else {
        echo "<script>alert('invalid'); window.location='./login.php';</script>";
    }
}

// if (isset($_POST['lgbtn'])) {
//     //While using extract, no need to define variable use $nameAttribute from the form
//     $ins = "INSERT INTO `tbl_booking`(`bookno`, `vendor`, `type`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
//     $ins_res = mysqli_query($conn, $ins);
//     if ($ins_res) {
//         $_SESSION['login_user'] = "Register Success";
//         header("Location:./login.php");
//     } else {
//         echo '<script language="javascript" type="text/javascript">';
//         echo 'alert("Error")';
//         echo '</script>';
//     }
// }
?>
 