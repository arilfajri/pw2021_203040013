<?php
require 'functions.php';

// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["tambah"])) {
  // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
            <script>
                alert('data berhasil ditambahkan')
                document.location.href = 'admin.php';
            </script>
        ";
  } else {
    echo "
    <script>
        alert('data gagal ditambahkan')
        document.location.href = 'admin.php';
    </script>
";
  }
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

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">


  <title>Latihan 6b</title>
  <style>
    body {
      background-color: #0c111b;
      font-family: 'Poppins', sans-serif;
    }

    .card {
      width: 350px;
      background-color: #121926;
      box-shadow: 0px 1px 8px 1px rgba(255, 255, 255, 0.548);
    }
  </style>
</head>

<body>
  <!-- tambah -->
  <div class="container vh-100">
    <div class="row justify-content-center h-100">
      <div class="card my-auto">
        <div class="card-header text-center text-white">
          <h2>Tambah Data</h2>
        </div>
        <div class="card-body text-white">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama_film">Nama Film : </label>
              <input type="text" class="form-control" name="nama_film" id="nama_film" required>
            </div>
            <div class="form-group">
              <label for="tanggal_rilis">Tanggal Rilis : </label>
              <input type="text" class="form-control" name="tanggal_rilis" id="tanggal_rilis" required>
            </div>
            <div class="form-group">
              <label for="sutradara">Sutradara : </label>
              <input type="text" class="form-control" name="sutradara" id="sutradara" required>
            </div>
            <div class="form-group">
              <label for="produser">Produser : </label>
              <input type="text" class="form-control" name="produser" id="produser" required>
            </div>
            <div class="form-group">
              <label for="poster">Poster : </label>
              <input type="text" class="form-control" name="poster" id="poster" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-2" name="tambah">Tambah Data</button>
            <a href="admin.php" class="btn btn-danger w-100 mt-2">Kembali</a>
          </form>
        </div>
        <div class="card-footer text-center text-white">
          <small>&copy; 2021 RealFlix</small>
        </div>
      </div>
    </div>
  </div>
  <!-- tambah -->

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