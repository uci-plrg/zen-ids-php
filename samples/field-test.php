<?php

class Zonk {
  private $zot;
  public $zed;
  private $zubs = array();

  function getZ($foo) {
    if ($foo < 10)
      return $this->zot;
    else
      return $this->zed;
  }

  function setZot($foo) {
    $this->zot = $foo;
  }

  function getZub($key) {
    return $this->zubs[$key];
  }

  function setZub($key, $value) {
    $this->zubs[$key] = $value;
  }
}

$zonk = new Zonk();
$zonk->setZot("foo");
$zonk->zed = "bar";
print("Zonk Z (7): " . $zonk->getZ(7) . "\n");
print("Zonk Z (11): " . $zonk->getZ(11) . "\n");
print("Zonk.zed: $zonk->zed\n");

$zonk->setZub("a", "b");
print("Zonk.zub(a): " . $zonk->getZub("a") . "\n");

?>
