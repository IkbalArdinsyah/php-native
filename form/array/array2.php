<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

$hobi[3] = "Coding";

$hobi[] = "Olahraga";

foreach($hobi as $hobiku){
    echo $hobiku."<hr>";
}
?>