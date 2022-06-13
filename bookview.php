<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
    header("Location: ./index.php");
    die();
} else {
    $vendor_id = $_SESSION['v_id'];
    $sql = "SELECT * FROM `tbl_booking` WHERE `vendor_id`='$vendor_id' and `status`='1' ";
    $res = mysqli_query($conn, $sql);
    $sqlap = "SELECT * FROM `tbl_approve` WHERE `vendor_id`='$vendor_id' and `status`='1'";
    $ress = mysqli_query($conn, $sqlap);

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css" />

    </head>

    <body>
        <style>
            div.dataTables_wrapper {
                width: 500px;
                margin-top: 120px;
            }
        </style>
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
                    <a href="./bookview.php" class="link">Package_Booking</a>
                    <a href="./custombookingview.php" class="link">Custom_Booking</a>

                    <a href="./logout.php" class="link">Log out</a>
                    <!-- <a href="./assets/pages/login.php" class="link login-btn">login</a> -->
                </div>
            </div>
            <div class="hb1">
                Pending Approval
            </div>
            <div class="tablevendor">
                <table id="tablebook" border="1" class="table table-striped table-bordered">
                    <tr>
                        <!-- <th>Package_id</th>
                        <th>User_id</th> -->
                        <th>Date Applied</th>
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

                        echo "<td><a href='./bookapprove.php?id=" . $row['id'] . "'>APPROVE</a></td>";

                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
            <div class="hb1">
                Approved
            </div>
            <div class="approvetable">
                <table border="1" class="table table-striped table-bordered">
                    <tr>
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
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($ress)) {

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