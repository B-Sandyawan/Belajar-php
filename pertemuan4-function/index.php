<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <?php
    function salam($time, $name){
        echo ("Selamat $time $name");
    }
    function salam2($time ="Pagi", $name = "Andi"){
        echo ("Selamat $time $name");
    }

    salam("Pagi", "andi");
    echo "<br>";
    salam2();
    echo "<br>";
    salam2("Siang");
    echo "<br>";
    salam2( '', "Ucup");
    echo "<br>";
    salam2("Malam", "Ucup");
    ?>
</body>
</html>