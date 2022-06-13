<?php
include "./include/condb.php";
session_start();
$uname = $_SESSION['login_user'];
if (isset($_SESSION["sessionID"]) != session_id()) {
  header("Location: ./index.php");
  die();
} else {
  $user_id = $_SESSION['u_id'];
  $event_id = $_GET['get_id'];
  $_SESSION['evt_id'] = $event_id;
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./image/download.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/styleevent.css" />
    <link rel="stylesheet" type="text/css" href=".//styles/stylevendor.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Product</title>
  </head>

  <body>
    <div class="header">
      <div class="logo">
        <a href="./index.php"><img src="./image/logo.svg" alt="logo" class="logoimg" /></a>
      </div>
      <div class="links">
        <!-- <a href="./vendorprofile.php" class="link">Vendors</a> -->

        <a href="" class="link">About</a>
        <a href="" class="link">contact us</a>
        <a href="./logout.php" class="link">Log out</a>
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
          <!-- Tab Menu -->
          <div class="tab-menu">
            <div class="tabs">
              <div id="tabBtn1" class="tab tab-active">Details</div>
              <div id="tabBtn2" class="tab">Rating and Review</div>
              <div id="tabBtn3" class="tab">FAQ</div>
            </div>
            <div class="underline"></div>
          </div>
          <div id="tabCon1" class="tab-content tab-con-active">
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
                  <p class="about"><?php echo $row['about']; ?>

                  </p>

                  <!-- <ul>
                <li>Color:<span>Black</span></li>
                <li>Color:<span>Black</span></li>
                <li>Color:<span>Black</span></li>
              </ul> -->
                </div>
              </div>
            </form>
          </div>
          <div id="tabCon2" class="tab-content">
            <div class="container">
              <h1 class="mt-5 mb-5">Review & Rating</h1>
              <div class="card">
                <div class="card-header">KEvent</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4 text-center">
                      <h1 class="text-warning mt-4 mb-4">
                        <b><span id="average_rating">0.0</span> / 5</b>
                      </h1>
                      <div class="mb-3">
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                      </div>
                      <h3><span id="total_review">0</span> Review</h3>
                    </div>
                    <div class="col-sm-4">
                      <p>
                      <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                      </div>
                      </p>
                    </div>
                    <div class="col-sm-4 text-center">
                      <h3 class="mt-4 mb-3">Write Review Here</h3>
                      <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-5" id="review_content"></div>
            </div>
  </body>

  </html>

  <div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Submit Review</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4 class="text-center mt-2 mb-4">
            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
          </h4>
          <div class="form-group">
            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
          </div>
          <div class="form-group">
            <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
          </div>
          <div class="form-group text-center mt-4">
            <button type="button" class="btn btn-primary" id="save_review">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <script src="./js/tab.js"></script>
  <script>
    var rating_data = 0;

    $('#add_review').click(function() {

      $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function() {

      var rating = $(this).data('rating');

      reset_background();

      for (var count = 1; count <= rating; count++) {

        $('#submit_star_' + count).addClass('text-warning');

      }

    });

    function reset_background() {
      for (var count = 1; count <= 5; count++) {

        $('#submit_star_' + count).addClass('star-light');

        $('#submit_star_' + count).removeClass('text-warning');

      }
    }

    $(document).on('mouseleave', '.submit_star', function() {

      reset_background();

      for (var count = 1; count <= rating_data; count++) {

        $('#submit_star_' + count).removeClass('star-light');

        $('#submit_star_' + count).addClass('text-warning');
      }

    });

    $(document).on('click', '.submit_star', function() {

      rating_data = $(this).data('rating');

    });

    $('#save_review').click(function() {

      var user_name = $('#user_name').val();

      var user_review = $('#user_review').val();

      if (user_name == '' || user_review == '') {
        alert("Please Fill Both Field");
        return false;
      } else {
        $.ajax({
          url: "submit_rating.php",
          method: "POST",
          data: {
            rating_data: rating_data,
            user_name: user_name,
            user_review: user_review
          },
          success: function(data) {
            $('#review_modal').modal('hide');

            load_rating_data();

            alert(data);
          }
        })
      }

    });
    load_rating_data();

    function load_rating_data() {
      $.ajax({
        url: "submit_rating.php",
        method: "POST",
        data: {
          action: 'load_data'
        },
        dataType: "JSON",
        success: function(data) {
          $('#average_rating').text(data.average_rating);
          $('#total_review').text(data.total_review);

          var count_star = 0;

          $('.main_star').each(function() {
            count_star++;
            if (Math.ceil(data.average_rating) >= count_star) {
              $(this).addClass('text-warning');
              $(this).addClass('star-light');
            }
          });

          $('#total_five_star_review').text(data.five_star_review);

          $('#total_four_star_review').text(data.four_star_review);

          $('#total_three_star_review').text(data.three_star_review);

          $('#total_two_star_review').text(data.two_star_review);

          $('#total_one_star_review').text(data.one_star_review);

          $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

          $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

          $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

          $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

          $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

          if (data.review_data.length > 0) {
            var html = '';

            for (var count = 0; count < data.review_data.length; count++) {
              html += '<div class="row mb-3">';

              html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

              html += '<div class="col-sm-11">';

              html += '<div class="card">';

              html += '<div class="card-header"><b>' + data.review_data[count].user_name + '</b></div>';

              html += '<div class="card-body">';

              for (var star = 1; star <= 5; star++) {
                var class_name = '';

                if (data.review_data[count].rating >= star) {
                  class_name = 'text-warning';
                } else {
                  class_name = 'star-light';
                }

                html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
              }

              html += '<br />';

              html += data.review_data[count].user_review;

              html += '</div>';

              html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

              html += '</div>';

              html += '</div>';

              html += '</div>';
            }

            $('#review_content').html(html);
          }
        }
      })
    }
  </script>
  </body>

  </html>
<?php
}
?>