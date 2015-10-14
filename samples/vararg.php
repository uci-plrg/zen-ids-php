<?php

function varargs(...$args) {
  foreach($args as $index => $arg) {
    echo "arg " . $index++ . " is $arg\n";
  }
}

varargs("a", "b", "c");

?>
