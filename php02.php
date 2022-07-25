<?php
//is leap year?
$year = 2024;
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

echo "\n";
$condition1 = true;
$condition2 = true;
$condition3 = false;

if ($condition1 && $condition2 && $condition3) {
    echo "Hello world";
} elseif ($condition1 && $condition2) {
    echo "Condition One";
} elseif ($condition1) {
    echo "Condition Two";
} else {
    echo "Condition Three";
}
