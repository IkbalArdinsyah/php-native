<?php
if(isset($_POST['proses'])){
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $kelamin = $_POST['kelamin'];
        $agama = $_POST['agama'];
        $namamobil = $_POST['namamobil'];
        $jenismobil = $_POST['jenismobil'];
        $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
        $nomobil = $_POST['nomobil'];
        $tanggalkembali = $_POST['tanggalkembali'];
        $supir = $_POST['supir'];
        $penjamin = $_POST['penjamin'];
        function rupiah($angka){
            $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
            return $hasil_rupiah;
        }
    }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="latihan6.php" method="post"> 
    <fieldset> 
    <legend> 
    <h2>Verifikasi Pengembalian</h2> 
    </legend> 

    <table> 
    <tr>
     <td> Tanggal Peminjaman </td> 
     <td>:</td> 
     <td><input type="date" name="tanggalpengembalian"> </td>
     
     <br><input type="submit" name="verifikasi" value="Simpan"> 
     <input type="submit" name="reset" ></td>
     </table> 

     </fieldset> 

     </form>
</body>
</html>