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
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
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
          <li ><a href="index1.php">Home</a></li>
          <li class="drop-down" class="active"><a href="">Data Master</a>
            <ul>
              <li><a href="kabupaten.php">Kabupaten</a></li>
              <li class="active"><a href="list-kecamatan.php">Kecamatan</a></li>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar Kecamatan DI Provinsi Riau</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container=text-md-left">
    <br>
    <br>
     <nav align="center">
        <a href="form-kecamatan.php">[+] Tambah Baru</a>
    </nav>
    <table border="1" align="center">
    <thead>
        <tr>
            <th>ID KECAMATAN</th>
            <th>NAMA KECAMATAN</th>
            <th>JUMLAH DESA</th>
            <th>NAMA KABUPATEN</th>
            <th>IBUKOTA KABUPATEN</th>
            <th>EDIT</th>
            <th>HAPUS</th>
           
        </tr>
    </thead>
    <tbody>

        <?php include("koneksidatabase.php");
        $sql = "SELECT * FROM Kecamatan, Kabupaten WHERE Kecamatan.ID = Kabupaten.ID";
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['id_kecamatan']."</td>";
            echo "<td>".$data['nama_kecamatan']."</td>";
            echo "<td>".$data['jumlah_desa']."</td>";
            echo "<td>".$data['nama_kabupaten']."</td>";
            echo "<td>".$data['ibukota_kabupaten']."</td>";
            echo "<td><a href='edit_kecamatan.php?ID=".$data['ID']."'>edit</td>";
            echo "<td><a href='hapus_kecamatan.php?ID=".$data['ID']."'>hapus</td>";


            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p align="center">Total: <?php echo mysqli_num_rows($query) ?></p>

    <br>
    <br>


          <div class="col-lg-4">

           
             <!-------batas sidebar search-------->

            </div><!-- End sidebar search -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

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