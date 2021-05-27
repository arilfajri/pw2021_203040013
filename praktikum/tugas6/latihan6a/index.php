<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$film = query("SELECT * FROM film");

// ketika tombol cari di klik
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $film = query("SELECT * FROM film
  WHERE
    nama_film LIKE '%$keyword%' OR
    sutradara LIKE '%$keyword%' OR
    produser LIKE '%$keyword%'
");
} else {
  $film = query("SELECT * FROM film");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Latihan 6a</title>

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <h3>RealFlix</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <form action="" class="d-flex" method="get">
          <input class="form-control me-2" type="text" placeholder="cari film" aria-label="Search" size="80" name="keyword" autofocus>
          <button class="btn btn-outline-primary" type="submit" name="cari"><i class="fa fa-search"></i></button>
        </form>
        <div class="admin">
          <a href="php/login.php" class="btn btn-primary">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir -->

  <!-- slider -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/slider/end.jpg" class="d-block w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Avengers Endgame</h1>
          <p>Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/slider/blood.jpg" class="d-block w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Bloodshot</h1>
          <p>Berdasarkan buku komik terlaris, dibintangi Vin Diesel sebagai Ray Garrison, seorang prajurit yang terbunuh dalam tugasnya dan dihidupkan kembali sebagai pahlawan super oleh perusahaan RST. Dengan sepasukan nanoteknologi di nadinya, kekuatan yang lebih kuat dari sebelumnya dan mampu menyembuhkan luka dengan sangat cepat.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/slider/spider.jpg" class="d-block w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Spider-Man: Far From Home</h1>
          <p>Peter Parker (Tom Holland) tengah mengunjungi Eropa untuk liburan panjang bersama temaan-temanya. Sayangnya , Parker tidak bisa dengan tenang menikmati liburannya, karena Nick Fury datang secara tiba-tiba di kamar hotelnya. Selama di Eropa pun Peter harus menghadapi banyak musuh mulai dari Hydro Man, Sandman dan Molten Man.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- akhir -->

  <!-- card -->
  <div class="container">
    <div class="row">
      <div class="col pt">
        <h2 class="pt-5 text-white justify text-center">Daftar Film</h2>
        <hr class="text-white">
      </div>
    </div>

    <?php if (empty($film)) : ?>
      <tr>
        <td colspan="7">
          <h1 class="text-white text-center">data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <div class="row pt-3">
        <?php foreach ($film as $row) : ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card mx-auto">
              <img src="asset/img/<?= $row["poster"]; ?>" alt="">
              <div class="card-body">
                <h6 class="card-title text-center"><?= $row["nama_film"] ?></h6>
              </div>
              <a href="php/detail.php?id=<?= $row["id"]; ?>" class="btn btn-block text-white btn-primary">Lihat Detail</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
  <!-- card -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>