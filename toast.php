<?php
  if (isset($_SESSION['loginMessage'])) {
    echo "<div class='d-flex justify-content-end' style='width:66vw;'><div style='z-index:2;' class='alert bg-danger text-light alert-dismissible position-fixed mt-1 fade show col-3' role='alert'>
                                <center><strong>" . $_SESSION['loginMessage'] . "</strong></center>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div></div>";
    unset($_SESSION['loginMessage']);
  }

  ?>
  if($insertDbResult)
                        {
                            $_SESSION['loginMessage'] = "Register Success";
                            header("Location: ../index.php");
                            die();
                        }