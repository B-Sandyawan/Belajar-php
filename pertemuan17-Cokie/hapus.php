<?php 

session_start();

// CEK: Jika tidak ada session bernama "login" (berarti dia penyusup/belum login),
// tendang kembali ke halaman login.php!
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit; // Berhentikan eksekusi kode di bawahnya
}

require 'function.php';

// menangkap id dari URL
$id = $_GET["id"];

// jalankan function hapus
if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
?>