<?php
   list($A, $B, $C) = explode(' ', readline());
   
   
    if($A<$B+$C && $A>$B-$C){
      $peri = $A+$B+$C;
        echo"Perimetro = " . number_format(($A+$B+$C), 1, ".", "") . "\n";
    }
   else{
     echo"Area = " . number_format(((($A+$B)*$C)/2), 1,"."," ") . "\n"; 
   }
?>
