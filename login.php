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
  <div class="hero_area">
    <!-- header section strats -->
    <?php include "header.php"; ?>

    <!-- end header section -->

    <div class="container ">
      <div class="layout_padding contact_section">
        <div class="container">
          <h1 class="new_text" style="color: #fff;"><strong>Login</strong></h1>
        </div>
        <div class="container-fluid ram">
          <div class="row">
            <div class="col-md-6">
              <div class="email_box">
                <div class="input_main">

                  <form method="POST" action="verify.php">
                    <div class="form-group">
                      <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="text" class="email-bt" id="right-label" placeholder="Email" name="username">
                    </div>
                    <div class="form-group">
                      <input style="border-radius: 10px;padding: 5px; margin: 10px;" type="password" class="email-bt" id="right-label" placeholder="password" name="pwd">
                    </div>
                    <div class="send_btn">
                      <input type="submit" id="right-label" value="Login" style="background:#fff; border: none; color:#0b0a0a; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px; border-radius:50px">
                      <input type="reset" id="right-label" value="Reset" style="background:#fff; border: none; color:#0b0a0a; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;  border-radius:50px">
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