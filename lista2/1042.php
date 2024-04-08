<?php
list($N1, $N2, $N3) = explode (" ", readline());
$n = array ($N1, $N2, $N3);
rsort ($n);
$n = array_reverse($n);
foreach($n as $num){
echo "$num\n";

}
echo "\n";
echo "$N1\n"."$N2\n"."$N3\n";
?>
