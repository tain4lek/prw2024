<?php
$a = floatval(readline());
$b =0; 
$c =25;
$d = "[";               
for ($it=1; $it<=4; $it++){
    if ($a >= $b and $a <= $c){
        echo "Intervalo $d$b,$c]\n";
        break;
    }
    $b +=25; 
    $c +=25; 
    $d = "(";
}
if($a < 0 or $a > 100){
    echo "Fora de intervalo\n";
}
?>
