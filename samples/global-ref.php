<?php

function array_dump($name, $a) {
  echo "\$$name: ";
  var_dump($a);
  echo "\n";
}

function append_array(&$z) {
  $z[] = 23;
}

global $a;

echo "Appending 23 to 2nd sub-array:\n";
$b = array(array(10, 11, 12), array(20, 21, 22));
$d = $b;
$c = &$d;
append_array($b[1]);

echo "Array \$c refs \$d, where \$d is a copy of \$b\n";
array_dump("b", $b);
array_dump("c", $c);

$d = &$b;
echo "Array \$c refs \$d, where \$d is now a ref to \$b\n";
array_dump("b", $b);
array_dump("c", $c);

echo "Global \$a now refs \$b\n";
$a = $b;
array_dump("a", $a);
array_dump("b", $b);

?>
