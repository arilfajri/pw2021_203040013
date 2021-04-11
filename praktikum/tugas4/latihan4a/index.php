<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// memilih database
mysqli_select_db($conn, "pw_tubes_203040013");

// ambil dari tabel film / query
$result = mysqli_query($conn, "SELECT * FROM film");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 4a</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <div class="float-md-start">
    <table class="table table-dark table-hover table-bordered border-light">
      <thead>
        <tr>
          <th>No.</th>
          <th>Poster</th>
          <th>Nama Film</th>
          <th>Tanggal Rilis</th>
          <th>Sutradara</th>
          <th>Produser</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td><img src="asset/img/<?= $row["poster"]; ?>" alt="" width="100"></td>
            <td><?= $row["nama_film"]; ?> </td>
            <td><?= $row["tanggal_rilis"]; ?></td>
            <td><?= $row["sutradara"]; ?></td>
            <td><?= $row["produser"]; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>

</html>