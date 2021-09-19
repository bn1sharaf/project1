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
    <div class="container">
        <div class="row" style="margin-top:10px;">
            <div class="small-12">
                <br>
                <h1 style="color: #db5660;">Success.</h1>


                <h2>Message sent successfully, wait for a reply!</h2>


                <br><br>

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