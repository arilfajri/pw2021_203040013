<?php
require '../php/functions.php';

$film = cari($_GET['keyword']);


?>
<div class="container">
  <div class="containere">
    <div class="row">
      <div class="col pt">
        <h2 class="pt-5 text-white justify text-center">Daftar Film</h2>
        <hr class="text-white">
      </div>
    </div>

    <?php if (empty($film)) : ?>
      <tr>
        <td colspan="7">
          <h1 class="text-white text-center">data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <div class="row pt-3">
        <?php foreach ($film as $row) : ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card mx-auto">
              <img src="asset/img/<?= $row["poster"]; ?>" alt="">
              <div class="card-body">
                <h6 class="card-title text-center"><?= $row["nama_film"] ?></h6>
              </div>
              <a href="php/detail.php?id=<?= $row["id"]; ?>" class="btn btn-block text-white btn-primary">Lihat Detail</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>