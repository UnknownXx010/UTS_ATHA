<?php
include("koneksi.php");

$id_karyawan    = $_POST['id_karyawan'];
$nama_karyawan  = $_POST['nama_karyawan'];
$jabatan        = $_POST['jabatan'];
$tanggal_masuk  = $_POST['tanggal_masuk'];
$gaji           = $_POST['gaji'];

$qry = "UPDATE karyawan SET 
        nama_karyawan='$nama_karyawan',
        jabatan='$jabatan',
        tanggal_masuk='$tanggal_masuk',
        gaji='$gaji'
        WHERE id_karyawan='$id_karyawan'";

mysqli_query($koneksi, $qry);

header("Location: index.php");
exit();
?>
