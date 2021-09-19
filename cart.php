<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/foundation.css" />

  <?php include "head.php"; ?>
</head>



<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->

    <?php include "header.php"; ?>

    <!-- end header section -->
  </div>

  <div class="container">
    <div class="large-12">
      <?php
      echo '<br>';
      echo '<p><h3 style="text-align: center !important;">Your Shopping Cart</h3></p><br>';

      if (isset($_SESSION['cart'])) {

        $total = 0;
        echo '<table>';
        echo '<tr>';
        echo '<th>Code</th>';
        echo '<th>Name</th>';
        echo '<th>Quantity</th>';
        echo '<th>Cost</th>';
        echo '</tr>';
        foreach ($_SESSION['cart'] as $product_id => $quantity) {

          $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = " . $product_id);
          $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products1 WHERE id = " . $product_id);
          $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products2 WHERE id = " . $product_id);


          if ($result) {

            while ($obj = $result->fetch_object()) {
              $cost = $obj->price * $quantity; //work out the line cost
              $total = $total + $cost; //add to the total cost

              echo '<tr>';
              echo '<td>' . $obj->product_code . '</td>';
              echo '<td>' . $obj->product_name . '</td>';
              echo '<td>' . $quantity . '&nbsp;<a class="button [secondary success alert]" style="padding:5px; width: 15%;color:white; background:black; " href="update-cart.php?action=add&id=' . $product_id . '">+</a>&nbsp;<a class="button alert" style="padding:5px; width: 15%;" href="update-cart.php?action=remove&id=' . $product_id . '">-</a></td>';
              echo '<td>' . $cost . '</td>';
              echo '</tr>';
            }
          }
        }



        echo '<tr>';
        echo '<td colspan="3" align="right">Total</td>';
        echo '<td>' . $total . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert" style="border-radius:50px">Empty Cart</a>&nbsp;<a href="shoes.php" class="button [secondary success alert]" style="border-radius:50px;color:white; background:black;">Continue Shopping</a>';
        if (isset($_SESSION['username'])) {
          echo '<a href="success.php"><button style="float:right;color:white; background:black;border-radius:50px;">Buy</button></a>';
        } else {
          echo '<a href="login.php"><button style="float:right;border-radius:50px;color:white; background:black;">Login</button></a>';
        }

        echo '</td>';

        echo '</tr>';
        echo '</table>';
      } else {
        echo "You have no items in your shopping cart.";
      }

      echo '</div>';
      echo '</div>';
      ?>

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