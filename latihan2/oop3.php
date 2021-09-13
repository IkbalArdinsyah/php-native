<?php

class kucing
{
    public $warna;

    public function __construct($a)
    {
        $this->warna = $a;
    }

    public function bersuara()
    {
        return "meowng...meowng...meowng...";
    }

    public function berbulu()
    {
        return "berburu ikan";
    }
}

$kucing1 = new kucing("Hitam");
echo "Warna Kucing 1:".$kucing1->warna . "<br>";

$kucing2 = new kucing("oren");
echo "Warna KUcing 2:".$kucing2->warna . "<br>";