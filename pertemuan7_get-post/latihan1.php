<?php
// // variable scope / lingkup variabel
// $x = 10;
// function tampilX() {
//     global $x; // untuk mengambil variabel diluar function
//     echo $x;
// }

// tampilX();
?>

<?php
// // Superglobals
// // variable global milik php yang bisa kita akses dari mana saja
// // merupakan array associative

// var_dump($_GET);
// echo "<br>";
// var_dump($_POST);
// echo "<br>";
// var_dump($_SERVER);
?>

<?php
// $_GET
$mahasiswa = [
    [
        "nrp" => "043040023",
        "nama" => "Sandika Galih",
        "email" => "sandikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandika.jpeg"
    ],
    [
        "nrp" => "033040001",
        "nama" => "Doddy Ferdiansyah",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>