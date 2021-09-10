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
    <input type="number" name="alas" placeholder="masukan alas">
    <input type="number " name="tinggi" placeholder="masukan tinggi">
    <select name="pilih">
<option value="1">luas</option>
<option value="2">tinggi</option>
</select>
    <button type="submit" name="hitung">hitung</button>
    </form>

</body>
</html>

<?php

if(isset($_POST['hitung'])){
    $alas= $_POST['alas'];
    $tinggi= $_POST['tinggi'];
    $pilih= $_POST['pilih'];

    if($pilih ==1){
        $hasil = $alas * $tinggi;
    }else if($pilih ==2){
        $hasil = 2* $alas*$tinggi;
    }

    echo "$hasil";
}