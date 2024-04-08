<?php
list($c1, $c2) = explode(" ", readline());

switch ($c1) { 
    case 1:
        $c1 = $c2 * 4;
        echo "Total: R$ ".number_format($c1, 2, ".", "")."\n";
        break;  
    case 2:
      $c1 = $c2 * 4.5;
      echo "Total: R$ ".number_format($c1, 2, ".", "")."\n";
      break;
    case 3:
      $c1 = $c2 * 5;
      echo "Total: R$ ".number_format($c1, 2, ".", "")."\n";
      break;
    case 4:
      $c1 = $c2 * 2;
      echo "Total: R$ ".number_format($c1, 2, ".", "")."\n";
      break;
    case 5:
        $c1 = $c2 * 1.5;
        echo "Total: R$ ".number_format($c1, 2, ".", "")."\n";
        break;

     default:
        break;
}
?>
