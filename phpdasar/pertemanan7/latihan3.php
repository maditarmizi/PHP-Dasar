<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?php echo $_POST["user"]; ?></h1>
<?php endif; ?>
    <form action="" method="post">
        Masukkan Nama :
        <input type="text" name="user">
        <br>
        <button type="submit" name="submit">Kirim</button>




    </form>
</body>
</html>