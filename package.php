<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
  header("Location: ./index.php");
  die();
} else {
  $vendorId = $_SESSION['v_id'];

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
    <link rel="stylesheet" href="./styles/package.css" />
  </head>

  <body>
    <div class="bg">
      <img src="./image/landingBg.png" alt="Background image" />
    </div>
    <div class="main">
      <div class="header">
        <div class="logo">
          <a href="./index.php"><img src="./image/logo.svg" alt="logo" /></a>
        </div>
        <div class="links">
          <a href="./index.php" class="link">Home</a>

          <a href="" class="link">About</a>
          <a href="" class="link">Contact us</a>
          <a href="./logout.php" class="link">Logout</a>
        </div>
      </div>
      <div class="box modal-box modal-hidden">
        <div class="title">Add Package</div>

        <!-- Add package -->
        <form action="./addpackage.php" method="post" id="add-house-member" enctype="multipart/form-data">
          <input type="hidden" name="fname" value="<?php echo $fname ?>" />
          <div class="inputs">
            <div class="input h-fullname">
              <div class="label">Package_Name</div>
              <input type="text" name="hfname" id="h-full-name" placeholder="" autocomplete="off" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-email">
              <div class="label">Category</div>
              <input type="text" name="hemail" id="h-email-id" placeholder="tradition" autocomplete="off" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-phno">
              <div class="label">Rate</div>
              <input type="text" name="hphno" id="h-phn-number" placeholder="2500$" autocomplete="off" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-phno">
              <div class="label">Capacity</div>
              <input type="text" name="hcapa" id="h-phn-number" placeholder="max" autocomplete="off" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-about">
              <div class="label">About</div>
              <textarea class="habout" name="habout"></textarea>
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-photo">
              <div class="label">Upload photo-1</div>
              <input type="file" name="hphoto_1" id="h-photo" accept="image/png,image/jpeg" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-photo">
              <div class="label">Upload photo-2</div>
              <input type="file" name="hphoto_2" id="h-photo" accept="image/png,image/jpeg" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-photo">
              <div class="label">Upload photo-3</div>
              <input type="file" name="hphoto_3" id="h-photo" accept="image/png,image/jpeg" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-photo">
              <div class="label">Upload photo-4</div>
              <input type="file" name="hphoto_4" id="h-photo" accept="image/png,image/jpeg" />
              <div class="error error-hidden"></div>
            </div>
            <div class="input h-photo">
              <div class="label">Upload photo-5</div>
              <input type="file" name="hphoto_5" id="h-photo" accept="image/png,image/jpeg" />
              <div class="error error-hidden"></div>
            </div>
            <div class="button hBtn cursor">
              <input type="submit" value="Add Package" name="add-hm" id="add-hm" class="primary-button" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>

  </html>
<?php


}
?>