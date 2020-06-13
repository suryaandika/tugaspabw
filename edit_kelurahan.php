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
          <li><a href="index1.php">Home</a></li>
          <li class="drop-down"><a href="">Data Master</a>
            <ul>
              <li class="active"><a href="kabupaten.php">Kabupaten</a></li>
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
          <h2>Form Ubah Kelurahan/Desa</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= form input ======= -->

 <br>
 <br>   
<?php
require "koneksidatabase.php";
if( !isset($_GET['id_kelurahan']));
$id_kecamatan=$_GET['id_kelurahan'];
$sql= "SELECT * FROM Kelurahan WHERE id_kelurahan='$id_kelurahan'";
$query=mysqli_query($db,$sql);
$Kelurahan=mysqli_fetch_array($query);
?>

<h3>Form Ubah Kelurahan</h3>
<form method= "post" action= "proses_edit_kelurahan.php?id_kelurahan=<?=$id_kelurahan?>">
<table width= "600" border= "0">

<tr>
<td width= "157">Nama Kelurahan </td>
<td width= "433"><input type= "text"
name= "nama_kelurahan" size= "30" value= "<?php echo $Kelurahan['nama_kelurahan'];?>"/>
<input type = "hidden" name = "id_kelurahan" value="<?=$id_kelurahan?>">
</td>
</tr>

<tr>
<td>Jumlah Penduduk</td>
<td>
<input type="text"
name="jumlah_penduduk"
size= "30" value= "<?php echo $Kelurahan['jumlah_penduduk'];?>"/>
</td>
</tr>

 <tr>
            <td>Kecamatan</td>
        <td>
         <select name="id_kecamatan">
           <?php
           {
        echo "<option value=''>Pilih Kota/Kecamatan</option>";
      }
            include "koneksidatabase.php";
            $sql="select * from Kecamatan";

            $query=mysqli_query($db,$sql);
            $no=0;
            while ($Kecamatan = mysqli_fetch_array($query)) {
            $no++;

            $ket="";
            if (isset($_GET['Kelurahan'])) {
                $Kecamatan = trim($_GET['Kecamatan']);

                if ($Kecamatan==$Kecamatan['id_kecamatan'])
                {
                    $ket="selected";
                }
            }
            ?>
            <option <?php echo $ket; ?> value="<?php echo $Kecamatan['id_kecamatan'];?>"><?php echo $Kecamatan['nama_kecamatan'];?></option>
            <?php
  }
  ?>
  </td>
        </select>
        </tr>

 
        <tr>
            <td><input type="hidden" name="id_kelurahan"
            value="0"/>
            </td>
            <td><input type="submit" name="simpan"
            value="Simpan" /></td>
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