<?php
    $func = intval(readline());
    $hot = floatval(readline());
    $vlh = floatval(readline());

    $salar = $hot * $vlh;
    $salar = number_format($salar, 2, ".", "");

    echo "NUMBER = $func\n";
    echo "SALARY = U$ $salar\n";
?>
