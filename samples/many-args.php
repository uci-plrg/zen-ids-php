<?php

function many_args($a, $b, $c, $d, $e, $f) {
  print("a: " . $a . "; b: " . $b . "; c: " . $c);
  print("; d: " . $d . "; e: " . $e . "; f: " . $f . "\n");
}

many_args(0, 1, 2, 3, 4, 5);

?>
