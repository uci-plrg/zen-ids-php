<?php

$include = "zval-stack";
$include .= "-include.php";
include $include;

$c = "c" . $b . $a;

echo "a: $a; b: $b; c: $c; z: $z\n";

?>
