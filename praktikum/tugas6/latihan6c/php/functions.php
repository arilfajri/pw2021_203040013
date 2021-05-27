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

// menambahkan fungsi tambah
function tambah($data)
{
  // ambil data dari tiap elemen dalam form
  $conn = koneksi();

  $nama = htmlspecialchars($data["nama_film"]);
  $tanggal = htmlspecialchars($data["tanggal_rilis"]);
  $sutradara = htmlspecialchars($data["sutradara"]);
  $produser = htmlspecialchars($data["produser"]);
  $poster = htmlspecialchars($data["poster"]);

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
  mysqli_query($conn, "DELETE FROM film WHERE id = $id");

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
  $poster = htmlspecialchars($data["poster"]);

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
