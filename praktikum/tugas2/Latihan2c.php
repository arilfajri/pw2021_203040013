<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->
<?php
function tumpukanBola($tumpukan){
    for ($i = 1; $i <= $tumpukan; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class=bola>$i</div>";
        }
        echo "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2c</title>
    <style>
        .bola {
            background-color: salmon;
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            margin-bottom: 3px;
            margin-right: 3px;
            border-radius: 50%;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php echo tumpukanBola(5);?>
</body>
</html>