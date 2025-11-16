<?php
$host     = "localhost";   // server
$user     = "root";        // username MySQL
$pass     = "";            // password MySQL
$db       = "utsatha";  // nama database kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
