<?php
/*
function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}
*/
function factorial($n)
{
    if (gettype($n) != "integer") {
        return "Invalid";
    }
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}
