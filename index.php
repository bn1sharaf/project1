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


<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php include "header.php"; ?>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="number-box">
        <hr>
        <div class="social_box">
          <a href="">
            <img src="images/fb.png" alt="">
          </a>
          <a href="">
            <img src="images/twitter.png" alt="">
          </a>
          <a href="">
            <img src="images/insta.png" alt="">
          </a>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="detail-box">
                    <div class="indicator_number">
                      01
                    </div>
                    <h2>
                      brand
                    </h2>
                    <h1>
                      of fashion
                    </h1>
                    <div>
                      <a href="shop.php">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="detail-box">
                    <div class="indicator_number">
                      02
                    </div>
                    <h2>
                      brand
                    </h2>
                    <h1>
                      of fashion
                    </h1>
                    <div>
                      <a href="shop.php">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="detail-box">
                    <div class="indicator_number">
                      03
                    </div>
                    <h2>
                      brand
                    </h2>
                    <h1>
                      of fashion
                    </h1>
                    <div>
                      <a href="shop.php">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
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


                echo '  <div class="detail-box"> <h6>Woman  Corut</h6><h6>Price<span> ' . $currency . $obj->price . '</span></h6></div><div class="new"><span> New</span></div> ';
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


                  echo '  <div class="detail-box"> <h6>watches</h6><h6>Price<span> ' . $currency . $obj->price . '</span></h6></div><div class="new"><span> New</span></div> ';
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

  <!-- get section -->

  <section class="get_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-1">
          <div class="detail-box">
            <h2>
              Get <span>50%</span> off on Every Iteams
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page
            </p>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/get-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end get section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="custom_heading">
        <h4>
          02
        </h4>
        <hr>
        <h3>
          What is says our customer
        </h3>
      </div>
    </div>
    <div class="client_container layout_padding2-top">
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    It is a wonderful and very distinguished site and it has distinguished and wonderful brands. I wish everyone to visit the site
                  </p>

                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      Magna
                    </h5>
                    <h6>
                      Consectetur adipiscing
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Very cool, I hope everyone is shopping here
                  </p>

                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/azooz.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      Abdulaziz
                    </h5>
                    <h6>
                      Developer et programmator
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    A tired site, I wish everyone the best of luck. A great site and international brands
                  </p>

                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/azooz.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      Abdulaziz
                    </h5>
                    <h6>
                      Developer et programmator
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    </div>
  </section>
  <!-- end client section -->


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