<?php
list($x, $y) = explode(' ', readline());

if($x == $y){
    echo "O JOGO DUROU 24 HORA(S)\n";
}
elseif($x > $y){
  $dife = 24 - $x + $y;
  echo "O JOGO DUROU $dife HORA(S)\n";
}
else{
  $dife = $y -$x; 
  echo "O JOGO DUROU $dife HORA(S)\n";
}
?>
