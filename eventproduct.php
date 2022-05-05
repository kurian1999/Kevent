<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
  header("Location: ./index.php");
  die();
} else {
  $event_id = $_GET['get_id'];
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./image/download.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/styleevent.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product</title>
  </head>

  <body>
    <div class="header">
      <div class="logo">
        <a href="./index.php"><img src="./image/logo.svg" alt="logo" class="logoimg" /></a>
      </div>
      <div class="links">
        <a href="./vendorprofile.php" class="link">Vendors</a>

        <a href="" class="link">About</a>
        <a href="" class="link">contact us</a>
        <a href="./login.php" class="link">Sign up</a>
        <!-- <a href="./assets/pages/login.php" class="link login-btn">login</a> -->
      </div>
    </div>
    <div class="card_wrapper">
      <div class="card">
        <?php
        $uname = $_SESSION['login_user'];
        $sql = "SELECT * FROM `tbl_product_view` WHERE  `rid` = '$event_id'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        ?>
        <!----card left----->
        <div class="product-img">
          <div class="img-display">
            <div class="img-showcase">
              <img src="./uploadimage/<?php echo $row['event_photo_1']; ?>" alt="img_party" width="100%" />
              <!-- <img src="./image/81pnnvCaT-S._AC_SL1500_.jpg" alt="img_party" width="100%" />
              <img src="./image/81pnnvCaT-S._AC_SL1500_.jpg" alt="img_party" width="100%" />
              <img src="./image/81pnnvCaT-S._AC_SL1500_.jpg" alt="img_party" width="100%" /> -->
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="./uploadimage/<?php echo $row['event_photo_2']; ?>" alt="image" width="100%" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="./uploadimage/<?php echo $row['event_photo_3']; ?>" alt="image" width="100%" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="./uploadimage/<?php echo $row['event_photo_4']; ?>" alt="image" width="100%" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="./uploadimage/<?php echo $row['event_photo_5']; ?>" alt="image" width="100%" />
              </a>
            </div>
          </div>
          <form action="/action_page.php" method="post">
            <!---card right-->
            <div class="product-contect">
              <h2 class="product-title"><?php echo $row['event_package']; ?></h2>
              <a href="#" class="product-link"><?php echo $row['category']; ?></a>
              <span> <button type="submit" formaction="./books.php?get_id=<?php echo $event_id ?>" class="cta">Book</button></span>
              <div class="product-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>4.7(21)</span>
              </div>
              <div class="product-price">
                <p class="prprice">Price<span>:<?php echo $row['price']; ?></span></p>
                <p class="product-price-capacity">Capacity<span>:<?php echo $row['capacity']; ?></span></p>
              </div>
              <div class="product-details">
                <h2>About</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus,
                  hic saepe sed dolorum aliquam nam facilis possimus laudantium
                  delectus? Inventore consectetur aperiam quasi ea quod aliquam
                  velit explicabo exercitationem aspernatur.
                </p>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Maiores, natus! Illum facere tempore, sit est hic iusto ipsam.
                  Sunt, amet quasi deleniti ullam modi esse id exercitationem iure
                  at a!</P>
                <!-- <ul>
                <li>Color:<span>Black</span></li>
                <li>Color:<span>Black</span></li>
                <li>Color:<span>Black</span></li>
              </ul> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>

  </html>
<?php
}
?>