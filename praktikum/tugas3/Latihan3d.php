<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
$bola = [
    [
        "Nama" => "Cristiano Ronaldo",
        "Club" => "Juventus",
        "Main" => 100,
        "Gol" => 76,
        "Assist" => 30
    ],
    [
        "Nama" => "Lionel Messi",
        "Club" => "Barcelona",
        "Main" => 120,
        "Gol" => 80,
        "Assist" => 12
    ],
    [
        "Nama" => "Luca Modric",
        "Club" => "Real Madrid",
        "Main" => 87,
        "Gol" => 12,
        "Assist" => 48
    ],
    [
        "Nama" => "Mohammad Salah",
        "Club" => "Liverpool",
        "Main" => 90,
        "Gol" => 103,
        "Assist" => 8
    ],
    [
        "Nama" => "Neymar JR",
        "Club" => "Paris Saint Germain",
        "Main" => 109,
        "Gol" => 56,
        "Assist" => 15
    ],
    [
        "Nama" => "Sadio Mane",
        "Club" => "Liverpool",
        "Main" => 63,
        "Gol" => 30,
        "Assist" => 70
    ],
    [
        "Nama" => "Zlatan Ibrahimovic",
        "Club" => "AC Milan",
        "Main" => 100,
        "Gol" => 10,
        "Assist" => 12
    ],
];

$jumlah_main = 0;
$jumlah_gol = 0;
$jumlah_assist = 0;

    for ($i = 0; $i<count($bola); $i++) {
        $jumlah_main += $bola [$i]['Main'];
        $jumlah_gol += $bola [$i]['Gol'];
        $jumlah_assist += $bola [$i]['Assist'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3d</title>
    <style>
        table,th,td {
            border-collapse: collapse;
        }

        th,td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <table border = "1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
    
        <?php $i = 1; ?>
            <?php foreach ($bola as $b) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $b["Nama"] ?></td>
                    <td><?= $b["Club"] ?></td>
                    <td><?= $b["Main"] ?></td>
                    <td><?= $b["Gol"] ?></td>
                    <td><?= $b["Assist"] ?></td>
                </tr>
        <?php $i++; ?>
            <?php endforeach; ?>
            <tr>
                <th>#</th>
                <th colspan="2">
                    <center>Jumlah</center>
                </th>
                <th><?= $jumlah_main ?></th>
                <th><?= $jumlah_gol ?></th>
                <th><?= $jumlah_assist ?></th>
            </tr>
        </table>
</body>
</html>