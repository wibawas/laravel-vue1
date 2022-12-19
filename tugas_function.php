<?php

function persegi_panjang(int $p , int $l):void
{
    
    $hasil = $p * $l ;
    echo "luas persegi panjang = {$hasil} <br>";
}

function segitiga (int $a,int $t):void 
{
    $luas = 1/2 * $a * $t ;
    echo "Luas segitiga = {$luas} <br>" ;
}

function lingkaran(int $r):void
{
    $luas = 22/7 * $r**2 ;
    echo "Luas lingkaran = {$luas} <br>";
}

function kubus(int $s):void
{
    $volume = $s**3 ;
    echo "Volume kumus = {$volume} <br>" ;
}

function balok(int $p , int $l , int $t):void
{
    $volume = $p * $l * $t ;
    echo "Volume balok = {$volume} <br>";
}

