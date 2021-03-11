<!-- Nama : Aril Fajri Tolani
NRP : 203040013
Shift : Rabu 09:00 - 10:00 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <style>
        .salmon{
            width:30px;
            height:30px;
            background-color:salmon;
        }
        .lightblue{
            width:30px;
            height:30px;
            background-color:lightblue;
        }
    
    </style>
</head>
<body>
        <table border="1" cellspacing="5" cellpading="0">
            <?php for ($i = 1; $i <=6; $i++) :?>
                <tr>
                    <?php for ($j = 1; $j <= 6; $j++) :?>
                        <?php if(($i + $j) % 2 == 1) : ?>
                            <td class="salmon"></td>
                        <?php elseif(($i + $j) % 2 == 0) : ?>
                            <td class="lightblue"></td>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>

        </table>
</body>
</html>