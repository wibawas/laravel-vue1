<?php
$nama = "Hangga Wibawa Setya" ;
$tb = 173 /100;
$bb = 64 ;
$BMI =  $bb /($tb*$tb) ;

if ($BMI <17.0){
    echo "Hallo {$nama} . Nilai BMI anda adalah ({$BMI}) , anda termasuk (kurus, Kekurangan berat badan berat)" ;
}elseif($BMI > 17.0 && $BMI < 18.4){
    echo "Hallo {$nama} . Nilai BMI anda adalah ({$BMI}) , anda termasuk (Kurus, Kekurangan berat badan ringan)";
}else if ($BMI > 18.5 && $BMI < 25.0){
    echo "Hallo {$nama} . Nilai BMI anda adalah ({$BMI}) , anda termasuk (Normal)" ;
}else if ($BMI >25.1 && $BMI < 27.0){
    echo "Hallo {$nama} . Nilai BMI anda adalah ({$BMI}) , anda termasuk (	Gemuk, Kelebihan berat badan tingkat ringan)" ;
}else if ($BMI > 27) {
    echo "Hallo {$nama} . Nilai BMI anda adalah ({$BMI}) , anda termasuk (Gemuk, Kelebihan berat badan tingkat berat)" ;
}