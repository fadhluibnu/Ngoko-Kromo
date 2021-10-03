<?php
session_start();
require '../functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // cek cookie
    $result = mysqli_query($koneksi, "SELECT ngoko FROM kamus WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);


    if ($key === hash('sha256', $row['ngoko'])) {
        $_SESSION['requestKamus'] = true;
    }
}

if (isset($_SESSION["requestKamus"])) {
    header('Location: ../beranda/index.php');
    exit;
}
if (isset($_POST["requestKamus"])) {

    if (tambahKamus($_POST["ngoko"], $_POST["kromo"]) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambahkan');
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Ditambahkan');
        </script>
        ";
    }

    $ngoko = $_POST['ngoko'];
    $kromo = $_POST['kromo'];
    $result = mysqli_query($koneksi, "SELECT * FROM kamus WHERE ngoko = '$ngoko'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["requestKamus"] = true;
        setcookie('id', $row['id'], time() + 1);
        setcookie('key', hash('sha256', $row['ngoko']), time() + 1);

        header('Location: ../beranda/index.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="css/request.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="../asset/favicon.ico">
    <title>Request - Negesi</title>
</head>

<body>
    <header class="navbar navbar-light mb-5 bg-light">
        <div class="container">
            <a class="navbar-brand m-auto d-flex align-items-center" href="../index.php">
                <div class="img" style="width: 35px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 134.16 135.95">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #0d5fda;
                                }

                                .cls-2 {
                                    fill: #0d5fda;
                                }
                            </style>
                        </defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1" d="M104.33,95a11,11,0,0,1-.48,3.24,11.18,11.18,0,0,1-10.71,7.94H48.46a3.46,3.46,0,0,0-.58,0l-.31,0A11.18,11.18,0,0,1,37.21,95V68.24L57,60.7a11.19,11.19,0,0,0,2.6-1.41V72.66A11.18,11.18,0,0,0,70.77,83.84H93.14A11.18,11.18,0,0,1,104.33,95Z" />
                                <path class="cls-1" d="M134.16,65.25v59.61a11.18,11.18,0,0,1-9.7,11.09H46.91a11.19,11.19,0,0,1-9.7-11.09V113.63H99.57q.51,0,1,0t1,0a11.18,11.18,0,0,0,10.16-11.14V87.57A11.18,11.18,0,0,0,100.6,76.39H77.14A11.19,11.19,0,0,1,67,65.25V35.47a11.19,11.19,0,0,1,22.37,0v7.41A11.18,11.18,0,0,0,100.6,54.06H123A11.19,11.19,0,0,1,134.16,65.25Z" />
                                <path class="cls-1" d="M118.49,11.58a11.19,11.19,0,0,1-11.24,11.13l-17.84-.09H87.33a13.16,13.16,0,0,0-18.24-.09H67l-7.46,0h-1.2a11.18,11.18,0,0,0-19.92-.11H37.21l-8.26,0L29,11.13A11.18,11.18,0,0,1,37.21.41a10.72,10.72,0,0,1,3-.41L59.58.1,67,.14,89.41.25l18,.09A11.18,11.18,0,0,1,118.49,11.58Z" />
                                <path class="cls-1" d="M59.58,59.29A11.19,11.19,0,0,1,57,60.7L37.21,68.24l-22,8.4a11.18,11.18,0,1,1-8-20.9l30-11.45V27.91a11.19,11.19,0,0,0,22.37,0v8.21l3.87,10.13A11.19,11.19,0,0,1,59.58,59.29Z" />
                                <path class="cls-2" d="M58.28,27.51a9.89,9.89,0,1,1-18.35-5.13,9.57,9.57,0,0,1,1-1.35,9.89,9.89,0,0,1,17.36,6.48Z" />
                                <path class="cls-1" d="M57.31,27a9.4,9.4,0,1,1-17.44-4.88,9.1,9.1,0,0,1,.94-1.28A9.4,9.4,0,0,1,57.31,27Z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="ms-2">Negesi</span>
            </a>
        </div>
    </header>

    <div class="container-fluid pb-3">
        <div class="row flex-column flex-md-row align-items-center align-items-md-start">
            <div class="col-md-5 col-lg-6">
                <h1 class="text">Lengkapi Kamus Kami</h1>
                <img src="../asset/illustration-request.png" alt="">
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="bg-light p-4 rounded">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link kamuslink active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-journal-bookmark"></i> Kamus</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pocunglink" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-book"></i> Pocung</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link gambuhlink" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-book"></i> Gambuh</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="kamus p-4">
                                <div class="mb-3">
                                    <h2>Kamus</h2>
                                </div>
                                <form action="" method="post" id="dKamus">
                                    <div class="mb-3">
                                        <label for="ngoko">Bahasa Ngoko</label>
                                        <input class="form-control" type="text" id="ngoko" name="ngoko" placeholder="Bahasa Ngoko" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kromo">Bahasa Kromo (<em>Terjemahan</em>)</label>
                                        <input class="form-control" type="text" id="kromo" name="kromo" placeholder="Bahasa Kromo" required>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <a href="../" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                                        <button name="requestKamus" type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Submit</button>
                                    </div>
                                </form>
                                <div class="spinner-grow text-primary d-none m-auto sKamus" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="kamus p-4">
                                <div class="mb-3">
                                    <h2>Pocung</h2>
                                </div>
                                <form action="" method="post" id="dPocung">
                                    <div class="mb-3">
                                        <label for="pSatu">Gatra Satu</label>
                                        <input class="form-control" type="text" id="pSatu" name="pSatu" placeholder="Gatra Satu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pDua">Gatra Dua</label>
                                        <input class="form-control" type="text" id="pDua" name="pDua" placeholder="Gatra Dua" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pTiga">Gatra tiga</label>
                                        <input class="form-control" type="text" id="pTiga" name="pTiga" placeholder="Gatra tiga" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pEmpat">Gatra empat</label>
                                        <input class="form-control" type="text" id="pEmpat" name="pEmpat" placeholder="Gatra empat" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pLima">Gatra lima</label>
                                        <input class="form-control" type="text" id="pLima" name="pLima" placeholder="Gatra lima" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pTegese">Tegese</label>
                                        <input class="form-control" type="text" id="pTegese" name="pTegese" placeholder="Gatra lima" required>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <a href="../" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                                        <button name="requestPocung" type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Submit</button>
                                    </div>
                                </form>
                                <div class="spinner-grow text-primary d-none m-auto sPocung" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="kamus p-4">
                                <div class="mb-3">
                                    <h2>Gambuh</h2>
                                </div>
                                <form action="" method="post" id="dGambuh">
                                    <div class="mb-3">
                                        <label for="gSatu">Gatra Satu</label>
                                        <input class="form-control" type="text" id="gSatu" name="gSatu" placeholder="Gatra Satu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gDua">Gatra Dua</label>
                                        <input class="form-control" type="text" id="gDua" name="gDua" placeholder="Gatra Dua" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gTiga">Gatra tiga</label>
                                        <input class="form-control" type="text" id="gTiga" name="gTiga" placeholder="Gatra tiga" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gEmpat">Gatra empat</label>
                                        <input class="form-control" type="text" id="gEmpat" name="gEmpat" placeholder="Gatra empat" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gLima">Gatra lima</label>
                                        <input class="form-control" type="text" id="gLima" name="gLima" placeholder="Gatra lima" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gTegese">Tegese</label>
                                        <input class="form-control" type="text" id="gTegese" name="gTegese" placeholder="Gatra lima" required>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <a href="../" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                                        <button name="requestGambuh" type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Submit</button>
                                    </div>
                                </form>
                                <div class="spinner-grow text-primary d-none m-auto sGambuh" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../JS/request.js"></script>
</body>

</html>