<?php
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 12 - 6 Mei 2021
mempelajari mengenai login dan registrasi PHP 
*/
?>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
