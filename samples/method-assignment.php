<?php

class Foo {
  function bar() {
    print("Foobar!\n");
  }
}

class Bar {
  private $nob = "nob";

  function zot() {
    print("Barzot!\n");

    $(this).nob = "zot";
  }
}

$bar = new Bar();
$bar->zot();
$bar->zot();

?>
