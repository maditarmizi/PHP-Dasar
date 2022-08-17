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
?>