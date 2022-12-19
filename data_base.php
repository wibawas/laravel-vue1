<?php

$db = mysqli_connect("localhost","root","","eduwork") ;

if(!$db){
    die("Connection Failed : " . mysqli_connect_error($db));
}

$sql = "SELECT * FROM obat" ;
$query = mysqli_query($db,$sql);
$conn = mysqli_fetch_assoc($query);
$i=0;

while($row = mysqli_fetch_assoc($query)){
    echo "Nama Obat : {$row['nama']}<br>Jenis : {$row['jenis']} <br>Harga : {$row['harga']}<br>Kadaluarsa : {$row['kadaluarsa']}<br><br>";
    $i++;
}

