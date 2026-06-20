<?php 

session_start();

require 'function.php';

// CEK COOKIE DI HALAMAN LOGIN (Agar user langsung masuk tanpa login)
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Ambil username berdasarkan id tersebut
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Cek apakah key (cookie) sesuai dengan username (di database) yang diacak?
    if( $key === hash('sha256', $row['username']) ) {
        // Jika valid, anggap dia sudah login
        $_SESSION['login'] = true;
    }
}

// CEK: Jika user sudah punya session login (berarti dia sudah login sebelumnya),
// tendang dia kembali ke halaman index agar tidak bisa buka halaman login lagi.
if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE
        username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            $_SESSION["login"] = true;

            if( isset($_POST['remember']) ) {
                            
                // BUAT COOKIE DENGAN WAKTU 1 MENIT (Bisa diganti jadi 1 minggu, dll)
                 // Enkripsi username menggunakan fungsi acak hash() dan algoritma 'sha256'
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }

    }
    $error = true;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>
    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password
                ">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>

</body>
</html>