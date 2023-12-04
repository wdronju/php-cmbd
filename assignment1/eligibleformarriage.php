<?php
//iv. Check if a person is eligible for marriage in BD by gender.
$name = "sumaya";
$gender = "other";

if($gender == "male"){
    echo "Yess $name You are $gender, and You are eligible for marriage in bd. ";
}elseif($gender  == "fimale"){
    echo "Yess $name you are $gender, and You are eligible for marriage in bd. ";

}else{
    echo "sorry $name you are not eligible for marriage in bd.";
}

