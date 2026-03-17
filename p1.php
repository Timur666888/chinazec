<?php

function getSeason($month)
{
    if ($month < 1 || $month >12) {
        return "нету";
    }
    if (in_array($month,[12,1,2])) {
        return "Зима";
    }   elseif (in_array($month,[3,4,5])) {
        return "Весна";
    }   elseif (in_array($month,[6,7,8])) {
        return "Лето";
    }   elseif (in_array($month,[9,10,11])) {
        return "Осень";
    }
} echo getSeason(5);