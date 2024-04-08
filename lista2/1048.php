<?php
$sal = floatval(readline());
if($sal>0 && $sal<=400.00){
    echo "Novo salario: ".number_format(($sal+($sal*0.15)), 2, ".", "")."\nReajuste ganho: ".number_format(($sal*0.15), 2, ".", "")."\nEm percentual: 15 %\n";
}

elseif($sal<=800.00){
    echo "Novo salario: ".number_format(($sal+($sal*0.12)), 2, ".", "")."\nReajuste ganho: ".number_format(($sal*0.12), 2, ".", "")."\nEm percentual: 12 %\n";
}
elseif($sal<=1200.00){
    echo "Novo salario: ".number_format(($sal+($sal*0.10)), 2, ".", "")."\nReajuste ganho: ".number_format(($sal*0.10), 2, ".", "")."\nEm percentual: 10 %\n";
}
elseif($sal<=2000.00){
    echo "Novo salario: ".number_format(($sal+($sal*0.07)), 2, ".", "")."\nReajuste ganho: ".number_format(($sal*0.07), 2, ".", "")."\nEm percentual: 7 %\n";
}
else{
    echo "Novo salario: ".number_format(($sal+($sal*0.04)), 2, ".", "")."\nReajuste ganho: ".number_format(($sal*0.04), 2, ".", "")."\nEm percentual: 4 %\n";
}
?>
