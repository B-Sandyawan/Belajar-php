<?php 
// Jalankan dulu session-nya agar terbaca
session_start();

// Kosongkan dan hancurkan seluruh isi session
$_SESSION = [];
session_unset();
session_destroy();

// Kembalikan user ke halaman login
header("Location: login.php");
exit;
?>