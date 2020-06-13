<?php

include "koneksidatabase.php";

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Simpan'])){

    // ambil data dari formulir
    $ID                 =$_POST ['ID'];
    $nama_kelurahan     =$_POST ['nama_kelurahan'];
    $daerah_kec         =$_POST ['daerah_kec'];
    $daerah_kab         =$_POST ['daerah_kab'];

   
// buat query update
$sql = "UPDATE Kelurahan SET nama_kelurahan='$nama_kelurahan',daerah_kec='$daerah_kec',daerah_kab='$daerah_kab' WHERE ID =$ID";
$query = mysqli_query($db, $sql);

// apakah query berhasil diedit?
if( $query ) {
    // kalau berhasil alihkan ke halaman data kabupaten.php
        echo "<script language='javascript'>
alert('Proses Ubah Data Berhasil');
window.open('list-kelurahan.php','_top')
</script>";               
} else {
    // kalau gagal tampilkan pesan
         echo "<script language='javascript'>
 alert('Proses simpan data Gagal');
 window.open('form-kelurahan.php','_top')
 </script>";
}


} else {
die("Akses dilarang");
}

?>