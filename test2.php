<?php

function isStrongPassword($password){
    if (strlen($password)<8) {
        return false;
    }
    if (!preg_match('/[0-9]/',$password)) {
        return false;
    }
    if (!preg_match('/[A-Z]/',$password)) {
        return false;
    }
    return true;
}
var_dump(isStrongPassword("GoodPass10"));
var_dump(isStrongPassword("GoodPass1"));