<?php

include "koneksidatabase.php";

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Simpan'])){

    // ambil data dari formulir
    $ID                 =$_POST ['ID'];
    $nama_kecamatan     =$_POST ['nama_kecamatan'];
    $daerah_kabupaten   =$_POST ['daerah_kabupaten'];
    $jumlah_penduduk    =$_POST ['jumlah_penduduk'];

   
// buat query update
$sql = "UPDATE Kecamatan SET nama_kecamatan='$nama_kecamatan',daerah_kabupaten='$daerah_kabupaten',jumlah_penduduk='$jumlah_penduduk' WHERE ID =$ID";
$query = mysqli_query($db, $sql);

// apakah query berhasil diedit?
if( $query ) {
    // kalau berhasil alihkan ke halaman data kabupaten.php
        echo "<script language='javascript'>
alert('Proses Ubah Data Berhasil');
window.open('list-kecamatan.php','_top')
</script>";               
} else {
    // kalau gagal tampilkan pesan
         echo "<script language='javascript'>
 alert('Proses simpan data Gagal');
 window.open('form-kecamatan.php','_top')
 </script>";
}


} else {
die("Akses dilarang");
}

?>