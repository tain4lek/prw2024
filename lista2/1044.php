<?php
list($x, $y) = explode(" ", readline());

    if($x > $y){
    if($x % $y == 0){
        echo "Sao Multiplos\n";
    }
    else{
    echo "Nao sao Multiplos\n";
        }
    }
    elseif($y > $x){
    if($y % $x == 0){
        echo "Sao Multiplos\n";
    }
    else{
    echo "Nao sao Multiplos\n";
             }
    }
    elseif($y == $x){
    echo "Sao Multiplos\n";
    }
    else{
    echo "Nao sao Multiplos\n";
    }
?>
