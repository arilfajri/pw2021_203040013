<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpading="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
            <tr>
                <th>Baris <?=$j; ?></th>
                <?php for ($k = 1; $k <=5; $k++) :?>
                    <td>Baris <?=$j ; ?>, Kolom <?=$k; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>