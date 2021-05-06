<?php
require '../functions.php';
$mahasiswa = cari($_GET["keyword"]);
?>
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