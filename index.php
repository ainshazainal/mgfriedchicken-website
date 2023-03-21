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

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>011-1055 0075</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Setiap Hari: 9:00 AM - 9:00 PM</span></i>
    </div>
  </section>

   <?php include 'header.php'; ?>
	
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/bg-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>MG </span> Fried Chicken</h2>
                <p class="animate__animated animate__fadeInUp">Hujan2 ni perut lapar laa pulak , kalau dapat makan ayam panas panas pun sedap🤩 
                  Apatah lagi rasa pedas yang menusuk kalbu... Krukkkk krakk❗️❗️❗️🤤 perghhh padu beb,  Kat mana??
				🤩 hanya di MG Fried Chicken Indera Sempurna 
				Skali cubo gerenti nk lagi. Itulah  customer selalu bgtau... Tak caya kannn. 😂 Tak pe datang dulu baru caya.... 
				Nak dtg kedai pun boleh..... Nak cod pun lagi boleh.... 👍</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto"> Klik Untuk Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Klik Untuk Tempahan</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/bg-8.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Cash On</span> Delivery</h2>
                <p class="animate__animated animate__fadeInUp">Tiada Masa Untuk Ke Kedai Kami?? Jangan Risau Kami di MG Fried Chicken juga menyediakan perkhidmatan COD 🤩🤩. 
                  Jimat Masa Jimat Tenaga❗️❗️❗️ Barang Sampai Baru Bayar👍👍</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Klik Untuk Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Klik Untuk Tempahan</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/bg-6.jpg);">
            <div class="carousel-background"><img src="assets/img/slide/bg-6.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Nikmati</span> Tanpa Was-Was</h2>
                <p class="animate__animated animate__fadeInUp">Sekali Makan Pasti Mahu Lagi..Memang Tak Boleh Lupa Dengan Keenakan Ayam Goreng di MG Fried Chicken ni🤤🤤.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Klik Untuk Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Klik Untuk Tempahan</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about-bgnew.png");'>
            <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Selamat Datang Ke<strong><span style="color: #bb1313">&nbsp; MG Fried Chicken HQ</span></strong></h3>
              <p>
                MG Fried Chicken menyediakan hidangan istimewa iaitu Ayam Goreng MG. Selain daripada menjual ayam goreng, di MG Fried Chicken juga menydiakan set hidangan untuk 
                sarapan pagi iaitu Set Nasi Lemak MG. Terdapat banyak lagi menu-menu yang istimewa yang ada di MG Fried Chicken. Jadi, tunggu apa lagi, jom kunjungi ke MG Fried
                 Chicken sekarang untuk dapatkan menu istimewa.
              </p>
              <p class="fst-italic">
                Antara Keistimewaan yang MG Fried Chicken sediakan untuk pelanggan:-
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Perkhidmatan COD secara percuma.</li>
                <li><i class="bx bx-check-double"></i> Harga yang berpatutan.</li>
                <li><i class="bx bx-check-double"></i> Menu-menu yang mengikut citarasa pelanggan tidak kira usia.</li>
              </ul>
              <p>
               Sekali Makan Pasti Mahu Lagi..Memang Tak Boleh Lupa Dengan Keenakan Ayam Goreng di MG Fried Chicken ni🤤🤤
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Kenapa Perlu Pilih <span> MG Fried Chicken</span></h2>
          <p>Jadikan MG Fried Chicken Pilihan Nombor 1 Anda. Terdapat Banyak Keistimewaan di MG Fried Chicken.Keenakkan Ayam Goreng MG Fried Chicken Yang Luar Biasa.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Tekstur Ayam.</h4>
              <p>Keenakan ayam yang rangup di luar, lembut dan juicy di dalan akan memberikan kepuasan kepada penggemar ayam goreng.Rasakan kerangupan ayam pada setiap suapan
               anda. Tak lain Tak bukan pastinya hanya di MG Fried Chicken.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Ramuan Istimewa</h4>
              <p>Anda akan merasakan kelainan apabila memilih ayam goreng di MG Fried Chicken kerana terdapat ramuan yang istimewa yang sudah pastinya akan memikat citarasa 
                anda.Hanya dengan seketul ayam di MG Fried Chicken anda akan terbuai oleh kelazatan dan keenakkannya. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Harga Yang Berpatutan </h4>
              <p>Kami di MG Fried Chicken menawarkan harga yang sangat berpatutan untuk setiap hidangan di kedai kami. Kami yakin dengan harga yang ditawarkan akan memberikan 
                kesenangan kepada setiap pelanggan kami. Kami juga akan memastikan anda akan mendapat hidangan yang berkualiti sesuai dengan harga yang kami tawarkan.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Menu <span> MG Fried Chicken</span></h2>
        </div>

        <div class="row menu-container">

         <?php

          for ($i = 0; $i < 0; $i++) 
          {
            if ($i % 2 == 0) {
              echo "<div class='left'>$i</div>";
            } else {
              echo "<div class='right'>$i</div>";
            }
          }

          $query2=mysqli_query($con,"select * from harga");
          while($res2=mysqli_fetch_array($query2))
          {
          $recno=$res2['recno'];
          $menu=$res2['menu'];
          $detail=$res2['detail'];
          $harga=$res2['harga'];
          $combo=$res2['combo'];
          $hargacombo=$res2['hargacombo'];

          ?>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#"><?php echo $menu ?></a><span>RM <?php echo $harga ?></span>
            </div>
            <div class="menu-ingredients">
              <?php echo $detail ?>
			        <br>
              <?php if (!$combo && !$hargacombo) { ?>
              <b style="color: black"></b>  
              <?php } else { ?>
              <b style="color: black">COMBO( <?php echo $combo ?>) - RM <?php echo $hargacombo ?></b> 
              <?php } ?>
            </div>
          </div>

          <?php } ?>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Menu Istimewa &nbsp;<span>MG Fried Chicken</span></h2>
          <p>Belum Cuba Belum Tahu. Kami di MG Fried Chicken Menyediakan Sajian Istimewa Kepada Pelanggan Kami. Bukan Hanya Ayam Goreng Sahaja Yang Ada di MG Fried Chicken.
           Banyak Lagi Menu-Menu Lain Yang Anda Boleh Dapati di MG Fried Chicken.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Nasi Kerabu MG.</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Bubur Ayam MG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Nasi Lemak MG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Ayam Goreng MG </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Wedges, Fries, Nugget</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nasi Kerabu MG</h3>
                    <!--<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>-->
                    <p>Nasi Kerabu MG merupakan hidangan istimewa di MG Fried Chicken. Nasi Kerabu MG kami sajikan bersama Ayam Goreng yang rangup di luar, lembut dan 
                      juicy di dalam. Kombinasi nasi kerabu bersama ulam-ulaman serta ayam goreng akan menambahkan lagi keenakkannya.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/spec1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bubur Ayam MG</h3>
                    <!--<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>-->
                    <p>Bubur Ayam MG merupakan sajian istimewa di MG Fried Chicken. Bubur Ayam yang digabungkan bersama Ayam Goreng MG menambahkan lagi kenikmatan dalam 
                      setiap suapan.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/spec2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nasi Lemak MG </h3>
                    <p class="fst-italic">Anda tidak sempat untuk bersarapan? Jangan risau kami di MG Fried Chicken menyediakan Set Sarapan Pagi kepada anda. Set Sarapan 
                      Pagi iaitu Nasi Lemak MG bersama Ayam Goreng MG seketul.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/spec3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ayam Goreng MG </h3>
                    <!--<p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>-->
                    <p>Jom dapatkan Set Ayam Goreng di MG Fried Chicken sekarang. kami menyediakan pelbagai jenis set ayam goreng sebagai pilihan anda. Antaranya ialah 
                      MG Set1, MG Set2, MG Set3, MG Set4.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/spec4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Wedges, Fries, Nugget</h3>
                   <!-- <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>-->
                    <p>MG Fried Chicken juga ada menyediakan hidangan sampingan seperti wedges, fries dan nugget.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/spec5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <!--<section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

           <!-- <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

           <!-- <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

         <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>--><!-- End Events Section -->
	  
	  
	    
   <!-- ======= Chefs Section ======= -->
    <!--<section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Staff <span>&nbsp; MG Fried Chicken</span></h2>
          <p>Kami sedia memberikan perkhidmatan yang terbaik untuk anda.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Siti Aishah</h4>
                <span>Pengurus MG Fried Chicken</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdul Maliki</h4>
                <span>Juruwang MG Fried Chicken</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Amalin</h4>
                <span>Juruwang MG Fried Chicken</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div> 
    </section>--><!-- End Chefs Section -->
	  
	  <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Galeri &nbsp;<span> MG Fried Chicken</span></h2>
          <p>Abadikan Kenangan Anda Bersama Kami di MG Fried Chicken.</p>
        </div>

        <div class="row no-gutters">

          <?php

          $i=1;

          $query2=mysqli_query($con,"select * from galeri LIMIT 8");
          while($res2=mysqli_fetch_array($query2))
          {
          $recno=$res2['recno'];
          $imej=$res2['imej'];
                  
          ?>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="fail/<?php echo $imej;?>" class="gallery-lightbox">
                <img src="fail/<?php echo $imej;?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <?php } ?>

        </div>

      </div>
    </section><!-- End Gallery Section -->
	  
	  
    <!-- ======= Cawangan Section ======= -->
	  <br><br>
    <section id="cawangan" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Cawangan &nbsp;<span>MG Fried Chicken</span></h2>
          <p>Cawangan MG Fried Chicken.</p>
        </div>

        <div class="row">

          <?php

          $i=1;

          $query2=mysqli_query($con,"select * from cawangan");
          while($res2=mysqli_fetch_array($query2))
          {
          $recno=$res2['recno'];
          $cawangan=$res2['cawangan'];
          $imej=$res2['imej'];
                  
          ?>

          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="fail/<?php echo $imej;?>"  class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>MG Fried Chicken</h4>
                <span><?php echo $cawangan ?> </span>
                <div class="social">
                  <a href="https://www.wasap.my/+601110550075/NkAyamGorengMG"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://www.facebook.com/mgfriedchickenhq"><i class="bi bi-facebook"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Cawangan Section -->



    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Untuk <span>Tempahan</span></h2>
          <p>MG Fried Chicken menyediakan perkhidmatan COD kepada pelanggan kami.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

  
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/test1.jpg" class="testimonial-img" alt="">
                <h3>En. Zainal</h3>
                <h4>Pelanggan</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Ayam goreng MG Fried Chicken sedap sangat. Ayam yang rangup dan lembut.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/test2.jpg" class="testimonial-img" alt="">
                <h3>Sarah Ahmad</h3>
                <h4>Pensyarah</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nasi lemak MG memang terbaik!!! Ade ayam goreng lagi.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/test2.jpg" class="testimonial-img" alt="">
                <h3>Khairi Yusof</h3>
                <h4>Guru</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Murahnya makanan di MG Fried Chicken...nanti boleh pergi lagi dengan kawan-kawan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/test1.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Azhar</h3>
                <h4>Pengurus Kedai Runcit</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Anak-anak semua suka makan ayam goreng di MG Fried Chicken. Selain ade ayam, wedges, nugget dan fries juga ada di MG Fried Chicken.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/test1.jpg" class="testimonial-img" alt="">
                <h3>Shakila Fauzi</h3>
                <h4>Pengurus Bank</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nasi kerabu dengan ayam goreng memang padu lahh!!!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Hubungi</span> Kami</h2>
          <p>Kunjungi Kami Di Sini.</p>
        </div>
      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.351104451525!2d103.2657585!3d3.7363701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8b7adf3327e35%3A0x5ae4fe677f865a6e!2sMG%20FRIED%20CHICKEN!5e0!3m2!1sen!2smy!4v1647325678762!5m2!1sen!2smy" 
        width="1520" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>A67, Lrg IS 103, Perkampungan Indera Sempurna,25150 Kuantan, Pahang</p>
            </div>

            <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Waktu Buka:</h4>
              <p>Setiap Hari:<br>9:00 AM - 9:00 PM</p>
            </div>

            <!--<div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>-->

            <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>No Telefon:</h4>
              <p>011-1055 0075</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

   <?php include 'footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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