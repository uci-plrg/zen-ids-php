<?php

class Something {
  private $zed;
  private $zot;

  static function whatever($that) {
    echo "That: " . $that . " \n";
  }

  function doSomething($what, $ever) {
    echo "Do what? " . $what . "\n";
    $this->zed = $what;
    $this->zot = $ever;
  }

  function anything() {
    $this->doSomething("nothing");
  }
}

class SomethingElse extends Something {
  function doSomething($what, $ever) {
    echo "Do this? " . $what . "\n";
    $this->zot = $what;
    $this->zed = $ever;
  }
}

class AnotherThing {
  function doSomething($what) {
    echo "Do what else? " . $what . "\n";
  }
}

Something::whatever("this");

$call = "doSomething";

$something = new Something();
$something->doSomething("anything", "else");
#$something->$call("anything");

$something = new SomethingElse();
$something->doSomething("anything", "else");

$something = new AnotherThing();
$something->doSomething("anything", "else");

?>
