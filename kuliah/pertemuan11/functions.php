<?php
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 11 - 29 April 2021
mempelajari mengenai Delete,Update dan Searching Data PHP 
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
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  // ambil data dari tiap elemen dalam form
  $conn = koneksi();
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // query insert data
  $query = "UPDATE mahasiswa SET
              nama = '$nama',
              nrp = '$nrp',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM mahasiswa
                WHERE
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' 
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
