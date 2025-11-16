<?php
include("koneksi.php");

$id = $_GET['id'];

// Ambil data berdasarkan ID
$qry = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
$data = mysqli_fetch_assoc($qry);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#d1e6d4">

<div class="container mt-5">
    <div class="col-8 m-auto">
        <div class="card shadow">
            <div class="card-header">
                <b>EDIT DATA SISWA</b>
            </div>
            <div class="card-body">

                <form action="proses_edit.php" method="post">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">

                    <label>Nama</label>
                    <input type="text" class="form-control mb-3" name="nama" value="<?= $data['nama'] ?>" required>

                    <label>NISN</label>
                    <input type="text" class="form-control mb-3" name="nisn" value="<?= $data['nisn'] ?>" required>

                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control mb-3" name="tp_lahir" value="<?= $data['tp_lahir'] ?>">

                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control mb-3" name="tg_lahir" value="<?= $data['tg_lahir'] ?>">

                    <label>Alamat</label>
                    <textarea class="form-control mb-3" name="alamat"><?= $data['alamat'] ?></textarea>

                    <label>Email</label>
                    <input type="email" class="form-control mb-3" name="email" value="<?= $data['email'] ?>">

                    <label>Jenis Kelamin</label>
                    <select class="form-control mb-3" name="jk">
                        <option <?= ($data['jk']=="Laki-laki")?'selected':'' ?>>Laki-laki</option>
                        <option <?= ($data['jk']=="Perempuan")?'selected':'' ?>>Perempuan</option>
                    </select>

                    <button class="btn btn-primary">Simpan Perubahan</button>
                    <a href="data.php" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
