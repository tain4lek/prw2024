<?php
$t = intval(readline());

$ano = intval($t / 365);
$t %= 365;

$mes = intval($t / 30);
$sem = $t % 30;

echo "$ano ano(s)\n$mes mes(es)\n$sem dia(s)\n";

?>