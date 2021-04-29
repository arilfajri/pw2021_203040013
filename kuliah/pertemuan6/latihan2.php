<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 6 - 11 Maret 2021
mempelajari mengenai Array Associative PHP 
*/
?> 

<?php
// $mahasiswa =[
//     ["Aril Fajri Tolani","203040013","Teknik Informatika","arielmunchen60@gmail.com"],
//     ["Suherman Tonti","203040014","Farmasi","suherman@gmail.com"],
//     ["Patun Oktovian","203040015","Arsitektur","masud@gmail.com"]
// ];

// array associative
// definisinya sama seperti array numerik,kecuali
// key-nya adalah string yang kita buat sendiri

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
    ],
    [
        "Nama Film" => "Joker",
        "Tanggal Rilis" => "2 Oktober 2019",
        "Sutradara" => "Todd Phillips",
        "Produser" => "Todd Philips Bradley Cooper, Emma Tillinger Koskoff",
        "Poster" => "joker.jpg"
    ],
    [
        "Nama Film" => "Boruto: Naruto the Movie",
        "Tanggal Rilis" => "7 Agustus 2015",
        "Sutradara" => "Hiroyuki Yamashita",
        "Produser" => "Takayuki Hirobe",
        "Poster" => "boruto.jpg"
    ],
    [
        "Nama Film" => "Avengers: Infinity War",
        "Tanggal Rilis" => "23 April 2018",
        "Sutradara" => "Joe Russo, Anthony Russo",
        "Produser" => "Kevin Feige",
        "Poster" => "infinity.jpg"
    ],
    [
        "Nama Film" => "Avengers: Endgame",
        "Tanggal Rilis" => "15 Juni 2019",
        "Sutradara" => "Joe Russo, Anthony Russo",
        "Produser" => "Kevin Feige",
        "Poster" => "endgame.jpg"
    ],
    [
        "Nama Film" => "Bloodshot",
        "Tanggal Rilis" => "5 Maret 2020",
        "Sutradara" => "David S F Wilson",
        "Produser" => "Toby JaffeJason Kothari,Neal H. Moritz,Dinesh Shamdasani",
        "Poster" => "bloodshot.jpg"
    ],
    [
        "Nama Film" => "Spider-Man: Into the Spider-Verse",
        "Tanggal Rilis" => "26 Desember 2018",
        "Sutradara" => "Peter Ramsey, Rodney Rothman, Robert Persichetti Jr",
        "Produser" => "Avi Arad, Amy Pascal, Phil Lord, Christopher Miller, Christina Steinberg",
        "Poster" => "spider1.jpg"
    ],
    [
        "Nama Film" => "Extreme Job",
        "Tanggal Rilis" => "23 Januari 2019",
        "Sutradara" => "Lee Byung Hun",
        "Produser" => "Go Dae-Suk, Ok Kyung Bang, Kim Seong-hwan, Lee Jong-suk",
        "Poster" => "extreme.jpg"
    ],
    [
        "Nama Film" => "Knives Out",
        "Tanggal Rilis" => "15 Juni 2019",
        "Sutradara" => "Rian Johnson",
        "Produser" => "Ram Bergman, Rian Johnson",
        "Poster" => "knivesout.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>

<h1>Daftar Film</h1>

<?php foreach($film as $f) :?>
    <ul>
        <li>
            <img src="img/<?php echo $f["Poster"] ?>" alt="">
        </li>
        <li>Nama Film: <?= $f["Nama Film"]; ?></li>
        <li>Tanggal Rilis: <?= $f["Tanggal Rilis"]; ?></li>
        <li>Sutradara: <?= $f["Sutradara"]; ?></li>
        <li>Produser: <?= $f["Produser"]; ?></li>
    </ul>
    <br>
<?php endforeach; ?>
</body>
</html>