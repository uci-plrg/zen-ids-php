<?php

$state = 0;

function update_state($a) {
  global $state;
  $state = $a;
}

function barfy() {
  try {
    throw new Exception("Yuk!\n");
    print "Everything I might say if I didn't throw\n";
  } finally {
    update_state(1);
  }
}

function skippy() {
  try {
    if (false)
      throw new Exception("Yuk!\n");
    print "I almost threw an exception!\n";
  } finally {
    update_state(2);
  }
}

try {
  barfy();
} catch (Exception $e) {
  print "Exception says: " . $e . "\n";
  print "State is $state\n";
}

skippy();
print "State is $state\n";

?>
