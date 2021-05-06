<?php
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 13 - 13 Mei 2021
mempelajari mengenai live search & upload gambar PHP 
*/
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {


  // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
            <script>
                alert('data berhasil ditambahkan')
                document.location.href = 'index.php';
            </script>
        ";
  } else {
    echo "data gagal ditambahkan";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah data mahasiswa</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" autofocus required>
      </li>
      <li>
        <label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        <img src="img/akun.png" alt="" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>
</body>

</html>