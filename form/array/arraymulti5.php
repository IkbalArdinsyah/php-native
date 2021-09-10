<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Ucup",
            "MataKuliah" => [
            ["MataKuliah" => "Biologi "],
            ["MataKuliah" => "Sejarah"],
            ["MataKuliah" => "Kimia"]],

            "Hobi" => [
            ["Hobi" => "Bermain Billiar"],
            ["Hobi" => "Futsal"]]],

            [ "nama" =>
             "Ujang",
            "MataKuliah" => [
            ["MataKuliah" => "Menejemen"],
            ["MataKuliah" => "Hukum"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Futsal"],
            ["Hobi" => "bemain bola"]]],

            [ "nama" => "Luis",
            "MataKuliah" => [
            ["MataKuliah" => "Kimia"],
            ["MataKuliah" => "Biologi"],
            ["MataKuliah" => "Sejarah"]],

            "Hobi" => [
            ["Hobi" => "Bermain game"],
            ["Hobi" => "Berenang"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Kris",
            "MataKuliah" => [
            ["MataKuliah" => "pasal hukum"],
            ["MataKuliah" => "produktif"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "bernyanyi"],
            ["Hobi" => "Bermain"]]],

            [ "nama" =>
             "Jack",
            "MataKuliah" => [
            ["MataKuliah" => "politik"],
            ["MataKuliah" => "B indonesia"],
            ["MataKuliah" => "Sejarah Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "berenang"]]],

            [ "nama" => "Ganing",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan agama"],
            ["MataKuliah" => "Bingbingan wirausaha"],
            ["MataKuliah" => "biologi"]],

            "Hobi" => [
            ["Hobi" => "Bermain Golf"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>