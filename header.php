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
            <a href="cart.php"><img src="images/trolly-icon.png"></a>
            <a href="contact.php">Contact Us</a>

            <?php

            if (isset($_SESSION['username'])) {
              echo '<img src="images/download.png"    style="border-radius: 50px;width: 7%; height: 95px !important; " />';
              echo '<li ><a class="nav-item nav-link" href="logout.php">Log Out</a></li>';
            } else {
              echo '<li ><a class="nav-item nav-link" href="login.php">LogIn</a></li>';
              echo '<a class="nav-item nav-link" href="register.php">Register</a>';
            }
            ?>
          </div>
        </div>
      </div>
      <a class="navbar-brand" href="index.php">
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