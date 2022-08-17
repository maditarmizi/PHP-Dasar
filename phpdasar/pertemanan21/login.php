<?php
session_start();
require 'functions.php';

// cek cookie
if ( isset($_COOKIE["awal"]) && isset($_COOKIE["keytengah"]) ) {
    $awal = $_COOKIE["awal"];
    $keytengah = $_COOKIE["keytengah"];

    // ambil username berdasarkan id
    $hasil = mysqli_query($conn, "SELECT username FROM user WHERE id = $awal ");

    // hasil ambil username saja
    $row = mysqli_fetch_assoc($hasil);

    // cek cookie dan username
    if( $keytengah === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;



    }

}

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}




//  cek tombol submit apakah sudah ditekan atau belum
if ( isset($_POST["login"]) ) {
    // menangkap data username & password di database
    $user = $_POST["username"];
    $pw = $_POST["password"];

    // cek username yand ada di database
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' ");
    // cek username
    if ( mysqli_num_rows($result) === 1 ) {
        
        // cek password berdasarkan user
        $row = mysqli_fetch_assoc($result);
        if( password_verify($pw, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if ( isset($_POST["remember"]) ) {
                
                // create cookie
                setcookie('awal', $row['id'], time() + 60);
                setcookie('keytengah', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }
    
    $error = true;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">Username / Password Salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="user">Username : </label>
                <input type="text" name="username" id="user" placeholder="Masukkan Username anda!" autocomplete="off">
            </li>
            <li>
                <label for="pw">Password : </label>
                <input type="password" name="password" id="pw" placeholder="Masukkan Password anda!" autocomplete="off">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember1">
                <label for="remember1">Remember me : </label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>
</html>