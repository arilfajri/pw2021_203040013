<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
// koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_tubes_203040013");
  return $conn;
}

// function untuk melakukan query dan memasukannya kedalaam array
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
// function upload
function upload()
{
  $nama_file = $_FILES['poster']['name'];
  $tipe_file = $_FILES['poster']['type'];
  $ukuran_file = $_FILES['poster']['size'];
  $error = $_FILES['poster']['error'];
  $tmp_file = $_FILES['poster']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //       alert('pilih gambar terlebih dahulu');
    //       </script>";
    return 'akun.png';
  }
  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
          alert('yang anda pilih bukan gambar');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
          alert('yang anda pilih bukan gambar');
          </script>";
    return false;
  }

  // cek ukuran file
  // maks 5 mb
  if ($ukuran_file > 5000000) {
    echo "<script>
          alert('ukuran terlalu besar');
          </script>";
    return false;
  }

  // lolos pengecekan
  // siap uploaad file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../asset/img/' . $nama_file_baru);
  return $nama_file_baru;
}

// menambahkan fungsi tambah
function tambah($data)
{
  // ambil data dari tiap elemen dalam form
  $conn = koneksi();

  $nama = htmlspecialchars($data["nama_film"]);
  $tanggal = htmlspecialchars($data["tanggal_rilis"]);
  $sutradara = htmlspecialchars($data["sutradara"]);
  $produser = htmlspecialchars($data["produser"]);
  // $poster = htmlspecialchars($data["poster"]);
  // upload gambar
  $poster = upload();
  if (!$poster) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO film
                VALUES
                ('', '$nama', '$tanggal', '$sutradara', '$produser', '$poster')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// menambah fungsi hapus
function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $film = query("SELECT * FROM film WHERE id = $id")[0];
  if ($film['poster'] != 'akun.png') {
    unlink('../asset/img/' . $film['poster']);
  }

  mysqli_query($conn, "DELETE FROM film where id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// menambah fungsi ubah
function ubah($data)
{
  // ambil data dari tiap elemen dalam form
  $conn = koneksi();
  $id = htmlspecialchars($data["id"]);
  $nama = htmlspecialchars($data["nama_film"]);
  $tanggal = htmlspecialchars($data["tanggal_rilis"]);
  $sutradara = htmlspecialchars($data["sutradara"]);
  $produser = htmlspecialchars($data["produser"]);
  $poster_lama = htmlspecialchars($data["poster_lama"]);

  $poster = upload();
  if (!$poster) {
    return false;
  }

  if ($poster == 'akun.png') {
    $poster = $poster_lama;
  }

  // query ubah data
  $query = "UPDATE film SET
                nama_film = '$nama',
                tanggal_rilis = '$tanggal',
                sutradara = '$sutradara',
                produser = '$produser',
                poster = '$poster'
                WHERE id = $id
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// menambah fungsi registrasi
function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);


  // cek username sudah ada atu belum
  $result = mysqli_query($conn, "SELECT username FROM user
        WHERE username ='$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('username sudah terdaftar');
                </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan userbaru ke database
  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);
  return mysqli_affected_rows($conn);
}
function cari($keyword)
{

  $conn = koneksi();

  $query = "SELECT * FROM film
    WHERE
      nama_film LIKE '%$keyword%' OR
      sutradara LIKE '%$keyword%' OR
      produser LIKE '%$keyword%'
  ";
  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
