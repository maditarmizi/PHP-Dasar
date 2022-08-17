<?php 

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($kuery) {
    global $conn;
    $result = mysqli_query($conn, $kuery);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // Upload Gambar
    $gambar = upload();
        if( !$gambar ) {
            return false;
        }

    // query insert data
    $insert = "INSERT INTO mahasiswa
                VALUES
              ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
              ";
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpSementara = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diaploud
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
              </script>";
              return false;
    }

    // cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar');
              </script>";
        return false;
    }

    // cek jika ukuran gambarnya terlalu besar
    if( $ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

   
    // generate nama gambar baru, supaya tidak ada gambar yang sama
    $namaNewFile = uniqid();
    $namaNewFile .= '.';
    $namaNewFile .= $ekstensiGambar;

     // lolos pengecekan gambar, siap diupload
    move_uploaded_file($tmpSementara, 'img/' . $namaNewFile);
    return $namaNewFile;




}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}



function ubah($data) {
    global $conn;
    $id = $data["id"];
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    // query Update data
    $update = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
              WHERE id = $id
              ";
    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}



function cari($keyword) {
    $cari = "SELECT * FROM mahasiswa
                WHERE
            nama LIKE '%$keyword%' OR 
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
    return query($cari);
}
?>






