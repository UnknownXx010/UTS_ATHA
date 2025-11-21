<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #b6e2d3, #eaf7ef);
        }

        .hero-box {
            background: white;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        .hero-box h1 {
            font-weight: 700;
            color: #2c6e49;
        }

        .hero-box p {
            font-size: 18px;
        }

        .btn-custom {
            padding: 10px 25px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <?php include_once("navbar.php"); ?>

    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 80vh;">
            <div class="col-lg-6">
                <div class="hero-box">
                    <h1>Selamat Datang!</h1>
                    <p class="mt-3">
                        Ini adalah aplikasi untuk mengelola <b>Biodata karyawan</b> secara mudah dan cepat.
                    </p>

                    <a href="http://localhost/UTS_ATHA/UTS_ATHA/biodata/menubiodata.php" class="btn btn-success btn-custom mt-3">
                        ➤ Masuk ke Menu data karyawan
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

 