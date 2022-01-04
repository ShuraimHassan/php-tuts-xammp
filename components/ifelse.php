<?php

$age = 22;


function checkAge($age)
{
   if ($age < 18) {
    echo '<p class="text-red-500">You are not old enough to enter</p>';
} elseif ($age >= 18 && $age < 21) {
    echo '<p class="text-yellow-500">You can enter, but not drink</p>';
} elseif ($age >= 21) {
    echo '<p class="text-green-500">You can enter and drink</p>';
}
}
checkAge($age);
?>