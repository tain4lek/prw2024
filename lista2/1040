<?php
    list($n1, $n2, $n3, $n4) = explode(' ', readline());
    $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + $n4) / 10;
    $media *= 10;
    $media = floor($media);
    $media /= 10;
    echo "Media: ".number_format($media, 1, ".", " ")."\n";

    if($media>=7.0){
      echo "Aluno aprovado.\n";
       $media = number_format($media, '1', '.', '')."\n";
    }
    elseif($media<5.0){
      echo "Aluno reprovado.\n";
      
    }
    elseif($media >= 5 or $media <= 6.9){
      echo "Aluno em exame.\n";
      $exame = floatval(readline());
      echo "Nota do exame: ".number_format($exame, 1, ".", " ")."\n";
      $media2 = ($media + $exame)/ 2;
      if($media2 >= 5){
        echo "Aluno aprovado.\n";
        $media2 = number_format($media2, '1', '.', '')."\n";
      }
      else{
        echo "Aluno reprovado.\n";
        $media2 = number_format($media2, '1', '.', '')."\n";
      }
      echo "Media final: $media2";
    }
    ?>
