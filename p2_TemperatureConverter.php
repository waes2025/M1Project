<?php

const FACTOR = 9/5;
const OFFSET = 32;

echo "Enter your temparature: ";

$temparature = (float)readline();

echo "Convart to (F: Farenheit, C: Celcius)";

$choice = readline();

switch ($choice) {
    case "F":
        $result = $temparature * FACTOR;
        echo "Temparature is in farenheit: $result";
        break;
    case "C":
        $result = $temparature - OFFSET / FACTOR;
        echo "Temparature is in celcius: $result";
        break;
    default :
        echo "Invalid choise!";
        break;
}