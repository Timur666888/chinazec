<?php

function welcomeUser($name, $gender, $age)
{
    if ($age<18) {
        echo "Привет";
    }   elseif ($gender==="мужской") {
        echo "Здравуйствуйте, уважаемый $name";
    }   elseif ($gender==="женщина") {
        echo "Здравуйствуйте, уважаемая $name";
    }
} echo welcomeUser("Ольга", "женщина", 19);