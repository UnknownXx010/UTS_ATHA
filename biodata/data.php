<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Biodata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#e3f0ff">
    <?php include_once("navbar.php"); ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-10 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <b>DATA BIODATA SISWA</b>
                        <a href="formtambah.php" class="btn btn-light btn-sm float-end">
                            + Tambah Siswa
                        </a>
                    </div>

                    <div class="card-body">

                        <!-- TABEL DATA -->
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include("koneksi.php");

                                $query = mysqli_query($koneksi, "SELECT * FROM biodata ORDER BY id DESC");
                                $no = 1;

                                foreach ($query as $data) {
                                ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['nisn'] ?></td>
                                        <td><?= $data['tg_lahir'] ?></td>
                                        <td><?= $data['jk'] ?></td>
                                        <td>
                                            <a href="detail.php?id=<?= $data['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                                            <a href="formedit.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="proseshapus.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm"
                                               onclick="return confirm('Yakin hapus data?')">Hapus</a>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
