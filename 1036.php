<?php
 list($a, $b, $c) = explode(" ", readline());
  $del = floatval ($b*$b) - (4*$a*$c);
  
    if ($a != 0 and $del >= 0 ){
        
        $R1 = ((-$b + (sqrt($del)))/ (2 * $a));
        echo "R1 = ".number_format($R1, 5, '.', '')."\n";
        $R2 = ((-$b - (sqrt($del)))/ (2 * $a));
        echo "R2 = ".number_format($R2, 5, '.', '')."\n";
        
    }
    else{
         echo "Impossivel calcular\n";
    }
?>