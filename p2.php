<?php

function formatPhone($number)
{
    if (strlen($number===11)) {
    return "Неверный формат";
    }
        $p1=substr($number, 1,3);
        $p2=substr($number, 4,3);
        $p3=substr($number, 7,2);
        $p4=substr($number, 9,2);
        return "+7 ($p1) $p2-$p3-$p4";
} echo formatPhone("899907983458");