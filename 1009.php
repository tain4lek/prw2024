<?php
    $nome=readline();
    $sal=floatval(readline());
    $ven=floatval(readline());

    $ven = (($ven/100) * 15);
    $X = $sal+$ven;
    $X = number_format($X, 2, ".", "");

    echo "TOTAL = R$ $X\n";
?>