<?php
$n = 4;
for ($i = $n, $factorial = 1; $i > 1; $i--) {
    $factorial *= $i;
}
printf("Factorial of %d is %d", $n, $factorial);

echo PHP_EOL;

$x = 17;
$y = 15;

$result = $x <=> $y;
if ($result == 1) {
    echo "$x is greater than $y";
} elseif ($result == 0) {
    echo "$x is equal to $y";
} elseif ($result == -1) {
    echo "$x is less than $y";
}

echo PHP_EOL;
//Null Colas Operator

$default_lat = 23.25;
$user_lat = 93.25;

$lat = $user_lat ?? $default_lat;
echo $lat;
