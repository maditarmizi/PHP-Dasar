<?php
// cek apakah tidak ada data di $_GET

if( !isset($_GET["gambar"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["absen"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["cita"])) {
    // redirect / lakukan aksi pengembalian
    header("Location: latihan1.php");
    exit;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        .uk {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <ul>
        <li><img class="uk" src="<?php echo $_GET["gambar"]; ?>"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["absen"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
        <li><?php echo $_GET["cita"]; ?></li>
    </ul>


    <a href="latihan1.php">Kembali ke halaman utama</a>
</body>
</html>