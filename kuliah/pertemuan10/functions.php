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
function koneksi()
{
  return mysqli_connect("localhost", "root", "", "pw_203040013");
}
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  // ambil data dari tiap elemen dalam form
  $conn = koneksi();
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // query insert data
  $query = "INSERT INTO mahasiswa
              VALUES
              (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
              ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);

  return mysqli_affected_rows($conn);
}
