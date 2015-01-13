<?php

$state = 0;

function update_state($a) {
  $state = $a;
}

function barfy() {
  try {
    throw new Exception("Yuk!\n");
  } finally {
    update_state(1);
  }
}

try {
  barfy();
} catch (Exception $e) {
  print "Exception says: " . $e . "\n";
}

?>
