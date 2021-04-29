<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 2 - 8 Februari 2021
mempelajari mengenai sintaks PHP 
*/
?> 

<?php
// Pertemuan 2 - PHP Dasar
// sintaks php

// standar output
// echo, print
// print_r
// var_dump

// penulisan sintaks PHP
// 1.php di dalam html
// 2. html di dalam php

// variabel dan tipe data 
// variabel
// tidak boleh diawali dengan angka , tapi boleh mengandung angka
// $nama = "Aril Fajri";
// echo "Hallo nama saya $nama";
// 

// operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabungan string/concaenation/concat
// .
// $nama_depan = "Aril";
// $nama_belakang = "Fajri";
// echo $nama_depan . " " . $nama_belakang;

// assignment
// =,+=,-=,*=,/=,%=,.=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Aril";
// $nama .= " ";
// $nama .= "Fajri";
// echo $nama;

// perbandingan
// <,>,<=,>=,==,!=
// var_dump(1=="1");

// identitas
// ===,!=
// var_dump(1==="1");

// logika
// &&, ||, !
// $x=30;
// var_dump($x < 20 || $x %2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hello,Welcome <?php echo"nama saya Aril Fajri Tolani";?></h1>
</body>
</html>