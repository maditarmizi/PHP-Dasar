<?php 

// menghubungkan file
require 'functions.php';



// ambil data dari URL
$id = $_GET["id"];
// query/ambil data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah di klik atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil di ubah atau tidak
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data Berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        
        ";
    } else {
        echo "
            <script>
                alert('data Gagal diubah!');
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
    <h1>Update Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="identitas">Nama : </label>
                <input type="text" name="nama" id="identitas" value="<?php echo $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nim1">NIM :</label>
                <input type="number" name="nim" id="nim1" value="<?php echo $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="email1">Email :</label>
                <input type="text" name="email" id="email1" value="<?php echo $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan1">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan1" value="<?php echo $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="img">Gambar :</label>
                <input type="text" name="gambar" id="img" value="<?php echo $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data!</button>
            </li>
        </ul>

    </form>
</body>
</html>