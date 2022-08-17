<?php 

// menghubungkan file
require 'functions.php';

// cek apakah tombol submit sudah di klik atau belum
if( isset($_POST["submit"]) ) {

 
    // cek apakah data berhasil di tambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data Berhasil di tambahkan!');
                document.location.href = 'index.php';
            </script>
        
        ";
    } else {
        echo "
            <script>
                alert('data Gagal di tambahkan!');
                document.location.href = 'index.php';
            </script>
        
        ";
    }
    
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="identitas">Nama : </label>
                <input type="text" name="nama" id="identitas">
            </li>
            <li>
                <label for="nim1">NIM :</label>
                <input type="number" name="nim" id="nim1">
            </li>
            <li>
                <label for="email1">Email :</label>
                <input type="text" name="email" id="email1">
            </li>
            <li>
                <label for="jurusan1">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan1">
            </li>
            <li>
                <label for="img">Gambar :</label>
                <input type="file" name="gambar" id="img">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>
</body>
</html>