<?php

class Something {
  static function whatever($that) {
    echo "That: " . $that . " \n";
  }

  function doSomething($what) {
    echo "Do what? " . $what . "\n";
  }

  function anything() {
    $this->doSomething("nothing");
  }
}

class SomethingElse extends Something {
  function doSomething($what,$ever) {
    echo "Do this? " . $what . "\n";
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
$something->doSomething("anything");
#$something->$call("anything");

$something = new SomethingElse();
$something->doSomething("anything");

$something = new AnotherThing();
$something->doSomething("anything");

?>
