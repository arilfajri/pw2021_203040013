<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 6 - 11 Maret 2021
mempelajari mengenai Array Associative PHP 
*/
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak{
            width:30px;
            height:30px;
            background-color:darkred;
            text-align:center;
            line-height:30px;
            margin:3px;
            float:left;
            transition:0.5s;
            color:white;
        }

        .kotak:hover{
            transform:rotate(360deg);
            border-radius:50%;
        }

        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    

<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
?>

<?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) :?>
        <div class="kotak"><?php echo $b ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>