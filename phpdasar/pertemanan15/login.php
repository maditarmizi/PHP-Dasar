<?php


require 'functions.php';
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
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>
</html>