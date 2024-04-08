<?php
$x = explode(" ", readline());
    $x[0] = (float) $x[0];
    $x[1] = (float) $x[1];
    $x[2] = (float) $x[2];
    rsort($x);
    $X = $x[0];
    $Y = $x[1];
    $Z = $x[2];
    if ($X >= ($Y + $Z)){
        echo "NAO FORMA TRIANGULO\n";
    }
    else{
        if (($X*$X) == ($Y*$Y) + ($Z*$Z)){
            echo "TRIANGULO RETANGULO\n";
        }
        elseif (($X*$X) > ($Y*$Y) + ($Z*$Z)){
            echo "TRIANGULO OBTUSANGULO\n";
        }
        elseif (($X*$X) < ($Y*$Y) + ($Z*$Z)){
            echo "TRIANGULO ACUTANGULO\n";
        }
        if (($X == $Y) && ($X == $Z)){
            echo "TRIANGULO EQUILATERO\n";
        }
        elseif ((($X == $Y) && ($X != $Z)) || (($X == $Z) && ($X != $Y)) || (($Y == $Z) && ($Y != $X))){
            echo "TRIANGULO ISOSCELES\n";
        }
    }
?>
