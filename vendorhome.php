<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
    header("Location: ./index.php");
    die();
} else {
    $query = "SELECT * FROM `tbl_vendor_details`";
    $res = mysqli_query($conn, $query);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KEvent</title>
        <link rel="shortcut icon" href="./image/download.png" type="image/x-icon" />
        <link rel="stylesheet" href="./styles/vendorstylehome.css" />
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

                    <a href="./package.php" class="link">Add Package</a>
                    <a href="./logout.php" class="link">Logout</a>
                </div>
            </div>
            <div class="hero">
                <div class="content">
                    <div class="heading">
                        Vendor <span>KEvent</span> Services
                    </div>
                    <div class="description">
                        KEvent is a user-friendly web platform designed to assist various
                        members.
                    </div>
                    <!-- <a href="./login.php" class="cta">Get Started</a> -->
                </div>
                <div class="hero-img">
                    <img src="./image/pexels-secret-garden-2879824.jpg" alt="" />
                </div>
            </div>
            <div class="cat-title">Vendors</div>
            <div class="cards">
                <!-- card -->
                <?php
                while ($row = mysqli_fetch_array($res)) {
                    echo '
                    <form action="#">
                    <div class="card">
                    <div class="card-img">
                        <a href="./vendorprofile.php?get_id=' . $row['vendor_id'] . '"><img src="./image/tradition.jpg" alt="" /></a>
                    </div>
                    <div class="content">
                        <div class="sec1">
                            <div class="title">' . $row['company_name'] . '</div>
                            <div class="tag">' . $row['type'] . '</div>
                        </div>
                        <div class="hr"></div>
                        <div class="sec2">
                            <div class="detail">
                                <div class="a">Detail:</div>
                                <div class="b">Group of event </div>
                            </div>
                            <div class="detail">
                                <div class="a"></div>
                                <div class="b"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                    ';
                }
                ?>
            </div>
        </div>
    </body>

    </html>
<?php


}
?>