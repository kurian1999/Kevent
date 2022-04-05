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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href=".//styles/stylevendor.css" />
  </head>

  <body>
    <nav>
      <div class="icon">KEvent</div>
      <div class="search_box">
        <input type="search" placeholder="search here" />
        <span class="fa fa-search"></span>
      </div>
      <ol>
        <li><a href="./package.php">Package</a></li>
        <li><a href="">Category</a></li>
        <li><a href="">About</a></li>
        <li><a href="./logout.php">Logout</a></li>
        <li>
          <a href=""><img src="#" /></a>
        </li>
      </ol>
    </nav>
    <div class="bgImage"></div>
    <div class="wrapper">
      <input type="file" class="my_file" />
    </div>

    <div class="vedorname">
      <?php
            $uname = $_SESSION['login_user'];
            $sql = "SELECT `company_name` FROM `tbl_vendor_details` WHERE `username`= '$uname'";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if ($resultcheck >
      0) { while ($row = mysqli_fetch_assoc($result)) { echo "
      <h2>" . $row['company_name'] . "</h2>
      "; } } ?>
    </div>

    <div class="navmid">
      <ol>
        <li><a href="" class="active">Events</a></li>
        <li><a href="">Requests</a></li>
        <li><a href="">About</a></li>
      </ol>
    </div>

    <div class="members-list">
      <div class="heading">Events</div>
      <div class="members">
        <a class="add-member" href="./addevent.php">
          <div class="icon">
            <svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="str"
                d="M15 6.25V23.75"
                stroke="#1E1E1E"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                class="str"
                d="M6.25 15H23.75"
                stroke="#1E1E1E"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="text">Add New Event</div>
        </a>
        <!-- ee saanam -->
        <a href="" class="member">
          <div class="photo">
            <img src="./image/unsplash_iFgRcqHznqg.png" alt="member photo" />
          </div>
          <div class="about">
            <div class="name">MEGAFEST</div>
            <div class="tag">Music</div>
          </div>
        </a>
        <?php
                $sql = "SELECT * FROM `tbl_event`";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) >
        0) { while ($row = mysqli_fetch_assoc($result)) { ?>
        <a href="" class="member">
          <div class="photo">
            <img src="./image/unsplash_iFgRcqHznqg.png" alt="member photo" />
          </div>
          <div class="about">
            <div class="name">
              <?php echo $row['event_name']; ?>
            </div>
            <div class="tag">
              <?php echo $row['event_type']; ?>
            </div>
          </div>
        </a>

        <?php
                    }
                }
                ?>
      </div>
    </div>
  </body>
</html>
<?php
}
?>
