<?php
// $mahasiswa = ["adi", "123", "@gmail.com", "Programmer"];


// Array Associative
// definisi nya seperti array numerik, kecuali key-nya adalah STRING yang kita buat sendiri

$mahasiswa = [
    [
    "gambar" => "3x4.jpg",
    "nama" => "Adi",
    "absen" => "19",
    "email" => "@gmail.com",
    "cita" => "Programmer"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ukuran {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img class="ukuran"src="<?php echo $mhs["gambar"]; ?>">
        </li>
        <li><?php echo $mhs["nama"]; ?></li>
        <li><?php echo $mhs["absen"]; ?></li>
        <li><?php echo $mhs["email"]; ?></li>
        <li><?php echo $mhs["cita"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>








































