<?php 

require "koneksidatabase.php";

$id_kelurahan =$_GET['id_kelurahan'];

$sql = "DELETE FROM Kelurahan 
    WHERE id_kelurahan ='$id_kelurahan'";
$hasil = mysqli_query($db, $sql);

if ($hasil) {
	echo "<script language='javascript'>
	alert ('Proses hapus data berhasil');
	window.open('list-kelurahan.php','_top')
	</script>";
} else{
	echo "<script language='javascript'>
	alert ('Proses hapus Data Gagal');
	window.open('list-kelurahan.php','_top')
	</script>";
}

 ?>