<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
$bola = [
        "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar JR" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "AC Milan"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
    <style>
        .border{
            border: 2px solid black;
            padding: 10px;
            width : 500px;
        }
    </style>
</head>
<body>
<div class="border">
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table>
            <?php foreach ($bola as $nama => $club) : ?>
                <tr>
                    <td><?= "<b>$nama<b>" ; ?></td>
                    <td><?= "<b>:<b>" ; ?></td>
                    <td><?= "$club" ; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</div>
</body>
</html>