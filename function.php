<?php
function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

$x = 12;
if (isEven($x)) {
    echo "{$x} is Even Number.";
} else {
    echo "{$x} is Odd Number.";
}
