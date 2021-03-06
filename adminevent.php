<?php
include "./include/condb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="./styles/admin.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <style>
        div.dataTables_wrapper {
            width: 800px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>

    </label>
    <div class="sidebar">
        <header>Kevent
        </header>
        <ul>
            <li><a href="admin.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>

            <li><a href="./admin.php" style="transition: 1.6s;"><i class="fas fa-stream"></i>Users</a></li>
            <li><a href="./admindetails.php" style="transition: 1.6s;"><i class="fas fa-calendar-week"></i>Vendor Details</a></li>
            <li><a href="./adminevent.php" style="transition: 1.6s;"><i class="fas fa-stream"></i>Events </a></li>
            <li><a href="./logout.php"><i class="fas fa-question-circle"></i>Logout</a></li>
        </ul>
    </div>
    <!-- <div>
        <h5 class="hline">REGISTER CUSTOMERS</h5>
    </div> -->
    <table id="customers1" class="display">
        <thead>
            <tr>
                <!-- <th>Rid</th> -->
                <th>Event_name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Capacity</th>
                <th>Price</th>


            </tr>
        </thead>
        <?php
        $sql = "SELECT `rid`, `event_name`, `event_type`, `description`, `capacity`, `Price`, `duration`, `date` FROM `tbl_event` ";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <!-- <td><?php echo $row["rid"]; ?></td> -->
                    <td><?php echo $row["event_name"]; ?></td>
                    <td><?php echo $row["event_type"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo $row["capacity"]; ?></td>
                    <td><?php echo $row["Price"]; ?></td>

                </tr>
        <?php
            }
            // echo "</table>";
        } else {
            echo "0 Result";
        }
        $conn->close();
        ?>
    </table>

</body>
<script>
    $(document).ready(function() {
        $('#customers1').DataTable({

        });
    });
</script>

</html>