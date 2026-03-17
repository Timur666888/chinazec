<?php

function isPalindrome($word)
{
    $v = strtolower(trim($word));
    $r = strrev($v);
    $result === $r;
}   echo isPalindrome ("шалаш")? "ДА":"НЕТ";