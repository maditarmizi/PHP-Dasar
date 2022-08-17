<?php
// array & definisi
// variable yang dapat memiliki banyak nilai
// pasangan antara key & value
// key-nya adalah index, yang dimulai dari 0
// elemen pada array boleh memiliki tipe data yang berbeda


// ada 2 cara membuat array di php
// 1. cara lama sebelum PHP5 V4
$hari = array("senin", "Selasa", "Rabu");
// 2. Cara Baru
$bulan = ["Januari", "Februari", "Maret"];



// Menampilkan array ke layar
// tidak bisa dicetak menggunakan echo
// menggunakan var_dump() / print_r()

// var_dump($bulan);
// echo "<br>";
// print_r($bulan);



// menampilkan 1 elemen pada array
// echo $bulan[2];



// menambahkan elemen baru pada array 
var_dump($bulan);
$bulan[] = "April";
echo "<br>";
var_dump($bulan);



















?>