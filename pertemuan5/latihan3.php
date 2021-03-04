<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 5 - 4 Maret 2021
mempelajari mengenai Array PHP 
*/
?> 

<?php
$mahasiswa =[
            ["Aril Fajri Tolani","203040013","Teknik Informatika","arielmunchen60@gmail.com"],
            ["Suherman Tonti","203040014","Farmasi","suherman@gmail.com"],
            ["Patun Oktovian","203040015","Arsitektur","masud@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>NRP: <?= $mhs[1]; ?></li>
        <li>Jurusan: <?= $mhs[2]; ?></li>
        <li>Email: <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>