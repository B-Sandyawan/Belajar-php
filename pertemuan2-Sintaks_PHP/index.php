<?php
// ini adalah php
/* 
ini
juga
komentar
*/


// Standart Output
// echo, print
// print_r
// var_dump

// echo "Sandhika Galih";
// print "Sandhika Galih";
// print_r("Sandhika Galih");
// var_dump("Sandhika Galih");

// //variabel dan tipe data
// //variabel adalah tempat untuk menyimpan nilai
// //variabel di awali dengan tanda $

// $nama = "Sandhika";
// // variable tidak boleh diawali dengan angka, tapi boleh mengandung angka
// // variable tidak boleh mengandung spasi, gunakan underscore untuk mengganti spasi
// $nama_lengkap = "Sandhika Galih";


// // operator matematika
// // + - * / %
// echo 1 + 1;
// echo 1 - 1;
// echo 1 * 1;
// echo 1 / 1;
// echo 5 % 2;

// $x = 10;
// $y = 20;
// echo $x + $y;

//pengabungan string / concatenation / concat
$nama_depan = "Sandhika";
$nama_belakang = "Galih";
echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Sandhika";
// $nama .= " ";
// $nama .= "Galih";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);



//penulisan sintaks php
//1. PHP di dalam HTML
//2. HTML di dalam PHP  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Sandhika"; ?></h1>
    <h1>Halo, Selamat Datang <?php echo "$nama"; ?></h1>
    <p><?php
        echo "ini adalah paragraf";
    ?></p>
</body>
</html>