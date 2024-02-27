<?php
   $pi = 3.14159;
    list($A, $B, $C) = explode(" ", readline());
    
    $trian = $A * $C/2 ;
    $trian = number_format($trian, 3, ".", "");
    echo "TRIANGULO: $trian\n";
    $circ = $pi * $C**2 ;
    $circ = number_format($circ, 3, ".", "");
    echo "CIRCULO: $circ\n";
    $trap = ($A+$B)*$C/2;
    $trap = number_format($trap, 3, ".", "");
    echo "TRAPEZIO: $trap\n";
    $quad = $B**2;
    $quad = number_format($quad, 3, ".", "");
    echo "QUADRADO: $quad\n";
    $retan = $A * $B;
    $retan = number_format($retan, 3, ".", "");
    echo "RETANGULO: $retan\n";
?>