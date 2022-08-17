$(document).ready(function() {

    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // membuat event ketika keyword ditulis
    $('#cari').on('keyup', function() {

        // memunculkan icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?cari=' + $('#cari').val());

        // menggunakan ajax lain $.get()
        $.get('ajax/mahasiswa.php?cari=' + $('#cari').val(), function(data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});