<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");










// ambil data dari tabel mahasiswa / query(ambil) data mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch/ngambil) mahasiswa dari object result
// 1. mysqli_fetch_row() -> mengembalikan array numerik(array yg indexnya angka)
// 2. mysqli_fetch_assoc() -> mengembalkan array associative ["Jurusan"]
// 3. mysqli_fetch_array() -> mengembalikan array numerik & associative
// 4. mysqli_fetch-object() -> var_dump($mhs->email);

// while($mhs = mysqli_fetch_object($result) ) {
//     var_dump($mhs);
// }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Halaman Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>















































