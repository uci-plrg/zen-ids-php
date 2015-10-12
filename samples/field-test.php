<?php

class Zonk {
  private $zot;
  public $zed;

  function getZ($foo) {
    if ($foo < 10)
      return $this->zot;
    else
      return $this->zed;
  }

  function setZot($foo) {
    $this->zot = $foo;
  }
}

$zonk = new Zonk();
$zonk->setZot("foo");
$zonk->zed = "bar";
print("Zonk Z (7): " . $zonk->getZ(7) . "\n");
print("Zonk Z (11): " . $zonk->getZ(11) . "\n");

?>
