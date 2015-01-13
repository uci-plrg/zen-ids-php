<?php

function barfy() {
  try {
    throw new Exception("Eat at Ralph's!\n");
  } finally {
    try {
      throw new Exception("Finally throwing this!\n");
    } catch (Exception $e) {
      print "Caught exception saying: " . $e . "\n";
    }
    print "I'm outta here...\n";
  }
}

$i = 0;
while ($i < 10) {
  try  {
    try {
      barfy();
    } catch (Exception $e) {
      print "Caught exception saying: " . $e . "\n";
    }
    if ($i % 2 == 0)
      throw new Exception("Hey! That number is even!\n");
    else
      print "That's odd...\n";
  } catch (Exception $e) {
    print "Caught exception saying: " . $e . "\n";
  } finally {
    print "Well! I'm finally moving on from all of that.\n";
    $i++;
  }
}

?>
