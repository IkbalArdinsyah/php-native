<html>
    <head>
    <title> GTW </title>
    </head>
 <body>
 <FORM ACTION="" METHOD="POST" >
 <h2>Pilih program di bawah ini </h2>
 <select name="program">
 <option value= 1 >Program luas & keliling segitiga </option>
 <option value= 2 >Program luas & keliling lingkaran</option>
 <option value= 3 >Program luas & keliling persegi</option>
 <option value= 4 >Program luas & keliling persegi_panjang</option>
 </select>
 <input type="submit" name="Pilih" value="Pilih">
 </FORM>
 </body>
</html>
<?php
if (isset($_POST['Pilih'])) {
 $pilih = $_POST['program'];
 if ($pilih == 1){
     header("location:segitiga.php");
    } else if ($pilih == 2){
        header("location:lingkaran.php");
    }else if ($pilih == 3){
        header("location:persegi.php");
    }else if ($pilih == 4){
        header("location:persegipanjang.php");
    }
}
?>

