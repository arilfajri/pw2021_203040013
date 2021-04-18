<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$film = query("SELECT * FROM film");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Latihan 5d</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>

  <div class="float-md-start">
    <table class="table table-bordered border-light text-white" style="background-color: #121926;">
      <thead>
        <tr>
          <th>No.</th>
          <th>Ubah</th>
          <th>Poster</th>
          <th>Nama Film</th>
          <th>Tanggal Rilis</th>
          <th>Sutradara</th>
          <th>Produser</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($film as $row) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('Ubah Data??')"><button>Ubah</button></a>
              <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
            </td>
            <td><img src="../asset/img/<?= $row["poster"]; ?>" alt="" width="100"></td>
            <td><?= $row["nama_film"]; ?> </td>
            <td><?= $row["tanggal_rilis"]; ?></td>
            <td><?= $row["sutradara"]; ?></td>
            <td><?= $row["produser"]; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

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