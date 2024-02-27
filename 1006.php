<?php
$A = floatval(readline());
$B = floatval(readline());
$C = floatval(readline());

$X = ((0.2*$A) + (0.3*$B) + (0.5*$C)); 
$X = number_format($X, 1, ".", "");

echo "MEDIA = $X\n";
?>