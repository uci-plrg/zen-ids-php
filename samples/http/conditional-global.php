<?php

function conditionalGlobal($a) {
  if ($a > 5)
    global $foo;
  else if ($a < 10)
    $foo = $a;
  else
    global $foo;

  print "Foo: $foo\n";

  return $a;
}

global $foo;

$foo = 2;
$bar = $_GET["bar"];

conditionalGlobal(7);
conditionalGlobal(1);
conditionalGlobal($foo);
conditionalGlobal(12);
$b = conditionalGlobal($bar);

print("b: $b\n");

?>
