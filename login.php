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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="">
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
        });
    </script>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['login_user'])) {
        echo "<div class='d-flex justify-content-end' style='width:66vw;'><div style='z-index:2;' class='alert bg-danger text-light alert-dismissible position-fixed mt-3 fade show col-3' role='alert'>
                                        <center><strong>" . $_SESSION['login_user'] . "</strong></center>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div></div>";
        unset($_SESSION['login_user']);
    }

    ?>
    <div class="containe">
        <form action="register.php" class="login-form" name="myform" method="post" id="my_form">
            <div class="logo">
                <img src="./image/Group 2.png" alt="" srcset="">
            </div>
            <p class="qote">"Some people look for a beautiful place. Others make a place beautiful.”</p>
            <h6 class="spok">~Hazrat Inavat Khan</h6>
            <div class="flex-input email">
                <label for="">Username:</label>
                <input type="text" name="username" id="e_mail" autocomplete="off" required>
                <div class="error error-hidden">
                </div>
            </div>
            <div class="flex-input password">
                <label for="">password:</label>
                <input type="password" name="pass" id="pass-word" autocomplete="off" onblur="validate_pass()" required>
                <div class="error error-hidden">

                </div>
            </div>
            <div class="flex-container">
                <div>
                    <input type="checkbox" name="" id="">
                    <span>Remember me</span>
                </div>
                <div>
                    <a href="#">Forget Password?</a>
                </div>
            </div>
            <div class="flex-input">
                <input type="submit" class="prbtn" value="login" name="lgbtn" onclick="validate_email()">

            </div>
            <div class="or">
                <div class="line"></div>
                <span>Or</span>
                <div class="line"></div>
            </div>
            <div class="flex-input">
                <a href="./registration.php"> <input type="button" class="scebtn" value="Register"></a>
            </div>
            <?php
            if (isset($_SESSION['login_user'])) {
                echo "<div class='d-flex justify-content-end' style='width:66vw;'><div style='z-index:2;' class='alert bg-danger text-light alert-dismissible position-fixed mt-3 fade show col-3' role='alert'>
                                        <center><strong>" . $_SESSION['login_user'] . "</strong></center>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div></div>";
                unset($_SESSION['login_user']);
            }

            ?>
            <script src="./js/login.js">

            </script>

        </form>
    </div>

</body>

</html>