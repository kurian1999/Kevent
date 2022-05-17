<?php
include "./include/condb.php";
// session_start();
// $uname = $_SESSION['login_user'];
// if (isset($_SESSION["sessionID"]) != session_id()) {
//     header("Location: ./index.php");
//     die();
// } else {
$sql = mysqli_query($conn, "SELECT  `company_name`FROM `tbl_vendor_details`");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="./styles/user.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400" />
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

</head>

<body>
    <!-- <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>

    </label>  -->
    <div class="sidebar">
        <header>Kevent
        </header>
        <ul>
            <li><a href=""><i class="fas fa-qrcode"></i>Dashboard</a></li>

            <li><a href="" style="transition: 1.6s;"><i class="fas fa-stream"></i>Vendor</a></li>
            <li><a href="" style="transition: 1.6s;"><i class="fas fa-calendar-week"></i>Book Calender</a></li>
            <li><a href="./booking.php" style="transition: 1.6s;"><i class="fas fa-stream"></i>Booking </a></li>
            <li><a href="./logout.php"><i class="fas fa-question-circle"></i>Logout</a></li>

        </ul>
    </div>
    <div class="containe">
        <form action="register.php" class="login-form" name="myform" method="post" id="my_form">
            <div class="logo">
                <img src="./image/Group 2.png" alt="" srcset="">
            </div>
            <p class="qote">"Some people look for a beautiful place. Others make a place beautiful.”</p>
            <h6 class="spok">~Hazrat Inavat Khan</h6>
            <div class="flex-input ">
                <label for="">Vendor:</label>
                <select id="vendor" class="mydropdown">
                    <?php
                    while ($data = mysqli_fetch_array($sql)) {
                        echo "<option value='" . $data['company_name'] . "'>" . $data['company_name'] . "</option>";  // displaying data in option menu
                    }
                    ?>

                </select>
                <div class="error error-hidden">
                </div>
            </div>
            <div class="flex-input">
                <label for="">Type:</label>
                <select id="vendor" class="mydropdown">
                    <option value="vend1">Marriage</option>
                    <option value="vend2">Enagement</option>
                    <option value="vend3">Brithday </option>
                    <option value="vend4">Other</option>
                </select>
            </div>
            <div class="form-checkbox-group">
                <div class="checklabel">
                    <input type="checkbox" name="checkdrictict" id="iddict" />
                    <label for="checkbox" name="checkdrictict">STAGE</label>
                </div>
                <div class="checklabel">
                    <input type="checkbox" name="checkdrictict" id="iddict" />
                    <label for="checkbox" name="checkdrictict">ARRAGEMENT</label>
                </div>
                <div class="checklabel">
                    <input type="checkbox" name="checkdrictict" id="iddict" />
                    <label for="checkbox" name="checkdrictict">CATERNG</label>
                </div>

            </div>
            <br><br>
            <div class="flex-input evdate">
                <label for="">Event Date</label>
                <input type="date" name="edate" id="edate-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
                <div class="flex-container">

                    <!-- <div>
                    <a href="#">Forget Password?</a>
                </div> -->
                </div>
                <div class="flex-input">
                    <input type="submit" class="prbtn" value="Request" name="lgbtn">

                </div>

                <!-- <?php
                        // if (isset($_SESSION['login_user'])) {
                        //     echo "<div class='d-flex justify-content-end' style='width:66vw;'><div style='z-index:2;' class='alert bg-danger text-light alert-dismissible position-fixed mt-3 fade show col-3' role='alert'>
                        //                         <center><strong>" . $_SESSION['login_user'] . "</strong></center>
                        //                         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        //                             <span aria-hidden='true'>&times;</span>
                        //                         </button>
                        //                     </div></div>";
                        //     unset($_SESSION['login_user']);
                        // }

                        ?> -->
                <script src="./js/login.js">

                </script>

        </form>
    </div>
    <!-- <?php

            ?> -->