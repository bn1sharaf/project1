<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'config.php';
?>

<!DOCTYPE html>
<html>

<?php include "head.php"; ?>


<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->

    <?php include "header.php"; ?>

    <!-- end header section -->
  </div>
  <div class="layout_padding contact_section" style="background-image: url(images/hero-bg.jpg);">
    <div class="container">
      <h1 class="new_text" style="color: white;"><strong>Contact Us</strong></h1>
    </div>
    <div class="container-fluid ram">
      <div class="row">
        <div class="col-md-6">
          <div class="email_box">
            <div class="input_main">
              <div class="container">
                <form method="POST" action="conect.php">
                  <div class="form-group">
                    <input type="text" style="border-radius: 10px;padding: 5px; margin: 10px;width: 100%;" required class="email-bt send" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                    <input type="text" style="border-radius: 10px;padding: 5px; margin: 10px;width: 100%;" class="email-bt send" placeholder="Phone Numbar" name="phon">
                  </div>
                  <div class="form-group">
                    <input type="text" style="border-radius: 10px;padding: 5px; margin: 10px;width: 100%;" required class="email-bt send" placeholder="Email" name="email">
                  </div>

                  <div class="form-group">
                    <textarea class="massage-bt" required style="border-radius: 10px;padding: 5px; margin: 10px;width: 100%;" placeholder="Massage" rows="5" id="comment" name="massage"></textarea>
                  </div>
                  <div class="send_btn">
                    <button type="submit" style="border-radius: 20px; padding: 10px;">Send</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="shop_banner">
            <div class="our_shop">
              <img src="hero-bg.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section -->
  <?php include "footer.php"; ?>
  <!-- footer section -->

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