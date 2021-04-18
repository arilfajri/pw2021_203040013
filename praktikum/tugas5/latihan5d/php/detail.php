<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}
require 'functions.php';

// mengembalikan id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$film = query("SELECT * FROM film WHERE id = $id")[0];

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="../css/detail.css">

  <title>Latihan 5d</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!-- akhir -->
  <!-- Detail -->
  <div class="container">
    <nav>
      <ol class="breadcrumb bg-transparent pl-0">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item active text-white" aria-current="page">Detail Film</li>
      </ol>
    </nav>
  </div>
  <!-- Akhir -->

  <!-- detail -->
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-5 text-center">
        <figure class="figure">
          <img src="../asset/img/<?= $film["poster"]; ?> " class="figure-img img-fluid rounded" width="200" height="400">
        </figure>
      </div>

      <div class="col-lg-6">
        <div class="container text-white">
          <h2><?= $film["nama_film"]; ?></h2>
          <table class="table table-responsive pt-4 text-white">
            <tr>
              <td>Tanggal Rilis </td>
              <td>:</td>
              <td><b><?= $film["tanggal_rilis"]; ?><b></td>
            </tr>
            <tr>
              <td>Sutradara</td>
              <td>:</td>
              <td><b><?= $film["sutradara"]; ?><b></td>
            </tr>
            <tr>
              <td>Produser</td>
              <td>:</td>
              <td><b><?= $film["produser"]; ?><b></td>
            </tr>
          </table>
          <a href="../index.php" class="btn mt-3 text-white btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir -->

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