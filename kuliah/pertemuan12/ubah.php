<?php
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 12 - 6 Mei 2021
mempelajari mengenai login dan registrasi PHP 
*/
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URl
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa where id = $id");

// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["ubah"])) {


  // cek apakah data berhasil di tambahkan atau tidak
  if (ubah($_POST) > 0) {
    echo "
            <script>
                alert('data berhasil diubah')
                document.location.href = 'index.php';
            </script>
        ";
  } else {
    echo "alert('data gagal diubah';";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah data mahasiswa</h1>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" autofocus required value="<?= $mahasiswa["nama"]; ?>">
      </li>
      <li>
        <label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" required value="<?= $mahasiswa["nrp"]; ?>">
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required value="<?= $mahasiswa["email"]; ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mahasiswa["jurusan"]; ?>">
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required value="<?= $mahasiswa["gambar"]; ?>">
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>