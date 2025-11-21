<?php
include("koneksi.php");

$id = $_GET['id'];

$qry = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan='$id'");
$data = mysqli_fetch_assoc($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#d1e6d4">

<div class="container mt-5">
    <div class="col-8 m-auto">
        <div class="card shadow">
            <div class="card-header">
                <b>EDIT DATA KARYAWAN</b>
            </div>

            <div class="card-body">

                <form action="proses_edit.php" method="post">
                    <input type="hidden" name="id_karyawan" value="<?= $data['id_karyawan'] ?>">

                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control mb-3"
                           name="nama_karyawan"
                           value="<?= $data['nama_karyawan'] ?>"
                           required>

                    <label>Jabatan</label>
                    <input type="text" class="form-control mb-3"
                           name="jabatan"
                           maxlength="50"
                           value="<?= $data['jabatan'] ?>"
                           required>

                    <label>Tanggal Masuk</label>
                    <input type="date" class="form-control mb-3"
                           name="tanggal_masuk"
                           value="<?= $data['tanggal_masuk'] ?>"
                           required>

                    <label>Gaji</label>
                    <input type="number" class="form-control mb-3"
                           name="gaji"
                           min="0"
                           value="<?= $data['gaji'] ?>"
                           required>

                    <button class="btn btn-primary">Simpan Perubahan</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
