<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}



require 'functions.php';



// Pagination
// konfirgurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

// pakai operator ternary
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

// contoh Logika Pagination
// halaman aktif = 2, awalData = 2, karena index jumlahPerHalaman = 1, maka nilainya per halaman 1 itu indexnya dimulai 0 , 1
// halaman aktif = 3, awalData = 4
$dataAwal = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $dataAwal, $jumlahDataPerHalaman");

// tombol cari di tekan
if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}


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

    <a href="logout.php" onclick="return confirm('Anda Yakin Logout!'); ">Logout</a>


    <h1>Halaman Data Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>


    <!-- tombol cari -->
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Search" autocomplete="off">
        <button type="submit" name="cari">Search</button>
    </form>

    <br>

    <!-- Pagination -->
    <!-- Navigation nya -->

    <?php if( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?php echo $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>


    <?php for($i = 1; $i <= $jumlahHalaman; $i++ ) : ?>

        <!-- memberi tahu jika user berada di halaman aktif -->
        <?php if ( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?php echo $i; ?>" style="font=weight: bold; color: red; "><?php echo $i; ?></a>
    
        <?php else : ?>
            <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?> 
    <?php endfor; ?>


    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?php echo $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>
    
    <br>



    <br>
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
                <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a>
                <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Anda Yakin hapus data!'); ">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>















































