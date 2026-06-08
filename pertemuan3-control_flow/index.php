<?php
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array
//for loop
// for( $i = 0; $i < 5; $i++ ) {
//     echo "Hello World! <br>";
// }
//While loop 
// $i = 0;
// while( $i < 5 ) {
//     echo "Hello World! <br>";

// $i++;
// }

//condition
// $x = 30 ;

// if ($x > 20){
//     echo 'benar';
// } else if ($x == 20 ){
//     echo 'binggo';
// } else {
//     echo 'salah';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- contoh pengunaan loop -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for($i = 0; $i <= 3; $i++){
                echo "<tr>";
                for($j = 0; $j <= 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>