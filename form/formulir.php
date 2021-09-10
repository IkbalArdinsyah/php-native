<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 2</title>
</head>
<body>
<form action="latihan5.php" method="post"> 
    <fieldset> 
    <legend> 
    <h2>Rental Mobil</h2> 
    </legend> 

    <table> 
     <tr>
     <td> <label for="nama"> Masukan Nama</label> </td> 
     <td>:</td> 
     <td><input type="text" name="nama" id="nama" required></td> 
     </tr>
     
     <tr>
     <td> <label for="nik"> </label>Masukan NIK </td> 
     <td>:</td> 
     <td><input type="text" name="nik" id="nik" required></td> 
     </tr>

     <tr> 
     <td>Masukan jenis kelamin</td> 
     <td>:</td>
     <td><label for="laki-laki">
     <input type="radio" name="jk" id="laki-laki" value="Laki-laki">Laki-laki</label>
     <td><label for="p">
     <input type="radio" name="jk" id="p" value="Perempuan">Perempuan</label>
     </td></tr> 
 
     <tr> 
     <td>Pilih Agama</td> 
     <td>:</td> 
     <td> <select name="agama" required> 
     <option value="">Pilih</option> 
     <option value="islam">Islam</option> 
     <option value="kristen">Kristen</option>
     <option value="katholik">Katholik</option>
     <option value="hindu">Hindu</option>
     <option value="budha">Budha</option>
     <option value="konguchu">Konguchu</option> 
     </select> 
     </td> 
     </tr> 
     
     <tr>
     <td> <label for="mobil"> </label>Nama Mobil </td> 
     <td>:</td> 
     <td><input type="text" name="mobil" id="mobil" required></td> 
     </tr>

     <tr> 
     <td>Jenis Mobil</td> 
     <td>:</td> 
     <td> <select name="jenisMobil" required> 
     <option value="">Pilih Jenis Mobil</option> 
     <option value="sedan">Sedan</option> 
     <option value="sport">Sport</option>
     <option value="suv">SUV</option>
     <option value="mpv">MPV</option>
     <option value="coupe">Coupe</option>
     </select> 
     </td> 
     </tr> 

     <tr> 
     <td>Jenis Mobil</td> 
     <td>:</td> 
     <td> <select name="merkMobil" required> 
     <option value="">Pilih Merk Mobil</option> 
     <option value="toyota">Toyota</option> 
     <option value="honda">Honda</option>
     <option value="suzuki">SUzuki</option>
     <option value="daihatsu">Daihatsu</option>
     <option value="isuzu">Isuzu</option>
     </select> 
     </td> 
     </tr> 

     <tr>
     <td> <label for="tglP"> </label>Tanggal Peminjaman </td> 
     <td>:</td> 
     <td><input type="date" name="tglP" id="tglP" required></td> 
     </tr>
     
     <tr>
     <td> <label for="tglK"> </label>Tanggal Kembali </td> 
     <td>:</td> 
     <td><input type="date" name="tglK" id="tglK" required></td> 
     </tr>

     <tr> 
     <td>Penjamin</td> 
     <td>:</td> 
     <td> <select name="penjamin" required> 
     <option value="penjamin">Fc sertifikat rumah</option> 
     <option value="fcktp">Fc KTP</option> 
     <option value="fcsim">Fc SIM</option>
     <option value="fckk">Fc KK</option>
     </select> 
     </td> 
     </tr> 

     <tr> 
     <td>Supir</td> 
     <td>:</td> 
     <td> <select name="supir" required> 
     <option value="">Pilih Menggunakan Supir</option> 
     <option value="ya">Ya</option> 
     <option value="tidak">Tidak</option>
     </select> 
     </td> 
     </tr> 
     </table>
     <br><center><input type="submit" name="simpan" value="Simpan"> 
     <input type="submit" name="reset" value="Reset"></center>
     
     </fieldset> 
     </form>
</body>
</html>