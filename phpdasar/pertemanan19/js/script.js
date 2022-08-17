// ambil elemen2 yang di butuhkan
var cari = document.getElementById('cari');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
cari.addEventListener('keyup', function() {
    
    // membuat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax 
    xhr.open('GET', 'ajax/mahasiswa.php?cari='  + cari.value, true);
    xhr.send();
    
});
















