<?php

function welcomeUser($name, $gender, $age)
{
    if ($age<18) {
        echo "Привет";
    } else {
        if ($gender === "мужской") {
            echo"Здравствуйте, уважаемый $name";
        }   
        if ($gender === "женщина") {
            echo"Здравствуйте, уважаемая $name";
        }
    }
} echo welcomeUser("Дима","мужской", 17);