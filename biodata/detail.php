<?php
include("koneksi.php");

// cek id 
if (!isset($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan!'); window.location='data.php';</script>";
    exit;
}

$id = $_GET['id'];

// ambil data
$qry = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
$data = mysqli_fetch_assoc($qry);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='data.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#d1e6d4">

<?php include("navbar.php"); ?>

<div class="container my-5">

    <h3 class="text-center mb-4">Detail Biodata</h3>

    <!-- Tombol Open Popup -->
    <div class="text-center">
        <button class="btn btn-primary" id="openModal">
            Lihat Detail Siswa
        </button>
        <a href="data.php" class="btn btn-secondary">Kembali</a>
    </div>

</div>

<!-- ===================== MODAL DETAIL ======================= -->
<div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content shadow-lg border-0">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Detail Biodata: <?= $data['nama'] ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" 
                             class="img-fluid rounded-circle mb-3" width="150">
                        <h5 class="fw-bold"><?= $data['nama'] ?></h5>
                        <p class="text-muted"><?= $data['nisn'] ?></p>
                    </div>

                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tr>
                                <td><b>Tempat Lahir</b></td>
                                <td><?= $data['tp_lahir'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir</b></td>
                                <td><?= $data['tg_lahir'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td><?= $data['alamat'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td><?= $data['email'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td><?= $data['jk'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <a href="form_edit.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                <a href="proseshapus.php?id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>
<!-- ========================================================== -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
// otomatis buka modal saat halaman detail.php dibuka
var myModal = new bootstrap.Modal(document.getElementById('detailModal'));
myModal.show();

// tombol untuk membuka ulang modal
document.getElementById("openModal").addEventListener("click", function() {
    myModal.show();
});
</script>

</body>
</html>
