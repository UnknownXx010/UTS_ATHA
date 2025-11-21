<?php
include("koneksi.php");

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM karyawan WHERE id='$id'");

header("Location: data.php");
exit();
?>
