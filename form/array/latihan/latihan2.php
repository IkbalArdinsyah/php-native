<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Jumlah Data</th>
                    <td>: <input type="number" name="jumlah" id=""></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button type="submit" name="simpan">Simpan</button>
                        <button type="reset">REset</button>
                </td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php 
        if(isset($_POST['simpan'])){
            $row = $_POST['jumlah'];
        }
    ?>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <table>
            <form action="contoh1pro.php" method="post">
                <?php 
                for($i = 1; $i <= $row; $i++){
                ?>
                <tr>
                    <th colspan="2"></th>
                    <td>Nama</td>
                    <td><input type="text" name="nama[]"></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas[]"></td>
                </tr>
                <tr>
                    <th><hr></th>
                </tr>
                <?php } ?>

                <tr>
                    <th></th>
                    <td><button type="submit" name="save">Simpan</button></td>
                </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>