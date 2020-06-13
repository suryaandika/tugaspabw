<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'tifecom_Surya_andika'; // UserServer
$db_pass = 'elhamid_10'; // Password Server
$db_name = 'tifecom_Kependudukan'; // Nama Database

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>