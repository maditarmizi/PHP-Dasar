<?php 
require 'functions.php';


if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "
            <script>
                alert('data Berhasil di tambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
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
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2" placeholder="Masukkan Password anda!" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="register">Registrasi</button>
            </li>
        </ul>

    </form>
</body>
</html>

























