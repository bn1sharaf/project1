<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<!-- body -->

<body class="sub_page">
  <div class="hero_area" style="background-image: url(images/hero-bg.jpg);">
    <!-- header section strats -->
    <?php include "header.php"; ?>

    <!-- end header section -->

    <div class="container">
      <div class="layout_padding contact_section">
        <div class="container">
          <h1 class="new_text" style="color: #fff;"><strong>Register</strong></h1>
        </div>
        <div class="container-fluid ram">
          <div class="row">
            <div class="col-md-6">
              <div class="email_box">
                <div class="input_main">



                  <form method="POST" action="insert.php" style="margin-top:30px;margin-right: 36%">
                    <div class="row">
                      <div class="small-8">

                        <div class="row">
                          <div class="small-4 columns">
                          </div>
                          <div class="small-8 columns">
                            <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="text" class="email-bt" id="right-label" placeholder="First Name" name="fname">
                          </div>
                        </div>
                        <div class="row">
                          <div class="small-4 columns">
                          </div>
                          <div class="small-8 columns">
                            <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="text" class="email-bt" id="right-label" placeholder="Last Name" name="lname">
                          </div>
                        </div>
                        <div class="row">
                          <div class="small-4 columns">
                          </div>
                          <div class="small-8 columns">
                            <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="text" class="email-bt" id="right-label" placeholder="Address" name="address">
                          </div>
                        </div>
                        <div class="row">
                          <div class="small-4 columns">
                          </div>
                          <div class="small-8 columns">
                            <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="text" class="email-bt" id="right-label" placeholder="City" name="city">
                          </div>
                        </div>
                        <div class="row">
                          <div class="small-4 columns">
                          </div>
                          <div class="small-8 columns">
                            <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="number" class="email-bt" id="right-label" placeholder="Pin Code" name="pin">
                          </div>
                        </div>
                        <div class="row">
                          <div class="small-4 columns">
                          </div>
                          <div class="small-8 columns">
                            <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="email" class="email-bt" id="right-label" placeholder="nayantronix@gmail.com" name="email">
                          </div>
                        </div>
                        <div class="row">
                          <div class="small-4 columns">
                          </div>
                          <div class="small-8 columns">
                            <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="password" class="email-bt" id="right-label" placeholder="Password" name="pwd">
                          </div>
                          <br>
                        </div>
                        <br>
                        <div class="row">
                          <div class="small-8 columns">
                            <input type="submit" id="right-label" value="Register" style="background:#fff; border: none; color:#0b0a0a; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px; border-radius:50px ;padding: 10px;margin: 10px;">
                            <input type="reset" id="right-label" value="Reset" style="background:#fff; border: none; color:#0b0a0a; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px; border-radius:50px;padding: 10px;
margin: 10px;">
                          </div>
                        </div>

                      </div>
                    </div>
                  </form>
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- contact section end -->

    <!-- section footer start -->
    <?php include "footer.php"; ?>
    <!-- section footer end -->


    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    </script>
    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");

      }
    </script>
</body>

</html>