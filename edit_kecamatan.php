<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Riau</title>
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
          <li class="active"><a href="index.html">Home</a></li>
          <li class="drop-down"><a href="">Data Master</a>
            <ul>
              <li><a href="kabupaten.php">Kabupaten</a></li>
              <li><a href="list-kecamatan.php">Kecamatan</a></li>
              <li><a href="list-kelurahan.php">Desa/Kelurahan</a></li>
            </ul>
          </li>
          <li><a href="about.html">Data Penduduk</a></li>
          <li class="drop-down"><a href="">Pencatatan Sipil</a>
            <ul>
              <li><a href="#">Pengurusan Domisili</a></li>
              <li><a href="#">Pengurusan KTP</a></li>
              <li><a href="#">Pengurusan Surat Jalan</a></li>
            </ul>
          </li>
          <li><a href="services.html">Laporan</a></li>
          <li class="drop-down"><a href="">User</a>
            <ul>
              <li><a href="#">Profil</a></li>
              <li><a href="#">Ubah Password</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Form Ubah Kecamatan</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= form input ======= -->

 <br>
 <br>   
<?php
require "koneksidatabase.php";
$ID=$_GET['ID'];
$sql= "SELECT * FROM Kecamatan WHERE ID='$ID'";
$query=mysqli_query($db,$sql);
$Kecamatan=mysqli_fetch_array($query);
?>

<h3>Form Ubah Kecamatan</h3>
<form method= "post" action= "proses_edit_kecamatan.php?ID=<?=$ID?>">
<table width= "600" border= "0">

<tr>
<td width= "157">Nama Kecamatan </td>
<td width= "433"><input type= "text"
name= "nama_kecamatan" size= "30" value= "<?php echo $Kecamatan['nama_kecamatan'];?>"/>
<input type = "hidden" name = "ID" value="<?=$ID?>">
</td>
</tr>

<tr>
<td>Jumlah Desa</td>
<td>
<input type="text"
name="daerah_kabupaten"
size= "30" value= "<?php echo $Kecamatan['daerah_kabupaten'];?>"/>
</td>
</tr>

<tr>
<td>Jumlah penduduk</td>
<td>
<input type="text" name="jumlah_penduduk" size="20" value="<?php echo $Kecamatan['jumlah_penduduk'];?>"/>
</td>
</tr>

<tr>
<td>
<input type="hidden" name="ID" value="<?php echo $ID;?>"/>
</td>
<td>
<input type= "submit" name= "Simpan"
value= "Simpan"/>
</td>
</tr>

</table>
</form>
    
<br>
<br>

    

           
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