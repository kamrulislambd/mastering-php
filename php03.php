<?php
//loop
for ($i = 1; $i <= 5; $i++) {
    //echo $i;
    echo PHP_EOL;
    for ($j = 0; $j < $i; $j++) {
        echo "*\n";
    }
}

//while loop
$i = 0;
while ($i < 10) {
    $i++;
    echo $i . PHP_EOL;
}

//do while loop
$n = 0;
do {
    $n++;
    echo $n . PHP_EOL;
} while ($n < 10);

//goto
$j = 0;
a:
$j++;
echo $j . PHP_EOL;
if ($j < 5) goto a;
