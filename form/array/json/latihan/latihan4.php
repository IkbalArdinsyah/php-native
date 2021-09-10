<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ikbal ardiansyah</title>
</head>
<body>
<form action=""method="post">
    <td>Masukan Bilangan:</td>
    <input type="number"name="bil1">
    <td>Masukan Perpangkatan</td>
    <input type="number" name="bil2">
    <input type="submit" name="submit" value="masuk">
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
    $bilangan = $_POST['bil1'];
    $pangkat = $_POST['bil2'];

    function Perpangkatan($bilangan, $pangkat){
        $hasil = $bilangan ** $pangkat;
        return $hasil;
    }
}
echo Perpangkatan($bilangan,$pangkat);