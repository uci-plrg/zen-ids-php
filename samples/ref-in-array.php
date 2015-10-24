<?php

$a = 1;
$b = array(&$a);
$a = 2;

$c = 3;
$b[] = &$c;
$c = 4;

echo "\$b: ";
var_dump($b);
echo "\n";

?>
