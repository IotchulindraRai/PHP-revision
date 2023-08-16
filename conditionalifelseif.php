<?php
$age = 60;

if ($age < 18) {
    echo "You cannot Vote as your age is $age" . "<br>";
} else if ($age <= 59) {
    echo "You can vote";
} else {
    echo "You can you are VIP voter";
}
?>
