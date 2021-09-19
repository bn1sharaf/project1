<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION["username"])) {
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Orders || BOLT Sports Shop</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <div class="fk_width" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">HOME</a>
                <a href="shop.php">SHOP</a>
                <a href="cart.php"><img src="images/cart.png"></a>
                <a href="contact.php">Contact Us</a>


                <?php

                if (isset($_SESSION['username'])) {
                  echo '<img src="images/download.png" height="50"  style="border-radius: 45px; width: 7%;" />';
                  echo '<li ><a class="nav-item nav-link" href="logout.php">Log Out</a></li>';
                } else {
                  echo '<li ><a class="nav-item nav-link" href="login.php">LogIn</a></li>';
                  echo '<a class="nav-item nav-link" href="register.php">Register</a>';
                }
                ?>
              </div>
            </div>
          </div>
          <a class="navbar-brand" href="index.html">
            <span>
              Abdulaziz_Faisal
            </span>
          </a>
          <div>
            <form class="form-inline my-2 my-lg-0  mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>



  <div class="row" style="margin-top:10px;">
    <div class="large-12">
      <h3>My COD Orders</h3>
      <hr>

      <?php
      $user = $_SESSION["username"];
      $result = $mysqli->query("SELECT * from orders where email='" . $user . "'");
      if ($result) {
        while ($obj = $result->fetch_object()) {
          //echo '<div class="large-6">';
          echo '<p><h4>Order ID ->' . $obj->id . '</h4></p>';
          echo '<p><strong>Date of Purchase</strong>: ' . $obj->date . '</p>';
          echo '<p><strong>Product Code</strong>: ' . $obj->product_code . '</p>';
          echo '<p><strong>Product Name</strong>: ' . $obj->product_name . '</p>';
          echo '<p><strong>Price Per Unit</strong>: ' . $obj->price . '</p>';
          echo '<p><strong>Units Bought</strong>: ' . $obj->units . '</p>';
          echo '<p><strong>Total Cost</strong>: ' . $currency . $obj->total . '</p>';
          //echo '</div>';
          //echo '<div class="large-6">';
          //echo '<img src="images/products/sports_band.jpg">';
          //echo '</div>';
          echo '<p><hr></p>';
        }
      }
      ?>
    </div>
  </div>




  <div class="row" style="margin-top:10px;">
    <div class="small-12">

      <footer style="margin-top:10px;">
        <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
      </footer>

    </div>
  </div>





  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>