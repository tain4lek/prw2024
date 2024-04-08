<?php
 $sal = floatval(readline());
 if($sal>=0 && $sal<=2000.00){
 echo "Isento\n";
  }
 elseif($sal<=3000.00){
 echo "R$ ".number_format((($sal- 2000)*0.08), 2, ".", "")."\n";
  }
 elseif($sal<=4500.00){
 echo "R$ ".number_format((($sal- 3000)*0.18 + 1000*0.08), 2, ".", "")."\n";
  }
 else{
 echo "R$ ".number_format((($sal- 4500)*0.28 + 1000*0.08+ 1500*0.18), 2, ".", "")."\n";
  }
?>
