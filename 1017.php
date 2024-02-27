<?php
    $A=floatval(readline());
    $B=floatval(readline());

    $X = $B*$A/12;
    $X = number_format($X, 3, ".", "");

    echo "$X\n";
?>