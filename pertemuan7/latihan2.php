<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 7 -  18 Maret 2021
mempelajari mengenai GET & POST PHP 
*/
?> 


<?php
// cek apakah tidak ada data data di $_GET
if (!isset($_GET["nama"]) ||
    !isset($_GET["tanggalrilis"]) ||
    !isset($_GET["sutradara"]) ||
    !isset($_GET["produser"]) ||
    !isset($_GET["poster"])){
        // redirect
        header("Location : latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Film</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["poster"];?>"></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["tanggalrilis"];?></li>
        <li><?= $_GET["sutradara"];?></li>
        <li><?= $_GET["produser"];?></li>
    </ul>
    <a href="latihan1.php">Kembali Ke Daftar Film</a>
</body>
</html>
