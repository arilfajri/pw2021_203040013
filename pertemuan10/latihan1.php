<?php
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 10 - 22 April 2021
mempelajari mengenai Koneksi DB & Insert PHP 
*/
?>
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_203040013");

// ambil dari tabel film / query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel mahasiswa
$mahasiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar Film</h1>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="100"></td>
        <td><?= $row["nrp"]; ?> </td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td>
          <a href="">Ubah</a> |
          <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>