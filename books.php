<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
    header("Location: ./index.php");
    die();
} else {
    $book_id = $_GET['get_id'];

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>BOOKING</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="./stylesheets/sass/stylebook.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.4/signature_pad.min.js"></script>
    </head>

    <body>
        <div class="main">
            <div class="lg-container">
                <div class="right-lg-container">
                    <div class="form-container">
                        <form id="msform" action="bookinsert.php" method="post" id="reg-form">
                            <!-- progressbar -->
                            <div class="progress-container">
                                <div class="line"></div>
                                <div class="line2"></div>
                                <ul class="progressbar">
                                    <li class="active-bubble selected">1</li>
                                    <li>2</li>
                                    <li>3</li>
                                </ul>
                            </div>
                            <!-- progressbar end -->
                            <div class="phpname">
                                <?php
                                $uname = $_SESSION['login_user'];
                                $sql = "SELECT  `event_package`, `category`,`price` FROM `tbl_product_view` WHERE `rid`='$book_id'";
                                $result = mysqli_query($conn, $sql);
                                $resultcheck = mysqli_num_rows($result);
                                $row = mysqli_fetch_array($result);
                                $eventname = $row['event_package'];
                                $eventtype = $row['category'];
                                $eventprice = $row['price']
                                ?>
                            </div>
                            <!-- 1st container -->
                            <fieldset class="fieldset active-frm">
                                <div class="form-min-group">
                                    <div class="form-label-flex">
                                        <label for="pin">Today's Date: <sup>*</sup></label>
                                        <input type="date" name="todate" id="zipid" class="form-min-control" placeholder="" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                  <label for="type">Type:<sup>*</sup></label>
                  <div class="d-flex">
                    <div class="col">
                      <div class="form-radio-group">
                        <div class="">
                          <input
                            type="radio"
                            name="type"
                            id="radio-type"
                            value="Corporation"
                          />
                          <label for="">Corporation</label>
                        </div>
                        <div class="">
                          <input
                            type="radio"
                            name="type"
                            id="radio-type"
                            value="Partnership"
                          />
                          <label for="">Partnership</label>
                        </div>
                      </div>
                      <div class="form-radio-set2-group">
                        <div class="">
                          <input
                            type="radio"
                            name="type"
                            id="radio-type"
                            value="Individual"
                          />
                          <label for="">Individual</label>
                        </div>
                        <div class="">
                          <input
                            type="radio"
                            name="type"
                            id="radio-type"
                            value="Other"
                          />
                          <label for="">Other</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                                <div class="form-min-group">
                                    <div class="form-label-flex phoname">
                                        <label for="phone">Address <sup>*</sup></label>
                                        <input type="text" name="adname" id="phname" class="form-min-control" placeholder="Street Address" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                    <div class="form-label-flex cityna">
                                        <label for="city">City <sup>*</sup></label>
                                        <input type="text" name="ctyname" id="ctyname" class="form-min-control" placeholder="" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                </div>
                                <div class="form-min-group">
                                    <div class="form-label-flex statena">
                                        <label for="state">State <sup>*</sup></label>
                                        <input type="text" name="statename" id="stname" class="form-min-control" placeholder="Kerala" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                    <div class="form-label-flex zipna">
                                        <label for="pin">Pincode <sup>*</sup></label>
                                        <input type="text" name="zip" id="zipid" class="form-min-control" placeholder="686008" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                </div>
                                <div class="form-min-group">
                                    <div class="form-label-flex tinna">
                                        <label for="tin">Event Name:<sup>*</sup></label>
                                        <input type="text" name="evname" id="tincerfid" class="form-min-control" placeholder="" autocomplete="off" <?php echo 'value="' .  $eventname . '"' ?> readonly />
                                        <div class="error error-hidden"></div>
                                    </div>
                                    <div class="form-label-flex">
                                        <label for="pin">Event Date:<sup>*</sup></label>
                                        <input type="date" name="evdate" id="zipid" class="form-min-control" placeholder="" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                </div>
                                <div class="form-min-group">
                                    <div class="form-label-flex vatna">
                                        <label for="tin">Event Type<sup>*</sup></label>
                                        <input type="text" name="evtype" id="vatcerfid" class="form-min-control" placeholder="" autocomplete="off" <?php echo 'value="' .    $eventtype . '"' ?> readonly />
                                        <div class="error error-hidden"></div>
                                    </div>
                                    <div class="form-label-flex">
                                        <label for="pin">Event Location:<sup>*</sup></label>
                                        <input type="text" name="evloc" id="vatcerfid" class="form-min-control" placeholder="" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                </div>
                                <div class="form-min-group">
                                    <div class="form-label-flex serna">
                                        <label for="tin">Start Time:<sup>*</sup></label>
                                        <input type="time" name="stime" id="sercerfid" class="form-min-control" placeholder="" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                    <div class="form-label-flex">
                                        <label for="pin">End Time: <sup>*</sup></label>
                                        <input type="time" name="etime" id="sercerfid" class="form-min-control" placeholder="" autocomplete="off" />
                                        <div class="error error-hidden"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center">
                                    <button id="next" type="button" class="btn-primary mt-4 next">
                                        Next
                                    </button>
                                </div>
                            </fieldset>

                            <!-- 2nd container -->
                            <fieldset class="fieldset">
                                <div class="form-group userna">
                                    <label for="username">How did you hear about us?<sup>*</sup></label>
                                    <input type="text" name="knowabout" id="user" class="form-control" placeholder="KEvent" autocomplete="off" />
                                    <div class="error error-hidden"></div>
                                </div>
                                <div class="form-group passna">
                                    <label for="password">Important Details: <sup>*</sup></label>
                                    <input type="text" name="details" id="pass" class="form-control" placeholder="KEvent" autocomplete="off" />
                                    <div class="error error-hidden"></div>
                                </div>
                                <div class="head-form-min">
                                    <h5>Main Service</h5>
                                </div>
                                <div>
                                    <div>

                                        <input type="checkbox" name="chekname" id="chekname" class="form-min-control" autocomplete="off" />
                                        <label for="chekname">Platinum Package (7HR DJ service)$2,000.00</label><br>
                                        <input type="checkbox" name="chekname" id="chekname" class="form-min-control" autocomplete="off" />
                                        <label for="chekname">Gold Package (6HR DJ Service & FotoXL)$1,400.00</label><br>
                                        <input type="checkbox" name="chekname" id="chekname" class="form-min-control" autocomplete="off" />
                                        <label for="chekname">Silver Package (5HR DJ Service)$800.00</label><br>
                                        <input type="checkbox" name="chekname" id="chekname" class="form-min-control" autocomplete="off" />
                                        <label for="chekname">Foto XL Package$695.00</label>
                                        <div class="error error-hidden"></div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <button type="button" class="btn-secondary-outline mt-4 pre-btn">
                                        Back
                                    </button>
                                    <button id="next" type="button" class="btn-primary mt-4 next">
                                        Next
                                    </button>
                                </div>
                            </fieldset>

                            <!-- 3rd container -->
                            <fieldset class="fieldset">


                                <div class="form-group userna">
                                    <label for="username">PRICE:<?php echo $eventprice; ?><sup>Lakh</sup></label>

                                    <div class="error error-hidden"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-secondary-outline mt-4 pre-btn">
                                        Back
                                    </button>
                                    <button type="submit" class="btn-primary mt-4" name="bookbtn">
                                        Book
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <script src="./js/signupAnim.js"></script>
        <script src="./js/signup.js"></script>
    </body>

    </html>
<?php
}
?>