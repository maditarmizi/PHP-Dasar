<?php
    // Kita cek apakah tombol submit sudah di klik atau belum
if( isset($_POST["submit"]) ) {
    // cek username & password
if( $_POST["username"] == "admin" && $_POST["password"] == "rahasiabanget") {

    // Jika benar, redirect ke halaman  admin
    header("Location: admin.php");
    exit;
    } else {
    // jika salah, tampilkan pesan error
        $error = true;

    }
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
    <h1>Login Admin</h1>
    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">Username / Password Salah!</p>
    <?php endif; ?>

    <ul>
    <form action="" method="post">
        <li>
            <label for="user">Username :</label>
            <input type="text" name="username" id="user">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
    </ul>
</body>
</html>