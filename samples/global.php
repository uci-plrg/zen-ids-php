<?php
global $foo;

function bar() {
  $foo = "barfoo";
  print("local \$foo is '$foo'\n");
  global $foo;
  print("global \$foo is '$foo'\n");

  global $zot;
  $zot = "zed";
}

$foo = "foobar";
bar();

global $zot;
print("global \$zot is '$zot'\n");
print("global \$GLOBALS['foo'] is " . $GLOBALS['foo'] . "\n");

global $number;
$number = 1;
$number++;
echo "Number is $number\n";

?>
