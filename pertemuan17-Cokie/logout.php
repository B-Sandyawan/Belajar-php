<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// Hancurkan Cookie dengan cara memundurkan waktu (- 3600 detik)
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login.php");
exit;
?>