<?php
    list($A, $B, $C) = explode(" ", readline());
    list($D, $E, $F) = explode(" ", readline());

    $X = ($B*$C) + ($E*$F);
    $X = number_format($X, 2, ".", "");
    
    echo "VALOR A PAGAR: R$ $X\n";
?>