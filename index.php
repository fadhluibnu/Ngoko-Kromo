<?php
session_start();
if (isset($_SESSION["requestKamus"])) {
    header('Location: beranda/index.php');
    exit;
}

require 'functions.php';

$kamus = query("SELECT * FROM kamus ORDER BY ngoko, kromo ASC");
$pocung = query("SELECT * FROM pocung");
if (isset($_POST["search"])) {
    $kamus = searching_kamus($_POST["keyword"]);
    $pocung = searching_pocung($_POST["keyword"]);
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- my css -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="asset/favicon.ico">
    <title>Negesi</title>
</head>

<body>
    <header class="navbar navbar-light mb-5">
        <div class="container">
            <a class="navbar-brand m-auto d-flex align-items-center" href="index.php">
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
    <nav class="container-fluid menu sticky-top border-bottom p-1 pt-md-3 bg-light">
        <div class="container search">
            <form action="" method="POST" class="d-flex container">
                <input class="form-control me-4" type="teks" name="keyword" placeholder="Temukan kata" aria-label="Search" required />
                <button class="btn btn-outline-primary d-flex" type="submit" name="search"><i class="bi bi-search me-md-2"></i><span class="d-none d-md-inline">Search</span></button>
                <!-- <button class="btn btn-outline-primary d-flex d-md-none" type="submit"><i class="bi bi-search"></i></button> -->
            </form>
            <nav class="navbar navbar-expand-lg navbar-light d-none d-md-inline-block" style="width: 100%; padding-bottom: 0;">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-journal-bookmark"></i> Kamus</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-book"></i> Pocung</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-book"></i> Gambuh</button>
                            </li>
                        </ul>
                    </div>
                    <ul class="request justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link" href="request/requestKamus.php"><i class="bi bi-flag"></i> Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-file-person"></i> About</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light d-inline-block d-md-none p-3 fixed-bottom bg-light shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-journal-bookmark"></i> Kamus</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-book"></i> Pocung</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-book"></i> Gambuh</button>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="request justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="request/requestKamus.php"><i class="bi bi-flag"></i> Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-file-person"></i> About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <section id="content" class="mt-4">
                <div class="container">
                    <!-- <h1 class="mb-3">Kata</h1> -->
                    <div class="content">
                        <?php
                        if (isset($_POST["search"])) :
                            if ($kamus == array()) : ?>
                                <h5 class="ps-3">Hasil dari <span class="danger"><?php echo $_POST["keyword"] ?></span> tidak ditemukan</h5>
                                <a href="" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                            <?php
                            else : ?>
                                <h5 class="ps-3">Hasil dari <span class="primary"><?php echo $_POST["keyword"] ?></span> :</h5>
                                <a href="" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                        <?php
                            endif;
                        endif; ?>

                        <?php foreach ($kamus as $kms) : ?>
                            <div class="ptext rounded border m-2">
                                <div class="text-1 d-flex justify-content-between">
                                    <p class="ps-3 pe-1 pt-2 pb-2" style="margin: 0; font-size: 1.2rem ; font-weight: 600;"><?= $kms["ngoko"]; ?></p>
                                    <i class="ps-3 pe-3 pt-2 pb-2 bi bi-caret-down"></i>
                                </div>
                                <div class="terjemah">
                                    <div class="text">
                                        <p class="m-0" style="font-weight:400;font-size: 1em;">Kromo :</p>
                                        <p class="mt-3"><i class="bi bi-arrow-return-right"></i> <span class="rounded"><?= $kms["kromo"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <section id="content" class="mt-4">
                <div class="container">
                    <!-- <h1 class="mb-3">Kata</h1> -->
                    <div class="content">
                        <?php
                        if (isset($_POST["search"])) :
                            if ($pocung == array()) : ?>
                                <h5 class="ps-3">Hasil dari <span class="danger"><?php echo $_POST["keyword"] ?></span> tidak ditemukan</h5>
                                <a href="" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                            <?php
                            else : ?>
                                <h5 class="ps-3">Hasil dari <span class="primary"><?php echo $_POST["keyword"] ?></span> :</h5>
                                <a href="" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                        <?php
                            endif;
                        endif; ?>

                        <?php foreach ($pocung as $pcg) : ?>
                            <div class="ptext rounded border m-2">
                                <div class="text-1 d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <p class="ps-3 pe-1 pt-2" style="margin: 0; font-size: 1.1rem ; font-weight: 500;"><?= $pcg["gatraSiji"]; ?></p>
                                        <p class="ps-3 pe-1 pt-2" style="margin: 0; font-size: 1.1rem ; font-weight: 500;"><?= $pcg["gatraLoro"]; ?></p>
                                        <p class="ps-3 pe-1 pt-2" style="margin: 0; font-size: 1.1rem ; font-weight: 500;"><?= $pcg["gatraTelu"]; ?></p>
                                        <p class="ps-3 pe-1 pt-2" style="margin: 0; font-size: 1.1rem ; font-weight: 500;"><?= $pcg["gatraPapat"]; ?></p>
                                        <p class="ps-3 pe-1 pt-2 pb-2" style="margin: 0; font-size: 1.1rem ; font-weight: 500;"><?= $pcg["gatraLima"]; ?></p>
                                    </div>
                                    <i class="ps-3 pe-3 pt-2 pb-2 bi bi-caret-down"></i>
                                </div>
                                <div class="terjemah pocung">
                                    <div class="text pocung">
                                        <p class="m-0" style="font-weight:400;font-size: 1em;">Kromo :</p>
                                        <div class="pembungkus">
                                            <p class="mt-3 p"><?= $pcg["Tegese"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <section id="content" class="mt-4">
                <div class="container">
                    <!-- <h1 class="mb-3">Kata</h1> -->
                    <div class="content">
                        <?php
                        if (isset($_POST["search"])) :
                            if ($kamus == array()) : ?>
                                <h5 class="ps-3">Hasil dari <span class="danger"><?php echo $_POST["keyword"] ?></span> tidak ditemukan</h5>
                                <a href="" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                            <?php
                            else : ?>
                                <h5 class="ps-3">Hasil dari <span class="primary"><?php echo $_POST["keyword"] ?></span> :</h5>
                                <a href="" class="nav-link"><i class="bi bi-arrow-left-circle"></i> Beranda</a>
                        <?php
                            endif;
                        endif; ?>

                        <?php foreach ($kamus as $kms) : ?>
                            <div class="ptext rounded border m-2">
                                <div class="text-1 d-flex justify-content-between">
                                    <p class="ps-3 pe-1 pt-2 pb-2" style="margin: 0; font-size: 1.2rem ; font-weight: 600;"><?= $kms["ngoko"]; ?></p>
                                    <i class="ps-3 pe-3 pt-2 pb-2 bi bi-caret-down"></i>
                                </div>
                                <div class="terjemah">
                                    <div class="text">
                                        <p class="m-0" style="font-weight:400;font-size: 1em;">Kromo :</p>
                                        <p class="mt-3"><i class="bi bi-arrow-return-right"></i> <span class="rounded"><?= $kms["kromo"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="JS/script.js"></script>
</body>

</html>