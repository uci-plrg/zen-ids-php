<?php

function array_dump($name, $a) {
  echo "\$$name: ";
  var_dump($a);
  echo "\n";
}

$a = array(1, 2, 3);

$b = $a;
$b[] = 4;
echo "Appending to copy\n";
array_dump("a", $a);
array_dump("b", $b);

echo "Appending to local ref\n";
$b = &$a;
$b[] = 4;
array_dump("a", $a);
array_dump("b", $b);

echo "Appending to global back-ref\n";
global $a;
$a = $b;
$b[] = 5;
array_dump("a", $a);
array_dump("b", $b);

?>
