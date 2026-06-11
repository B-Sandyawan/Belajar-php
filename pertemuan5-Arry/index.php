<?php
// menyimpan hari
$hari = ["senin", "selasa", "rabu"];
// Tampilin array dalam bentuk debugging
var_dump($hari);
echo "<br>";
// Tampilin arry dengan rapi 
print_r($hari);
echo "<br>";
// print index dalam array
echo $hari[0];
echo "<br>";
//Menambah elemen
$hari[] = "kamis";
var_dump($hari);
echo "<br>";
$hari[] = "jumat";
var_dump($hari);
echo "<br>";
//array dalam looping 
$angka = [3, 2, 15, 20, 11, 77, 89];

for( $i = 0; $i < count($angka); $i++ ) { // count() adalah fungsi bawaan dari php untuk menghitung jumlah index array
    echo $angka[$i]; 
    echo "<br>";
}
echo "<br>";
// for each // looping khusus array
$angka = [3, 2, 15, 20, 11, 77, 89];

// Dibaca: Untuk setiap elemen di dalam $angka, simpan nilainya sementara ke dalam $a
foreach( $angka as $a ) {
    echo $a; 
    echo "<br>";
}
?>

<?php
$mahasiswa = [
    ["Sandika Galih", "043040023", "Teknik Informatika", "sandikagalih@unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
    ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"]
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
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>