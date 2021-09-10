<?php
if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $indo = $_POST['indo'];
        $mtk = $_POST['mtk'];
		$inggris = $_POST['inggris'];
        $ipa = $_POST['ipa'];
{
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Masuk Sekolah Favorit</title>
</head>
<body>
    <h1>program masuk sekolah favorit</h1>
    <hr width="20%" align="left">
    <p>Isilah seluruh kolom registrasi<br />Program Masuk sekolah Favorit</p>
    <table>
	<form action="hal3.php" method="post">
    <input type="hidden" name="nama" value=<?php echo "$nama";?> >
    <input type="hidden" name="username" value=<?php echo "$username";?> >
    <input type="hidname"kelamin value=<?php echo "$";?>>
    <table border="1">
    	<tr>
    	    <td valign="top"><b>Nama</b></td>
    	    <td><input type="text" name="nama" placeholder="Masukan nama anda"></td>
    	</tr>
    	<tr>
    	    <td valign="top"><b>asal sekolah</b></td>
    	    <td><input type="text" name="username" placeholder="asal sekolah anda"></td>
    	</tr>
    	<tr>
    	    <td valign="top"><b>nilai bahasa indonesia</b></td>
    	    <td><input type="text" name="indo" placeholder="masukan nilai indonesia"></td>
    	</tr>
        <tr>
    	    <td valign="top"><b>nilai matematika</b></td>
    	    <td><input type="text" name="mtk" placeholder="Masukan nilai matematika"></td>
    	</tr>
    	<tr>
    	    <td valign="top"><b>nilai bahasa inggris</b></td>
    	    <td><input type="text" name="inggris" placeholder="masukan nilai inggris"></td>
    	</tr>
        <tr>
    	    <td valign="top"><b>nilai ipa</b></td>
    	    <td><input type="text" name="ipa" placeholder="Masukan nilai ipa"></td>
    	</tr>
        </table>
    	<tr>
    	    <td colspan="2"><input type="submit" value="Simpan"></td>
    	</tr>
        </table>
</body>
</html>