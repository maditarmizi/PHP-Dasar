<?php
// 1. Date untuk menampilkan tanggal dengan format tertentu

//  echo date("l, d-M-Y");


// 2. Time
// disebut dengan UNIX Timestamp / EPOCH Time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// echo date("d M Y", time()-60*60*24*99);


// 3. mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,9,7,2000));


// 4. strtotime
echo date("l", strtotime("9 Jul 2000"));
?>

