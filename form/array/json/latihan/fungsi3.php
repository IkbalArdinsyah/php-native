<?php

function luasSegitiga($a, $b)
{
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi) / 2 ;
    return $luas
}
echo"luas Segitiga : " .luasSegitiga(10, 8);