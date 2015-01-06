<?php

class Something {
  function doSomething($what) {
    echo "Do what? " . $what . "\n";
  }
}

class AnotherThing {
  function doSomething($what) {
    echo "Do what else? " . $what . "\n";
  }
}

$call = "doSomething";

$something = new Something();
$something->doSomething("anything");
#$something->$call("anything");

$something = new AnotherThing();
$something->doSomething("anything");

?>
