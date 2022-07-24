<?php
$food = "Grap";

if ("tuna" == $food || "orange" == $food) {
    echo "{$food} does not have vitamin D";
} elseif ("apple" == $food) {
    echo "{$food} has vitamin D";
} else {
    echo "We don't know about {$food} if contains vitamin D";
}
