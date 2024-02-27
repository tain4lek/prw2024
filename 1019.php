<?php

$ts = intval(readline());

$H = intval($ts / 3600);
$ts %= 3600;

$M = intval($ts / 60);
$S = $ts % 60;

printf("%d:%d:%d\n", $H, $M, $S)


?>