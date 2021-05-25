<?php
require '../php/functions.php';

$film = cari($_GET['keyword']);


?>
<div class="containere">
  <div class="float-md-start pt-3">
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
        <?php if (empty($film)) : ?>
          <tr>
            <td colspan="7">
              <h1 class="text-center">data tidak ditemukan</h1>
            </td>
          </tr>
        <?php else : ?>
          <?php $i = 1; ?>
          <?php foreach ($film as $row) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td>
                <center>
                  <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('Ubah Data??')" class="btn btn-primary mt-4">Ubah</a>
                  <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data??')" class="btn btn-danger mt-3">Hapus</a>
                </center>
              </td>
              <td><img src="../asset/img/<?= $row["poster"]; ?>" alt="" width="100"></td>
              <td><?= $row["nama_film"]; ?> </td>
              <td><?= $row["tanggal_rilis"]; ?></td>
              <td><?= $row["sutradara"]; ?></td>
              <td><?= $row["produser"]; ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>