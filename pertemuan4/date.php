<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 4 - 25 Februari 2021
mempelajari mengenai Function PHP 
*/
?> 

<?php
    // date
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    //echo time();
    //echo date("l", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam,menit,detik,bulan,tanggal,tahun
    //echo date("l", mktime(0,0,0,7,21,2002));

    // strtotime
    echo date("l", strtotime("21 July 2002"));
?>