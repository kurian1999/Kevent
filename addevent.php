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
    <link rel="stylesheet" href="./styles/addevent.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="containe">
        <form action="eventdb.php" class="login-form" method="post" name="myform" id="reg-form">
            <div class="flex-input evname">
                <label for="">Event_name</label>
                <input type="text" name="ename" id="ename-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-input evtype">
                <label for="">Event Type</label>
                <input type="text" name="etype" id="etype-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-input evdes">
                <label for="">Description</label>
                <input type="text" name="edes" id="edes-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-input evcap">
                <label for="">Capacity</label>
                <input type="number" name="ecap" id="ecap-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-input evprice">
                <label for="">Price</label>
                <input type="number" name="eprice" id="eprice-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-input evdura">
                <label for="">Duration</label>
                <input type="number" name="edura" id="edura-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-input evdate">
                <label for="">Event Date</label>
                <input type="date" name="edate" id="edate-id" autocomplete="off">
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-input button cursor-disable">
                <input type="submit" class="prbtn disabled" value="ADD" name="lvbtn" id="reg-btn">
            </div>


        </form>
    </div>
    <script src="./js/adevent.js"></script>
</body>

</html>
<?php } ?>