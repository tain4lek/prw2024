<?php
list($A, $B, $C) = explode(" ", readline());
    
    $MaiorAB = ($A+$B+abs($A-$B))/2;
    $MaiorABC = ($MaiorAB + $C + abs($MaiorAB-$C))/2;

    echo "$MaiorABC eh o maior\n";

?>