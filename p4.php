<?php

function calculateBonus($total)
{
    if ($total >= 5000) {
        return 10;
    }   elseif ($total >= 1000){
        return 5;
    }   else {
        return 0;
    }

}   
$sums=[5000];

foreach ($sums as $sum) {
    $b = calculateBonus($sum);
    echo "ваша сумма: $sum <br> ваш бонус: $b";
}