<?php

function factorial($num) {
    $x = 1;
    for ($i = $num; $i > 0; $i--) {
        $x *= $i;
    }
    return $x;
}

echo factorial(5);
?>