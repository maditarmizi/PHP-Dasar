<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// Hubungkan file
require 'functions.php';
$id = $_GET["id"];
 
if ( hapus($id) > 0 ) {
    echo "
            <script>
                alert('data Berhasil di Hapus!');
                document.location.href = 'index.php';
            </script>
        
        ";
} else {
    echo "
            <script>
                alert('data Gagal di Hapus!');
                document.location.href = 'index.php';
            </script>
        
        ";
}
?>