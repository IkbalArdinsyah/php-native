<?php
$datajson = '{
    "nama":"ujang",
    "domisili" : "bandung",
    "usia" : 23,
    "wni": true,
    "hobby" : [
        "futsal", "main game", "bernyanyi",
    ],
}' ;

$data = json_encode($datajson);

// echo $data -> nama;
echo "Nama :   " . $data->nama . "<br>";
