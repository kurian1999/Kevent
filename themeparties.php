<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
    header("Location: ./index.php");
    die();
} else {
    $query = "SELECT * FROM `tbl_product_view` WHERE `category`='Themed parties'";
    $res = mysqli_query($conn, $query);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kevent</title>
        <link rel="shortcut icon" href="./image/download.png" type="image/x-icon" />
        <link rel="stylesheet" href="./styles/vendorstylehome.css">
    </head>

    <body>
        <div class="bg">
            <img src="./image/landingBg.png" alt="Background image" />
        </div>
        <div class="main">
            <div class="header">
                <div class="logo">
                    <a href="./index.php"><img src="./image/logo.svg" alt="logo" /></a>
                </div>
                <div class="links">
                    <a href="./home.php" class="link">Home</a>

                    <a href="" class="link">About</a>
                    <a href="" class="link">contact us</a>
                    <a href="./logout.php" class="link">Log Out</a>
                    <!-- <a href="./assets/pages/login.php" class="link login-btn">login</a> -->
                </div>
            </div>
            <div class="pagethem-title">Themed parties</div>

            <div class="cards">
                <!-- card -->
                <?php
                while ($row = mysqli_fetch_array($res)) {
                    echo '
                    <form action="#">
                    <div class="card">
                    <div class="card-img">
                      <a href="./eventproduct.php?get_id=' . $row['rid'] . '"><img src="./uploadimage/' . $row['event_photo_1'] . '" alt="" /></a>
                    </div>
                    <div class="content">
                        <div class="sec1">
                            <div class="title">' . $row['event_package'] . '</div>
                            <div class="tag">' . $row['category'] . '</div>
                        </div>
                        <div class="hr"></div>
                        <div class="sec2">
                            <div class="detail">
                                <div class="a">Rate:</div>
                                <div class="b">' . $row['price'] . '</div>
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
    </body>

    </html>
<?php


}
?>