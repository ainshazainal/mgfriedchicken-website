 <?php include('include/config.php');


date_default_timezone_set("Asia/Kuala_Lumpur");


extract($_REQUEST);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MG Fried Chicken HQ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_bg.png" rel="icon">
  <link href="assets/img/logo_bg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/styles.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.7.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
	
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/bg-8.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                  <div class="logo me-auto">
                  <a href="index.php"><img src="assets/img/wslogo.png" alt="" class="img-fluid" style="max-height: 120px; width: 125px;"></a>
                  </div>
                <h2 class="animate__animated animate__fadeInDown"><span>Whatsapp Kami  </span> Sekarang</h2>
                
                <div>
                  <a href="index.php" class="btn-menu animate__animated animate__fadeInUp"> Klik Untuk Menu</a>
                  <a href="#why-us" class="btn-book animate__animated animate__fadeInUp scroll-to">Klik Untuk Tempahan</a>
                </div>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <?php

          $i=1;

          $query2=mysqli_query($con,"select * from cawangan");
          while($res2=mysqli_fetch_array($query2))
          {
          $recno=$res2['recno'];
          $cawangan=$res2['cawangan'];
          $nofon=$res2['nofon'];
                  
          ?>

          <div class="col-lg-3">
            <center>
              <div class="box">
              <span>Cawangan</span>
              <h4><?php echo $cawangan ?></h4>
              <div>
                <a href="https://wasap.my/6<?php echo $nofon ?>" class="btn btn-warning">Klik Untuk Tempahan</a>
              </div>
            </div>
          </center>
          </div>

          <?php } ?>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

     <?php include 'footer.php'; ?>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>