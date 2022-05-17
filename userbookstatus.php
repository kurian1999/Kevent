<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
    header("Location: ./index.php");
    die();
} else {
    $user_id = $_SESSION['u_id'];
    $sql = "SELECT * FROM `tbl_booking` WHERE `userid`='$user_id'and `status`='1'";
    $res = mysqli_query($conn, $sql);

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
                    <a href="./vendorhome.php" class="link">Vendors</a>
                    <a href="./bookview.php" class="link">Booking</a>
                    <a href="" class="link">contact us</a>
                    <a href="./logout.php" class="link">Log out</a>
                    <!-- <a href="./assets/pages/login.php" class="link login-btn">login</a> -->
                </div>
            </div>
            <div class="tablevendor">
                <table border="1">
                    <tr>
                        <th>Package_id</th>
                        <th>User_id</th>
                        <th>Today_Date</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Event_Name</th>
                        <th>Event_Date </th>
                        <th>Event_Type </th>
                        <th>Event_location </th>
                        <th>Start_Time </th>
                        <th>End_Time </th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($res)) {

                        echo "<tr>";

                        echo "<td>" . $row['pid'] . "</td>";

                        echo "<td>" . $row['userid'] . "</td>";

                        echo "<td>" . $row['todaydate'] . "</td>";

                        echo "<td>" . $row['address'] . "</td>";

                        echo "<td>" . $row['city'] . "</td>";

                        echo "<td>" . $row['state'] . "</td>";

                        echo "<td>" . $row['pincode'] . "</td>";

                        echo "<td>" . $row['eventname'] . "</td>";

                        echo "<td>" . $row['eventdate'] . "</td>";

                        echo "<td>" . $row['eventtype'] . "</td>";

                        echo "<td>" . $row['eventlocation'] . "</td>";

                        echo "<td>" . $row['starttime'] . "</td>";

                        echo "<td>" . $row['endtime'] . "</td>";

                        echo "<td><a href='./bookCancel.php?id=". $row['id'] ."'>Cancel</a></td>";

                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>

    </html>

<?php
}
?>