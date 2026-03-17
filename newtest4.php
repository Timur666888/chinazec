<?php

function calculcalculateBonus($total) {
    if ($total >= 5000) {
        return 10;
    }   elseif ($total >= 1000) {
        return  5;
    } else {
        return 0;
    }
} 
$sums = [1000];

foreach ($sums as $sum) {
    $bonus = calculcalculateBonus($sum);
    echo "Сумма: $sum руб. бонус: $bonus%<br>";
}