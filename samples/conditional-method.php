<?php

$first = 1;

class Foo {

  if ($first) {
    function bar() {
      print("first\n");
    }
  } else {
    function bar() {
      print("second\n");
    }
  }
}

?>
