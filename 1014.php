<?php
$km=floatval(readline());
$L=floatval(readline());

$X = $km/$L;
$X = number_format($X, 3, ".", "");

echo"$X km/l\n"; 
?>