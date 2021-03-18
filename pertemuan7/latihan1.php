<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 7 - 18  Maret 2021
mempelajari mengenai GET & POST PHP 
*/
?> 

<?php
// variabel scope / lingkup variabel
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }

// tampilX();

// superglobals
// variabel global milik PHP
// merupakan array associative
// echo $_SERVER["SERVER_NAME"];

// GET
$film = [
    [
        "Nama Film" => "Parasite",
        "Tanggal Rilis" => "15 Juni 2019",
        "Sutradara" => "Bong Joon-ho",
        "Produser" => "Bong Joon-ho,Kwak Sin-ae,Jang Young-hwan",
        "Poster" => "parasite.jpg"
    ],
    [
        "Nama Film" => "Spider-Man: Far from Home",
        "Tanggal Rilis" => "28 Juni 2019",
        "Sutradara" => "Jon Watts",
        "Produser" => "Kevin Feige, Amy Pascal",
        "Poster" => "spider2.jpg"
    ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Film</h1>
<ul>
<?php foreach( $film as $f) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $f["Nama Film"] ;?>&tanggalrilis=<?= $f["Tanggal Rilis"]; ?>&sutradara=<?= $f["Sutradara"]; ?>&produser=<?= $f["Produser"]; ?>&poster=<?= $f["Poster"] ?>"><?= $f["Nama Film"] ;?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>