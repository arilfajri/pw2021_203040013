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
