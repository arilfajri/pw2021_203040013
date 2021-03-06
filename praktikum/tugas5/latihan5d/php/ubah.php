<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data film berdasarkan id 
$f = query("SELECT * FROM film WHERE id = $id")[0];

// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["ubah"])) {
  // cek apakah data berhasil di tambahkan atau tidak
  if (ubah($_POST) > 0) {
    echo "
            <script>
                alert('data berhasil diubah')
                document.location.href = 'admin.php';
            </script>
        ";
  } else {
    echo "
    <script>
        alert('data gagal diubah')
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

  <title>Latihan 5d</title>
</head>

<body>
  <h1>Ubah data film</h1>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $f["id"]; ?>">
    <ul>
      <li>
        <label for="nama_film">Nama Film : </label><br>
        <input type="text" name="nama_film" id="nama_film" required value="<?= $f["nama_film"]; ?>">
      </li>
      <li>
        <label for="tanggal_rilis">Tanggal Rilis : </label><br>
        <input type="text" name="tanggal_rilis" id="tanggal_rilis" required value="<?= $f["tanggal_rilis"]; ?>">
      </li>
      <li>
        <label for="sutradara">Sutradara : </label><br>
        <input type="text" name="sutradara" id="sutradara" required value="<?= $f["sutradara"]; ?>">
      </li>
      <li>
        <label for="produser">Produser : </label><br>
        <input type="text" name="produser" id="produser" required value="<?= $f["produser"]; ?>">
      </li>
      <li>
        <label for="poster">Poster : </label><br>
        <input type="text" name="poster" id="poster" required value="<?= $f["poster"]; ?>">
      </li>
      <button type="submit" name="ubah">Ubah Data</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color:black">Kembali</a>
      </button>
    </ul>
  </form>

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