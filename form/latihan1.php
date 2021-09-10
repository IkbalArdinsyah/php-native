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

<h1>aritmatika</h1>

<input type="text"name="bilangan1"placeholder="masukan bilangan 1"required>

<input type="text"name="bilangan2"placeholder="masukan bilangan 2"required>     

<select name="perhitungan"required>
<option value="">Pilih</option>
<option value="+">Penjumlahan</option>
<option value="-">Pengurangan</option>
<option value="X">Perkalian</option>
<option value="/">Pembagian</option>
</select>

<button type="submit" name="hitung">hitung</button>
</form>
</body>
</html>


<?php
    if(isset($_POST['hitung'])){
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $perhitungan = $_POST['perhitungan'];

    if($perhitungan == "+"){
        $hasil = $bilangan1 + $bilangan2;
    }else if($perhitungan == "-"){
        $hasil = $bilangan1 - $bilangan2;
    }else if($perhitungan == "X"){
        $hasil= $bilangan1 * $bilangan2;
    }else if($perhitungan == "/"){
        $hasil= $bilangan1 / $bilangan2;
    }
    echo"<b>$bilangan1</b>$perhitungan<b>$bilangan2</b> Adalah  <b>$hasil</b>";  

}