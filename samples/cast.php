<?php

class Foo {
  protected $name;

  public function printName() {
    print "Name: $name\n";
  }
}

class Bar extends Foo {
  public function printName() {
    print "Foobar name: $name\n";
  }
}

$a = new Bar();
$a->printName();

$a = new Foo();
$a = (Bar) $a;
$a->printName();

?>

