<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

            <h1>bintang</h1>
            <input type="text" name="bintang" placeholder="Masukan jumlah Bintang" required>
            <button type="submit" name="hitung">hitung</button>

    </form>
</body>
</html>

<?php 

if(isset($_POST['hitung'])){
    $bintang = $_POST['bintang'];

    for($i = 1; $i <= $bintang; $i++){
        for($j = $bintang; $j >= $i; $j--){
            echo " &nbsp ";
        }
        for($k = 1; $k <= $i; $k++){
            echo " &nbsp*&nbsp ";
        }
        echo "<br>";
    }

    echo " ";

    for($l = $bintang; $l >= 1; $l--){
        for($m = $bintang; $m >= $l; $m--){
            echo " &nbsp ";
        }
        for($n = 1; $n <= $l; $n++){
            echo " &nbsp*&nbsp ";
        }
        echo "<br>";
    }
}