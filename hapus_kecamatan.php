<?php 

require "koneksidatabase.php";

$ID =$_GET['ID'];

$sql = "DELETE FROM Kecamatan 
    WHERE ID ='$ID'";
$hasil = mysqli_query($db, $sql);

if ($hasil) {
	echo "<script language='javascript'>
	alert ('Proses hapus data berhasil');
	window.open('list-kecamatan.php','_top')
	</script>";
} else{
	echo "<script language='javascript'>
	alert ('Proses hapus Data Gagal');
	window.open('list-kecamatan.php','_top')
	</script>";
}

 ?>