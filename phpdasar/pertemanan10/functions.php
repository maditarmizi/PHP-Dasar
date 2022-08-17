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
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $insert = "INSERT INTO mahasiswa
                VALUES
              ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
              ";
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>






