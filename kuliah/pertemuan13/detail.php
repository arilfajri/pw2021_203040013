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

// ambil id dari URl
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa where id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa
  </h3>
  <ul>
    <li><img src="img/<?= $mahasiswa["gambar"]; ?>" alt="" width="250"></li>
    <li>NRP : <?= $mahasiswa["nrp"]; ?></li>
    <li>Nama : <?= $mahasiswa["nama"]; ?></li>
    <li>Email : <?= $mahasiswa["email"]; ?></li>
    <li>Jurusan : <?= $mahasiswa["jurusan"]; ?></li>
    <li><a href="ubah.php?id=<?= $mahasiswa["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?= $mahasiswa["id"]; ?>" onclick="return confirm('Antum Yakin?');">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>

</body>

</html>