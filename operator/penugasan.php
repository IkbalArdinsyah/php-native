<?php
    $uangUcup = 75000;

    echo "Uang Ucup : <b>{$uangUcup}</b> <hr>";

    //jajan minum
    echo "Jajan minum <b>15000</b> <br>";
    $uangUcup -= 15000;
    echo "Sisa uang Ucup setelah jajan minum <b>{$uangUcup}</b> <hr>";

    //beli sosis bakar
    echo "Jajan sosis bakar <b>25000</b> <br>";
    $uangUcup-= 25000;
    echo "Sisa uang ucup setelah membeli sosis bakar dan minum <b>{$uangUcup}</b> <hr>";

    //sedekah boy
    $uangYangDisedekahkan = 10; //sebanyak 10% dari uang ucup
    $uangYangDisedekahkan /= 100;
    $uangYangDisedekahkan *= $uangUcup;

    echo "Bersedekah kemusafir 10% dari <b>{$uangUcup}</b> Yaitu Sebesar <b>{$uangYangDisedekahkan}</b> <br>";
    $uangUcup -= $uangYangDisedekahkan;
    echo  "Sisa uang ucup <b>{$uangUcup}</b> <hr>";

    //nemu uang
    $uangYangDitemukan = 50; //sebanyak 50% dari uang ucup
    $uangYangDitemukan /= 100;
    $uangYangDitemukan *= $uangUcup;

    echo "Nemu Uang dijalan sebesar 50% dari sisa uang ucup <b>{$uangUcup}</b> Yaitu sebesar {$uangYangDitemukan}<br>
    Sisa uang ucup sekarang <b>{$uangYangDitemukan}</b> + <b>{$uangUcup}</b><hr>";

    //total uang ucup
    $uangUcup += $uangYangDitemukan;
    echo "Total Uang Ucup sekarang <b>{$uangUcup}</b>";