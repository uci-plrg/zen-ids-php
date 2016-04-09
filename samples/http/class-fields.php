<?php

class Clown {
  private $foo;
  private $bar;
  public $zot;

  public function __construct($foo, $bar) {
    $this->foo = $foo;
    $this->bar = $bar;
  }

  public function getFoo() {
    return $this->foo;
  }

  public function setFoo($foo) {
    $this->foo = $foo;
  }

  public function getBar() {
    return $this->bar;
  }

  public function setBar($bar) {
    $this->bar = $bar;
  }
}

$a = $_GET["a"];
$b = "z";
$c = new Clown($a, $b);

$c->zot = $a;

$aClown = $c->getFoo(); # taint here
$bClown = $c->getBar(); # no taint
$cClown = $c->zot;      # taint here

echo("Clown contains " . $c->getFoo() .
  " and " . $c->getBar() .
  " and " . $c->zot . "\n");
echo("Clown contains " . $aClown .
  " and " . $bClown .
  " and " . $cClown . "\n");

$c->setBar($aClown); # taint bar
$c->setFoo($bClown); # untaint foo
$c->zot = "z"; # untaint zot

$aClown = $c->getFoo(); # no taint
$bClown = $c->getBar(); # taint here
$cClown = $c->zot;      # no taint

echo("Clown contains " . $c->getFoo() .
  " and " . $c->getBar() .
  " and " . $c->zot . "\n");
echo("Clown contains " . $aClown .
  " and " . $bClown .
  " and " . $cClown . "\n");

?>
