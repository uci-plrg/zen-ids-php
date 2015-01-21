<?php

function opener($a, $f) {
  print("Open for a $a: " . $f($a) . "\n");
}

print("Sampling the opener\n");
opener("foo", function($s) { return "Closure on " . $s; });

print("Sampling the opener again\n");
opener("foo", function($s) { return (3 * 4) . ": another closure on " . $s; });

?>
