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
    $sqll = "SELECT * FROM `tbl_custom` WHERE `userid`='$user_id'";
    $ress = mysqli_query($conn, $sqll);

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
        <!-- <link rel="stylesheet" href="./styles/admin.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css" />

    </head>


    <body>
        <style>
            div.dataTables_wrapper {
                width: 800px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style>
        <div class="bg">
            <img src="./image/landingBg.png" alt="Background image" />
        </div>
        <div class="main">
            <div class="header">
                <div class="logo">
                    <a href="./index.php"><img src="./image/logo.svg" alt="logo" /></a>
                </div>
                <div class="links">
                    <!-- <a href="./vendorhome.php" class="link">Vendors</a> -->
                    <a href="./custom.php" class="link">Custom</a>
                    <a href="./userbookstatus.php" class="link">Status</a>
                    <a href="./report.php" class="link">Report</a>
                    <a href="" class="link">Profile</a>
                    <a href="" class="link">contact us</a>
                    <a href="./logout.php" class="link">Log out</a>
                    <!-- <a href="./assets/pages/login.php" class="link login-btn">login</a> -->
                </div>
            </div>
            <div class="tablevendor">
                <table border="1" id="tablebook" class="table table-striped table-bordered">
                    <tr>
                        <!-- <th>Package_id</th>
                        <th>User_id</th> -->
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

                        // echo "<td>" . $row['pid'] . "</td>";

                        // echo "<td>" . $row['userid'] . "</td>";

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

                        echo "<td><a href='./bookCancel.php?id=" . $row['id'] . "'>Cancel</a></td>";

                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
            <div class="customheading">
                <h2>Custom Request</h2>
            </div>
            <div class="tablecustom">
                <table border="1" id="tablebook" class="table table-striped table-bordered">
                    <tr>
                        <!-- <th>Package_id</th>
                        <th>User_id</th> -->
                        <th>vendor-Name</th>
                        <th>Event_type</th>
                        <th>Time_of_Event</th>
                        <th>Food_Type</th>
                        <th>Per-head-cost(Food)</th>
                        <th>Stage_type</th>
                        <th>Event_location </th>
                        <th>Event_Date </th>
                        <th>User-Booked-Date </th>
                        <th>Total_amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($roww = mysqli_fetch_array($ress)) {

                        echo "<tr>";

                        // echo "<td>" . $row['pid'] . "</td>";

                        // echo "<td>" . $row['userid'] . "</td>";

                        echo "<td>" . $roww['vendor'] . "</td>";

                        echo "<td>" . $roww['type'] . "</td>";

                        echo "<td>" . $roww['time'] . "</td>";

                        echo "<td>" . $roww['catering_type'] . "</td>";

                        echo "<td>" . $roww['catering_head'] . "</td>";

                        echo "<td>" . $roww['stage_type'] . "</td>";

                        echo "<td>" . $roww['location'] . "</td>";

                        echo "<td>" . $roww['eventdate'] . "</td>";

                        echo "<td>" . $roww['bookdate'] . "</td>";

                        echo "<td>" . $roww['total_amount'] . "</td>";

                        echo "<td>" . $roww['status'] . "</td>";

                        echo "<td><a href='./paymentcustom.php?id=" . $roww['total_amount'] . "'>BOOK</a></td>";

                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script>
            $(document).ready(function() {
                $('#tablebook').DataTable();
            });
        </script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>
    </body>

    </html>

<?php
}
?>