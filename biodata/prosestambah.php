<?php

include("koneksi.php");

$nama_karyawan  = $_POST['nama_karyawan'];
$jabatan        = $_POST['jabatan'];
$tanggal_masuk  = $_POST['tanggal_masuk'];
$gaji           = $_POST['gaji'];

$qry = "INSERT INTO karyawan (nama_karyawan, jabatan, tanggal_masuk, gaji)
        VALUES ('$nama_karyawan', '$jabatan', '$tanggal_masuk', '$gaji')";

$simpan = mysqli_query($koneksi, $qry);

if ($simpan) {
    echo "
        <script>
            alert('Data karyawan berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Gagal menambah data');
            document.location.href = 'formtambah.php';
        </script>
    ";
}
?>
