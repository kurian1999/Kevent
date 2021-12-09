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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin</title>
        <link rel="stylesheet" href="./styles/admin.css">
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
        <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400" />
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
        <!-- <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>

    </label>  -->
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
                    
                    <th>Email</th>
                    <th>User_Type</th>
                    <th>Name</th>
                    <th>Mob</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT `email`, `User_type_id`, `name`, `Mob_num`, `password` FROM `tbl_registration`";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $row["rid"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["User_type_id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["Mob_num"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><a href='./remove.php?id=<?php echo $row["rid"]; ?>'><button class="buttonn">
                                    <p>Remove</p>
                                </button></a></td>
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

        //Kuri button
        var $button = document.querySelector('.button');
        $button.addEventListener('click', function() {
            var duration = 0.3,
                delay = 0.08;
            TweenMax.to($button, duration, {
                scaleY: 1.6,
                ease: Expo.easeOut
            });
            TweenMax.to($button, duration, {
                scaleX: 1.2,
                scaleY: 1,
                ease: Back.easeOut,
                easeParams: [3],
                delay: delay
            });
            TweenMax.to($button, duration * 1.25, {
                scaleX: 1,
                scaleY: 1,
                ease: Back.easeOut,
                easeParams: [6],
                delay: delay * 3
            });
        });
    </script>

    </html>
<?php } ?>