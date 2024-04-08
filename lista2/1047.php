<?php
list($w, $x, $y, $z) = explode(' ', readline());

if($w == $y and $x == $z){
    echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
}
elseif($w < $y and $x < $z){
  $dife = $y -$w; 
  $difem = $z - $x;
  echo "O JOGO DUROU $dife HORA(S) E $difem MINUTO(S)\n";
}
elseif($w < $y and $x == $z){
  $dife = $y -$w; 
  echo "O JOGO DUROU $dife HORA(S) E 0 MINUTO(S)\n";
}
elseif($w < $y and $x > $z){
  $dife = ($y -$w) - 1; 
  $difem = 60- ($x -$z);
  echo "O JOGO DUROU $dife HORA(S) E $difem MINUTO(S)\n";
}
elseif($w > $y and $x> $z){
  $dife = (24-$w +$y) - 1;
  $difem = 60- ($x -$z);
  echo "O JOGO DUROU $dife HORA(S) E $difem MINUTO(S)\n";
}
elseif($w > $y and $x == $z){
  $dife = (24-$w +$y);
  echo "O JOGO DUROU $dife HORA(S) E 0 MINUTO(S)\n";
}
elseif($w > $y and $x < $z){
  $dife = (24-$w +$y);
  $difem = $z - $x;
  echo "O JOGO DUROU $dife HORA(S) E $difem MINUTO(S)\n";
}
elseif($w == $y and $x < $z){
  $difem = $z - $x;
  echo "O JOGO DUROU 0 HORA(S) E $difem MINUTO(S)\n";
}
elseif($w == $y and $x > $z){
  $difem = 60- ($x -$z);
  echo "O JOGO DUROU 23 HORA(S) E $difem MINUTO(S)\n";
}
?>
