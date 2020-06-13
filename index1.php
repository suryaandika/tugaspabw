<?php
$username = isset($_SESSION['username']) ? $_SESSION['username'] :  false;
$password = isset($_SESSION['password']) ? $_SESSION['password'] : false;

if ($username = false){
   echo "<script language='javascript'>
        alert('anda belum login');
        window.open('index.php','_top')
        </script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Riau - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.0.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="surya:Suryaandikaa16@gmail.com">Suryaandikaa16@gmail.com</a>
        <i class="icofont-phone"></i> +628 23 8685 27**
      </div>
      <div class="social-links">
        <a href="@andiii61" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/andiii61/?hl=en" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">RIAU</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li class="drop-down"><a href="">Data Master</a>
            <ul>
              <li><a href="kabupaten.php">Kabupaten</a></li>
              <li><a href="list-kecamatan.php">Kecamatan</a></li>
              <li><a href="list-kelurahan.php">Desa/Kelurahan</a></li>
            </ul>
          </li>
          <li><a href="belumbuat.php">Data Penduduk</a></li>
          <li class="drop-down"><a href="">Pencatatan Sipil</a>
            <ul>
              <li><a href="belumbuat.php">Pengurusan Domisili</a></li>
              <li><a href="belumbuat.php">Pengurusan KTP</a></li>
              <li><a href="belumbuat.php">Pengurusan Surat Jalan</a></li>
            </ul>
          </li>
          <li><a href="belumbuat.php">Laporan</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-8.jpg);">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
              <h2>Selamat Datang Di <span>RIAU</span></h2>
              <p>Riau (Jawi: رياو) adalah sebuah provinsi di Indonesia yang terletak di bagian tengah pulau Sumatra. ... Kepulauan ini dimekarkan menjadi provinsi tersendiri pada Juli 2004. Ibu kota dan kota terbesar Riau adalah Pekanbaru.</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-6.jpg);">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
              <h2>Pemimpin Provinsi Riau</h2>
              <p>Drs. H. Syamsuar, M.Si.[2] (lahir di Jumrah, Rimba Melintang, Rokan Hilir, Riau, 8 Juni 1954; umur 65 tahun) adalah Gubernur Riau periode 2019—2024. Syamsuar pernah menjabat sebagai Bupati Siak 2 periode yakni 2011—2016 dan 2016—2019 dan Wakil Bupati Siak periode 2001—2006.<br>
              Brigadir Jenderal TNI (Purn.) H. Edy Afrizal Natar Nasution, S.I.P. (lahir di Bengkalis, Riau, 29 Mei 1961; umur 58 tahun) adalah seorang Purnawirawan perwira tinggi TNI-AD yang sebelumnya menjabat Komandan Korem 031/Wirabima.[1][2].</p>
            </div>
          </div>
        </div>

       

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><strong>Pelayanan</strong> di web kami</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Input/Edit Kabupaten</a></h4>
              <p class="description">Anda bisa mendaftarkan atau menginput kabupaten anda disini, dan akan tersimpan didatabase kami menjadi data untuk pemerintah provinsi riau.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
              <h4 class="title"><a href="">Input/Edit Kecamatan</a></h4>
              <p class="description">Disini kami membuat sebuah form untuk menambahkan kecamatan yang ada di riau, kemudian akan tersimpan website kami.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href="">Input/Edit Desa/Kelurahan</a></h4>
              <p class="description">Sama halnya dengan pelayanan disamping kami juga membuat form untuk menambahkan desa/kelurahan yang ada di riau</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Pengurusan Domisili</a></h4>
              <p class="description">Mengurus surat domisili tidak perlu repot datang ke kantor, disini anda bisa membuat pengajuan surat domisili dan akan dihubungkan dengan pihak yang bersangkutan</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-settings"></i></div>
              <h4 class="title"><a href="">Pengurusan KTP</a></h4>
              <p class="description">Pengurusan KTP via online dan tunggu info ketersediaannya tanpa perlu datang ke kantor</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Pengurusan Surat Jalan</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

           <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>INSIDER9</span></strong>
        </div>
        <div class="credits"> NOTE: WEB INI HANYA UNTUK PEMBELAJARAN 
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer>

         
        </div>
      </div>
    </div>

<!---------->

   <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>