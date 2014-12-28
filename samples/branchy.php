<?php

$num = 3;

while ($num != 0) {
  if ($num < 0) {
    print "Num is a foobar!\n";
  } else {
    if ($num < 4) {
      switch ($num) {
      case 1: print "foo\n";
      case 2: print "bar\n";
      case 3: print "zot\n";
      }
    } else {
      switch ($num) {
      case 4: print "zee\n";
      case 5: print "zoo\n";
      }
    }
  }
  $num--;
}

?>
