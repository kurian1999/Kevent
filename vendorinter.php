<!-- Landing Page -->
<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
    header("Location: ./index.php");
    die();
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>KEvent</title>
        <link rel="shortcut icon" href="./image/download.png" type="image/x-icon" />
        <link rel="stylesheet" href="./styles/indexstyle.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    </head>

    <body>
        <div class="bg">
            <img src="./image/landingBg.png" alt="Background image" />
        </div>
        <div class="main">
            <div class="header">
                <div class="logo">
                    <a href="./vendorinter.php"><img src="./image/logo.svg" alt="logo" /></a>
                </div>
                <div class="links">
                    <a href="./vendorhome.php" class="link" id="venid">Vendors</a>
                    <a href="./bookview.php" class="link">Package_Booking</a>
                    <a href="./custombookingview.php" class="link">Custom_Booking</a>
                    <a href="" class="link">contact us</a>
                    <a href="./logout.php" class="link">Log out</a>
                    <!-- <a href="./assets/pages/login.php" class="link login-btn">login</a> -->
                </div>
            </div>
            <div class="hero">
                <div class="content">
                    <div class="heading">
                        KEvent <span>Vendor</span> services
                    </div>
                    <div class="description">
                        KEvent is a user-friendly web platform designed to assist various
                        members.
                    </div>
                    <a href="./login.php" class="cta">Get Started</a>
                </div>
                <div class="hero-img">
                    <img src="./image/pexels-secret-garden-2879824.jpg" alt="" />
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script> -->

    </body>

    </html>
<?php


}
?>