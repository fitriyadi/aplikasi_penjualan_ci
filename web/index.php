<?php
session_start();
#error_reporting(0);
require_once 'pengaturan/koneksi.php';
require_once 'pengaturan/jcart.php';
require_once 'pengaturan/classPaging.php';
require_once 'pengaturan/fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('_head.php'); ?>
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu">
      <?php include('_topmenu.php'); ?>
    </div>


    <div class="main_menu">
      <?php include('_menu.php'); ?>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <?php
  $hal = @$_GET['hal'];
      //LOAD HALAMAN TENGAH DINAMIS
  $default = "home.php";
  if(!$hal){
    require_once "$default";
  }else{
    switch($hal){
      case $hal:
      if(is_file($hal.".php"))
      {
        require_once $hal.".php";
      }
      else
      {
        require_once "$default";
      }
      break;
      default:
      require_once "$default";
    }
  }
  ?>

  <!--================ start footer Area  =================-->
  <footer class="footer-area section_gap"">
    <div class="container">
      <?php include('_footer.php') ?>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>