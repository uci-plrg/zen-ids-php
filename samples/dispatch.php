<?php

function a(...$args) {
  echo "I am a, and I got:\n";
  foreach ($args as $index => $arg) {
    foreach ($arg as $e_index => $e) {
      echo "\t($index,$e_index): $e\n";
    }
  }
}

function b($args) {
  echo "I am b\n";
  foreach ($args as $index => $arg) {
    foreach ($arg as $e_index => $e) {
      echo "\t($index,$e_index): $e\n";
    }
  }
}

$args = array(array("x1","x2"), array("y1","y2"));
call_user_func_array('a', $args);
call_user_func('b', $args);

?>
