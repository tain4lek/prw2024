<?php
function imprimirQuantidade($valor, $tipo, $valorUnitario) {
    $quantidade = intval($valor / $valorUnitario);
    printf("%d %s(s) de R$ %.2f\n", $quantidade, $tipo, $valorUnitario / 100);
    return $valor % $valorUnitario;
}

$valor = (float)readline();

$centavos = (int)($valor * 100);

$notas = [10000, 5000, 2000, 1000, 500, 200];
$moedas = [100, 50, 25, 10, 5, 1];

echo "NOTAS:\n";
foreach ($notas as $nota) {
    $centavos = imprimirQuantidade($centavos, "nota", $nota);
}

echo "MOEDAS:\n";
foreach ($moedas as $moeda) {
    $centavos = imprimirQuantidade($centavos, "moeda", $moeda);
}
?>