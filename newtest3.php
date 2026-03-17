<?php

// function isPalindrome($word) {
//     $v=strtolower(trim($word));
//     $result = strrev($v);
//     return $v=$result;
// } echo isPalindrome("кот")? "ДА":"НЕТ";

function isPalindrome($word) {
    $clean = strtolower(trim($word)); // убираем пробелы и делаем строчными
    $reversed = strrev($clean);       // переворачиваем строку
    return $clean === $reversed;
}


echo isPalindrome("шалаш") ? "Да\n" : "Нет\n";
