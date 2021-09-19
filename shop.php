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

  <!-- category section -->

  <section class="category_section ">
    <div class="container">
      <div class="category_container">
        <div class="box">
          <a href="" class="active">
            <div class="img-box">
              <img src="images/fashion.png" alt="" class="img-1">
              <img src="images/fashion-yellow.png" alt="" class="img-2">
            </div>
            <h6>
              New Fashion
            </h6>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/clothing.png" alt="" class="img-1">
              <img src="images/clothing-yellow.png" alt="" class="img-2">
            </div>
            <h6>
              Clothing
            </h6>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/watch.png" alt="" class="img-1">
              <img src="images/watch-yellow.png" alt="" class="img-2">
            </div>
            <h6>
              Watches
            </h6>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/accessory.png" alt="" class="img-1">
              <img src="images/accessory-yellow.png" alt="" class="img-2">
            </div>
            <h6>
              Accessories
            </h6>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/jacket.png" alt="" class="img-1">
              <img src="images/jacket-yellow.png" alt="" class="img-2">
            </div>
            <h6>
              Sweaters & Jackets
            </h6>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end category section -->

  <!-- shop section -->

  <section class="shop_section layout_padding-top layout_padding2-bottom">
    <div class="container-fluid">
      <div class="custom_heading">
        <h4>
          01
        </h4>
        <hr>
        <h3>
          Shop The Latest
        </h3>
      </div>
      <div class="shop_content">
        <div class="shop_heading">
          <h4>
            Man Fashions
          </h4>
          <a href="">
            See More
          </a>
        </div>
        <div class="shop_container">
          <?php
          $i = 0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if ($result === FALSE) {
            die(mysql_error());
          }

          if ($result) {

            while ($obj = $result->fetch_object()) {

              echo '<div class="box" style="height: 407px;"><a href="">';
              echo ' <div class="img-box" >  <img src="images/' . $obj->product_img_name . '.png" alt=""/></div>';


              echo '  <div class="detail-box"> <h6>Man Corut</h6><h6>Price<span> ' . $currency . $obj->price . '</span></h6></div><div class="new"><span> New</span></div> ';
              // echo ' <div><i><img src="images/star.png"/></i>   <i><img src="images/star.png"/></i>     <i><img src="images/star.png"/></i><i><img src="images/star.png"/></i></div>';
              if ($obj->qty > 0) {
                echo ' <div>    <a href="update-cart.php?action=add&id=' . $obj->id . '"><input  type="submit"value="Add To Cart" style="clear:both; background: #fff; border: none; color: #0b0a0a; font-size: 1em; padding: 10px;width: 100%;border-radius: 30px;" />  </a> </div> </div>';
              } else {
                echo 'Out Of Stock!';
              }

              $i++;
            }
          }

          $_SESSION['product_id'] = $product_id;


          ?>

        </div>
      </div>
      <div class="shop_content">
        <div class="shop_heading">
          <h4>
            Woman Fashions
          </h4>
          <a href="">
            See More
          </a>
        </div>
        <div class="shop_container">
          <?php
          $i = 0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products1');
          if ($result === FALSE) {
            die(mysql_error());
          }

          if ($result) {

            while ($obj = $result->fetch_object()) {

              echo '<div class="box" style="height: 407px;"><a href="">';
              echo ' <div class="img-box" >  <img src="images/' . $obj->product_img_name . '.png" alt=""/></div>';


              echo '  <div class="detail-box"> <h6>Man Corut</h6><h6>Price<span> ' . $currency . $obj->price . '</span></h6></div><div class="new"><span> New</span></div> ';
              // echo ' <div><i><img src="images/star.png"/></i>   <i><img src="images/star.png"/></i>     <i><img src="images/star.png"/></i><i><img src="images/star.png"/></i></div>';
              if ($obj->qty > 0) {
                echo ' <div>    <a href="update-cart.php?action=add&id=' . $obj->id . '"><input  type="submit"value="Add To Cart" style="clear:both; background: #fff; border: none; color: #0b0a0a; font-size: 1em; padding: 10px;width: 100%;border-radius: 30px;" />  </a> </div> </div>';
              } else {
                echo 'Out Of Stock!';
              }

              $i++;
            }
          }

          $_SESSION['product_id'] = $product_id;


          ?>
        </div>
      </div>
      <div class="shop_content">
        <div class="shop_heading">
          <h4>
            Man and woman watches
          </h4>
          <a href="">
            See More
          </a>
        </div>
        <div class="shop_container">
          <?php
          $i = 0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products2');
          if ($result === FALSE) {
            die(mysql_error());
          }

          if ($result) {

            while ($obj = $result->fetch_object()) {

              echo '<div class="box" style="height: 407px;"><a href="">';
              echo ' <div class="img-box" >  <img src="images/' . $obj->product_img_name . '.png" alt=""/></div>';


              echo '  <div class="detail-box"> <h6>Man Corut</h6><h6>Price<span> ' . $currency . $obj->price . '</span></h6></div><div class="new"><span> New</span></div> ';
              // echo ' <div><i><img src="images/star.png"/></i>   <i><img src="images/star.png"/></i>     <i><img src="images/star.png"/></i><i><img src="images/star.png"/></i></div>';
              if ($obj->qty > 0) {
                echo ' <div>    <a href="update-cart.php?action=add&id=' . $obj->id . '"><input  type="submit"value="Add To Cart" style="clear:both; background: #fff; border: none; color: #0b0a0a; font-size: 1em; padding: 10px;width: 100%;border-radius: 30px;" />  </a> </div> </div>';
              } else {
                echo 'Out Of Stock!';
              }

              $i++;
            }
          }

          $_SESSION['product_id'] = $product_id;


          ?>
        </div>
  </section>

  <!-- end shop section -->

  <!-- loading box -->

  <!-- <div class="loading_box">
    <div class="img-box">
      <img src="images/loader.png" alt="">
    </div>
    <div class="detail-box">
      <h6>
        Loading More
      </h6>
    </div>
  </div> -->

  <!-- end loading box -->

  <!-- footer section -->
  <footer class="footer_section layout_padding2">
    <div class="social_container">
      <h4>
        Follow Us
      </h4>
      <div class="social-box">
        <hr>
        <div>
          <a href="">
            <img src="images/fb.png" alt="">
          </a>
        </div>
        <hr>
        <div>
          <a href="">
            <img src="images/twitter.png" alt="">
          </a>
        </div>
        <hr>
        <div>
          <a href="">
            <img src="images/insta.png" alt="">
          </a>
        </div>
        <hr>
      </div>
    </div>
    <p>
      &copy; 2020 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
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