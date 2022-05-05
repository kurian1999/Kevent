<!-- Landing Page -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KEvent</title>
    <link rel="shortcut icon" href="./image/download.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/indexstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
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
          <a href="./vendorhome.php" class="link">Vendors</a>

          <a href="" class="link">About</a>
          <a href="" class="link">contact us</a>
          <a href="./logout.php" class="link">Log out</a>
          <!-- <a href="./assets/pages/login.php" class="link login-btn">login</a> -->
        </div>
      </div>
      <div class="hero">
        <div class="content">
          <div class="heading">
            Get your <span>KEvent</span> services in a single click
          </div>
          <div class="description">
            KEvent is a user-friendly web platform designed to assist various
            members.
          </div>
          <a href="./login.php" class="cta">Get Started</a>
        </div>
        <div class="hero-img">
          <img src="./image/pexels-secret-garden-2879824.jpg" alt="" />
        </div>
      </div>

      <div class="cat-title">Popular packages</div>

      <div class="cards">
        <!-- card -->
        <a href="./eventproduct.php?get_id=<?php echo '5'?>">
          <div class="card">
            <div class="card-img">
              <img src="./image/tradition.jpg" alt="" />
            </div>
            <div class="content">
              <div class="sec1">
                <div class="title">Sunrise weddings</div>
                <div class="tag">Traditional</div>
              </div>
              <div class="hr"></div>
              <div class="sec2">
                <div class="detail">
                  <div class="a">Rate:</div>
                  <div class="b">INR 1.25 Lakh</div>
                </div>
                <div class="detail">
                  <div class="a">Capacity:</div>
                  <div class="b">>50 guest</div>
                </div>
              </div>
            </div>
          </div>
        </a>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/run.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Moonlight weddings</div>
              <div class="tag">Elopement</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 70 Thousand</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">5 less than 0 guest</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/beach.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Winter weddings</div>
              <div class="tag">Beach</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 7 lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">>50 guest</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/tradition.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Summertime weddings</div>
              <div class="tag">Traditional</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 2.25 Lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">>50 guest</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->
      </div>
      <!------Themed parties-->
      <div class="sptecard">
        <div class="cat-title">Themed parties</div>
        <div class="btnth">
          <a href="./themeparties.php"> More</a>
        </div>
      </div>
      <div class="cards">
        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/19801.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">1980s</div>
              <div class="tag">Parties</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 3.25 Lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">< 200</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/Superheroes.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Superheroes</div>
              <div class="tag">Parties</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 4.25</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">< 200</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/barbie-dreamhouse-4.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Barbie’s Dream House</div>
              <div class="tag">Parties</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 7 lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">< 200</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/81pnnvCaT-S._AC_SL1500_.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Beach Party</div>
              <div class="tag">Parties</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 2.25 Lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">< 200</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!----- baptism-->
      <div class="sptecard">
        <div class="cat-title">Baptism</div>
        <div class="btnth">
          <a href="./batism.php"> More</a>
        </div>
      </div>
      <div class="cards">
        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/19801.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Biblical Event</div>
              <div class="tag">Biblical</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 1.25 Lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">100</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/Superheroes.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Immersion Event</div>
              <div class="tag">Immersion</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 4.25</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">100</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/barbie-dreamhouse-4.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Aspersion 200</div>
              <div class="tag">Aspersion</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 7 lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">100</div>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- card -->
        <div class="card">
          <div class="card-img">
            <img src="./image/81pnnvCaT-S._AC_SL1500_.jpg" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">Affusion E200</div>
              <div class="tag">Affusion</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 2.25 Lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">100</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
      ></script>
      <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script> -->
    
  </body>
</html>
