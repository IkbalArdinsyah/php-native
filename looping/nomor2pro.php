<?php
if(isset($_POST['pilih'])){
    $pilih=$_POST['pilihan'];
    if($pilih==1){
        header("location:segitiga.php");
    }else if($pilih==2){
        ?>
        <html>
            <form action="segitiga.php"method="post">
                jari jari<input type="text"name="jari">
                <button type="sumbit"name="save">Save</button>
    </form>
    </html>
    <?php
    }
}
?>