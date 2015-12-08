<?php

global $foo;

function printFoo() {
  $foo = "quo";
  print "Local foo is $foo\n";

  global $foo;
  print "Global foo is $foo\n";
}


$foo = "bar";

include __DIR__ . "/global-include.php";

printFoo();
print "Locally-undeclared bar is $bar\n";

?>
