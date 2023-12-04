<?php

//Check if a person is eligible to vote by age

$age = 8;

if (gettype($age) == 'integer') {
    if ($age < 18) {
        echo  "You are not eligible to vote.";
    } else {
        echo "You are a voter.";
    }
} else {
    echo "Warning: Invalid data type. Please provide an integer for age.";
}

