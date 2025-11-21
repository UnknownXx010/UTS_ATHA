<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#e3f0ff">

    <?php include_once("navbar.php"); ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-10 m-auto">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <b>DATA KARYAWAN</b>
                        <a href="formtambah.php" class="btn btn-light btn-sm float-end">
                            + Tambah Karyawan
                        </a>
                    </div>

                    <div class="card-body">

                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Gaji</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include("koneksi.php");

                                $query = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY id_karyawan DESC");
                                $no = 1;

                                foreach ($query as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_karyawan'] ?></td>
                                        <td><?= $data['jabatan'] ?></td>
                                        <td><?= $data['tanggal_masuk'] ?></td>
                                        <td>Rp <?= number_format($data['gaji'], 0, ',', '.') ?></td>
                                        <td>
                                            <a href="detail.php?id=<?= $data['id_karyawan'] ?>" class="btn btn-info btn-sm">
                                                Detail
                                            </a>
                                            <a href="formedit.php?id=<?= $data['id_karyawan'] ?>" class="btn btn-warning btn-sm">
                                                Edit
                                            </a>
                                            <a href="proseshapus.php?id=<?= $data['id_karyawan'] ?>"
                                               onclick="return confirm('Yakin hapus data?')"
                                               class="btn btn-danger btn-sm">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
