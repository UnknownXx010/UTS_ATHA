<?php
include("koneksi.php");

if (!isset($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$id = $_GET['id'];

$qry = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan='$id'");
$data = mysqli_fetch_assoc($qry);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#d1e6d4">

<?php include("navbar.php"); ?>

<div class="container my-5">

    <h3 class="text-center mb-4">Detail Karyawan</h3>

    <div class="text-center">
        <button class="btn btn-primary" id="openModal">
            Lihat Detail Karyawan
        </button>
        <a href="http://localhost/UTS_ATHA/index.php " class="btn btn-secondary">Kembali</a>
    </div>

</div>


<div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content shadow-lg border-0">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Detail: <?= $data['nama_karyawan'] ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" 
                             class="img-fluid rounded-circle mb-3" width="150">
                        <h5 class="fw-bold"><?= $data['nama_karyawan'] ?></h5>
                        <p class="text-muted"><?= $data['jabatan'] ?></p>
                    </div>

                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tr>
                                <td><b>Nama Karyawan</b></td>
                                <td><?= $data['nama_karyawan'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Jabatan</b></td>
                                <td><?= $data['jabatan'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Masuk</b></td>
                                <td><?= $data['tanggal_masuk'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Gaji</b></td>
                                <td>Rp <?= number_format($data['gaji'], 0, ',', '.') ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <a href="formedit.php?id=<?= $data['id_karyawan'] ?>" class="btn btn-warning">Edit</a>
                <a href="proseshapus.php?id=<?= $data['id_karyawan'] ?>" class="btn btn-danger"
                   onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
var myModal = new bootstrap.Modal(document.getElementById('detailModal'));
myModal.show();

document.getElementById("openModal").addEventListener("click", function() {
    myModal.show();
});
</script>

</body>
</html>
