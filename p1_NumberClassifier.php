<?php

echo "Enter Number ";

$number = (int)readline();

if($number > 0) {
    echo "This number is positive.";
} elseif($number < 0) {
    echo "This number in nagative.";
} else {
    echo "Number is zero!";
}
