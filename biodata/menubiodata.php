<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Biodata Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#e3f3e8;">

<?php include_once("navbar.php"); ?>

<div class="container">
    <div class="row my-5">
        <div class="col-10 m-auto">

            <div class="card shadow p-4 bg-body-tertiary rounded">
                
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Menu Biodata Siswa</h4>
                </div>

                <div class="card-body">

                    <p class="lead">Silakan pilih menu di bawah ini untuk mengelola data siswa.</p>

                    <div class="row text-center mt-4">

                        <div class="col-md-6 mb-4">
                            <a href="data.php" class="btn btn-primary w-100 py-3">
                                <i class="fa-solid fa-users"></i> Lihat Data Biodata
                            </a>
                        </div>

                        <div class="col-md-6 mb-4">
                            <a href="formtambah.php" class="btn btn-success w-100 py-3">
                                <i class="fa-solid fa-user-plus"></i> Tambah Biodata Baru
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/123abc456.js" crossorigin="anonymous"></script>
</body>
</html>
