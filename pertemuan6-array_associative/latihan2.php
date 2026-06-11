<?php 
// $mahasiswa = [
//     ["Sandika Galih", "043040023", "sandikagalih@unpas.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "033040001", "doddy@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sandika Galih", 
        "nrp" => "043040023",
        "email" => "sandikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandika.jpeg"
    ],
    [
        "nama" => "Doddy Ferdiansyah", 
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>