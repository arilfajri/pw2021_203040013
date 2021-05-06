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
$mahasiswa = query("SELECT * FROM mahasiswa");
// tombol cari di tekan
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <a href="logout.php">Logout</a>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>

  <form action="" method="post" class="form-cari">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword" class="keyword">
    <button type="submit" name="cari" id="tombol-cari" class="tombol-cari">Cari!</button>

  </form>
  <br>
  <div class="container">
    <table border="1" cellpading="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style:italic;">mahasiswa tidak ditemukan</p>
          </td>
        </tr>
      <?php endif; ?>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $row) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="100"></td>
          <td><?= $row["nama"]; ?></td>
          <td>
            <a href="detail.php?id=<?= $row["id"]; ?>">lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <script src="js/script.js"></script>
</body>

</html>