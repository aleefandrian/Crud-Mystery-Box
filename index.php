<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .jumbotron {
        background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">RAR Laundry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to RAR Laundry</h1>
        <p class="lead">laundry yang cepat, mantap, dan tahan lama cuma 7RB per Kg aja lohh </p>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary btn-lg mx-2" href="tabel_data.php" role="button">tabel data laundry</a>
            <a class="btn btn-primary btn-lg mx-2" href="tabel_keuangan.php" role="button">tabel keuangan laundry</a>
            <a class="btn btn-primary btn-lg mx-2" href="tabel_pemesanan.php" role="button">tabel pemesanan</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>