
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
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "data gagal diubah!";
}
