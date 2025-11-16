<?php
include("koneksi.php");

$id        = $_POST['id'];
$nama      = $_POST['nama'];
$nisn      = $_POST['nisn'];
$tp_lahir  = $_POST['tp_lahir'];
$tg_lahir  = $_POST['tg_lahir'];
$alamat    = $_POST['alamat'];
$email     = $_POST['email'];
$jk        = $_POST['jk'];

$qry = "UPDATE biodata SET 
        nama='$nama',
        nisn='$nisn',
        tp_lahir='$tp_lahir',
        tg_lahir='$tg_lahir',
        alamat='$alamat',
        email='$email',
        jk='$jk'
        WHERE id='$id'";

mysqli_query($koneksi, $qry);

header("Location: data.php");
exit();
?>
