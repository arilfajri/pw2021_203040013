<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
$bola = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar JR"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3b</title>
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
        <h3>Daftar pemain bola terkenal</h3>
        <ol>
            <?php foreach ($bola as $b): ?>
            <li><?= "$b";?></li>
            <?php endforeach; ?>
        </ol>
        <br>
        <h3>Daftar pemain bola terkenal baru</h3>
        <?php
            $tambah = array_push($bola, "Luca Modric", "Sadio Mane");
            $tambah = sort($bola);
        ?>
        <ol>
        <?php foreach ($bola as $b): ?>
            <li><?= "$b";?></li>
        <?php endforeach; ?>
        </ol>
    </div> 
</body>
</html>