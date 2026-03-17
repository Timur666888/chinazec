<?php

function formatPhone($number){
    if (strlen($number)==11) {
        $country = "+7";
        $part1=substr($number, 1,3);
        $part2=substr($number, 4,3);
        $part3=substr($number, 7,2);
        $part4=substr($number, 9,2);
        echo "$country ($part1) $part2-$part3-$part4";
    }   else {
        echo "Неверный формат номера";
    }
}
echo formatPhone("89990798927");