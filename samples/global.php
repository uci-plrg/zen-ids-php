<?php
$a = "foo";

function bar() {
  global $foo;
  print("Foo is '$foo'\n");
}

bar();
?>
