<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
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
    <title>Latihan 3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
    <table class="table table-dark table-hover table-bordered border-light">
        <thead>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Film</th>
                <th>Tanggal Rilis</th>
                <th>Sutradara</th>
                <th>Produser</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ( $film as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $row["Poster"]; ?>" alt="" width="100"></td>
            <td><?= $row["Nama Film"]; ?> </td>
            <td><?= $row["Tanggal Rilis"]; ?></td>
            <td><?= $row["Sutradara"]; ?></td>
            <td><?= $row["Produser"]; ?></td>
        </tr>
        <?php $i++ ; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>