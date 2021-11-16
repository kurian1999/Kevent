<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./stylesheets/sass/style.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
</head>

<body>
  <div class="main">

    <div class="lg-container">


      <div class="right-lg-container">
        <div class="form-container">
          <form id="msform" action="login.php" method="post">
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

            <!-- 1st container -->
            <fieldset class="fieldset active-frm">
              <div class="form-group">
                <label for="companyname">Company Name <sup>*</sup></label>
                <input type="text" name="companyname" id="text" class="form-control" placeholder="KEvent"
                  autocomplete="off" />
              </div>
              <div class="form-group">
                <label for="type">Type:<sup>*</sup></label>
                <div class="d-flex ">
                  <div class="col">
                    <div class="form-radio-group">
                      <div class="">
                        <input type="radio" name="type" id="radio-type" />
                        <label for="">Corporation</label>
                      </div>
                      <div class="">
                        <input type="radio" name="type" id="radio-type" />
                        <label for="">Partnership</label>
                      </div>
                    </div>
                    <div class="form-radio-set2-group">
                      <div class="">
                        <input type="radio" name="type" id="radio-type" />
                        <label for="">Individual</label>
                      </div>
                      <div class="">
                        <input type="radio" name="type" id="radio-type" />
                        <label for="">Other</label>
                      </div>
                    </div>


                  </div>


                </div>

              </div>
              <div class="form-min-group">
                <div class="form-label-flex">
                  <label for="phone">Phone number <sup>*</sup></label>
                  <input type="text" name="phname" id="phname" class="form-min-control" placeholder=""
                    autocomplete="off" />
                </div>
                <div class="form-label-flex">
                  <label for="city">City <sup>*</sup></label>
                  <input type="text" name="ctyname" id="ctyname" class="form-min-control" placeholder=""
                    autocomplete="off" />
                </div>
              </div>
              <div class="form-min-group">
                <div class="form-label-flex">
                  <label for="state">State <sup>*</sup></label>
                  <input type="text" name="statename" id="phname" class="form-min-control" placeholder="Kerala"
                    autocomplete="off" />
                </div>
                <div class="form-label-flex">
                  <label for="pin">Pincode <sup>*</sup></label>
                  <input type="text" name="zip" id="zipid" class="form-min-control" placeholder="686008"
                    autocomplete="off" />
                </div>
              </div>
              <div class="d-flex justify-content-end align-items-center">
                <button id="next" type="button" class="btn-primary mt-4 next">Next</button>
              </div>


            </fieldset>

            <!-- 2nd container -->
            <fieldset class="fieldset">
              <div class="head-form-min">
                <h5>Certifications</h5>
              </div>
              <div class="form-min-group">
                <div class="form-label-flex">
                  <label for="tin">TIN no<sup>*</sup></label>
                  <input type="text" name="tincerf" id="tincerfid" class="form-min-control" placeholder=""
                    autocomplete="off" />
                </div>
                <div class="form-label-flex">
                  <label for="pin">Expiration date <sup>*</sup></label>
                  <input type="date" name="zip" id="zipid" class="form-min-control" placeholder="" autocomplete="off" />
                </div>
              </div>
              <div class="form-min-group">
                <div class="form-label-flex">
                  <label for="tin">VAT no.<sup>*</sup></label>
                  <input type="text" name="tincerf" id="tincerfid" class="form-min-control" placeholder=""
                    autocomplete="off" />
                </div>
                <div class="form-label-flex">
                  <label for="pin">Expiration date <sup>*</sup></label>
                  <input type="date" name="zip" id="zipid" class="form-min-control" placeholder="" autocomplete="off" />
                </div>
              </div>
              <div class="form-min-group">
                <div class="form-label-flex">
                  <label for="tin">Servicetax .no<sup>*</sup></label>
                  <input type="text" name="tincerf" id="tincerfid" class="form-min-control" placeholder=""
                    autocomplete="off" />
                </div>
                <div class="form-label-flex">
                  <label for="pin">Expiration date <sup>*</sup></label>
                  <input type="date" name="zip" id="zipid" class="form-min-control" placeholder="" autocomplete="off" />
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn-secondary-outline mt-4 pre-btn">Back</button>
                <button id="next" type="button" class="btn-primary mt-4 next">Next</button>
              </div>
            </fieldset>

            <!-- 3rd container -->
            <fieldset class="fieldset">
              <div class="form-checkbox-group">
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Karsaragod</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Kannur</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Wayanad</label>
                </div>

              </div>
              <div class="form-checkbox-group2">
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Kozhikode</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Malappuram</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Palakkad</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Thrissur</label>
                </div>

              </div>
              <div class="form-checkbox-group2">
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Eranakulam</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Idukki</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Kottayam</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Alappuzha</label>
                </div>

              </div>
              <div class="form-checkbox-group4">
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Pathanamthitta</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Kollam</label>
                </div>
                <div class="checklabel">
                  <input type="checkbox" name="checkdrictict" id="iddict" />
                  <label for="checkbox" name="checkdrictict">Thiruvananthapuram</label>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn-secondary-outline mt-4 pre-btn">Back</button>
                <button type="submit" class="btn-primary mt-4">Submit</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

  <script src="./js/signupAnim.js"></script>
</body>

</html>