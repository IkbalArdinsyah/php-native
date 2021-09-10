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

<fieldset>
    <table border=5 width=100% align=”center”>
        <tr><th colspan="8">Data Diri</th></tr>
        <tr>
            <th>Nama</th>
            <th>asal sekolah</th>
            <th>nilai indonesia</th>
            <th>nilai matematika</th>
            <th>nilai inggris</th>
            <th>nilai ipa</th>
            
            <th colspan="4">Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$username"; ?> </td>
                <td><?php echo "$indo"; ?> </td>
                <td><?php echo "$mtk"; ?> </td>
                <td colspan="4"><?php echo "$penjamin"; ?></td>
                <!-- <td><?php echo "$tanggalpeminjaman"; ?> </td>
                <td><?php echo "$tanggalkembali"; ?> </td> -->


            </tr>

        </tr>


        