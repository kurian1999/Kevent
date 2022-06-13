<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
    header("Location: ./index.php");
    die();
} else {
    $sql = mysqli_query($conn, "SELECT * FROM `tbl_registration` WHERE `User_type_id`='Vendor'");

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
        <div class="containe">
            <form action="custominsert.php" class="login-form" name="myform" method="post" id="my_form">
                <div class="logo">
                    <img src="./image/Group 2.png" alt="" srcset="">
                </div>
                <p class="qote">"Some people look for a beautiful place. Others make a place beautiful.”</p>
                <h6 class="spok">~Hazrat Inavat Khan</h6>
                <div class="flex-input ">
                    <label for="">Vendor:</label>
                    <select id="vendor" name="venId" class="mydropdown">
                        <?php
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<option  value='" . $data['rid'] . "'>" . $data['name'] . "</option>";  // displaying data in option menu
                        }
                        ?>

                    </select>
                    <div class="error error-hidden">
                    </div>
                </div>
                <div class="flex-input">
                    <label for="">Type:</label>
                    <select id="vendor" name="typeevent" class="mydropdown" required>
                        <option value="Marriage">Marriage</option>
                        <option value="Enagement">Enagement</option>
                        <option value="Brithday">Brithday </option>
                        <option value="Themed parties">Themed parties</option>
                        <option value="Baptism">Baptism </option>

                    </select>
                </div>
                <div class="flex-input">
                    <label for="">Capacity</label>
                    <input type="number" id="quantity" name="quantity" min="50" max="1000" required>
                </div>
                <div class="flex-input">
                    <label for="">Time</label>
                    <select id="time" class="mydropdown" name="time">
                        <option value="Morning">Morning</option>
                        <option value="Afternoon">Afternoon</option>
                        <option value="Evening">Evening </option>


                    </select>
                </div>
                <div class="form-checkbox-group">
                    <div> <label for="">Catering(food-Type)</label></div>
                    <div class="flex-radio">
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="nonvegetarian" required><span class="optt">Non-vegetarian</span>
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="vegetarian" required>vegetarian
                        <!-- <span class="error">* <?php echo $genderErr; ?></span> -->
                    </div>
                </div>
                <br><br>
                <div class="form-checkbox-group">
                    <div> <label for="">Catering(per-head)</label></div>
                    <!-- <div class="checklabel">
                        <input type="checkbox" name="checkdrictict" id="check1" value="1500" />
                        <label for="checkbox" name="checkdrictict">1500</label>
                    </div>
                    <div class="checklabel">
                        <input type="checkbox" name="checkdrictict" id="check2" value="2000" />
                        <label for="checkbox" name="checkdrictict">2000</label>
                    </div>
                    <div class="checklabel">
                        <input type="checkbox" name="checkdrictict" id="check3" value="2500" />
                        <label for="checkbox" name="checkdrictict">2500</label>
                    </div> -->
                    <div class="flex-radio">
                        <input type="radio" id="check1" name="perhead" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="1500" required> <span class="optt">1500</span>
                        <input type="radio" id="check2" name="perhead" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="2000" required><span class="optt">2000</span>
                        <input type="radio" id="check3" name="perhead" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="2500" required>2500
                        <!-- <span class="error">* <?php echo $genderErr; ?></span> -->
                    </div>
                    <br><br>
                </div>
                <div class="stagetype" id="stage">
                    <div> <label for="">Stage Type</label></div>
                    <input type="radio" id="r1" name="stage" <?php if (isset($stage) && $stage == "female") echo "checked"; ?> value="25000" required><span class="optt">Open Stage(25000$)</span>
                    <input type="radio" id="r2" name="stage" <?php if (isset($stage) && $stage == "male") echo "checked"; ?> value="50000" required>Close Stage(50000$)
                </div>
                <br><br>
                <div class="flex-input">
                    <label for="pin"> Location</label>
                    <input type="text" name="evloc" id="vatcerfid" class="form-min-control" placeholder="" autocomplete="off" required />
                    <div class="error error-hidden"></div>
                </div>

                <div class="flex-input evdate">
                    <label for="">Event Date</label>
                    <input type="date" name="edate" id="edate-id" autocomplete="off" min="<?php echo date('Y-m-d') ?>" required>
                    <div class=" error error-hidden">

                    </div>
                </div>
                <div id="result">
                    <label id="">Total:</label>
                    <input id="total" type="number" name="totalamount">
                </div>
                <div class="flex-container">

                    <!-- <div>
                    <a href="#">Forget Password?</a>
                </div> -->
                </div>
                <div class="flex-input">
                    <input type="submit" class="prbtn" value="Request" name="cusbtn">

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
                <script>
                    const radio1 = document.querySelector("#r1");
                    const radio2 = document.querySelector("#r2");

                    radio1.addEventListener('click', () => {
                        var capacity = document.getElementById("quantity").value;
                        // var perfood = document.getElementById("check1");
                        // var perfood = document.getElementById("check2");
                        // var perfood = document.getElementById("check3");
                        // var stage = document.getElementById("stage").value;
                        var res_stage;

                        var res = parseInt(capacity);

                        // if (perfood.checked == true) {
                        //     var pl1 = document.getElementById("check1").value;

                        //     var resh = (parseInt(res) * parseInt(pl1));
                        // } else if (perfood.checked == true) {
                        //     var pl2 = document.getElementById("check2").value;
                        //     var resh = parseInt(res) * parseInt(pl2);
                        // } else if (perfood.cheched == true) {
                        //     var pl2 = document.getElementById("check3").value;
                        //     var resh = parseInt(res) * parseInt(pl3);

                        // }
                        if (document.getElementById('check1').checked) {
                            var pl1 = document.getElementById("check1").value;

                        } else if (document.getElementById('check2').checked) {
                            var pl1 = document.getElementById("check2").value;

                        } else {
                            var pl1 = document.getElementById("check3").value;

                        }
                        var resh = (parseInt(res) * parseInt(pl1));
                        // } else if (document.getElementById('check3').checked) {
                        //     var pl3 = document.getElementById("check3").value;
                        //     var resh = (parseInt(res) * parseInt(pl3));
                        // }


                        if (document.getElementById('r1').checked) {
                            var rate_value = document.getElementById('r1').value;
                        } else if (document.getElementById('r2').checked) {
                            var rate_value = document.getElementById('r2').value;
                        }

                        var result = resh + parseInt(rate_value);
                        alert(result);

                        document.getElementById('total').value = parseInt(result);
                        document.getElementById('r1').value = "Open Stage";
                        document.getElementById('r2').value = "Close stage";

                    })

                    radio2.addEventListener('click', () => {
                        var capacity = document.getElementById("quantity").value;
                        // var perfood = document.getElementById("check1");
                        // var perfood = document.getElementById("check2");
                        // var perfood = document.getElementById("check3");
                        // var stage = document.getElementById("stage").value;
                        var res_stage;

                        var res = parseInt(capacity);

                        // if (perfood.checked == true) {
                        //     var pl1 = document.getElementById("check1").value;

                        //     var resh = (parseInt(res) * parseInt(pl1));
                        // } else if (perfood.checked == true) {
                        //     var pl2 = document.getElementById("check2").value;
                        //     var resh = parseInt(res) * parseInt(pl2);
                        // } else if (perfood.cheched == true) {
                        //     var pl2 = document.getElementById("check3").value;
                        //     var resh = parseInt(res) * parseInt(pl3);

                        // }
                        if (document.getElementById('check1').checked) {
                            var pl1 = document.getElementById("check1").value;

                        } else if (document.getElementById('check2').checked) {
                            var pl1 = document.getElementById("check2").value;

                        } else {
                            var pl1 = document.getElementById("check3").value;

                        }
                        var resh = (parseInt(res) * parseInt(pl1));
                        // } else if (document.getElementById('check3').checked) {
                        //     var pl3 = document.getElementById("check3").value;
                        //     var resh = (parseInt(res) * parseInt(pl3));
                        // }


                        if (document.getElementById('r1').checked) {
                            var rate_value = document.getElementById('r1').value;
                        } else if (document.getElementById('r2').checked) {
                            var rate_value = document.getElementById('r2').value;
                        }

                        var result = resh + parseInt(rate_value);
                        alert(result);

                        // document.getElementById('total').innerHTML = parseInt(result);
                        document.getElementById('total').value = parseInt(result);
                        document.getElementById('r1').value = "Open Stage";
                        document.getElementById('r2').value = "Close stage";

                    })
                </script>
            </form>
        </div>
    <?php
}
    ?>