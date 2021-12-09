<?php
session_start();

include "./include/condb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/loginreg.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="containe">

        <form action="register.php" class="login-form" method="post" name="myform" id="reg-form">
            <div class="logo">
                <img src="./image/Group 2.png" alt="" srcset="">
            </div>
            <p class="qote">"Some people look for a beautiful place. Others make a place beautiful.”</p>
            <h6 class="spok">~Hazrat Inavat Khan</h6>
            <div class="flex-input ">
                <label for="">Select Role </label>
                <div class="radioGrp">
                    <label class="radio">
                        <input type="radio" value="vendor" name="gender" onclick="document.location.href='./signup.php '" />
                        Vendor
                        <span class="check"></span>
                    </label>
                    <label class="radio">
                        <input type="radio" value="user" name="gender" />
                        User
                        <span class="check"></span>
                    </label>
                </div>

            </div>

            <div class="flex-input-email email">
                <label for="">Email_id:</label>
                <input type="text" name="email" id="email-id" autocomplete="off" required>
                <div class="error error-hidden">

                </div>
            </div>

            <div class="flex-input-name name">
                <label for="">Name:</label>
                <input type="text" name="Na_me" id="full-name" autocomplete="off" required>
                <div class="error error-hidden">

                </div>
            </div>

            <div class="flex-input-password password">
                <label for="">password:</label>
                <input type="password" name="pass" id="pass-word" autocomplete="off" required>
                <div class="error error-hidden">

                </div>
            </div>

            <div class="flex-input button cursor-disable">
                <input type="submit" class="prbtn disabled" value="Register" name="regbtn" id="reg-btn">
            </div>

            <div class="sub-title">
                Already have an account?<a href="./login.php">Login</a>
            </div>



            <script src="./js/reg.js">
                // function validate_pass() {
                //     var password = document.myform.pass.value;
                //     var pname = document.forms["myform"]["pass"];
                //     if (password.length < 6) {
                //         var error = "Password must be at least 6 characters long.";
                //         alert(error);
                //         pname.focus;
                //         return false;
                //     } else {
                //         // document.getElementById("pass_err").innerHTML = "";
                //         document.myform.pass.focus;
                //         return true;
                //     }

                // }

                // function validate_email() {
                //     var name = document.forms["myform"]["email"];
                //     var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                //     if (name.value == "") {
                //         var error = "Please enter your email_id";
                //         alert(error);
                //         name.focus;
                //         return false;
                //     } else if (name.value.match(letters)) {
                //         // document.getElementById("name_err").innerHTML = "";
                //         document.myform.username.focus;
                //         return true;
                //     } else {
                //         alert("Invalid Email format")
                //         document.myform.username.focus;
                //         return false;
                //     }
                // }
            </script>
        </form>
    </div>

</body>

</html>