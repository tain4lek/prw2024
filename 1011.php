<?php
    $R=intval(readline());
    $pi = 3.14159;

    $X = (4/3) * $pi * ($R**3);
    $X = number_format($X, 3, ".", "");

    echo "VOLUME = $X\n";
?>