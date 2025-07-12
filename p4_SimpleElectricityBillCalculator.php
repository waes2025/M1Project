<?php

$units = 300;

if ($units <= 100) {
    $bill = 100 * 5;
} elseif ($units <= 200) {
    $bill = 100 * 5 +($units - 100) * 10;
} else {
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
}

echo "Total bill: $bill";