<?php

include("koneksidatabase.php");

if( isset($_GET['ID']) ){

    // ambil id dari query string
    $ID = $_GET['ID'];

    // buat query hapus
    $sql = "DELETE FROM Kabupaten WHERE ID=$ID";
    $hasil = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if($hasil) {
        echo "<script language = 'javascript'>
              alert('Proses Hapus Data Berhasil');
              window.open('kabupaten.php','_top');
              </script>";
   } else {
              echo "<script language = 'javascript'>
              alert('Proses Hapus Data Gagal');
              window.open('kabupaten.php','_top');
              </script>";
    }

} else {
    die("akses dilarang...");
}

?>