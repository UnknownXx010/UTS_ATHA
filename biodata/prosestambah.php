<?php
// 1. Koneksi database
include("koneksi.php");

// 2. Ambil data dari form
$nama       = $_POST['nama'];
$nisn       = $_POST['nisn'];
$tp_lahir   = $_POST['tp_lahir'];
$tg_lahir   = $_POST['tg_lahir'];
$alamat     = $_POST['alamat'];
$email      = $_POST['email'];
$jk         = $_POST['jk'];

// 3. Query insert
$qry = "INSERT INTO biodata (nama, nisn, tp_lahir, tg_lahir, alamat, email, jk)
        VALUES ('$nama', '$nisn', '$tp_lahir', '$tg_lahir', '$alamat', '$email', '$jk')";

// 4. Eksekusi query
$simpan = mysqli_query($koneksi, $qry);

// 5. Cek hasil
if ($simpan) {
    echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'data.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Gagal menambah data');
            document.location.href = 'form_tambah.php';
        </script>
    ";
}
?>
