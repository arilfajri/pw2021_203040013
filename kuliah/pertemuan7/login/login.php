<?php 
/*
Aril Fajri Tolani
203040013
https://github.com/arilfajri/pw2021_203040013
pertemuan 7 - 18 Maret 2021
mempelajari mengenai GET & POST PHP 
*/
?> 


<?php
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ){
    // cek username & password
    if ( $_POST["username"] == "admin" && $_POST["password"] == "123"){
        // jika benar,redirect ke halaman admin
        header("Location: admin.php");
        exit;
    }else{
        $error = true;
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if ( isset($error) ) :?>
        <p style="color: red; font-style: italic;">username/password salah</p>
    <?php endif; ?>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>