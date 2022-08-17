<?php

$cari = $_GET["cari"];


require '../functions.php';
$kuery = "SELECT * FROM mahasiswa
            WHERE
            nama LIKE '%$cari%' OR 
            nim LIKE '%$cari%' OR
            email LIKE '%$cari%' OR
            jurusan LIKE '%$cari%'
            ";
$mahasiswa = query($kuery);


?>


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

